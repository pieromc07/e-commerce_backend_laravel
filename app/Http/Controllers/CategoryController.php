<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list all categories
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
        return view('categories.index', compact('categories'));
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
        return view('categories.create');
    }

    // method far getSubCategory
    public function getSubCategory($id)
    {
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        return SubCategory::where('category_id', $id)->get();
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
        $validated = $request->validate([
            'name' => 'required|max:255 | unique:category',
            'description' => 'required|max:255',
        ]);

        if ($validated) {
            $category = new Category;
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            return redirect()->route('category.index')->with('success', 'Category created successfully');
        }

        return $request->all();
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
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
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
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
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
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $validated = $request->validate([
            'name' => 'required|max:255 | unique:category',
            'description' => 'required|max:255',
        ]);

        if ($validated) {
            $category = Category::find($id)->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            return redirect()->route('category.index')->with('success', 'Category updated successfully');
        }
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
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
