
    <!doctype html>
    <html lang="en">
      <head>
        <title>Registrations Page</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
      form{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        padding:3rem;

      }
      form input{
        width:20rem;
        height:2rem;
      }
      </style>
      </head>

      <body>
        
    

<body>
  
   
    
  
    <form action="{{Route('register')}}" method="post">
    
      @csrf
      @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
      
      @endif
      @if(Session::has('fail'))
          <div class="alert alert-success">{{Session::get('fail')}}</div>
      
      @endif
      
      <label>Name</label>  <input type="text" value="{{old('name')}}" name="name"> <span class="text-danger">@error('name'){{$message}}
        @enderror
      </span><br><br>
     
    
      
    <label>Email</label><input type="email" value="{{old('email')}}" name="email"><span class="text-danger">@error('email'){{$message}}
        @enderror
      </span> <br><br> 
    
      <label>password</label><input type="password" name="password"><span class="text-danger">@error('password'){{$message}}
        @enderror
      </span><br><br> 
    

      <input type="submit" value="register" name="register">
      <h4>Already have an acccount? <a href="{{Route('login')}}">Login</a></h4>

    </form>
    <a href="{{route('display')}}"><button class="btn btn-danger">Show</button></a>
   
   
</body>
</html>