@extends('layouts.app')

@section('content')
<h4 class="card-header">{{ $titre }}</h4>


@if ($action == 'creer')
<form method="POST" action="{{ route('user.store') }}">   
@else
<form method="POST" action="/user/{{ $user->id }}">
  {{method_field("PATCH")}}
@endif
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputPrenom">Prénom</label>
    <input 
      type="text" 
      class="form-control" 
      id="inputPrenom" 
      placeholder="Entrer un prénom"
      name="prenom"
      value="{{ old('prenom', $user->prenom ) }}"
    >
  </div>
  <div class="form-group">
    <label for="inputNom">Nom</label>
    <input type="text" class="form-control" id="inputNom" placeholder="Entrer un nom">   
  </div>
  <div class="form-group">
    <label for="inputEmail">Un email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Entrer un email">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
  </div>
</form>
@endsection