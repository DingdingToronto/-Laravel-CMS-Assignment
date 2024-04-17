@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Friend Profile
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $friend->fname }} {{ $friend->lname }}</h5>
                    <h5 class="card-title">Age: {{ $friend->age }}</h5>

                    {{-- Display friend's hobbies --}}
                    @if($friend->hobbies->isNotEmpty())
                        <h5 class="card-title">Hobbies:</h5>
                        @foreach($friend->hobbies as $hobby)
                            <p>{{ $hobby->hobbyName }}</p>
                        @endforeach
                    @else
                        <p>No hobbies found.</p>
                    @endif

                    {{-- Action links --}}
                    <a href="{{ route('friends.edit', $friend->id) }}" class="card-link">Edit</a>
                    <a href="{{ route('friends.trash', $friend->id) }}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
