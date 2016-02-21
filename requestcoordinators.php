<?php
include "header.html";
?>

<html>

<body>
<div class="panel panel-success">
    <div class="page-header">
        <h1 style="margin: 2%">Techno-Tweet 2k16 &nbsp;&nbsp;<a href="technotweet.php">Go Back To Techno-Tweet page</a></h1>
    </div>
    <div class="panel-heading">Request coordinators To Reach you...!</div>
    <div class="panel-body" style="padding-right: 10%; padding-bottom: 5%">

        <form class="form-horizontal" role="form" action="request.php" method="post">

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
                <label class="control-label col-sm-2" for="pwd">College Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter College Name" name="college">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Mobile No:</label>
                <div class="col-sm-10">
                    <input type="text"  maxlength="10" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No. " class="form-control" name="mobile" data-fv-field="data[User][mobile]">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Approximate No Of candidates </label>
                <div class="col-sm-10">
                    <input type="number"  maxlength="10" data-fv-numeric="true"  required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="aproximate candidates " class="form-control" name="count" data-fv-field="data[User][mobile]">
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
</div>
</body>
</html>

<?php
include "footer.html";
?>