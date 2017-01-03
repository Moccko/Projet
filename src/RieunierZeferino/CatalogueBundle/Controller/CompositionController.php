<?php

namespace RieunierZeferino\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompositionController extends Controller
{
    public function indexAction()
    {
        return $this->render('CatalogueBundle:Composition:index.html.twig', array(// ...
        ));
    }

    public function showAction($id)
    {
        return $this->render('CatalogueBundle:Composition:show.html.twig', array(
            'id' => $id,
        ));
    }

}
