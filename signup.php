<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LogIn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleCss.css">
    <style>
      
      .ff{
            margin-top: 60px;
          
        }
        footer{
            margin-top:565px;
            max-height: 50px;
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle" data-toggle="collapse"  data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">LifeStyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="SignUp.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                    </ul>
                </div>
            </div>    
        </nav>
    
        <div class="col-xs-4 col-xs-offset-4 ff">
            
                    <h2 class="text-danger">Sign Up</h2>
                    <form method="post" action="back.php">
                        
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="Name">
                       
                        
                        
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        
                       
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                       
                        
                            <label for="password">Contact</label>
                            <input type="password" class="form-control" name="password">
                        
                        
                            <label for="password">City</label>
                            <input type="password" class="form-control" name="password">
                        
                       
                            <label for="password">Address</label>
                            <input type="password" class="form-control" name="password">
                            <br>
                        <button class="btn btn-success btn-block">SIGN UP</button>
                        
                    </form>
                </div>
                
          
        <br>
        <footer>
          <div class="container">
              <center>
                  Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 8853479798
              </center>
          </div>
      </footer>
    
    </body>
</html>
