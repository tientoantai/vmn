<?php

namespace App\Http\Controllers\Article;



use App\Http\Controllers\Controller;
use App\Http\Middleware\ReviewingArticle;
use VMN\ArticleReviewService\ArticleReviewService;
use VMN\ArticleReviewService\Review;
use VMN\ArticleReviewService\ReviewHtmlStringBuilder;
use VMN\Contracts\Article\Article;

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

    protected $builder;
    /**
     * ArticleReviewingController constructor.
     * @param ArticleReviewService $reviewService
     */
    public function __construct(ArticleReviewService $reviewService, ReviewHtmlStringBuilder $builder)
    {
        $this->reviewingService = $reviewService;
        $this->builder = $builder;
        $this->middleware(ReviewingArticle::class);
    }

    public function reviewPlants(Review $review)
    {
        $this->reviewingService->reviewPlants($review);
        $htmlString = $this->builder->build($review);
        return response()->json([
            'htmlString' => $htmlString,
        ]);
    }
}