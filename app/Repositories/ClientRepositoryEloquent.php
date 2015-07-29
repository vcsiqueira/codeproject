<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 27/07/15
 * Time: 11:30
 */

namespace App\Repositories;


use App\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    public function model(){
        return Client::class;
    }






}