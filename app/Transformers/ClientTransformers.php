<?php

/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 17/08/15
 * Time: 15:35
 */

namespace App\Transformers;

use App\Entities\Client;
use League\Fractal\TransformerAbstract;


class ClientTransformers extends TransformerAbstract
{

//    protected $defaultIncludes = ['members'];

    public function transform(Client $client){

        return [
            'id' => $client->id,
            'name' => $client->name,
            'responsible' => $client->responsible,
            'email' => $client->email,
            'phone' => $client->phone,
            'address' => $client->address,
            'obs' => $client->obs
        ];
    }
}