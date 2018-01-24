<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListeParking extends Controller
{
    /**
     * @Route("/liste")
     */
    public function getListe()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Parking');
        $parkingList = $repository->findAll();
        
        // on rend la vue
        return $this->render('listeParking.html.twig', array('parkingList'=>$parkingList));
    }
}
