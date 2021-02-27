<?php
if(!isset($_SERVER['HTTP_REFERER'])){
  // redirect them to your desired location
  header('location:login.html');
  exit;}
include_once 'database.php';

$id=@$_GET['username'];

$result = mysqli_query($conn,"SELECT * FROM info WHERE username='$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    function myfun()
    {
      window.print();
    }
    </script>

<style>
.header {
  padding: 10px;
  text-align: center;
  background: #0cc;
  color: white;
  font-size: 30px;
  margin-top: -1%;
}
.btn{
    position:relative;
    left:40%;
    top:500px;
    width: 200px;  
    height: 40px;  
    border-radius: 17px;  
    padding-left: 7px;  
    background-color: white;
    color:#0CC;
    border: 2px solid #0CC;
    font: 1em sans-serif;
    text-align: center;
}
.btn:hover{
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
<style>
@media print {
   .noprint {
      visibility: hidden;
   }
}
</style>
    </style>

    <title>Report</title>
</head>
<body>
    <div class="header">
        <h1>Pathology Lab</h1>
    </div>
  <div>
  <table id="customers">
         <tr style="border: 2px outset black;">
            
           <tr>  <td>First Name</td></tr>
           <tr> <td>Last Name</td> </tr>
           <tr> <td>Phone No</td></tr>
           <tr> <td>Email id</td></tr>
           <tr><td>DOB</td></tr>
           <tr>  <td>Gender</td></tr>
           <tr> <td>Address</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<td>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<tr><td><?php echo $row["first_name"]; ?></td></tr>
<tr> <td><?php echo $row["last_name"]; ?></td></tr>
<tr>     <td><?php echo $row["phone"]; ?></td></tr>
<tr>    <td><?php echo $row["email"]; ?></td></tr>
<tr>    <td><?php echo $row["dob"]; ?></td></tr>
<tr>     <td><?php echo $row["gender"]; ?></td></tr>
<tr>      <td><?php echo $row["address"]; ?></td></tr>
                 
           </tr></td>
<?php
$i++;
}

?><div id="noprint">
      <button class="btn" id="btn"  name="submit" onclick="myfun()">Print Report</button><br>
</div></div>
</body>
</html>