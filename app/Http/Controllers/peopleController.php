<?php

namespace App\Http\Controllers;

use App\Http\Resources\peopleResource;
use App\Models\people;
use Illuminate\Http\Request;

class peopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = people::all();
        return response(peopleResource::collection($people),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people  $people
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(people $people, int $id)
    {
        
        return response(people::find($id),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(people $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     * @param  string $name
     * @param  int $id
     */
    public function update(Request $request,int $id, string $name)
    {
        $var = people::find($id);
        $var->update(['name'=>$name]);
        return response('Dane zostały zmienione',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(people $people)
    {
        //
    }
}
