@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-8 offset-sm-2">
    <div class="card">
      <h4 class="card-header">Inviter un utilisateur</h4>
      <div class="card-body">
        <form method="POST" action="/user/invitation">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input 
              type="text" 
              class="form-control @if ($errors->has('email')) is-invalid @endif" 
              id="inputEmail" 
              placeholder="Entrer un email"
              name="email"
              value="{{ old('email', $invitation->email ) }}"
            >
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
              </div>
          </div>
          
          
          <div class="form-group">
            <label for="controlGroupe">Groupe</label>
            <select class="form-control" id="controlGroupe" name="groupe">
              @foreach ($groupes as $groupe)
              <option value="{{ $groupe->id }}">{{ $groupe->role }}</option>
              @endforeach           
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Envouyer l'invitation</button>
        </form>
      </div> <!-- end card body -->
    </div> <!-- end card -->
  </div> <!-- end col -->
</div> <!-- end row -->
@endsection
