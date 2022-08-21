<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [];
        return view('categories.index',['categories'=> $categories]);
    }

    public function add(Request $request)
    {
        return redirect()->back()->with('success','Data added successfully');
    }

    public function update(Request $request, $id)
    {
        return redirect()->back()->with('success','Data updated successfully');
    }

    public function delete($id)
    {
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}
