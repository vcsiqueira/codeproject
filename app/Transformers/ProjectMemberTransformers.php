<?php

/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 17/08/15
 * Time: 15:35
 */

namespace App\Transformers;

use App\Entities\User;
use League\Fractal\TransformerAbstract;


class ProjectMemberTransformers extends TransformerAbstract
{

    public function transform(User $projectMembers){

        return [
//            'member_id' => $projectMembers->id,
            'name' => $projectMembers->name,
        ];
    }

}