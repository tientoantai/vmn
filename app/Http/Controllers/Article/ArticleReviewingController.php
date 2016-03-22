<?php

namespace App\Http\Controllers\Article;



use App\Http\Controllers\Controller;
use App\Http\Middleware\ReviewingArticle;
use VMN\ArticleReviewService\ArticleReviewService;
use VMN\ArticleReviewService\Review;

/**
 * Class ArticleReviewingController
 * @package App\Http\Controllers\Article
 */
class ArticleReviewingController extends Controller
{
    /**
     * @var ArticleReviewService
     */
    protected $reviewingService;

    /**
     * ArticleReviewingController constructor.
     * @param ArticleReviewService $reviewService
     */
    public function __construct(ArticleReviewService $reviewService)
    {
        $this->reviewingService = $reviewService;
        $this->middleware(ReviewingArticle::class);
    }

    /**
     * @param Review $review
     * @return \Illuminate\Http\JsonResponse
     */
    public function reviewPlants(Review $review)
    {
        $this->reviewingService->reviewPlants($review);
        return response()->json([
            'reviewer' => \Session::get('credential')['attributes']['name'],
        ]);
    }
}