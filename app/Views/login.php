
<!DOCTYPE html>  
<html>  
<head>  
    <title>Login</title>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  

<style>
html {   
    height: 100%;   
}  
body {   
    height: 100%;   
}  
.global-container {  
    height: 100%;  
    display: flex;  
    align-items: center;  
    justify-content: center;  
    background-color: #f5f5f5;  
}  
form {  
    padding-top: 10px;  
    font-size: 14px;  
    margin-top: 30px;  
}  
.card-title {   
font-weight: 300;  
 }  
.btn {  
    font-size: 14px;  
    margin-top: 20px;  
}  
.login-form {   
    width: 330px;  
    margin: 20px;  
}  
.sign-up {  
    text-align: center;  
    padding: 20px 0 0;  
}  
.alert {  
    margin-bottom: -30px;  
    font-size: 13px;  
    margin-top: 20px;  
} 
.btn{
    border-radius:10px;
}
h3{
    font-weight: bold;
} 
p{
    text-align:center;
}
container{
    text-align:center;
    align-items:center;
    justify-content:center;
}

    </style>
<body> 
<div class="pt-5">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Login into your account </h3>  
        <p>Enter your registered Mobile or Email ID</p>
        <div class="card-text">  
            <form>  
                <div class="form-group">   
                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile or Email ID">  
                </div>  
                <div class="form-group">  
                    <a href="#" style="float:right;font-size:12px;"> Forgot password? </a>  
                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Enter Password">  
                </div>  
                <button type="submit" class="btn btn-primary btn-block"> Continue </button>  
                <hr>
                <button type="submit" class="btn btn-outline-primary btn-block"> Login with OTP </button> 
                <hr> 
                <p>or Login using social media</p><br>
                <div class="container" >
                <img src="<?=base_url()?>public/images/google.png" height=50px width=50px>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-facebook-official" style="color:blue;font-size:48px;height:50px;width:50px;"></i>
</div>
                <div class="sign-up">  
                    Don't have an account? <a href="#"> Register Here </a>  
                </div>  
            </form>  
        </div>  
    </div>  
</div>  
</div>     
</body>  
</html>  

