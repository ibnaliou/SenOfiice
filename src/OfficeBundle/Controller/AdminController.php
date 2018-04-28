<?php

namespace OfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * connexion admin
     * @Route("/login",name="loginadmin")
     */
    public function loginAction()
    {
        return $this->render('OfficeBundle:connexion:login.html.twig');
    }


    /**
     * acceuil admin
     * @Route("/admin/acceuil",name="acceuil")
     */
    public function acceuilAction()
    {
        return $this->render('OfficeBundle:Pagesadmin:acceuiladmin.html.twig');
    }
}
