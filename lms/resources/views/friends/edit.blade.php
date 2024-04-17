@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Update Friend Profile</h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('friends.update', $friend->id) }}" method="Post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            @method('PUT')
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname" value="{{ $friend->fname }}">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname" value="{{ $friend->lname }}">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" aria-describedby="age" value="{{ $friend->age }}">
            </div>
            <div class="form-group">
            <label for="hobby">Select Hobby</label>
            <select name="hobby" id="hobby" class="form-control">
                @foreach ($hobbies as $hobby)
                    <option value="{{ $hobby->id }}">
                        {{ $hobby->hobbyName }}
                    </option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection