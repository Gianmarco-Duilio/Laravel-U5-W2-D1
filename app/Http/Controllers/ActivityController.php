<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function showAll()
    {
        return view('showAll');
    }
    public function details($id)
    {
        return view('details',  ['id' => $id]);
    }
    public function add()
    {
        return view('add');
    }
    public function update($id)
    {
        return view('update',  ['id' => $id]);
    }
    public function delete($id)
    {
        return view('delete',  ['id' => $id]);
    }
}
