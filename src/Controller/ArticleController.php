<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage() {

        return new Response('OMG! My first page already! Woo!');
    }

    //@Route("/news/why-asteroids-taste-like-bacon")
    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {

        $comments = [
            'One',
            'Two',
            'Three',
        ];

        dump($slug, $this);

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}