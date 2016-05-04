<?php

namespace App\Http\Middleware;

use VMN\ArticleReviewService\Review;
use Illuminate\Http\Request;

class ReviewingArticle
{
    public function handle(Request $request, \Closure $next)
    {
        $review = $this->buildReviewObject($request);
        app()->bind(Review::class, function () use ($review) {
            return $review;
        });

        return $next($request);
    }

    public function buildReviewObject($request)
    {
        $review = new Review();
        if(in_array($request->path(), ['reviewRemedy', 'ratingPlant', 'ratingRemedy', 'review']))
        {
            $review->setComment($request->get('commentContent'));
            $review->setReviewed($request->get('Id'));
            $review->setRating($request->get('ratingPoint'));
            $review->setReviewer(\Session::get('credential')['attributes']['name']);
        }
        else
        {
            if($request->path() == 'deleteCommentRemedy')
            {
                $reviewRaw = \DB::table('remedies_reviews')->where('id', $request->get('Id'))
                    ->first();
            }
            elseif($request->path() == 'deleteCommentPlant')
            {
                $reviewRaw = \DB::table('medicinal_plants_reviews')->where('id', $request->get('Id'))
                    ->first();
            }
            $review->setId($reviewRaw->id);
            $review->setComment($reviewRaw->comment);
            $review->setReviewed($reviewRaw->reviewed);
            $review->setReviewer($reviewRaw->reviewer);
        }

        return $review;
    }
}