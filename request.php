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

@$college_name = $_POST['college'];
@$count = $_POST['count'];
if(!empty($name)&&!empty($email)&&!empty($mobile)&&!empty($college_name)&&!empty($count)){
    if($connection) {
        //INSERT INTO `request`(`id`, `name`, `email`, `college`, `mobile`, `count`) VALUES ('','Mahadev Vyavahare','mahadev.wce@gmail.com','WCE, Sangli','9096969220',5)
        $query = "INSERT into request VALUES ('','$name','$email','$college_name','$mobile','$count')";
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