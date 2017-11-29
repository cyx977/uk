<?php
ob_start();
session_start();
if(isset($_SESSION['admin'])){
    require_once ('../database.php');
    require_once ('navbar.php');
    if(isset($_GET['id'])){
        //can edit
        $id = $_GET['id'];
        $sql="select * from schemes where id='$id'";
        $query = mysqli_query($connex,$sql);
        $row=mysqli_fetch_assoc($query);
?>
        <div class="w3-container w3-teal">
            <h2>Input Form</h2>
        </div>

        <form class="w3-container" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <label class="w3-text-red"><b>Title</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="title" value="<?php echo $row['title']; ?>" required>

            <label class="w3-text-red"><b>Tag 1</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="tag1" value="<?php echo $row['k1']; ?>" required>

            <label class="w3-text-red"><b>Tag 2</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="tag2" value="<?php echo $row['k2']; ?>" required>

            <label class="w3-text-red"><b>Tag 3</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="tag3" value="<?php echo $row['k3']; ?>" required>

            <label class="w3-text-red"><b>Tag 4</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="tag4" value="<?php echo $row['k4']; ?>" required>

            <label class="w3-text-red"><b>Tag 5</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="tag5" value="<?php echo $row['k5']; ?>" required>

            <label class="w3-text-red"><b>Description</b></label>
            <textarea class="w3-input w3-border w3-light-grey" type="text" name="desc"required><?php echo $row['description']; ?>"</textarea>

            <label class="w3-text-red"><b>Price</b></label>
            <input class="w3-input w3-border w3-light-grey" type="text" name="price" value="<?php echo $row['price']; ?>" required>


            <input type="submit" class="w3-btn w3-blue-grey" name="edit" value="Edit">
        </form>
<?php

    }
    else if($_POST['edit']){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $k1 = $_POST['tag1'];
        $k2 =  $_POST['tag2'];
        $k3 =  $_POST['tag3'];
        $k4 =  $_POST['tag4'];
        $k5 = $_POST['tag5'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $sql = "update schemes set title='$title',k1='$k1', k2='$k2',k3='$k3', k4='$k4', k5='$k5', description='$desc', price='$price' where id='$id'";
        if(mysqli_query($connex, $sql)){
            echo "Updated";
        }
        else{
            echo "Not Updated";
        }
    }
    else{
        //invalid request
        header('location:adminloggedin.php');
    }
}
else{
    header('location:index.php?lg=invalidaccess');
}
?>