<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\VIP;

class DefaultController extends Controller
{

      /**
       * @Route("/VIP/", name="VIP")
       */
      public function VIP(Request $request)
      {
          // replace this example code with whatever you need
          return $this->render('VIP.html.twig');
      }




      /**
  * @Route("/VIP/{id}", name="VIP")
  */
 public function buscarId(Request $request, $id){
   $repository = $this->getDoctrine()->getRepository(VIP::class);
     $VIP = $repository->findOneById($id);
     return $this->render('VIP.html.twig',array('VIP' => $VIP));
 }

   /**
  * @Route("/VIP2/", name="VIP2")
  */
   public function VIPAction(Request $request){
   $repository = $this->getDoctrine()->getRepository(VIP2::class);
     $VIP2 = $repository->findAll();
     return $this->render('VIP2.html.twig',array('VIP2' => $VIP2));
   }
}
