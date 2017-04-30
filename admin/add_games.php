<?php
include 'head.php';
include 'check.php';
if(isset($_POST['submit']))
{
    $game_name=$_FILES['addr']['name'];
    $game_tmp=$_FILES['addr']['tmp_name'];
    $game_address="game/".$_FILES['addr']['name'];
    $image_name=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $image_address="game_image/".$_FILES['image']['name'];
extract($_POST);


    

include 'dbconfig.php';
$sql1="INSERT INTO `pc_game` (`g_id`, `name`, `address`, `score`, `time_limit`, `image`) VALUES(NULL, '$name', '$game_address', '$score', '$time','$image_address')";
    
if(mysqli_query($conn,$sql1));
{
    echo "inserted";
    move_uploaded_file($image_tmp,"../".$image_address);
        move_uploaded_file($game_tmp,"../".$game_address);
}
    }
?>
<section id="add_games" class="bg-light-gray">

  <center> <form method="post" enctype="multipart/form-data"><table class="table">
        <tr>
        <td>Name</td>
        <td><input placeholder="Please enter name" type="text" class="form-control" id="name" name="name" required>
                 </tr>
        <tr>
            <td>Upload</td>
        <td><input type="file" class="form-control"  id="addr" name="addr" required>
    </tr>
        
    <tr>
        <td>Score</td>
        <td><input placeholder="Please enter Score" type="number" class="form-control" id="score" name="score" required>
            
        </tr>  <tr>
        <td>Time Limit</td>
        <td><input type="time" placeholder="Enter Time" class="form-control" id="time" name="time" required>
            
        </tr> 
      <tr>
        <td>image</td>
        <td><input type="file" class="form-control" id="image" name="image" required>
            
        </tr>
        <tr>
        <td>  </td>
        <td><input type="submit" class="btn btn-info"  name="submit" value="submit">
        </tr>
        
      </table>
      </form></center>
            
</section><?php
include 'footer.php';
?> 