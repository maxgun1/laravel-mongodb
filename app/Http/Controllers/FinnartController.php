<?php

namespace App\Http\Controllers;

use App\Finnart;
use Illuminate\Http\Request;

class FinnartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $weblistings = Finnart::orderBy('timePosted', 'desc')->paginate(20); // pagination 5 items per page
        return view('weblistings.index',compact('weblistings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Finnart  $finnart
     * @return \Illuminate\Http\Response
     */
    public function show(Finnart $finnart)
    {
        $currentUrl = $finnart->url;
        $similarResults = Finnart::where('url', $currentUrl)->orderBy('timePosted', 'desc')->get();
        return view('weblistings.show',compact('finnart', 'similarResults','currentUrl'));/* ->with('items', $results); */

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finnart  $finnart
     * @return \Illuminate\Http\Response
     */
    public function edit(Finnart $finnart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finnart  $finnart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finnart $finnart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finnart  $finnart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finnart $finnart)
    {
        //
    }
}
