<!Doctype html>

<html>

<title> Login Form </title>

<style>

body {

	text-align : center;
	
	background-image : url("imscdr.png");
  	
	}
	
div{
    background-color: rgba(128, 128, 128, 0.587);
    margin-left: 500px;
        margin-right: 500px;
        padding: 20px;
    }
    h1{
        color: blue    ;
    }
    table{
        background-color: rgba(228, 228, 228, 0.587);
    }
	
</style>

<body>

	<h1><b><u>Login Form </u></b></h1>
	
<br>

<div>
<form  method = "Post">

<b>Username :</b>

<input id = "uname" placeholder = "Username" type = "text"  name="username" style = "font-size :99%">

<br><br></br>

<b>Password :</b>

<input id = "pass" placeholder = "Password" type = "Password" name="password" style = "font-size :99%">

<br>

<br></br>
<input type = "submit"  value = "Login" onClick = "Login()" name="submit">

<br><br>
<a href="admisition.php">new login</a>
</form>
</div>

<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$a= mysqli_connect("localhost","root","","data");
if($a){
$string="insert into login (username,password) values('".$username."','".$password."')";
mysqli_query($a,$string);
echo "success";
}
else{
    echo "fail connection";
}
}

?>
<table border="2">
    <th>sr. no</th>
    <th>username</th>
    <th>password</th>
    <th>delete</th>
    <th>edit</th>
    <tr>
        <?php
        $a=mysqli_connect("localhost","root","","data");
        $cnt=0;
        $query="select * from login";
        $result=mysqli_query($a,$query);
        while($rows=mysqli_fetch_assoc($result)){
            ++$cnt;
       
        ?>
        <td><?php echo $cnt;?></td>
        <td><?php echo $rows['username'];?></td>
        <td><?php echo $rows['password'];?></td>
        <td><a href= "delete.php?id=<?php echo $rows['id'];?>">Delete<a></td>
        <td><a href= "edit.php?id=<?php echo $rows['id'];?>">Edit<a></td>
    </tr>
<?php } ?>
</table>
</body>

</html>


