<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use VMN\Article\ArticleFactory;

class ModProceedMiddleWare
{
    public function handle(Request $request, \Closure $next)
    {
        $parameter = $this->makeCondition($request);
        app()->bind(get_class($parameter), function () use ($parameter) {
            return $parameter;
        });

        return $next($request);
    }

    public function makeCondition($request)
    {
        $plantFactory = new ArticleFactory();
        if ($request->path() == 'approveNewPlant')
        {
            $plantRaw = \DB::table('medicinal_plants_history')
                ->where('id', $request->get('id'))
                ->first();

            return $plantFactory->makeNewPlant(get_object_vars($plantRaw));
        }

        if ($request->path() == 'approveEditPlant')
        {
            $plantRaw = \DB::table('medicinal_plants_history')
                ->where('id', $request->get('id'))
                ->first();

            return $plantFactory->makePlantChange(get_object_vars($plantRaw));
        }
    }


}