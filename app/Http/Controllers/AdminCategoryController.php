<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class adminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return\Illuminate\Http\response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()  
        ]); 
    }

     /**
     * Show the form created a new resource.
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Desplay the specified resource.
     * 
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function show (category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * 
     * @return \Illuminate\Http\Request $request
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}