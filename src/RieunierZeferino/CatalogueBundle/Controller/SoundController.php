<?php

namespace RieunierZeferino\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SoundController extends Controller
{
    public function indexAction($id)
    {
        $qr = $this->getDoctrine()
            ->getRepository('CatalogueBundle:Oeuvre')
            ->getExtrait($id);
        $sound = file_get_contents($qr);
        $sound = pack("H*", $sound);
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-type', 'audio/mpeg');
        $response->headers->set('Content-Transfer-Encoding', 'binary');
        $response->setContent($sound);
        return $response;
    }
}
