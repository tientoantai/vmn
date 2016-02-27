<?php

namespace VMN\ArticleReviewService;

use VMN\Contracts\Article\Article;
use VMN\Contracts\Auth\Authenticable;

class ArticleReviewService
{
    /**
     * @param Authenticable $reviewer
     * @param Article $article
     * @return Review
     */
    public function review(Authenticable $reviewer, Article $article)
    {

    }

    /**
     * @param Article $article
     * @return Review[]
     */
    public function latestReviewsFor(Article $article)
    {

    }

    /**
     * @param Authenticable $reviewer
     * @return Review[]
     */
    public function latestReviewsBy(Authenticable $reviewer)
    {

    }
}
