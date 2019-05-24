<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(LogIn)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                
                <br/>
                <hr size="2" color="black"> 
                <div class="row" align="center">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-4">
                        <a href="<?php echo site_url("Gost/ucitaj_signup")?>"><input type="button" value="Sign Up" class="btn btn-info" align="right"> </a>
                    </div>
                </div>
                
                <br/> <br/>
                <hr size="2" color="lightblue">
                <br/>
                    
                <div class="row" align="center">
                    <div class="col-sm-12" style="background-color: #edecd3">
                        <font size="6" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_home")?>">Home page</a></font>
                    </div>
                </div>
                 
		<br/>	
		<hr size="2" color="black">
		<br/>
                
                <form name="loginform" action="<?php echo site_url('Gost/ulogujse') ?>" method="post">
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                           <font size="6" face="Cursive"> username:*&nbsp;</font>
                        </div>
                        <div class="col-sm-6">
                            &nbsp;<input type='text' name="username" value="<?php echo $username ?>">
                        </div>
                    </div>
                
                    <div class="row" align="center">
                        <div class="col-sm-12">
                           <?php echo form_error("username","<font color='red'>","</font>");?>
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                          <font size="6" face="Cursive">password:*&nbsp; </font>
                        </div>
                        <div class="col-sm-6">
                            &nbsp;<input type='password' name="password">
                        </div>
                    </div>
                    
                    
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <?php echo form_error("password","<font color='red'>","</font>");?>
                        </div>
                        
                    </div>
                    
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <?php if(isset($poruka))
                                          echo "<font color='red'>$poruka</font><br>";
                                     ?>
                        </div>
                        
                    </div>
                    <br/>
		<br/>
		
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <a href="<?php echo site_url("Gost/salji_sifru_na_mail")?>"><i><font color="blue"><center>Forgot your password?</center></font></i></a>
                        </div>
                        
                    </div>
                    <br/><br/>
                    <div class="row" align="center">
                        <div class="offset-sm-4 col-sm-2">
                            <input width='10%' height='10%' type='submit' class='btn btn-info' align='center' value='Confirm'>
                        </div>
                         <div class="col-sm-2">
                            <input width='10%' height='10%' type='reset' class='btn btn-secondary' align='center' value='Cancel'>
                        </div>
                    </div>
                    
                    
                    <br/>
		<br/>
		<br/>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <img class="img img-fluid" src="<?php echo base_url('images/zac_signup.png')?>" height="200">
                        </div>
                    </div>
                    
                </form>
                
		
		<hr></hr>
		<hr size="2" color="black">
                
                <div class="row">
                    <div class="offset-sm-10 col-sm-2" align="right"  bgcolor="edecd3">
                        <font size="4" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">FAQ/How to use</a><font/>
                    </div>
                </div>
                <br/>
		<hr size="2" color="black">
		
                <div class="row">
                    <div class="col-sm-12" align="right">
                        <font size="4" face="Cursive" width="40%">Thanks for using our app!<font/>
                        <br><br>
                        
                    </div>
                </div>
            </div>
            
	</body>
</html>