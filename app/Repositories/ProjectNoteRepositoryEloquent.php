<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 31/07/15
 * Time: 03:17
 */

namespace App\Repositories;


use App\Entities\Project;
use App\Entities\ProjectNote;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectNoteRepositoryEloquent extends BaseRepository implements ProjectNoteRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProjectNote::class;
    }
}