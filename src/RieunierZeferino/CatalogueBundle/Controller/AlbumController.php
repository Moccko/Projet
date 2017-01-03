<?php

namespace RieunierZeferino\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlbumController extends Controller
{
    public function indexAction($page)
    {
        $numberPerPage = 18;
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('CatalogueBundle:Album');

        $listAlbums = $repository->findBy(
            array(),
            null,
            $numberPerPage,
            $page * $numberPerPage
        );

        return $this->render('CatalogueBundle:Album:index.html.twig', array(
            'page' => $page,
            'max' => floor($repository->count() / $numberPerPage), // Le nombre de pages maximal, on a 36 albums par page -> (count/10) arrondi par excès
            'listAlbums' => $listAlbums,
        ));
    }

    public function showAction($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('CatalogueBundle:Album');

        $album = $repository->find($id);

        return $this->render('CatalogueBundle:Album:show.html.twig', array(
            'album' => $album,
        ));
    }

    public function showImageAction($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('CatalogueBundle:Album');

        $result = $repository->find($id);


        return $this->render('CatalogueBundle:Album:image.html.twig', array(
            'image' => $data,
        ));
    }

}
