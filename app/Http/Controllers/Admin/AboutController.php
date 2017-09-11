<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\About;
use Auth;
use Validator;
use File;

class AboutController extends Controller
{
	private $heading = 'About';

	public function index()
	{
		$user = Auth::user();
		$about = $user->about;

		return view('admin.pages.about')->with([
			'heading'	=>	$this->heading,
			'about'		=>	$about
		]);
	}

	public function store(Request $request)
	{
		$user_id = Auth::user()->id;

		$validator = Validator::make($request->all(), About::$rules);

		if($validator->fails()) {
			return response()->json([
				'status'    =>  false,
				'message'   =>  $validator->errors()->all()
			], 400);
		}

		$profile_picture = '';

		if($request->hasFile('profile_picture')) {
			$image = $request->file('profile_picture');
	    	$profile_picture = time() . $user_id . '.' . $image->getClientOriginalExtension();
	    	$destinationPath = public_path('/admin/images/avatars');
	    	$image->move($destinationPath, $profile_picture);
		}

		$about = About::updateOrCreate(
			[
				'user_id' 			=>	$user_id
			],
			[
				'user_id' 			=>	$user_id,
				'name' 				=>	$request->name,
	    		'title'				=>	$request->title,
	    		'profile_picture'	=>	$profile_picture,
	    		'description'		=>	$request->description,
	    		'email'				=>	$request->email,
	    		'phone'				=>	$request->phone,
	    		'website'			=>	$request->website
	    	]
	    );

		$about->save();

		return response()->json([
			'status'    =>  true,
			'message'   =>  'Details saved successfully!'
		], 200);
	}

}
