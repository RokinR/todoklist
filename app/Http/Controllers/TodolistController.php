<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodolistController extends Controller
{
    public function index(Request $req) {
        $data=\App\Models\todolist::get();
        $data=\App\Models\podpunkt::get();
        return view('index', ['data'=>$data]);
    }
    public function createZapis(Request $req) {
        if($req->isMethod('POST')) {
            \App\Models\todolist::create(['Название'=>$req->input('name'), 'Запись'=>$req->input('zapis')]);
            \App\Models\podpunkt::create(['Подпункт'=>$req->input('podpunkt')]);
            return redirect('/');
        }
    }

    public function formCreate(){
        return view('form');
    }

    public function allZapisi(){
        $data=\App\Models\todolist::get();

        return view('allZapisi', ['data'=>$data]);
    }

    public function deteleZapis($id){
        \App\Models\todolist::where('id', '=', $id)->delete();
        return redirect('/');
    }

    // public function editZapis($id){
    //     $data = \App\Models\todolist::where('id', '=', $id)->get();
    //     return view('editZapis', ['data'=>$data]);
    // }

    public function editZapis($id, $path=''){
        

        $data = \App\Models\todolist::where('id', '=', $id)->get();
        if($path != ''){
            return view('editZapis', ['data'=>$data, 'path'=>$path]);
        }
        else{
            return view('editZapis', ['data'=>$data]);
        }
    }
}
