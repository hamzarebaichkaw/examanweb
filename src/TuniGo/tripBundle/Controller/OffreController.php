<?php

namespace TuniGo\tripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TuniGo\tripBundle\Entity\Offre;
use TuniGo\tripBundle\Form\OffreType;

class OffreController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function AjoutOffreAction(Request $request)
    {
        $offre=new Offre();
        $form=$this->createForm(OffreType::class,$offre);
        if($form->handleRequest($request)->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();
        }
        return $this->render('TuniGotripBundle:Offre:AjoutOffre.html.twig',array('f'=>$form->createView()));
    }
    public function AffichageOffreAction()
    {
        $em=$this->getDoctrine()->getManager();
        $offres=$em->getRepository('TuniGotripBundle:Offre')->findAll();
        return $this->render('@TuniGotrip/Offre/Affichage.html.twig',array('offre'=>$offres));

    }
    public function ListeOffreAction()
    {
        $em=$this->getDoctrine()->getManager();
        $offres=$em->getRepository('TuniGotripBundle:Offre')->findAll();
        return $this->render('TuniGotripBundle:Offre:ListOffre.html.twig',array('offre'=>$offres));

    }

}
