<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller {

	public function swap( $lang ) {
		\Log::info('languagecontroller');
		\Log::info($lang);
		//session()->put( 'locale', $lang );
		//Session::put( 'locale', $lang );
		//App::setLocale( $lang );

		//Cookie::forget('locale');

		//return redirect()->back()->withCookie( 'locale', $lang, 60 * 24 * 365 * 5 );
		//return redirect()->back();
		return redirect()->route( 'resume' );
	}
}
