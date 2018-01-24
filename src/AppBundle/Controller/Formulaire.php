<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Parking;
use AppBundle\Form\ParkingType;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class Formulaire extends Controller
{
    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function addParking(Request $request)
    {
        // on instancie un objet parking à partir de l'entité
        $parking = new Parking();
        
        // on crée un formulaire à partir de l'objet parking
        $form=$this->createForm(ParkingType::class, $parking);
        
        $form->handleRequest($request);
        
        // si le formulaire a été validé
        if($form->isSubmitted() && $form->isValid()){
            // alors on enregistre le parking en bdd en récupérant le service entity manager
            $entityManager=$this->getDoctrine()->getManager();
            // on prépare l'objet à l'insertion
            $entityManager->persist($parking);
            // on l'insère dans la bdd
            $entityManager->flush();
            
            return new Response('Parking bien ajouté !');
            
        }
        // on génère le HTML du formulaire
        $formView=$form->createView();
        
        // on rend la vue
        return $this->render('addParking.html.twig', array('form'=>$formView));

    }
}
