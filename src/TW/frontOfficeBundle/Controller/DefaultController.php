<?php

namespace TW\frontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TW\frontOfficeBundle\Entity\Reclamation;
use TW\frontOfficeBundle\Form\ReclamationType;

class DefaultController extends Controller{

 public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamation = $em->getRepository('TWfrontOfficeBundle:Reclamation')->findAll();
        $lieux = $em->getRepository('TWfrontOfficeBundle:Lieu')->findAll();
        $domaines = $em->getRepository('TWfrontOfficeBundle:Domaine')->findAll();
        return $this->render('TWfrontOfficeBundle::index.html.twig', array(
            'Reclamations' => $reclamation,'Lieux' => $lieux,'Domaines'=>$domaines
        ));
    }
}
