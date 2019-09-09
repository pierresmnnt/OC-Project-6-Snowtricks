<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TrickController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="tricks")
     */
    public function index()
    {
        return $this->render('trick/index.html.twig', [
            'controller_name' => 'TrickController',
        ]);
    }

    /**
     * @Route("/trick", methods={"GET"}, name="trick_detail")
     * On mettra le nom sluggé du trick dans l'url
     */
    public function trickShow()
    {
        return $this->render('trick/trick_show.html.twig', [
            'controller_name' => 'TrickController',
        ]);
    }
}