<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
  background-color: white;
  display:flex;
  height:100vh;
  justify-content:center;
  align-items:center;
  background-size:cover;
  flex-direction:column;
}

.container{
    width:100%;
    max-width:650px; 
    padding:28px;
    margin:0 28px;
    border-radius:10px;
    box-shadow:inset -2px 2px 2px white;
}
.form-title{
    font-size:26px;
    font-weight:600;
    text-align:center;
    padding-bottom:6px;
    /* text-shadow:2px 2px 2px black; */
    border-bottom:solid 1px white;
    color:black;

}
.main-user-info{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
    padding:20px 0;

}

.user-input-box:nth-child(2n){
justify-content:end;
}

.user-input-box{
    display:flex;
    flex-wrap:wrap;
    width:50%;
    padding-bottom:15px;
}

.user-input-box input{
    height:40px;
    width:95%;
    border-radius:7px;
    outline:none;
    border:1px solid grey;
    padding:0 10px;
    padding-left:10px;

}
.form-submit-btn button{
cursor:pointer;
}

.form-submit-btn{
    margin-top:40px;
}


.form-submit-btn button{
display:block;
width:100%;
margin-top:10px;
font-size:20px;
padding:10px;
border:none;
border-radius:3px;
}
*{
    padding:0;
    margin:0;
    box-sizing:border-box;
    font-family:san-serif;
}

form{
display:grid;
place-content:center;
grid-template-columns:100%;
text-align:center;
}



form{
    flex-grow:1;
}

/* || small */
@media (max-width: 1200px) {
.container{
    min-width:280px;
}



  .user-input-box{
    margin-bottom:12px;
    width:100%;
  }
  .user-input-box:nth-child(2n){
    justify-content:space-between;
  }
  .main-user-info{
    max-height:380px;
    overflow:auto;
  }
  .main-user-info::-webkit-scrollbar{
    width:0;
  }
}






</style>
</head>


<body style="text-align:center;">



<div class="container">

    <h1 class="form-title">Register</h1><br><br>
    <form action="#">
        <div class="main-user-info">
            <div class="main-input-box">
                
    <input type="text" name="first name" id="first" placeholder="First Name">
</div><br><br>
<div class="main-input-box">
    <input type="text" name="last name" id="last" placeholder="Last Name">
</div><br><br>
<div class="main-input-box">
    <input type="text" name="phone number" id="phone" placeholder="Mobile Number">
</div><br><br>
<div class="main-input-box">
    <input type="email" name="Email" id="email" placeholder="Email ID">
</div><br><br>
<div class="main-input-box">
    <input type="password" name="password" id="pass" placeholder="Password">
</div><br><br>
<div class="main-input-box">
    <input type="password" name="confirm password" id="confirm" placeholder="Confirm Password">
</div><br><br>
<div class="form-submit-btn">
    <button class="btn  btn-primary btn-block">Continue</button><br><br>
</div><br><br>
    <a href="#" style="text-decoration:none;">Already have an account?</a><br><br>
    <a href="#">Login Here</a>
</div>
</form>
</div>


</div>
</body>
</html>