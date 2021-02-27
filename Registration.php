<?php
session_start();
require_once'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
    
     <div class="regform"> <h1>Client Registration Form</h1></div>
        <div class="main">
            <form name="frm" action="register.php" method="POST" onsubmit="return chkData();">
                <div id="name">
                    <h2 class="name">Name</h2>
                    <input id="first_name" class="fname" type="text" name="first_name" placeholder="Firstname" >
                    <label class="flabel"></label><br/>
                    <input id="last_name" class="lname" type="text" name="last_name" placeholder="Lastname" >
                    <label class="llabel"></label>
                </div>
                
                 <h2 class="name">D.O.B</h2>
                <input id="dob" class="dob" type="date" name="dob" placeholder="Enter your BirthDate" >
                
                <h2 class="name">Gender:</h2>
                <div class="gender" >
                <input  type="radio" name="gender" id="gender" value="male"> Male
                <input  type="radio" name="gender" id="gender" value="female"> Female
                <input  type="radio" name="gender" id="gender" value="male"> Other
                </div>
                
                <h2 class="name">Contact:</h2>
                <input type="tel" id="phone" class="phone" name="phone" pattern="[7-9]{1}[0-9]{9}" placeholder="Enter No" >
                
                <h2 class="name">Address:</h2>
                <textarea id="address" class="add" name="address" placeholder="Enter Your Address" type="text" rows="3" cols="50">
                </textarea>

                
                <h2 class="name">Username</h2>
                <input id="username" class="username" type="text" name="username" placeholder=" Username" >
                
                <h2 class="name">Email</h2>
                <input id="email" class="email" type="email" name="email" placeholder="xyz@gmail.com" >
                
                <h2 class="name">Password</h2>
                <input id="password" class="code" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" >
                
                <h2 class="name">Confirm Password</h2>
                <input id="confirmpassword" class="code" type="password" name="confirmpassword" placeholder="Re-Enter Password" >
                
               <input class="btn" type="submit"  value="Submit" name="submit">
            </form>
        </div>
</body>
</html>