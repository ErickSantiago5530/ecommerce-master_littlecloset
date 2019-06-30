@extends('layouts.app')

@section('content')
  <admin-component></admin-component>
  {{-- <div class="card-body">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
  </div> --}}
@endsection
