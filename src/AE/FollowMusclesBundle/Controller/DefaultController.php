<?php

namespace AE\FollowMusclesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AEFollowMusclesBundle:Default:index.html.twig');
    }
}
