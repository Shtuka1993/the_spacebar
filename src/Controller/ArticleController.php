<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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

        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug
        ));
    }
}