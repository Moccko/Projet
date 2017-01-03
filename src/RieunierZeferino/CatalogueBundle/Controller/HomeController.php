<?php

namespace RieunierZeferino\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('CatalogueBundle:Home:index.html.twig', array(
                // ...
            ));    }

}
