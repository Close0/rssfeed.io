<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedItemCreateRequest;
use App\Http\Requests\FeedItemUpdateRequest;

use App\Http\Requests;

use App\Feed;
use App\FeedItem;

class FeedItemsController extends Controller
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
    public function index($feedId)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($feedId)
    {
        $feed = Feed::find($feedId);
        return view('feed.item.create', compact('feed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\FeedItemCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedItemCreateRequest $request, $feedId)
    {
        $feedItem = new FeedItem;
        $feedItem->feed_id = $feedId;
        $feedItem->title = $request->title;
        $feedItem->link = $request->link;
        $feedItem->description = $request->description;
        $feedItem->author = $request->author;
        $feedItem->category = $request->category;
        $feedItem->source = $request->source;
        $feedItem->save();

        // Flash the successful create
        flash()->success('Success!', 'Your feed item was successfully created.');

        // Redirect to the feed page
        return redirect("/feed/{$feedId}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($feedId, $feedItemId)
    {
        $feed = Feed::find($feedId);
        $feedItem = FeedItem::find($feedItemId);

        return view('feed.item.show', compact('feed', 'feedItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($feedId, $feedItemId)
    {
        $feed = Feed::find($feedId);
        $feedItem = FeedItem::find($feedItemId);

        return view('feed.item.edit', compact('feed', 'feedItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\FeedItemUpdateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(FeedItemUpdateRequest $request, $feedId, $feedItemId)
    {
        $feed = Feed::find($feedId);
        $feedItem = FeedItem::find($feedItemId);
        $feedItem->update($request->all());
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
}
