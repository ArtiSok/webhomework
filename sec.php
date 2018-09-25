<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <title></title>
    </head>
    <style>  
        div {
            margin-top: 1%; 
        }
    </style>



    <div class="container">
        <div class="row">
            <div class="col">
            <div class="d-flex justify-content-center">  
            <div class="card" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title">Registration completed successfully</h5>
    
    <p class="card-text">  Hi <?php echo $_REQUEST["firstname"]; ?>
    <?php echo $_REQUEST['lastname']; ?>. <br>
    You email is <?php echo $_REQUEST['email']; ?>. <br>
    Your group is <?php echo $_REQUEST['group']; ?>. <br>      
    
  </div>
</div>

  
</html>
