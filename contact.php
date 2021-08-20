<!DOCTYPE html>
<html>
<head>

	<title>
		
	</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/
  css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>


<body>


<?php include 'nav.php' ?>

<div class="jumbotron">
  <h1>You can Contact Us here.</h1>
  
  <p>Phone : 8785421789, 9922441165</p>
<br/>
<p>For more details, Scroll down!!</p>
</div>





<section class="my-5">
  <div class="py-5">
  
  <h2 class="text-center">Contact Us</h2>!!</h2>
</div>

<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      
      <label>Username</label>
      <input type="text" class="form-control" name="user" autocomplete="off">

    </div>

    <div class="form-group">
      
      <label>Email Id</label>
      <input type="text" class="form-control" name="email" autocomplete="off">

    </div>
    
    <div class="form-group">
      
      <label>Mobile</label>
      <input type="text" class="form-control" name="mobile" autocomplete="off">

    </div>

    <div class="form-group">
      
      <label>Comments</label>
      <textarea class="form-control" name="comments">
        
      </textarea>

    </div>
    
    <button type="submit" class="btn btn-success">Submit</button>

    
  </form>
</div>


</section>

<footer>
  <p class="pb-3 bg-dark text-white text-center">@NishiVlogs</p>
</footer>







</body>
</html>