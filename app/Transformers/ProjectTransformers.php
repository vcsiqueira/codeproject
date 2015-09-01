<?php

/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 17/08/15
 * Time: 15:35
 */

namespace App\Transformers;

use App\Entities\Project;
use League\Fractal\TransformerAbstract;


class ProjectTransformers extends TransformerAbstract
{

    protected $defaultIncludes = ['members'];

    public function transform(Project $project){

        return [
            'project_id' => $project->id,
            'project' => $project->name,
            'description' => $project->description,
//            'members' => $project->members,
            'progress' => $project->progress,
            'status' => $project->status,
            'due_date' => $project->due_date,
        ];
    }

    public function includeMembers(Project $project){
        return $this->collection($project->members, new ProjectMemberTransformers());
    }

}