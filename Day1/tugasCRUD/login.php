

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>bootstrap</title> 
    <link rel="stylesheet" href="../style/login.css"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head> 
<!-- <style> 
  .card{ 
    width: 500px 
  } 
</style> --> 
<style> 
    body{ 
        background-image: url('https://1.bp.blogspot.com/-gO_zuT7lKC0/Xd2s4HvCgJI/AAAAAAAAQ3I/liQwOdvK7iw5RETBwrOQ5S1Kygb__QEWQCLcBGAsYHQ/s1600/Produktivitas%2BKerja.png');
    } 
</style> 
<body > 
  <div class="container py-5 "> 
<div class="card w-50 justify-content-center mx-auto bg-transparent"> 
<div class="header"> 
    <h2 class="text-center pt-3 text-primary">LOGIN PAGE</h2> 
</div> 
   
<form action="connect_login.php" method="post" > 
    <div class="card-body"> 
    <div class="mb-3"> 
    <label for="exampleInputEmail1" class="form-label">Email </label> 
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
  </div> 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Password</label> 
    <input name="password" type="password" class="form-control" id="exampleInputPassword1"> 
    </div> 
  </div> 
 <div class="text-center pb-3"> 
 <button type="submit" class="btn btn-primary">Submit</button> 
 </div> 
        </form> 
        </div> 
        </div> 
</body> 
</html>