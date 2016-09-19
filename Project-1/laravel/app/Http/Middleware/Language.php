<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Session;

class Language implements Middleware {

	public function handle($request, Closure $next) {

		app()->setLocale(Session::get('locale'));

		return $next($request);
	}

}
