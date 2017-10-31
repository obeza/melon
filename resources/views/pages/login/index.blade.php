@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-8 offset-sm-2">
    <div class="card" style="width: 20rem;margin: auto;margin-top:100px;">
      <h4 class="card-header">Login</h4>
      
      <div class="card-body">
          <form method="POST" action="/login">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="inputEmail">Email :</label>
                
                <input type="email" class="form-control" id="inputEmail" placeholder="Entrer votre email" name="email" required>               
              </div>
              <div class="form-group">
                <label for="inputPass">Mot de passe :</label>
                <input type="password" class="form-control" id="inputPass" placeholder="Mot de passe" name="password" required>
              </div>
              @if ( $wrongPassMail)
              <div class="alert alert-danger" role="alert">
                Login ou mot de passe invalide
              </div>
              @endif
              <button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
            </form>

      </div>
    </div> <!-- end card -->
  </div>
</div> <!-- end row -->
@endsection
