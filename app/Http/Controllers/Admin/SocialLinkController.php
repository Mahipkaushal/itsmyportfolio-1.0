<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialLinkController extends Controller
{
    public function index()
    {
        return view('admin.pages.social_link')->with('heading', 'Social Link');
    }
}
