<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>player</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h2>ADD PLAYER</h2>





<form method="POST">
  <input  class ="text" type="text" name="fullname" placeholder="Enter Player Name" Required>
  <br>
<br>
  
<input  class="color" type="submit" name="submit" value="Submit">
  <a class="btn color" href="homepage.php" role="button"><span class="logo"><i class="fas fa-home"></i></span>Home</a>
  
</form>
<br><br>
<?php
    if(isset($_POST['submit']))
{		
    $fullname = $_POST['fullname'];
   

    $insert = mysqli_query($link,"INSERT INTO addplayer (`fullname`) VALUES ('$fullname')");

    if(!$insert)
    {
        echo "<h3>Error in adding name</h3>";
    }
    else
    {
        echo "<h3>PLayer Name added successfully</h3>";
    }
}

mysqli_close($link); // Close connection
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>    
