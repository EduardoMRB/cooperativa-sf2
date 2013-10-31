<?php

namespace Cooperativa\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        //return $this->redirect($this->generateUrl('sonata_admin_redirect'));

        return $this->render('CooperativaAdminBundle:Home:index.html.twig');
    }
}