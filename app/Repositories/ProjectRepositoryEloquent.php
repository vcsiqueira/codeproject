<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 31/07/15
 * Time: 03:17
 */

namespace App\Repositories;


use App\Entities\Project;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Presenters\ProjectPresenter;

class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }

    public function isOwner($projectId, $userId){
        $projects = $this->findWhere(['id'=> $projectId, 'owner_id' => $userId]);
        if (count($projects) > 0){

            return true;
        }

        return false;
    }

    public function hasMember($projectId, $memberId){
        $project = $this->find($projectId);
        foreach($project->members as $member){
            if($member->id == $memberId) return true;
        }

        return false;
    }

    public function presenter(){
        return ProjectPresenter::class;
    }
}