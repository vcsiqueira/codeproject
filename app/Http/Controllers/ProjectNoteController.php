<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectNoteRepository;
use App\Services\ProjectNoteService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectNoteController extends Controller
{

    /**
     * @var ProjectNoteService
     */
    protected $service;

    /**
     * @var ProjectNoteRepository
     */
    protected $repository;

    public function __construct(ProjectNoteRepository $repository, ProjectNoteService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        return $this->repository->findWhere(array("project_id" => $id));
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
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id, $noteId)
    {
        return $this->repository->findWhere(array("project_id"=> $id, "id"=>$noteId));
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
    public function update(Request $request, $id, $noteId)
    {
        return $this->service->update($request->all(), $noteId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, $noteId)
    {
        //Caso queira remover algo antes, de deletar o cliente, poderia ser implementado no service... mas como não faremos agora, vamos usar o repository mesmo;

        $this->repository->delete($noteId);
    }
}
