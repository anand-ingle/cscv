<?php
include 'connection.php';
if(isset($_POST['catID'])){
    echo $_POST['catID'];
    $castid= $_POST['catID'];
    //echo "<option value='$distid'>$distid</option>";
    $query="select distinct castetype from castelist where castecat='$castid'";
    $sql= mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($sql)){
    echo '<option value"'.$row['castetype'].'">'.$row['castetype'].'</option>';
    
}

}
if(isset($_GET['subdistID'])){
    $subdistid= $_GET['subdistID'];
    //echo "<option value='$distid'>$distid</option>";
    $query="select distinct village from listofdist where subdistrict='$subdistid'";
    $sql= mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($sql)){
    echo '<option value"'.$row['village'].'">'.$row['village'].'</option>';
    
}

}
