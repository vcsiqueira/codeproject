<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Services\ProjectService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class ProjectFileController extends Controller
{

    /**
     * @var ProjectService
     */
    protected $service;

    /**
     * @var ProjectRepository
     */
    protected $repository;

    public function __construct(ProjectRepository $repository, ProjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->with(['client','owner','members'])->findWhere(['owner_id'=> Authorizer::getResourceOwnerId()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

//          echo $request->name;die;


        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $data['file'] = $file;
        $data['extension'] = $extension;
        $data['name'] = $request->name;
        $data['project_id'] = $request->project_id;
        $data['description'] = $request->description;

        $this->service->createFile($data);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if ($this->checkProjectPermission($id) == false){
            return ['error'=> 'Access Forbidden'];
        }

        return $this->repository->with(['client','owner','members'])->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //Caso queira remover algo antes, de deletar o cliente, poderia ser implementado no service... mas como não faremos agora, vamos usar o repository mesmo;

        $this->repository->delete($id);
    }

    private function checkProjectOwner($projectId){

        $userId = Authorizer::getResourceOwnerId();

        return $this->repository->isOwner($projectId, $userId);

    }

    private function checkProjectMember($projectId){

        $userId = Authorizer::getResourceOwnerId();

        return $this->repository->hasMember($projectId, $userId);

    }

    private function checkProjectPermission($projectId){

        if ($this->checkProjectOwner($projectId) OR $this->checkProjectMember($projectId)){
            return true;
        }

        return false;
    }


}
