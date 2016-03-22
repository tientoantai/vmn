<?php

namespace VMN\ArticleEditingService;

use Validator;

class ArticleValidator extends Validator
{

    public function validatePlant($request)
    {
        if ($request->path() == 'contributePlants')
        {
            return Validator::make($request->all(), [
                'commonName' => 'required|unique:medicinal_plants',
                'characteristic' => 'required',
                'utility' => 'required',
            ]);
        }
        else
        {
            return Validator::make($request->all(), [
                'characteristic' => 'required',
                'utility' => 'required',
            ]);
        }

    }


}