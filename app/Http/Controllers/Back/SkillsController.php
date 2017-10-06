<?php

namespace App\Http\Controllers\Back;

use App\Enums\StarsRating;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view( 'back.resume.skills.index', compact( 'skills' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'back.resume.skills.create', [ 'skill' => new Skill() ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'title'  => 'required|unique:resume_skills,title',
            //'stars' => 'required|max:5',
            'rating' => 'required|string',
        ] );

        //dd( $request );

        $starsoptionvalue = $request->input( 'rating' );

        $skill        = new Skill();
        $skill->title = $request->input( 'title' );


        //5
        if ( $starsoptionvalue === StarsRating::fivestarsvalueselect ) {
            $skill->rating    = StarsRating::fivestarskey;
            $skill->stars     = StarsRating::fivestarsvalue;
            $skill->selectkey = StarsRating::fivestarsvalueselect;
        } //4.5
        elseif ( $starsoptionvalue === StarsRating::fourstarsandahalfvalueselect ) {
            $skill->rating    = StarsRating::fourstarsandahalfkey;
            $skill->stars     = StarsRating::fourstarsandahalfvalue;
            $skill->selectkey = StarsRating::fourstarsandahalfvalueselect;
        } //4
        elseif ( $starsoptionvalue === StarsRating::fourstarsvalueselect ) {
            $skill->rating    = StarsRating::fourstarskey;
            $skill->stars     = StarsRating::fourstarsvalue;
            $skill->selectkey = StarsRating::fourstarsvalueselect;
        } //3.5
        elseif ( $starsoptionvalue === StarsRating::threestarsandahalfvalueselect ) {
            $skill->rating    = StarsRating::threestarsandahalfkey;
            $skill->stars     = StarsRating::threestarsandahalfvalue;
            $skill->selectkey = StarsRating::threestarsandahalfvalueselect;
        } //3
        elseif ( $starsoptionvalue === StarsRating::threestarsvalueselect ) {
            $skill->rating    = StarsRating::threestarskey;
            $skill->stars     = StarsRating::threestarsvalue;
            $skill->selectkey = StarsRating::threestarsvalueselect;
        } //2.5
        elseif ( $starsoptionvalue === StarsRating::twostarsandahalfvalueselect ) {
            $skill->rating    = StarsRating::twostarsandahalfkey;
            $skill->stars     = StarsRating::twostarsandahalfvalue;
            $skill->selectkey = StarsRating::twostarsandahalfvalueselect;

        } //2
        elseif ( $starsoptionvalue === StarsRating::twostarsvalueselect ) {
            $skill->rating    = StarsRating::twostarskey;
            $skill->stars     = StarsRating::twostarsvalue;
            $skill->selectkey = StarsRating::twostarsvalueselect;
        } //1.5
        elseif ( $starsoptionvalue === StarsRating::oneandahalfstarvalueselect ) {
            $skill->rating    = StarsRating::oneandahalfstarkey;
            $skill->stars     = StarsRating::oneandahalfstarvalue;
            $skill->selectkey = StarsRating::oneandahalfstarvalueselect;
        } //1
        elseif ( $starsoptionvalue === StarsRating::onestarvalueselect ) {
            $skill->rating    = StarsRating::onestarkey;
            $skill->stars     = StarsRating::onestarvalue;
            $skill->selectkey = StarsRating::onestarvalueselect;
        } //0.5
        elseif ( $starsoptionvalue === StarsRating::ahalfstarvalueselect ) {
            $skill->rating    = StarsRating::ahalfstarkey;
            $skill->stars     = StarsRating::ahalfstarvalue;
            $skill->selectkey = StarsRating::ahalfstarvalueselect;
        } //0
        else {
            $skill->rating    = StarsRating::zerostarskey;
            $skill->stars     = StarsRating::zerostarsvalue;
            $skill->selectkey = StarsRating::zerostarsvalueselect;
        }

        activity()->log( "Skill <b>{$skill->title}</b> has been created" );
        $skill->save();

        return redirect( action( 'Back\Resume\SkillsController@index' ) )
            ->with( 'info', trans( 'baseprojectcms.newskillcreated' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find( $id );

        return view( 'back.resume.skills.edit', compact( 'skill' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'title' => 'required',

        ] );


        $skill            = Skill::find( $id );
        $starsoptionvalue = $request->input( 'rating' );
        $skill->title     = $request->input( 'title' );

        //5
        if ( $starsoptionvalue === StarsRating::fivestarsvalueselect ) {
            $skill->rating    = StarsRating::fivestarskey;
            $skill->stars     = StarsRating::fivestarsvalue;
            $skill->selectkey = StarsRating::fivestarsvalueselect;
        } //4.5
        elseif ( $starsoptionvalue === StarsRating::fourstarsandahalfvalueselect ) {
            $skill->rating    = StarsRating::fourstarsandahalfkey;
            $skill->stars     = StarsRating::fourstarsandahalfvalue;
            $skill->selectkey = StarsRating::fourstarsandahalfvalueselect;
        } //4
        elseif ( $starsoptionvalue === StarsRating::fourstarsvalueselect ) {
            $skill->rating    = StarsRating::fourstarskey;
            $skill->stars     = StarsRating::fourstarsvalue;
            $skill->selectkey = StarsRating::fourstarsvalueselect;
        } //3.5
        elseif ( $starsoptionvalue === StarsRating::threestarsandahalfvalueselect ) {
            $skill->rating    = StarsRating::threestarsandahalfkey;
            $skill->stars     = StarsRating::threestarsandahalfvalue;
            $skill->selectkey = StarsRating::threestarsandahalfvalueselect;
        } //3
        elseif ( $starsoptionvalue === StarsRating::threestarsvalueselect ) {
            $skill->rating    = StarsRating::threestarskey;
            $skill->stars     = StarsRating::threestarsvalue;
            $skill->selectkey = StarsRating::threestarsvalueselect;
        } //2.5
        elseif ( $starsoptionvalue === StarsRating::twostarsandahalfvalueselect ) {
            $skill->rating    = StarsRating::twostarsandahalfkey;
            $skill->stars     = StarsRating::twostarsandahalfvalue;
            $skill->selectkey = StarsRating::twostarsandahalfvalueselect;

        } //2
        elseif ( $starsoptionvalue === StarsRating::twostarsvalueselect ) {
            $skill->rating    = StarsRating::twostarskey;
            $skill->stars     = StarsRating::twostarsvalue;
            $skill->selectkey = StarsRating::twostarsvalueselect;
        } //1.5
        elseif ( $starsoptionvalue === StarsRating::oneandahalfstarvalueselect ) {
            $skill->rating    = StarsRating::oneandahalfstarkey;
            $skill->stars     = StarsRating::oneandahalfstarvalue;
            $skill->selectkey = StarsRating::oneandahalfstarvalueselect;
        } //1
        elseif ( $starsoptionvalue === StarsRating::onestarvalueselect ) {
            $skill->rating    = StarsRating::onestarkey;
            $skill->stars     = StarsRating::onestarvalue;
            $skill->selectkey = StarsRating::onestarvalueselect;
        } //0.5
        elseif ( $starsoptionvalue === StarsRating::ahalfstarvalueselect ) {
            $skill->rating    = StarsRating::ahalfstarkey;
            $skill->stars     = StarsRating::ahalfstarvalue;
            $skill->selectkey = StarsRating::ahalfstarvalueselect;
        } //0
        else {
            $skill->rating    = StarsRating::zerostarskey;
            $skill->stars     = StarsRating::zerostarsvalue;
            $skill->selectkey = StarsRating::zerostarsvalueselect;
        }

        activity()->log( "Skill <b>{$skill->title}</b> has been updated" );
        $skill->save();

        //TODO check voor juiste redirect
        return redirect( action( 'Back\Resume\SkillsController@index' ) )
            ->with( 'info', trans( 'resumeskillupdated' ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail( $id );

        $skill->delete();

        activity()->log( "Skill <b>{$skill->title}</b> has been deleted" );
        flash()->success( strip_tags( "Skill <b>{$skill->title}</b> has been deleted" ) );

        return redirect()->action( 'Back\Resume\SkillsController@index' )
            ->with( 'info', trans( 'baseprojectcms.skilldeleted' ) );
    }


    public function frontdestroy( $id ) {
        $skill = Skill::findOrFail( $id );

        $skill->delete();

        activity()->log( "Skill <b>{$skill->title}</b> has been deleted" );
        flash()->success( strip_tags( "Skill <b>{$skill->title}</b> has been deleted" ) );

        //return redirect()->action( 'Front\ResumeController@index' )
        return redirect()->back()
            ->with( 'info', trans( 'baseprojectcms.skilldeleted' ) );
    }
}
