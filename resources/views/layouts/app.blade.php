<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css" />

  </head>
  <body>
    @auth
      @include('layouts._nav')
    @endauth
    <div class="main container">
      
        
          
          
                @yield('content')
            
                  
        
      
    </div>
    

    @include('layouts._javascript')
  </body>
</html>
