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
        elseif($request->path() == 'updatePlants')
        {
            return Validator::make($request->all(), [
                'characteristic' => 'required',
                'utility' => 'required',
            ]);
        }
        elseif($request->path() == 'contributeRemedy')
        {
            return Validator::make($request->all(), [
                'title' => 'required|unique:remedies',
                'description' => 'required',
                'utility' => 'required',
                'ingredient' => 'required',
                'usage' => 'required',

            ]);
        }
        elseif($request->path() == 'updateRemedy')
        {
            return Validator::make($request->all(), [
                'description' => 'required',
                'utility' => 'required',
                'usage' => 'required',
            ]);
        }

    }


}