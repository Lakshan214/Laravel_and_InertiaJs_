<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use domain\Facades\StudentFacades;

class HomeController extends Controller
{
    public function index(){
       
        
        $stuInfo = StudentFacades::all();
       return Inertia::render('Home/Index', [
           'stuInfo' => $stuInfo 
       ]);
        
       }
}
