<?php

namespace RieunierZeferino\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    public function indexAction()
    {
        return $this->render('CatalogueBundle:Cart:index.html.twig', array(// ...
        ));
    }

    public function emptyAction()
    {

    }

    public function addToCart($id)
    {

    }
}
