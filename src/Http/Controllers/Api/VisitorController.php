<?php

namespace Exit11\SocialLogin\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Mpcs\Core\Facades\Core;
use Mpcs\Core\Traits\ControllerTrait;

use Exit11\SocialLogin\Http\Requests\VisitorRequest as Request;
use Exit11\SocialLogin\Http\Resources\Visitor as Resource;
use Exit11\SocialLogin\Http\Resources\VisitorCollection as ResourceCollection;
use Exit11\SocialLogin\Models\Visitor as Model;
use Exit11\SocialLogin\Services\VisitorService as Service;

class VisitorController extends Controller
{
    use ControllerTrait;
    protected $service;
    
    public function __construct(Service $service)
    {
        $this->service = $service;
        $this->controllerTraitInit();
    }

    /**
     * index
     * @param  mixed $request
     * @return view
     */
    public function index(Request $request)
    {
        return new ResourceCollection($this->service->index());
    }
    
    /**
     * edit
     *
     * @param  mixed $visitor
     * @return void
     */
    public function edit(Model $visitor)
    {
        return new Resource($this->service->edit($visitor));
    }
        
    /**
     * show
     *
     * @param  mixed $visitor
     * @return void
     */
    public function show(Model $visitor)
    {
        return new Resource($this->service->show($visitor));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new Resource($this->service->store());
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model $visitor)
    {
        return new Resource($this->service->update($visitor));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $visitor)
    {
        return Core::responseJson($this->service->destroy($visitor));
    }
}