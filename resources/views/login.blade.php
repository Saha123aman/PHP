<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">
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
    <form action="{{Route('userlogin')}}" method="post">
      @csrf
      @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
      
      @endif
      @if(Session::has('fail'))
          <div class="alert alert-success">{{Session::get('fail')}}</div>
      
      @endif
      <label>Email</label><input type="email" name="email" value="{{old('email')}}"><span class="text-danger">@error('email'){{$message}}
        @enderror</span><br><br> 
      <label>password</label><input type="password" name="password" ><span class="text-danger">@error('password'){{$message}}
        @enderror</span><br><br>

      <input type="submit" value="login" name="login">
      <h4> No acccount? <a href="{{url('/')}}">Register</a></h4>
     

    </form>
</body>
</html>