<?php

namespace App\Http\Controllers\Back;

use App\Models\Tool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = Tool::all();

        return view( 'back.resume.tools.index', compact( 'tools' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'back.resume.tools.create', [ 'tool' => new Tool() ] );
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
        'title'  => 'required|unique:resume_tools,title',
        //'stars' => 'required|max:5',
        'rating' => 'required|string',
    ] );

        //dd( $request );

        $starsoptionvalue = $request->input( 'rating' );

        $tool        = new Tool();
        $tool->title = $request->input( 'title' );
        $tool->yearsinuse = $request->input('yearsinuse');


        //5
        if ( $starsoptionvalue === StarsRating::fivestarsvalueselect ) {
            $tool->rating    = StarsRating::fivestarskey;
            $tool->stars     = StarsRating::fivestarsvalue;
            $tool->selectkey = StarsRating::fivestarsvalueselect;
        } //4.5
        elseif ( $starsoptionvalue === StarsRating::fourstarsandahalfvalueselect ) {
            $tool->rating    = StarsRating::fourstarsandahalfkey;
            $tool->stars     = StarsRating::fourstarsandahalfvalue;
            $tool->selectkey = StarsRating::fourstarsandahalfvalueselect;
        } //4
        elseif ( $starsoptionvalue === StarsRating::fourstarsvalueselect ) {
            $tool->rating    = StarsRating::fourstarskey;
            $tool->stars     = StarsRating::fourstarsvalue;
            $tool->selectkey = StarsRating::fourstarsvalueselect;
        } //3.5
        elseif ( $starsoptionvalue === StarsRating::threestarsandahalfvalueselect ) {
            $tool->rating    = StarsRating::threestarsandahalfkey;
            $tool->stars     = StarsRating::threestarsandahalfvalue;
            $tool->selectkey = StarsRating::threestarsandahalfvalueselect;
        } //3
        elseif ( $starsoptionvalue === StarsRating::threestarsvalueselect ) {
            $tool->rating    = StarsRating::threestarskey;
            $tool->stars     = StarsRating::threestarsvalue;
            $tool->selectkey = StarsRating::threestarsvalueselect;
        } //2.5
        elseif ( $starsoptionvalue === StarsRating::twostarsandahalfvalueselect ) {
            $tool->rating    = StarsRating::twostarsandahalfkey;
            $tool->stars     = StarsRating::twostarsandahalfvalue;
            $tool->selectkey = StarsRating::twostarsandahalfvalueselect;

        } //2
        elseif ( $starsoptionvalue === StarsRating::twostarsvalueselect ) {
            $tool->rating    = StarsRating::twostarskey;
            $tool->stars     = StarsRating::twostarsvalue;
            $tool->selectkey = StarsRating::twostarsvalueselect;
        } //1.5
        elseif ( $starsoptionvalue === StarsRating::oneandahalfstarvalueselect ) {
            $tool->rating    = StarsRating::oneandahalfstarkey;
            $tool->stars     = StarsRating::oneandahalfstarvalue;
            $tool->selectkey = StarsRating::oneandahalfstarvalueselect;
        } //1
        elseif ( $starsoptionvalue === StarsRating::onestarvalueselect ) {
            $tool->rating    = StarsRating::onestarkey;
            $tool->stars     = StarsRating::onestarvalue;
            $tool->selectkey = StarsRating::onestarvalueselect;
        } //0.5
        elseif ( $starsoptionvalue === StarsRating::ahalfstarvalueselect ) {
            $tool->rating    = StarsRating::ahalfstarkey;
            $tool->stars     = StarsRating::ahalfstarvalue;
            $tool->selectkey = StarsRating::ahalfstarvalueselect;
        } //0
        else {
            $tool->rating    = StarsRating::zerostarskey;
            $tool->stars     = StarsRating::zerostarsvalue;
            $tool->selectkey = StarsRating::zerostarsvalueselect;
        }

        activity()->log( "Tool <b>{$tool->title}</b> has been created" );
        $tool->save();

        return redirect( action( 'Back\Resume\ToolsController@index' ) )
            ->with( 'info', trans( 'baseprojectcms.newtoolcreated' ) );
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
        $tool = Tool::find( $id );

        return view( 'back.resume.tools.edit', compact( 'tool' ) );
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


        $tool             = Tool::find( $id );
        $starsoptionvalue = $request->input( 'rating' );
        $tool->title      = $request->input( 'title' );
        $tool->yearsinuse = $request->input('yearsinuse');

        //5
        if ( $starsoptionvalue === StarsRating::fivestarsvalueselect ) {
            $tool->rating    = StarsRating::fivestarskey;
            $tool->stars     = StarsRating::fivestarsvalue;
            $tool->selectkey = StarsRating::fivestarsvalueselect;
        } //4.5
        elseif ( $starsoptionvalue === StarsRating::fourstarsandahalfvalueselect ) {
            $tool->rating    = StarsRating::fourstarsandahalfkey;
            $tool->stars     = StarsRating::fourstarsandahalfvalue;
            $tool->selectkey = StarsRating::fourstarsandahalfvalueselect;
        } //4
        elseif ( $starsoptionvalue === StarsRating::fourstarsvalueselect ) {
            $tool->rating    = StarsRating::fourstarskey;
            $tool->stars     = StarsRating::fourstarsvalue;
            $tool->selectkey = StarsRating::fourstarsvalueselect;
        } //3.5
        elseif ( $starsoptionvalue === StarsRating::threestarsandahalfvalueselect ) {
            $tool->rating    = StarsRating::threestarsandahalfkey;
            $tool->stars     = StarsRating::threestarsandahalfvalue;
            $tool->selectkey = StarsRating::threestarsandahalfvalueselect;
        } //3
        elseif ( $starsoptionvalue === StarsRating::threestarsvalueselect ) {
            $tool->rating    = StarsRating::threestarskey;
            $tool->stars     = StarsRating::threestarsvalue;
            $tool->selectkey = StarsRating::threestarsvalueselect;
        } //2.5
        elseif ( $starsoptionvalue === StarsRating::twostarsandahalfvalueselect ) {
            $tool->rating    = StarsRating::twostarsandahalfkey;
            $tool->stars     = StarsRating::twostarsandahalfvalue;
            $tool->selectkey = StarsRating::twostarsandahalfvalueselect;

        } //2
        elseif ( $starsoptionvalue === StarsRating::twostarsvalueselect ) {
            $tool->rating    = StarsRating::twostarskey;
            $tool->stars     = StarsRating::twostarsvalue;
            $tool->selectkey = StarsRating::twostarsvalueselect;
        } //1.5
        elseif ( $starsoptionvalue === StarsRating::oneandahalfstarvalueselect ) {
            $tool->rating    = StarsRating::oneandahalfstarkey;
            $tool->stars     = StarsRating::oneandahalfstarvalue;
            $tool->selectkey = StarsRating::oneandahalfstarvalueselect;
        } //1
        elseif ( $starsoptionvalue === StarsRating::onestarvalueselect ) {
            $tool->rating    = StarsRating::onestarkey;
            $tool->stars     = StarsRating::onestarvalue;
            $tool->selectkey = StarsRating::onestarvalueselect;
        } //0.5
        elseif ( $starsoptionvalue === StarsRating::ahalfstarvalueselect ) {
            $tool->rating    = StarsRating::ahalfstarkey;
            $tool->stars     = StarsRating::ahalfstarvalue;
            $tool->selectkey = StarsRating::ahalfstarvalueselect;
        } //0
        else {
            $tool->rating    = StarsRating::zerostarskey;
            $tool->stars     = StarsRating::zerostarsvalue;
            $tool->selectkey = StarsRating::zerostarsvalueselect;
        }

        activity()->log( "Tool <b>{$tool->title}</b> has been updated" );
        $tool->save();

        //TODO check voor juiste redirect
        return redirect( action( 'Back\Resume\ToolsController@index' ) )
            ->with( 'info', trans( 'resume.resumetoolupdated' ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tool = Tool::findOrFail( $id );

        $tool->delete();

        activity()->log( "Tool <b>{$tool->title}</b> has been deleted" );
        flash()->success( strip_tags( "Tool <b>{$tool->title}</b> has been deleted" ) );

        return redirect()->action( 'Back\Resume\ToolsController@index' )
            ->with( 'info', trans( 'resume.tooldeleted' ) );
    }

    public function frontdestroy( $id ) {
        $tool = Tool::findOrFail( $id );

        $tool->delete();

        activity()->log( "Tool <b>{$tool->title}</b> has been deleted" );
        flash()->success( strip_tags( "Tool <b>{$tool->title}</b> has been deleted" ) );

        //return redirect()->action( 'Back\Resume\ToolsController@index@index' )
        return redirect()->back()
            ->with( 'info', trans( 'resume.tooldeleted' ) );
    }
}
