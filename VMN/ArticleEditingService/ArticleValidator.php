<?php

namespace VMN\ArticleEditingService;

use Validator;

class ArticleValidator extends Validator
{

    public function validatePlant($request)
    {
        return Validator::make($request, [
            'commonName' => 'required|unique:medicinal_plants',
            'characteristic' => 'required',
            'utility' => 'required',
        ]);

    }


}