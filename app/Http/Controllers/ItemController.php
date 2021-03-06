<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$items = $item->sortable()->paginate(5); // pagination 5 items per page
         $items = Item::orderBy('timePosted', 'desc')->paginate(20); // pagination 5 items per page
        // $items = Item::all();
        return view('items.index',compact('items'));
    }

    // searches for query in itemId table. 

    public function search(Request $request)
    {
         $search = $request->get('q');
         $results = Item::where('itemId', 'like', "%$search%")
         ->orWhere('title', 'like', "%$search%")
         ->paginate(20);
        return view('search.search')->with('items', $results);
    }


    /* Searches database for results with same itemId */
/* 
    public function similar(Similar $similar)
    {
        $similar = $item->_id;
        $similarResults = Item::where('itemId', 'like', "%$similar%");
        return view('items.show')->with('items', $similarResults);
    }

 */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $currentItemId = $item->itemId;
        $similarResults = Item::where('itemId', $currentItemId)->orderBy('timePosted', 'desc')->get();
        return view('items.show',compact('item', 'similarResults','currentItemId'));/* ->with('items', $results); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
