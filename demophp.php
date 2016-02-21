<?php
$servername="182.50.133.85:3306";
$username="wlug";
$pass="WLUGadmin@123";
$mydbname="wlug";
//$conn = new mysqli($servername, $username, $pass, $mydbname);
$connect=mysql_connect($servername,$username,$pass);
mysql_select_db($mydbname);
echo "Success..";
echo "trying to print table values..";

$query='select * from student';
                    //echo $query;
                    $result=mysql_query($query);
                   //echo('<select id="subject">
                        //<option name="">-select subject-</option>');


                        while($row=mysql_fetch_assoc($result))
                        {

                        echo "Roll ".$row['roll']." Name: ".$row['name']." class: ".$row['class']." <br>";

                        }


?>