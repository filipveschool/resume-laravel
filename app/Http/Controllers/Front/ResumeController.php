<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\ResumeContactFormRequest;
use App\Models\Skill;
use App\Models\Tool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function index() {

        //https://stackoverflow.com/a/17432174/4219302
        $skills = Skill::orderBy( 'title' )->get();
        //$skills = Skill::orderBy('id')->get();

        //$tools = Tool::orderBy('title')->get();
        //$tools = Tool::orderBy('id')->get();
        $tools = Tool::orderBy( 'yearsinuse', 'desc' )->get();

        //return view( 'front.resume.index', compact( 'skills', 'tools' ) );
        return view( 'sections.index', compact( 'skills', 'tools' ) );
    }

    public function sendMail( ResumeContactFormRequest $request ) {

        //Mail::send( new ResumeContactSubmitted( $request->get( 'name' ), $request->get( 'mail' ), $request->get( 'comment' ) ) );

        //flash()->success( __( 'contact.response' ) );

        return redirect()->action( 'Front\ResumeController@index' );


    }
}
