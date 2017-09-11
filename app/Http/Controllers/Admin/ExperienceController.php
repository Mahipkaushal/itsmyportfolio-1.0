<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('admin.pages.experience')->with('heading', 'Experience');
    }
}
