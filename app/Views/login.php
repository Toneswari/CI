
<!DOCTYPE html>  
<html>  
<head>  
    <title>Login</title>  
    
</head>  

<style>
    input[type=text] {
width:40%;
padding: 12px 20px;


}
input[type=password] {
width:40%;
padding: 12px 20px;
}
input[type=button], input[type=submit], input[type=reset] {
background-color: #04AA6D;
border: none;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
width:40%;
}
    </style>
<body> <h1 style="text-align:center;color:green;padding-top:40px;">Login</h1> 
<form style="text-align:center;color:green;padding-top:40px;" action="./LoginController.php" method="post">
Username<label for="username">
    <input type="text" name="username" id="username" placeholder="enter username"><br><br>
    Password<label for="password">
    <input type="password" name="password" id="password" placeholder="enter password"><br><br>
    <input type="submit" value="submit" class="btn btn-block">
</form>   
</body>  
</html>  

