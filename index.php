<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>player Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
         .button{
        color:white;
        font-size: small;
        font-weight: 200;
        background-color: crimson;
        border:3px solid crimson;
        border-radius: 10px;
        padding:10px;
        margin:10px;
}
.button:hover{
    background-color:transparent;
    color:crimson;
}

       .wrapper{
       width: 600px;
       margin: 0 auto;
       }
       table tr td:last-child{
      width: 220px;
       }
       tr{
           color:rgb(11, 19, 131);
           
       }
      
       

    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="font-size:70px">UPDATE SCORE</h2>
                    
                    <?php
                   
                    require_once "config.php";
                    
                    $sql = "SELECT * FROM addplayer";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Sno</th>";
                                        echo "<th>Player Name</th>";
                                        echo "<th>Points</th>";
                                        
                                        echo "<th>Update</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Sno'] . "</td>";
                                        echo "<td>" . $row['fullname'] . "</td>";
                                        echo "<td>" . "<form method='POST'> <input type='text' value='$row[points]' name='points' size='3' required >". "</td>";
                                        
                                        echo "<td>";
                                            echo '<input  class="button" type="submit" name="update" id="update" value="Update"> </form>';
                                        
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                           
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                   
                    ?>

                    <?php
                    if(isset($_POST['update']))
                    {
                        $points= $_POST['points'];
                      
                        $query= "UPDATE addplayer SET points = $points WHERE Sno = 2 ";
                        
                        
                         
                        $update = mysqli_query($link,$query);
                    
                        if(!$update)
                        {
                            echo "<h3 style=' color:rgb(228, 21, 31);
                            font-size:25px;'>Error in updating score</h3>";
                        }
                        else
                        {
                            echo "<h3 style=' color:rgb(228, 21, 31);
                            font-size:25px;'>PLayer Score updated successfully</h3>";
                        }
                    } 
                    mysqli_close($link);
                    ?>


                </div>
                <br><br>
                <center><a class="btn color" href="homepage.php" role="button">Home</a><center>
               
            </div>        
        </div>
    </div>
</body>
</html>