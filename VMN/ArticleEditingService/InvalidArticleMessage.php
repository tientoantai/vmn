<?php

namespace VMN\ArticleEditingService;


class InvalidArticleMessage
{
    protected $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function getMessage()
    {
        return $this->msg;
    }
}