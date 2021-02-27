<?php
  include_once 'database.php';
  if(count($_POST)>0) {
     mysqli_query($conn,"UPDATE info set id ='" . $_POST['id'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', username='" . $_POST['username'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', dob='" . $_POST['dob'] . "' WHERE username='" . $_POST['username'] . "'");
     $message = "Record Modified Successfully";
   }
 $result = mysqli_query($conn,"SELECT * FROM info WHERE username='" . $_GET['username'] . "'"); 
 $row= mysqli_fetch_array($result);
?>
<html>
 <head>
     <title>Update Data</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
	  <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
     <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-image: url('16.jpg') ;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                font-family: sans-serif;
                margin-top: 40px;
            }
        .regform{
            width: 800px;
            background-color: rgb(0,0,0,0.6);
            margin: auto;
            color: #e8b21a;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 0px 0px; 
        }
        .main{
            background-color: rgb(0,0,0,0.3);
            
            width: 800px;
            height: 850px;
            border-radius: 0px 0px 15px 15px; 
            margin: auto;
        }
        form{
            padding: 10px;
        }
        #name{
            width: 100%;
            height: 60px;
        }
        .name{
            margin-left: 25px;
            margin-top: 20px;
            width: 125px;
            color: #e8b21a;
            font-size: 18px;
            font-weight: 700;
           
        }
        .fname{
            position: relative;
            left:150px;
            top:-33px;
            line-height:35px;
            border-radius:6px;
            border-color: #e8b21a;
            padding:0 22px;
            font-size:16px;
            background: none;
            color: aliceblue;
        }
        .lname{
         position: relative;
            left:450px;
            top:-72px;
            line-height: 35px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding:0 22px;
            font-size:16px;
            background: none;
            color: aliceblue;
        }
        .flabel{
            position: relative;
            color: #E5E5E5;
            text-transform:capitalize;
            font-size: 14px;
            left: -90px;
        }
        .llabel{
            position: relative;
            color: #E5E5E5;
            text-transform:capitalize;
            font-size: 14px;
            left: 210px;
            top: -45px;
        }
        
        .dob{
            position: relative;
            left:150px;
            top: -25px;
            line-height: 30px;
            width: 200px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color: #d8da53d4;
        }
        .phone{
            position: relative;
            left:150px;
            top: -25px;
            line-height: 30px;
            width: 200px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color: #d8da53d4;
        }
        .gender{
            position: relative;
            left:150px;
            top: -25px;
            line-height: 30px;
            width: 200px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color: #d8da53d4;
        }
        .address{
            position: relative;
            left:150px;
            top: -25px;
            line-height: 30px;
            width: 200px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color: #d8da53d4;
        }
        textarea{
             position: relative;
            left:150px;
            top: -25px;
            line-height: 30px;
            width: 200px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color:#d8da53d4;
        }
        .username{
            position: relative;
            left:150px;
            top: -25px;
            line-height: 30px;
            width: 200px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color: aliceblue;
        }
        .email{
            position: relative;
            left: 150px;
            top: -33px;
            line-height: 35px;
            width: 400px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color: aliceblue;
        }
        .code{
             position: relative;
            left: 150px;
            top:-30px;
            line-height: 30px;
            width: 200px;
            border-radius: 6px;
            border-color: #e8b21a;
            padding: 0 22px;
            font-size: 16px;
            background: none;
            color: aliceblue;
        }
        ::placeholder{
            color:#d8da53d4;
        }

        .btn{
            position: relative;
            top: 10px;
            left: 10px;
           background: none;
            display: block;
            margin: auto;
            text-align: center;
            font-size: 14px;
            font-weight: 900;
            border-radius: 12px;
            border: 3px solid #e8b21a;
            padding: 12px 110px;
            outline: none;
            color: #e8b21a;
            cursor: pointer;
            transition: 0.25px;
            margin-bottom: 1px;
        }
    .btn:hover {background-color: brown}

.btn:active {
  background-color: brown;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
        #error_message{
            margin-bottom: 20px;
            width: 800px;
            margin: auto;
            background: #fe8b8e;
            text-align: center;
            font-size: 14px;
            transition: all 0.5s ease;
        }
        </style>     
<script>
function chkData(){ 
    var a = document.forms["frm"]["first_name"].value;
    var g = document.forms["frm"]["last_name"].value;
    var d = document.forms["frm"]["dob"].value;
    var z = document.forms["frm"]["gender"].value;
    var p = document.forms["frm"]["phone"].value;
    var y = document.forms["frm"]["address"].value;
    var u = document.forms["frm"]["username"].value;
    var e = document.forms["frm"]["email"].value;
    var pw = document.forms["frm"]["password"].value;
    var cp = document.forms["frm"]["confirmpassword"].value;
    // var atpos = e.IndexOf("@");
    // var dotpos = e.LastIndexOf(".");
  if (a == "") {
    alert("First name must be filled out");
    return false;}
     else if (g == "") {
        alert("last name must be filled out");return false;}
        else if (d == "") {
        alert("Date Of Birth must be filled out");return false;}
        else if (z == "") {
        alert("Gender must be filled out");return false;}
        else if (p == "") {
        alert("Phone no must be filled out");return false;}
    else if (y == "") {
        alert("Address must be filled out");return false;}
        else if (u == "") {
        alert("Username must be filled out");return false;}
    else if (e == "") {
        alert("Email id must be filled out");return false;}
    else if (pw == "") {
        alert("Password must be filled out");return false;}
    else if (cp == "") {
        alert(" Confirm password must be filled out");return false;}
        else if(pw != cp) {
        alert("Password and Confirm password does not match!!");
        return false;
        } 
        else {
        var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
        var b=emailfilter.test(document.frm.email.value);
       if(b==false)
          {
                alert("Please Enter a valid Mail ID");
                document.frm.email.focus();
                return false;
        }
       else {
           return true;}
       }
    }
</script>
 </head>
 <body>
     <a href="update.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white;margin-bottom:5px;margin-top:2px;align:left;float: left;"><i class="fa fa-reply"> Go Back</i></a><br><br>
         <form name="frm" method="POST" action="" onsubmit="return chkData();">
             <div><?php if(isset($message)) { echo $message; } ?> </div>
             <div class="regform"> <h1>Client Registration Form</h1></div>
        <div class="main">
                <div id="name">
                    <h2 class="name">Name</h2>
                    <input id="first_name" class="fname" type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
                    <label class="flabel"></label><br/>
                    <input id="last_name" class="lname" type="text" name="last_name" value="<?php echo $row['last_name']; ?>" >
                    <label class="llabel"></label>
                </div>
                
                 <h2 class="name">D.O.B</h2>
                <input id="dob" class="dob" type="date" name="dob" value="<?php echo $row['dob']; ?>" >
                
                <h2 class="name">Contact:</h2>
                <input type="tel" id="phone" class="phone" name="phone" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row['phone']; ?>" >
                
                <h2 class="name">Username</h2>
                <input id="username" class="username" type="text" name="username" value="<?php echo $row['username']; ?>">
                
                <h2 class="name">Email</h2>
                <input id="email" class="email" type="email" name="email" value="<?php echo $row['email']; ?>" >
              
               <input class="btn" type="submit"  value="Submit" name="submit">
               </div>
            </form>
        
  </body>
</html>