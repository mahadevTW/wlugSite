<?php
include "header.html";
?>
    <div class="page-header">
        <h1 style="margin: 2%">Techno-Tweet 2k16 &nbsp;&nbsp; <a href="technotweet.php">Go Back To Techno-Tweet page</a> </h1>
    </div>
<?php
include "connect.php";
@$name = $_POST['name'];
@$email = $_POST['email'];
@$mobile = $_POST['mobile'];
@$workshoptype = $_POST['workshoptype'];
@$college_name = $_POST['college'];
@$laptop = $_POST['laptop'];
if($laptop == 'on'){
    $laptop = 'yes';
}
else{
    $laptop = 'no';
}
if(!empty($name)&&!empty($email)&&!empty($mobile)&&!empty($college_name)&&!empty($workshoptype)){
    if($connection) {
        $query = "INSERT into registration VALUES ('','$name','$email','$college_name','$mobile','$workshoptype','$laptop')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo " <div class=\"alert alert-success\" role=\"alert\">Request Successful , we will reach to you soon</div>";
        }
    }
}else{
    echo "<div class=\"alert alert-danger\" role=\"alert\">Fields should not be empty, Please feel details once again..!!</div>";
}

?>
    <div class="jumbotron">
        <center>
            <img src="technotweet/images/poster.jpg">
        </center>
    </div>
<?php
include "footer.html";
?>