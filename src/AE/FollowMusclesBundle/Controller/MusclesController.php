<?php

// src/AE/FollowMusclesBundle/Controller/MusclesController.php

namespace AE\FollowMusclesBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MusclesController extends Controller
{
  public function indexAction()
  {
    $muscle = [
      'name' => 'dorsal',
      'description' => 'description',
      'state' => 'done',
      'imgSrc' => 'muscles/dorsal/dorsaux-small-01.jpg'
    ];
    $listMuscles[] = $muscle;
    $listMuscles[] = $muscle;
    $listMuscles[] = $muscle;
    $content = $this->get('templating')->render(
      'AEFollowMusclesBundle:muscles:index.html.twig', compact('listMuscles')
    );
    
    return new Response($content);
  }

  public function viewAction($id)
  {
    return $this->get('templating')->renderResponse(
      'AEFollowMusclesBundle:muscles:view.html.twig',
      array('id'  => $id)
    );
  }

  public function addAction()
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      // Ici, on s'occupera de la création et de la gestion du formulaire

      $request->getSession()->getFlashBag()->add('notice', 'Muscles recorded.');

      // Puis on redirige vers la page de visualisation de cettte annonce
      return $this->redirectToRoute('ae_muscles_view', array('id' => 5));
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render( 'AEFollowMusclesBundle:muscles:add.html.twig');
  }

  public function editAction($id)
  {
    // Ici, on récupérera l'annonce correspondante à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Muscles updated.');

      return $this->redirectToRoute('ae_muscles_view', array('id' => 5));
    }
    return $this->get('templating')->renderResponse(
      'AEFollowMusclesBundle:muscles:edit.html.twig',
      array('id'  => $id)
    );
  }

  public function deleteAction($id)
  {
    return $this->get('templating')->renderResponse(
      'AEFollowMusclesBundle:muscles:delete.html.twig',
      array('id'  => $id)
    );
  }
}