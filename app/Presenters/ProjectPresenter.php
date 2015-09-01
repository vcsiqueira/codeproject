<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 17/08/15
 * Time: 15:46
 */

namespace App\Presenters;

use App\Transformers\ProjectTransformers;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectPresenter extends FractalPresenter
{


    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ProjectTransformers();
    }
}