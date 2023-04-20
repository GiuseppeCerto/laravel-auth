@extends('layouts.app')

@section('content')
    <div class="container py-5">
      <div class="d-flex align-items-center">
        <h1 class="me-auto">All work</h1>

        <div>
          <a class="btn btn-sm btn-primary" href="{{ route('works.create') }}">New work</a>
        </div>
      </div>
    </div>

    <div class="container">
      <table class="table table-striped table-inverse table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Client</th>
            <th>Description</th>
            <th>Creation data</th>
            <th>Change data</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($works as $work)
              <tr>
                <td>{{ $work->id }}</td>
                <td>
                  <a href="{{ route('works.show',$work) }}">{{ $work->name }}</a>
                </td>
                <td>{{ $work->description }}</td>
                <td>{{ $work->slug }}</td>
                <td>{{ $work->created_at }}</td>
                <td>{{ $work->updated_at }}</td>
                <td>
                  <div class="d-flex ">
                    <a class="btn btn-sm btn-secondary" href="{{ route('works.edit',$work) }}">Edit</a>
                  </div>
                </td>
              </tr>
          @empty
            <tr>
              <th colspan="6">No works found</th>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
@endsection