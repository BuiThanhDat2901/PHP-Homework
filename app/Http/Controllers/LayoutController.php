<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    //
    public function getLayout(){
        return view('admin.template.master-admin');
    }
    public function getForm(){
        return view('admin.template.form');
    }
    public function getTable(){
        return view('admin.template.table');
    }
}
