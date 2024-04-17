<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\hobby;
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
        // Retrieve all friends with their associated hobbies
        $friends = Friend::with('hobbies')->get();
    
        // Pass the friends data to the view
        return view('friends.index', compact('friends'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('friends.create', ['hobbies'=>hobby::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFriendRequest $request)
    {
        $friend = Friend::create($request->validated());
        $friend->hobbies()->attach($request->hobby);

        Session::flash('success', 'Friend added successfully');
        return redirect()->route('friends.index');
    }

    public function show(Friend $friend)
    {
        
        $friend->load('hobbies');
        
        
        return view('friends.show', compact('friend'));
    }
    

  
    public function edit(Friend $friend)
    {
        // Retrieve all hobbies
        $hobbies = Hobby::all();
        
        // Pass friend and hobbies data to the view
        return view('friends.edit', compact('friend', 'hobbies'));
    }
    


    public function update(UpdateFriendRequest $request, Friend $friend)
    {
        $friend->update($request->validated());
        return redirect()->route('friends.index');

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