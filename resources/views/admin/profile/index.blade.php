@extends('admin_dashboard')

@section('title', 'Profile')

@section('admin')

<div class="col-md-6 col-xl-4">
    <div class="card">
        <h5 class="card-header">{{ $user->name }}</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#!" class="btn  btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

@endsection