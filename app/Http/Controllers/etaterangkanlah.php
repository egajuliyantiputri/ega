<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
class etaterangkanlah extends Controller
{
    //
    public function index()
    {
    	$a = "egajp";
    	return $a;
    }

    public function tampilmodel()
    {
    	$ortu = orangtua::all();
    	return $ortu;
    }

    public function tampilanmodel()
    {
    	return view('about');
    }

    public function tampilanmodel2()
    {
    	return view('about');
    }

    public function percobaan()
    {
    	$ortu = orangtua::all();
    	return view('layouts.index',compact('ortu'));
    }

}
