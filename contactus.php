<?php
include "header.html"
?>
    <html>
    <body>
    <div class="page-header">
        <h1 style="margin: 2%;font-family: 'Lobster', cursive; color: teal">We are happy to listen from you..!</h1>
    </div>
    <div class="panel panel-success" style="margin-left: 10%;margin-right: 10%;margin-top: 3%;">
        <div class="panel-heading">Feel the details..</div>
        <div class="panel-body" style="padding-right: 10%; padding-bottom: 5%">

            <form class="form-horizontal" role="form" action="contactus.php" method="post">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pwd" placeholder="Enter Name" name="name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Mobile No:</label>
                    <div class="col-sm-10">
                        <input type="text"  maxlength="10" data-fv-numeric="true" name="mobile" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No /optional " class="form-control" data-fv-field="data[User][mobile]">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Message:</label>
                    <div class="col-sm-10">
                        <textarea name="message" placeholder="Write your text here, 200 characters only" class="form-control"></textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    </body>
    </html>
<?php
//Receive form Data......
include "connect.php";
@$name = $_POST['name'];
@$email = $_POST['email'];
@$mobile = $_POST['mobile'];
@$message = $_POST['message'];

if(!empty($name)&&!empty($email)&&!empty($mobile)&&!empty($message)){
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

?>
<?php
include "footer.html"
?>