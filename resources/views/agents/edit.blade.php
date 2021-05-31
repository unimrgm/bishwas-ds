@extends('layouts.app')
   
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Update agent info</h2>
            <a class="d-inline-block btn btn-success" href="{{ route('agents.index') }}"> Back</a>
        </div>
    </div>
    <form action="{{ route('agents.update',$agent->id) }}" method="POST">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Whoops!</strong> There were some problems with your input.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $agent->name }}" placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{ $agent->phone }}" placeholder="+880 1XXX XXXXXX">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $agent->email }}" placeholder="john@yahoo.com">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $agent->address }}" placeholder="Bogura Sadar, Bogura">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save agent</button>
        </div>
    </form>
</div>
@endsection