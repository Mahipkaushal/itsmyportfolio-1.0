<?php

$this->get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'admin_guest'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

	$this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	$this->post('/login', 'Auth\LoginController@login');

}); 

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

	$this->get('/dashboard', 'DashboardController@index')->name('dashboard');
	$this->get('/about', 'AboutController@index')->name('about');
	$this->get('/education', 'EducationController@index')->name('education');
	$this->get('/experience', 'ExperienceController@index')->name('experience');
	$this->get('/skill', 'SkillController@index')->name('skill');
	$this->get('/project', 'ProjectController@index')->name('project');
	$this->get('/testimonial', 'TestimonialController@index')->name('testimonial');
	$this->get('/social_link', 'SocialLinkController@index')->name('social_link');

	$this->post('/about', 'AboutController@store');
	$this->post('/avatar', 'AboutController@storeAvatar');


	$this->post('/logout', 'Auth\LoginController@logout');

}); 