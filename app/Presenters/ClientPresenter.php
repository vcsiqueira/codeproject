<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 17/08/15
 * Time: 15:46
 */

namespace App\Presenters;

use App\Transformers\ClientTransformers;
use Prettus\Repository\Presenter\FractalPresenter;

class ClientPresenter extends FractalPresenter
{


    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ClientTransformers();
    }
}