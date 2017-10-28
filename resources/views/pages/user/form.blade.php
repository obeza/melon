@extends('layouts.app')

@section('content')
<h4 class="card-header">{{ $titre }}</h4>


@if ($action == 'creer')
<form method="POST" action="{{ route('user.store') }}">   
@else
<form method="POST" action="/user/{{ $user->id }}">
  {{method_field("PATCH")}}
@endif


</form>
@endsection