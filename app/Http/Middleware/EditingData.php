<?php


namespace app\Http\Middleware;


use Illuminate\Http\Request;
use VMN\Article\ArticleFactory;
use VMN\ArticleEditingService\ArticleValidator;

class EditingData
{
    /**
     * @var ArticleValidator
     */
    protected $articleValidator;

    /**
     * EditingData constructor.
     * @param ArticleValidator $articleValidator
     */
    public function __construct(ArticleValidator $articleValidator)
    {
        $this->articleValidator = $articleValidator;
    }


    /**
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, \Closure $next)
    {
        $validator = $this->articleValidator->validatePlant($request->all());
        if ($validator->fails())
        {
            return response()->json([
                'status' => 'error',
                'code'   => 'DATA_IS_INVALID',
                'message' => $validator->errors()->all()
            ], 200);
        }

        $article = $this->makeArticleInstance($request);
        app()->bind(get_class($article), function () use ($article) {
            return $article;
        });
        return $next($request);
    }

    /**
     * @param Request $request
     * @return \VMN\Article\MedicinalPlant
     */
    public function makeArticleInstance(Request $request)
    {
        $plantFactory = new ArticleFactory();
        if ($request->path() == 'contributePlants')
        {
            return $plantFactory->makeNewPlant($request->all());
        }
        elseif($request->path() == 'updatePlants')
        {
            return $plantFactory->makePlantChange($request->all());
        }
    }

}