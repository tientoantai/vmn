<?php

namespace VMN\ArticleReviewService;


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
            ]);
    }

    public function reviewRemedy(Review $review)
    {
        \DB::table('remedies_reviews')->insert([
            'comment' =>$review->getComment(),
            'reviewer' =>$review->getReviewer(),
            'reviewed' =>$review->getReviewed(),
        ]);
    }

    public function ratingPlant(Review $review)
    {
        \DB::table('medicinal_plants')->where('id', $review->getReviewed())
            ->update([
                'ratingPoint' => \DB::raw('ratingPoint +' . $review->getRating()),
                'ratingTime' => \DB::raw('ratingTime + 1'),
            ]);
    }

    public function ratingRemedy(Review $review)
    {
        \DB::table('remedies')->where('id', $review->getReviewed())
            ->update([
                'ratingPoint' => \DB::raw('ratingPoint +' . $review->getRating()),
                'ratingTime' => \DB::raw('ratingTime + 1'),
            ]);
    }

    public function deleteCommentRemedy(Review $review)
    {
        \DB::table('remedies_reviews')->where('id', $review->id())
            ->update([
                'deleted_at' => date('Y-m-d H:i:s'),
            ]);
    }

    public function deleteCommentPlant(Review $review)
    {
        \DB::table('medicinal_plants_reviews')->where('id', $review->id())
            ->update([
                'deleted_at' => date('Y-m-d H:i:s'),
            ]);
    }
}
