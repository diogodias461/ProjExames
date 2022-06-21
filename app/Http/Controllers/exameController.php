<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exame;
class exameController extends Controller
{
    public function teste()
    {
        //
         //$exame=exame::all();
         return view('exames.exame');

    }
}
