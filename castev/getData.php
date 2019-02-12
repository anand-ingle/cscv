<?php
include '../connection.php';
if(isset($_GET['distID'])){
    $distid= $_GET['distID'];
    //echo "<option value='$distid'>$distid</option>";
    $query="select distinct subdistrict from listofdist where district='$distid'";
    $sql= mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($sql)){
    echo '<option value"'.$row['subdistrict'].'">'.$row['subdistrict'].'</option>';
    
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
