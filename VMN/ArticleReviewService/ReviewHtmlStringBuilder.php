<?php

namespace VMN\ArticleReviewService;


class ReviewHtmlStringBuilder
{
    public function build(Review $review)
    {
        $string = "<div class='product-comment margin-bottom-20'>".
            "<div class='product-comment-in'>".
            "<img class='product-comment-img rounded-x' src='assets/img/team/01.jpg' alt=''>".
            "<div class='product-comment-dtl'>".
            "<h4><a>".$review->getReviewer()."</a> <small>".date('Y-m-d H:i:s')."</small></h4>".
            "<div>".$review->getComment()."</div>".
            " <ul class='list-inline product-ratings pull-right list-inline'>";
        ;
        for ($i = 1; $i <= 5; $i++)
        {
            if($i <= $review->getRating())
            {
                $string .= "<li><i class='rating-selected fa fa-star'></i></li>&nbsp;";
            }
            else
            {
                $string .= "<li><i class='rating fa fa-star'></i></li>&nbsp;";
            }
        }
        $string .= "</ul></li></ul></div></div></div>";

        return $string;

    }

}