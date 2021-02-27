<?php
if(!isset($_SERVER['HTTP_REFERER'])){
  // redirect them to your desired location
  header('location:index.html');
  exit;}
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM info ORDER BY id ASC");

?>
<!DOCTYPE html>
<html>
<head>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <head>   
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
     <title>Update Data</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body> 
    <!--header-->
    <div>
    <a href="logout.php" class="btn btn-danger btn-xs"
      style="color: white;float right;"
      class="btn btn-primary btn-xs specialbuttonlabel"> <i class="fa fa-sign-out">Logout</i></a>
  </div>
     <div style="margin-top: 10%; border: 2px outset black;">    
    <div style="margin-top:5%;margin-bottom: 5%;">
     <table id="customers">
         <tr style="border: 2px outset black;">
             <td>Sr No.</td>
             <td>First Name</td>
             <td>Last Name</td>
             <td>Phone No</td>
             <td>Email id</td>
             <td>DOB</td>
             <td>Gender</td>
             <td>Address</td>
             <td>Username</td>
             <td>Password</td>
             <td>Action</td>
             <td>Action </td>
             <td>Action </td>
         </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
 <td><?php echo $row["id"]; ?></td>
 <td><?php echo $row["first_name"]; ?></td>
 <td><?php echo $row["last_name"]; ?></td>
                 <td><?php echo $row["phone"]; ?></td>
                 <td><?php echo $row["email"]; ?></td>
                 <td><?php echo $row["dob"]; ?></td>
                 <td><?php echo $row["gender"]; ?></td>
                 <td><?php echo $row["address"]; ?></td>
                 <td><?php echo $row["username"]; ?></td>
                 <td><?php echo $row["password"]; ?></td>
                 <td><a href="update-process.php?id=<?php echo $row["id"]; ?>"  class ="btn btn-danger btn-xs">Update</a></td>
                 <td><a href="delete-process.php?id=<?php echo $row["id"]; ?>" class ="btn btn-danger btn-xs">Delete</a></td>
                 <td><a href="report.html?id=<?php echo $row["id"]; ?>" class ="btn btn-danger btn-xs">Generate</a></td></tr>
<?php
$i++;
}
?>
</table>
</div>
</body>
</html>