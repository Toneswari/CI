<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'header.php' ?>
<?php include 'menu.php' ?>

<div class="container-fluid">

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#face">Face Care</button>&nbsp;&nbsp;
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#hair">Hair Care</button>&nbsp;&nbsp;
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#bodycare">Body Care</button>&nbsp;&nbsp;
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#beard care">beard care</button>&nbsp;&nbsp;
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Health">Health and wellness</button>&nbsp;&nbsp;
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Fitness">Fitness</button>&nbsp;&nbsp;
<br><br>
<div class="modal fade" id="face" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">choose the face related issues</h4>
        </div>
        <div class="modal-body">
          <input type="checkbox" name="only skin" id="skin">Only skin<br><br>
          <input type="checkbox" name="Pimples" id="pimples">Pimples<br><br>
          <input type="checkbox" name="Acne" id="acne">Acne<br><br>
          <input type="checkbox" name="DarkSpot" id="dark spot">Dark spot<br><br>
          <input type="checkbox" name="Dull skin" id="dull skin"> Dull skin<br><br>
          <input type="checkbox" name="others" id="others">Others<br><br>
          <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Please enter  your issues.."></textarea><br><br>
          <button class="btn btn-outline-primary">Skip</button>
          <button class="btn btn-primary">Submit</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<br><br>

<div class="modal fade" id="hair" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">choose the hair related issues</h4>
        </div>
        <div class="modal-body">
          <input type="checkbox" name="dandruff" id="dandruff">dandruff<br><br>
          <input type="checkbox" name="Hair fall" id="Hair fall">Hair fall<br><br>
          <input type="checkbox" name="dry hair" id="dry hair">dry hair<br><br>
          <input type="checkbox" name="rough hair" id="rough hair">rough hair<br><br>
          <input type="checkbox" name="Damaged hair" id="Damaged hair"> Damaged hair<br><br>
          <input type="checkbox" name="others" id="others">Others<br><br>
          <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Please enter  your issues.."></textarea><br><br>
          <button class="btn btn-outline-primary">Skip</button>
          <button class="btn btn-primary">Submit</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <br><br>
  <div class="modal fade" id="bodycare" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"><br><br>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">choose the body care related issues</h4><br><br>
        </div>
        <div class="modal-body">
          <input type="checkbox" name="dryskin" id="dryskin">dryskin<br><br>
          <input type="checkbox" name="oily skin" id="oily skin">oily skin<br><br>
          <input type="checkbox" name="Tan" id="Tan">Tan<br><br>
          <input type="checkbox" name="others" id="others">Others<br><br>
          <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Please enter  your issues.."></textarea><br><br>
          <button class="btn btn-outline-primary">Skip</button>
          <button class="btn btn-primary">Submit</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



</div>
<br><br>
<div class="container">
<img src="<?=base_url()?>public/images/bigsalebanner.png" alt="first" class="img-fluid">
</div>
<?php include 'footer.php' ?>
</body>
</html>
<!-- <img src="<?=base_url()?>public/images/first.png" alt="first" class="img-fluid"> -->

    

<!-- <div class="row">
<div class="col-sm-6">
    <div class="card">
    <div class="card-body">
    <img src="<?=base_url()?>public/images/2.png" alt="first" style="width:800px;height:400px;">

    
    </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="card">
    <div class="card-body">
    <img src="<?=base_url()?>public/images/2.png" alt="second" style="width:800px;height:400px;">
    </div>
    </div>
</div>
</div><br><br> -->