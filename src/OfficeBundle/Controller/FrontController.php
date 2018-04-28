<?php

namespace OfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{
    /**
     * @Route("/acceuil")
     */
    public function acceuilAction()
    {
        return $this->render('OfficeBundle:Front:acceuil.html.twig', array(
            // ...
        ));
    }

     /**
     * @Route("/catalogue",name="catalogue")
     */
    public function catalogueAction()
    {
        return $this->render('OfficeBundle:Front:catalogue.html.twig', array(
            // ...
        ));
    }

}
