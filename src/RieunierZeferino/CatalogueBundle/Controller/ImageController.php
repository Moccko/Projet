<?php

namespace RieunierZeferino\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImageController extends Controller
{
    public function indexAction($classe, $id)
    {
        $qr = $this->getDoctrine()
            ->getRepository('CatalogueBundle:' . $classe)
            ->find($id);
        $image = stream_get_contents($qr->getImage());
        $image = pack("H*", $image);
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-type', 'image/jpeg');
        $response->headers->set('Content-Transfer-Encoding', 'binary');
        $response->setContent($image);
        return $response;
    }

}
