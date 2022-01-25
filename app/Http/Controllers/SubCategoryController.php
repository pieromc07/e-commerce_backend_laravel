<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all subcategories
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $subcategories = SubCategory::all();
        return view('subcategories.index', compact('subcategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $categories = Category::all();
        return view('subcategories.create', compact('categories'));
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
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $request->validate([
            'name' => 'required|max:255 | unique:subcategory',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();

        return redirect()->route('subcategory.index')->with('success', 'Subcategory created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
