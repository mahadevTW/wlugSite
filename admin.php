<?php
include "header.html"
?>
<html>
<head>

</head>
<body>
<div class="panel panel-success" align="center">
    <div class="panel-heading">Admin Login.. Techno-tweet</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" action="admin.php" method="post">

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="email" placeholder="Enter password" name="password">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    if(isset($_GET['msg'])){
        echo "";
    }
?>
<?php
include "footer.html"
?>
</body>
</html>
