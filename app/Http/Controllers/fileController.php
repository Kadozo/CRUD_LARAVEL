<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class fileController extends Controller
{
    public function index(){
        $files = File::all();
        return view('file.index',compact('files'));
    }
    public function add(){
        return view('file.add');
    }
    public function store(Request $request){
        $file = new File();
        $file->name = $request->name;
        $file->date = $request->date;
        $file->save();
        return redirect()->Route('index');
    }
}
