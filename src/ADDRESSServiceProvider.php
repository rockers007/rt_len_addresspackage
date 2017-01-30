<?php

namespace Addressmodule\ADDRESS;

use Illuminate\Support\ServiceProvider;

class ADDRESSServiceProvider extends ServiceProvider
{
	public function register(){
		//$this->app['test'] = $this->app->share(function ($app) {
		//	return new test;
		//});
	}

	public function boot(){
		include __DIR__ . '/routes.php';
	}
} 