<?php

namespace App\Controller\Api;

use App\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;

/**
 * ArticlesGetController.
 *
 * @Route("/api/articles/{slug}", name="api_articles_get")
 * @Method("GET")
 */
class ArticlesGetController
{
    /**
     * @param Article $article
     *
     * @return array
     */
    public function __invoke(Article $article)
    {
        return ['article' => $article];
    }
}
