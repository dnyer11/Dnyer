<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProjectsController extends Controller
{
    /**
     * @Route("/projects", name="projects")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Projects:index.html.twig', array(
            // ...
        ));
    }

}
