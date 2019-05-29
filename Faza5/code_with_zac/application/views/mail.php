<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(Home)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                <hr size="2" color="black"> 
                <div class="row" align="center">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150"> 
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3" valign="center">
                        <a href="<?php echo site_url("Gost/signup_formValidation")?>"><input type="button" value="Sign Up" class="btn btn-info" align="left"> </a> &nbsp;
                        <a href="<?php echo site_url("Gost/login")?>"><input type="button" value="LogIn" class="btn btn-info" align="left"> </a>
                    </div>
                </div>
                
                
		<hr size="2" color="lightblue">
		<br/>
                
                <div class="row" bgcolor="edecd3" align="center">
                    <div class="col-sm-4" style="background-color:lightblue " bgcolor="#edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/index#courses")?>">Courses</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/index#soon")?>">Coming Soon</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                </div>
                
                <br/>
		<hr size="2" color="black">
		<br/>
                
                
                
                <form name="loginform" action="<?php echo site_url('Gost/posalji_mail') ?>" method="post">
                    
                    <div class='row'>
                        <div class='col-sm-6' align='right'>
                            Your e-mail: <input type='text' name='mail'>
                        </div>
                        <div class='col-sm-6' align='left'>
                            <input type='submit' class='btn btn-info' value='Submit'>
                        </div>
                    </div>
                    
                    
                </form>
                  
                  
                 <br/>
                    <hr size="2" color="black">
                    
                    <div class="row" align="right">
                        <div class="offset-sm-9 col-sm-1">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">FAQ/How to use</a><font/>
                        </div>
                        <div class="col-sm-1">
                            <font size="4" face="Cursive"><a href="#top">PageUp</a><font/>
                        </div>
                    </div>
                    
               
                    <hr size="2" color="black" >
                    <div class="row" align="right">
                        <div class="col-sm-12">
                            <font size="4" face="Cursive" width="40%">Thanks for using our app!<font/>
                        </div>
                    </div>
            </div>	
	</body>
</html>
