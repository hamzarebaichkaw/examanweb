<?php

namespace TuniGo\tripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TuniGotripBundle:Default:index.html.twig');
    }
}
