<?php

namespace App\Http\Controllers;
use App\Blog;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function create(){
       return view('create');
    }
    public function store(Request $request){
        
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
      
        $crud = new Blog;
        $crud ->title = $request->title;
        $crud ->description = $request->description;
        $crud->save();
        return redirect(route('showTask'));
    }

    public function showTask(){
        $tasks = Blog::all();
        return view('showTask',compact('tasks'));
    }

    public function modify(){
        $tasks = Blog::all();
        return view('modify',compact('tasks'));
    }

    public function destroy(){
        $tasks = Blog::all();
        return view('destroy',compact('tasks'));
    }


    public function edit($id){
        $task = Blog::find($id);
        return view('edit',compact('task'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
      
        $crud = Blog::find($id);
        $crud ->title = $request->title;
        $crud ->description = $request->description;
        $crud->save();
        return redirect(route('showTask'));
        }
        public function delete($id){
            
            $crud = Blog::find($id);
            $crud->delete();
            return redirect(route('showTask'));
            }
}
