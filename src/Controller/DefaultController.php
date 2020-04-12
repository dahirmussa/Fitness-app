<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="hompage")
     */
    public function homepage()
    {
      $template = 'default/index.html.twig';
      $args = [];
      return $this->render($template,$args);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        $template = 'default/about.html.twig';
        $args = [];
        return $this->render($template,$args);
    }
}