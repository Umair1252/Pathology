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
    <style>
        .button2{
    position:fixed;
    right:10px;
    top:5px;
    width: 100px;  
    height: 30px;  
    border-radius: 17px;  
    padding-left: 7px;  
    background-color: white;
    color: #0CC;
    border: 2px solid white;
    font: 1em sans-serif;
}
.button2:hover{
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}
        .tm-header {
    background-color: #0CC;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 100;
    width: 400px;
    overflow-y: visible;     
}

.tm-header-wrapper {
    overflow-y: scroll;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding: 30px;
    width: 100%;
    height: 100%; 
}

.tm-header-wrapper::-webkit-scrollbar {
    width: 0;
    height: 0;
}

.header {
  padding: 10px;
  text-align: center;
  background: #0cc;
  color: white;
  font-size: 30px;
  margin-top: -1%;
}
.tm-site-header {
    margin-top: 50px;
    margin-bottom: 115px;

}
.tm-nav { margin-bottom: 100px; }

.tm-nav-item {
    list-style: none;
    margin-bottom: 30px;
}

.tm-nav-link {
    color: white;
    background-color: transparent;
    height: 75px;
    width: 100%;
    max-width: 300px;    
    display: flex;
    align-items: center;
    font-size: 1.4rem;
    padding: 30px;
}

.tm-nav-item:hover .tm-nav-link,
.tm-nav-item.active .tm-nav-link
 {
    color: #0CC;
    background-color: white;
    text-decoration: none;
}

.tm-nav ul { position: relative; }

.tm-nav-item:hover:after,
.tm-nav-item.active:after {
    content: '';
    width: 100%;
    max-width: 300px;    
    height: 75px;
    display: block;
    border: 1px solid white;
    margin-left: 10px;
    margin-top: -65px;
    position: absolute;
    z-index: -1000;
}

.tm-nav-link i { margin-right: 37px; }

ul { 
    margin: 0; 
    padding: 0;
}

.tm-nav { margin-left: -30px; }
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
    <title>Document</title>
</head>
<body>
<div class="header">
        <h1>Pathology Lab</h1>
      </div>
<div style="margin-top: 10%; margin-left:30%; border: 2px outset black;">    
    <div style="margin-top:5%;margin-bottom: 5%;">
     <table id="customers">
         <tr style="border: 2px outset black;">
            
             <td>First Name</td>
             <td>Last Name</td>
             <td>Phone No</td>
             <td>Email id</td>
             <td>DOB</td>
             <td>Gender</td>
             <td>Address</td>
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
 <td><?php echo $row["first_name"]; ?></td>
 <td><?php echo $row["last_name"]; ?></td>
                 <td><?php echo $row["phone"]; ?></td>
                 <td><?php echo $row["email"]; ?></td>
                 <td><?php echo $row["dob"]; ?></td>
                 <td><?php echo $row["gender"]; ?></td>
                 <td><?php echo $row["address"]; ?></td>
                 
           </tr>
<?php
$i++;
}

?>
    
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="update-process1.php?username=<?php echo $id; ?>"   class="tm-nav-link">
                        <i class="fas fa-home"></i>
                       Edit Profile
                    </a></li>
                    <li class="tm-nav-item active"><a href="edit.php?username=<?php echo $id; ?>" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                       View Report
                    </a></li>
                    <li class="tm-nav-item"><a href="contact.html" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact Us
                    </a></li>
                </ul>
            </nav>
            <label >
               <a href="logout1.php"><input name="submit2" class="button2" type="submit" id="submit2" value="Logout">
               </a>  </label>
        </div>
        
</body>
</html>