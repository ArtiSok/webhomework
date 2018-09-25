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


<div class="d-flex justify-content-center">  
    <div class="container">
        <div class="row">       
            <div class="col">  
            <div class="card" >   
  <div class="card-body">
    <h5 class="card-title">Ülesanne</h5>
    <p class="card-text"> Loo registreerimisvorm, kasuta erinevaid elemente andmete sisestamiseks (list, radiobutton, checkbox ...)<br>
    Sisestatud andmed ilmuvad tabelis järgmisel lehel<br>
    Kasuta CSS (proovige kasutada CSS-raamistikke: Bootstrap, Foundation ...)<br>
    Loo lehe mall, kasuta HTML elemente header, footer, nav...</p>
    </div>
        </div>
  

               
                    
            </div>
            <div class="col-md-auto">
            <div class="card" style="width: 20rem;">
            <div class="card-body"> 
                        <h5 class="card-title">Please register</h5>
                      
                            <form action="sec.php" method="post">
                                <div class="form-group">
                                    <label for="firstname1">Firstname</label>
                                    <input type="text" name="firstname" class="form-control" id="Firstname1"  placeholder="Enter firstname">
                                </div>
                                <div class="form-group">
                                    <label for="lastname1">Lastname</label>
                                    <input type="text" name="lastname" class="form-control" id="Lastname1"  placeholder="Enter lastname">
                                </div>
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="text" name="email" class="form-control" id="Email1"  placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Group</label>
                                    <select name="group" class="form-control" >
                                        <option value="RDIR">RDIR</option>
                                        <option value="RDDR">RDDR</option>
                                        <option value="RDPR">RDPR</option>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" type="text"  class="form-control" id="Password1" placeholder="Enter password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-2">
            </div>
        </div>
    </div>
    </div>
</html>
