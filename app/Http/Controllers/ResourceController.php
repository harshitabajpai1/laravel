<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "student data";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "add new student data";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "store data";
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        echo "show data";
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo "edit data";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        echo "update data";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        echo "destroy data";
    }
}
