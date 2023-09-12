<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
  body {
    background-image: url("https://mocipay.com/blog/wp-content/uploads/2023/02/walpaper-pemandangan-sawah-yang-bertingkat-aesthetic.jpg");
    background-repeat: no-repeat; 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed;

  }
</style>
<body >
  <div class="container py-5 ">
<div class="card w-50 justify-content-center mx-auto bg-aqua">
<div class="header">
    <h2 class="text-center pt-3 text-primary">LOGIN </h2>
</div>
  
<form action="connect_login.php" method="post" >
    <div class="card-body">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
  </div>
 <div class="text-center pb-3">
 <button type="submit" class="btn btn-primary">LOGIN</button>
 </div>
        </form>
        <br> 
          <p class="text-center"> belum punya akun? <a href="register.php">register akun</a></p>
        <br> 
        </div>
        </div>
</body>
</html>
