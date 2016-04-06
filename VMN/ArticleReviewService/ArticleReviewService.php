<?php

namespace VMN\ArticleReviewService;

use VMN\Contracts\Article\Article;
use VMN\Contracts\Auth\Authenticable;

class ArticleReviewService
{
    /**
     * @param Review $review
     */
    public function reviewPlants(Review $review)
    {
        \DB::table('medicinal_plants_reviews')->insert([
            'comment' =>$review->getComment(),
            'reviewer' =>$review->getReviewer(),
            'reviewed' =>$review->getReviewed(),
            'ratingPoint' =>$review->getRating(),
            ]);
    }

    public function reviewRemedy(Review $review)
    {
        \DB::table('remedies_reviews')->insert([
            'comment' =>$review->getComment(),
            'reviewer' =>$review->getReviewer(),
            'reviewed' =>$review->getReviewed(),
            'ratingPoint' =>$review->getRating(),
        ]);
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
