<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function index()
    {
        return view('admin.pages.education')->with('heading', 'Education');
    }
}
