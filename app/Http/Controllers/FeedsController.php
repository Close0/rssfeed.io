<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FeedCreateRequest;
use App\Http\Requests\FeedUpdateRequest;

use App\Feed;
use App\FeedItem;
use Auth;

class FeedsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FeedCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedCreateRequest $request)
    {
        // Create and persist the new feed
        $feed = new Feed;
        $feed->fill($request->all());
        $feed->user_id = Auth::user()->id;
        $feed->save();

        // Flash the successful create
        flash()->success('Success!', 'Your feed was successfully created.');

        // Redirect to the feed page
        return redirect("/feed/{$feed->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed = Feed::find($id);
        $feedItems = $feed->items()->get();

        return view('feed.show', compact('feed', 'feedItems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feed = Feed::find($id);

        return view('feed.edit', compact('feed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\FeedUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeedUpdateRequest $request, $id)
    {
        $feed = Feed::find($id);
        $feed->update($request->all());

        // Redirect to the feed page
        return redirect("/feed/{$feed->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function render($id)
    {
        $feed = Feed::find($id);
        $feedItems = $feed->items()->get();
        $owner = $feed->user()->get()->first();

        return response()->view('feed.render.rss', compact('feed', 'feedItems', 'owner'))
            ->header('Content-Type', 'application/rss+xml; charset=ISO-8859-1');
    }
}
