<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 27/07/15
 * Time: 11:30
 */

namespace App\Repositories;


use App\Entities\Client;
use App\Entities\User;
use App\Presenters\ClientPresenter;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepository
{

    public function model(){
        return User::class;
    }

//    public function presenter(){
//        return ClientPresenter::class;
//    }
}