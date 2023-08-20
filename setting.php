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
            margin-top: 100px;
            border-bottom: 1px solid olivedrab;
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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                    <p class="text-danger">Change Password</p>
                    <form action="back.php" method="post">
                        <div class="form-group">
                            <label for="old">Old Password</label>
                            <input type="password" class="form-control" name="old">
                        </div>
                        <div class="form-group">
                            <label for="new">New Password</label>
                            <input type="password" class="form-control" name="new">
                        </div>
                        <div class="form-group">
                            <label for="renew">Re-Type New Password</label>
                            <input type="password" class="form-control" name="renew">
                        </div>
                        <button class="btn btn-success btn-block">Change</button>
                        
                    </form>
                </div>
                <div class="panel-footer">
                   
                </div>
            </div>
            
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
