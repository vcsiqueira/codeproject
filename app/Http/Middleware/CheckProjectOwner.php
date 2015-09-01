<?php

namespace App\Http\Middleware;

use App\Repositories\ProjectRepository;
use Closure;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class CheckProjectOwner
{

    /*
     * @var ProjectRepository
     */
    private $repository;
    /**
     * CheckProjectOwner constructor.
     */
    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $userId = Authorizer::getResourceOwnerId();
        $projectId = $request->project;

        if ($this->repository->isOwner($projectId, $userId) == false) {
            return ['success'=> false];
        }

        return $next($request);
    }
}
