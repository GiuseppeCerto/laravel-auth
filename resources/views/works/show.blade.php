@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>{{ $work->title }}</h1>
                <p>/{{ $work->slug }}</p>
            </div>

            <div>
                <a class="btn btn-sm btn-secondary" href="{{ route('works.edit',$post) }}">Edit</a>
            </div>
            
        </div>
    </div>
    <div class="container">
        <p>
            {{ $works->content }}
        </p>
    </div>
@endsection