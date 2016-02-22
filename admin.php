<?php
include "header.html"
?>
<html>
<head>

</head>
<body>
<?php
include "connect.php";
if(isset($_POST['username'])&&isset($_POST['password'])){
     $uname = $_POST['username'];
    $pass = md5($_POST['password']);

    $query = "select * from admin where username = '$uname' AND password = '$pass'";
    $result = mysqli_query($connection,$query);
    if(mysqli_fetch_assoc($result)){
        //echo "Login successful";
        echo "<div class=\"panel panel-success\" align=\"center\" style=\"margin-right: 10%;margin-left: 10%;margin-top: 5%;\">";
    echo "<div class=\"panel-heading\">Registration Requests</div>
<div class=\"panel-body\">
    <table class=\"table table-hover table-responsive\">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>College Name</th>
            <th>Mobile</th>
            <th>Workshop Type</th>
            <th>Laptop Availability</th>
        </tr>
        </thead>";
        $query = "select * from registration";
        $result = mysqli_query($connection,$query);
        echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
                    echo  "<td>".$row['name']."</td>";
                    echo  "<td>".$row['email']."</td>";
                    echo  "<td>".$row['college']."</td>";
                    echo  "<td>".$row['mobile']."</td>";
                    echo  "<td>".$row['workshoptype']."</td>";
                    echo  "<td>".$row['laptop']."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";

//Display Display Coordinators Requests

        echo "<div class=\"panel panel-success\" align=\"center\" style=\"margin-right: 10%;margin-left: 10%;margin-top: 5%;max-height: 150px;overflow-y: scroll;\">";
        echo "<div class=\"panel-heading\">Requests for coordinators to visit their college</div>
    <div class=\"panel-body\">
    <table class=\"table table-hover table-responsive\">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>College Name</th>
            <th>Mobile</th>
            <th>Expected count</th>

        </tr>
        </thead>";
        $query = "select * from request";
        $result = mysqli_query($connection,$query);
        echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo  "<td>".$row['name']."</td>";
            echo  "<td>".$row['email']."</td>";
            echo  "<td>".$row['college']."</td>";
            echo  "<td>".$row['mobile']."</td>";
            echo  "<td>".$row['count']."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";

    }
    else {
        include "loginpanel.html?msg = Wrong Username or password";
    }
}
else{
    include "loginpanel.html";
}

    if(isset($_GET['msg'])){
        echo "<div class=\"alert alert-danger\" style='margin-right: 20%;margin-left: 20%;margin-top: 2%' role=\"alert\">";
        echo $_GET['msg'];
        echo "</div>";
    }
?>
<?php
include "footer.html"
?>
</body>
</html>
