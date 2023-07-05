<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.container-fluid{
padding-top:40px; 

    /* padding:5pt 5pt 5pt 5pt;
    width:357pt;
    height:547pt;
    transform: translate(17pt, 143pt);
    color:#FFFF;
    size:1pt;
    border:#3333331A;
    opacity:100%; */
}
input[type="text"]{
    width:30%;
padding: 12px 20px;
}

input[type=password],input[type="email"] {
width:30%;
padding: 12px 20px;
}
button {
background-color: #04AA6D;
border: none;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
width:30%;
}
/* h4{
color:black;
width:86pt;
height:22pt;
transform: translate(151pt, 167pt);
size:18pt;
text-align:center;
line-height: 22;
font-style:Rubik;
} */


</style>
<body style="text-align:center;">


<!-- <br><br> -->

    <!-- <div class="card">
    <div class="card-body">
    <img src="<?=base_url()?>public/images/register.png" alt="first">   
</div> -->

<div class="container-fluid">
<fieldset>
    <h4 style="color:black;">Register</h4><br><br>
    <input type="text" name="first name" id="first" placeholder="First Name"><br><br>
    <input type="text" name="last name" id="last" placeholder="Last Name"><br><br>
    <input type="text" name="phone number" id="phone" placeholder="Mobile Number"><br><br>
    <input type="email" name="Email" id="email" placeholder="Email ID"><br><br>
    <input type="password" name="password" id="pass" placeholder="Password"><br><br>
    <input type="password" name="confirm password" id="confirm" placeholder="Confirm Password"><br><br>
    <button class="btn  btn-primary btn-md">Continue</button><br><br>
    <a href="#" style="text-decoration:none;">Already have an account?</a><br><br>
    <a href="#">Login Here</a>

    </fieldset>
</div>


</div>
</body>
</html>