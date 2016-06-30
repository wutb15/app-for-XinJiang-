<?php

namespace App\Http\Controllers;

use App\Individualcondition;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

use App\Http\Requests;

class DataController extends Controller
{
    public function  show($id)
    {
        Individualcondition::all()->find($id);
    }
    //
}
