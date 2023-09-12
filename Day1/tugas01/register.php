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
    background-image: url("https://img.lovepik.com/photo/48003/3068.jpg_wh860.jpg");
    background-repeat: no-repeat; 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed;

  }
</style>
<body class="container">
<div class="card w-50 mt-5 mx-auto">
<div class="header">
    <h2 class="text-center text-primary">REGISTER </h2>
</div>
    <div class="card-body">
    <form action="conect_register.php" method="post" >
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">username </label>
    <input name="username" type="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
    <div id="UsernameHelp" class="form-text"></div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 <div class="text-center pb-3">
  <button type="submit" class="btn btn-primary">REGISTER</button>
  </div>
            
        </form>
        <br> 
          <p class="text-center"> punya akun? <a href="login.php">login akun</a></p>
        <br> 
</body>
</html>
