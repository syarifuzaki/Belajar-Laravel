<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $request;
    public function ___construct(Request $request)
    {
      $this->request = $request;
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index',['categories'=> $categories]);
    }

    public function add()
    {
        $this->validate($this->request, [
          'name' => 'required',
          'slug' => 'required',
        ]);

        $payload = $this->request->only(['name', 'slug', 'keyword', 'description']);

        $category = Category::create($payload);

        return redirect()->back()->with('success','Data added successfully');
    }

    public function update($id)
    {
        $this->validate($this->request, [
          'name' => 'required',
          'slug' => 'required',
        ]);
        $payload = $this->request->only(['name', 'slug', 'keyword', 'description']);
        $category = Category::find($id);

        if ( $category ) {
          $category->update($payload);
          return redirect()->back()->with('success','Data updated successfully');
        } else {
           return redirect()->back()->with('error','Data not found');
        }
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if ( $category ) {
          $category->delete();
          return redirect()->back()->with('success', 'Data Deleted Successfully');
        } else {
          return redirect()->back()->with('error', 'Data Not Found');
        }
    }
}