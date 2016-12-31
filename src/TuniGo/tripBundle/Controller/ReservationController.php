<?php

namespace TuniGo\tripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TuniGo\tripBundle\Entity\Reservation;
use TuniGo\tripBundle\Form\recherche;
use TuniGo\tripBundle\Form\ReservationType;

class ReservationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    function reserverAction(Request $req,$id)
    {

        $res=new Reservation();
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('TuniGotripBundle:Offre')->find($id);

        $form=$this->createForm(ReservationType::class,$res);
        if($form->handleRequest($req)->isValid())
        {

            $res->setIdOffre($offre);
            $em->persist($res);
            $em->flush();
            return $this->render('TuniGotripBundle:Reservation:Facture.html.twig',array('reservation'=>$res));


        }
        return $this->render('@TuniGotrip/Reservation/reservation.html.twig',array('f'=>$form->createView()));
    }
    function rechercheReservationAction(Request $request ){
        $res= new Reservation();
        $em=$this->getDoctrine()->getManager();
        $resevation=$em->getRepository('TuniGotripBundle:Reservation')->findAll();
        $form=$this->createForm(recherche::class,$res);
        if($form->handleRequest($request)->isValid())
        {

            $resevation=$em->getRepository('TuniGotripBundle:Reservation')->findBy(array('NomPrenom'=>$res->getNomPrenom()));
        }
        return $this->render('@TuniGotrip/Reservation/recherche.html.twig',array('rs'=>$resevation,'f'=>$form->createView()));

    }

}
