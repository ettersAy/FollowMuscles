<?php

// src/AE/FollowMusclesBundle/Controller/MusclesController.php

namespace AE\FollowMusclesBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MusclesController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('AEFollowMusclesBundle:Muscles:index.html.twig');
    
    return new Response($content);
  }
}