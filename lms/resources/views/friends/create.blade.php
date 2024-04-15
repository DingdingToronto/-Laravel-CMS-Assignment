@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Add a Friend Profile
        </h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('friends.store') }}" method="post">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    </ul>
</div>
@endif{{ csrf_field() }}
<div class="mb-3">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname">
</div>
<div class="mb-3">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname">
</div>
<div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age" aria-describedby="age" min="18" max="100">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection