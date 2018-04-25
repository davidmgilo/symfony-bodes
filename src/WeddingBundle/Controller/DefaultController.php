<?php

namespace WeddingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        return $this->render('WeddingBundle:Default:index.html.twig');
        
        $em = $this->getDoctrine()->getEntityManager();
        $wedding_repo = $em->getRepository("WeddingBundle:Wedding");
        $weddings = $wedding_repo->findAll();
        
        foreach($weddings as $wedding){
            echo $wedding->getTitle().'<br/>';
            echo "Nº persones: ".$wedding->getNumPeople().'<br/>';
            echo $wedding->getPrice()->getName().' - '.$wedding->getPrice()->getVal().'<br/>';
            echo $wedding->getUser()->getName().'<br/>';
            
            $menus = $wedding->getMenuWedding();
            foreach ($menus as $menu){
                echo "Menu: ".$menu->getMenu()->getName().'<br/>';
            }
            
            echo "<hr/>";
        }
        
        die();
    }
    
    public function pricesAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $price_repo = $em->getRepository("WeddingBundle:Price");
        $prices = $price_repo->findAll();
        
        foreach($prices as $price){
            echo $price->getName().'<br/>';
            $weddings = $price->getWeddings();
            foreach ($weddings as $wedding){
                echo $wedding->getTitle().'<br/>';
            }
            
            echo "<hr/>";
        }
        
        die();
    }
    
    public function menusAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $menu_repo = $em->getRepository("WeddingBundle:Menu");
        $menus = $menu_repo->findAll();
        
        foreach($menus as $menu){
            echo $menu->getName().'<br/>';
//            echo $entry->getCategory()->getName().'<br/>';
//            echo $entry->getUser()->getName().'<br/>';
            $weddings = $menu->getMenuWedding();
            foreach ($weddings as $wedding){
                echo "Wedding: ".$wedding->getWedding()->getTitle().'<br/>';
            }
            
            echo "<hr/>";
        }
        
        die();
    }
}
