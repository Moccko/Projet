<?php

namespace RieunierZeferino\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComposerController extends Controller
{
    public function indexAction($page)
    {
        $numberPerPage = 18;
        $repository = $this->getDoctrine()->getManager()->getRepository('CatalogueBundle:Musicien');

        $listComposers = $repository->findBy(
            array(),
            null,
            $numberPerPage,
            $page * $numberPerPage
        );

        return $this->render('CatalogueBundle:Composer:index.html.twig', array(
            'page' => $page,
            'max' => floor($repository->count() / $numberPerPage), // Le nombre de pages maximal, on a 36 albums par page -> (count/10) arrondi par excès
            'listComposers' => $listComposers,
        ));
    }

    public function showAction($id)
    {
        return $this->render('CatalogueBundle:Composer:show.html.twig', array(
            'id' => $id,
        ));
    }

}
