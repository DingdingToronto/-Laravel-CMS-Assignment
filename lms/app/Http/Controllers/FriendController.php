<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Http\Requests\StoreFriendRequest;
use App\Http\Requests\UpdateFriendRequest;
use Illuminate\Support\Facades\Session;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('friends.index', [
            'friends' => Friend::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('friends.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFriendRequest $request)
    {
        $friend = Friend::create($request->validated());

        Session::flash('success', 'Friend added successfully');
        return redirect()->route('friends.index');
    }


    public function show(Friend $friend)
    {
        return view('friends.show', compact('friend'));
    }

  
    public function edit(Friend $friend)
    {
        return view('friends.edit', compact('friend'));
    }


    public function update(UpdateFriendRequest $request, Friend $friend)
    {
        $friend->update($request->validated());
    }

 
    public function trash($id)
    {
        Friend::Destroy($id);
        Session::Flash('success', 'Friend trashed successfully');
        return redirect()->route('friends.index');
    }

    public function destroy($id)
    {
        $friend = Friend::withTrashed()->where('id', $id)->first();
        $friend->forceDelete();
        Session::Flash('success', 'Friend deleted successfully');
        return redirect()->route('friends.index');
    }

    public function restore($id)
    {
        $friend = Friend::withTrashed()->where('id', $id)->first();
        $friend->restore();
        Session::Flash('success', 'Friend restored successfully');
        return redirect()->route('friends.trashed');
    }
}