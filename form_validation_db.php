 <!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<!-- for data inserrtion-->
<?php
if(isset($_POST['submit']))
{
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "connected to database successfully!!!!<br>";
}
else
{
    echo "connection failure<br>";
    die();
}


mysql_select_db("sachin");
$sql="insert into user1 values ('{$name}','{$email}','{$website}','{$comment}','{$gender}')";
$res=mysql_query($sql);
if($res)
{
    echo "inserted in table successfully!!!!<br>";
}
else
{
    echo "insertion  failure<br>";
    die();
}
    mysql_close($con);
}
?>



<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "connected to database successfully!!!!<br>";
}
else
{
    echo "connection failure<br>";
    die();
}


mysql_select_db("sachin");
$sql="create table user (name char(20),email char(20),website char(20),comment char(50),gender char (8))";
$result=mysql_query($sql,$con);
if($res)
{
    echo "created table successfully!!!!<br>";
}
else
{
    echo "table creation  failure<br>";
    die();
}
$sql="insert into user values ('{$name}','{$email}','{$website}','{$comment}','{$gender}')";
$res=mysql_query($sql.$con);
if($res)
{
    echo "inserted in table successfully!!!!<br>";
}
else
{
    echo "insertion  failure<br>";
    die();
}
    mysql_close($con);
?>

</body>
</html>
