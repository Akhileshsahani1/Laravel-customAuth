
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme7.css')}}">

    <style>
      .form-holder1{
  position: absolute;
  top: 30%;
  left: 50%;
      }
    </style>
</head>
<body>
    <div class="form-body">
       
        <div class="row">
 
          <div class="col-md-5 text-center">
            <img style="height: 150px;" src="https://graphicsfamily.com/wp-content/uploads/edd/2021/08/Dental-Logo-Design-Dentist-Logo-Template-PNG-Transparent.png">
            <div class="form-holder1">
              <div class="form-content">
                  <div class="form-items">
                      <p>Welcome to</p>
                      <h3>provider/Login</h3>
                      
                      <form action="{{route('admin.auth')}}" method="post">
                        @csrf
                          <label>Email</label>
                          <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                          <label>Password</label>
                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                         
                          <div   style="float: right;">
                            <a href="#">Forgot Password?</a>
                        </div>
                        <div>
                           <a href="forget7.html"> Remember me</a>
                        </div>
                        <div class="form-button">
                          <button id="submit" type="submit" class="ibtn form-control">Login</button> 
                      </div>
                      Don't Have An Account? <a href="forget7.html"> Sign Up</a>
                      </form>
                      
                  </div>
              </div>
          </div>
          </div>
          <div class="col-md-7">
            <div class="img-holder1">
              <div class="bg"></div>
              <div class="info-holder">
                  {{--<!-- <img src="images/graphic3.svg" alt=""> -->--}}
                    <img style="width:100%; height:100vh;" src="{{asset('images/img.png')}}" alt="">
              </div>
          </div>
          </div>



           
            
        </div>
    </div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>