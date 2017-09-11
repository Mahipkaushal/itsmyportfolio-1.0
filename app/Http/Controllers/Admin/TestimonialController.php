<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('admin.pages.testimonial')->with('heading', 'Testimonial');
    }
}
