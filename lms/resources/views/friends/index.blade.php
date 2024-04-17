@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View All Friends
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($friends as $friend)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title">
                        <h2>{{ $friend->fname }} {{ $friend->lname }}</h2>
                    </div>
                    <div class="card-body">
                        <p>Age: {{ $friend->age }}</p>
                        
                        @if ($friend->hobbies->isNotEmpty())
                            <h5>Hobbies:</h5>
                            <ul>
                                @foreach ($friend->hobbies as $hobby)
                                    <li>{{ $hobby->hobbyName }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No hobbies found.</p>
                        @endif

                        <a href="{{ route('friends.edit', $friend->id) }}" class="card-link">Edit</a>
                        <a href="{{ route('friends.trash', $friend->id) }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
