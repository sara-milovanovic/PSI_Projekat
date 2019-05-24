<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(SignUp)</title>
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
                        <a href="<?php echo site_url("Gost/login")?>"><input type="button" value="LogIn" class="btn btn-info" align="left"> </a>
                    </div>
                </div>
                
                
                <br/> <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
                
                
                
                <div class="row" align="center">
                    <div class="col-sm-12" style="background-color:#edecd3 ">
                        <font size="6" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_home")?>">Home page</a></font>
                    </div>
                </div>
                
                <br/>	
		<hr size="2" color="black">
		<br/>
                
                <form name="signupform" action="<?php echo site_url('Gost/signup') ?>" method="post">
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">username:*&nbsp;</font>
                        </div>
                        <div class="col-sm-6">
                            &nbsp;<input type="text" name="username">
                        </div>
                    </div>
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <?php echo form_error("username","<font color='red'>","</font>");?>
                        </div>
                    </div>
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">password:*&nbsp;</font>
                        </div>
                        
                        <div class="col-sm-6">
                            <input type='password' name="password">
                        </div>
                    </div>
                    
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <?php echo form_error("password","<font color='red'>","</font>");?>
                        </div>
                    </div>
                    
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">e-mail:*&nbsp;</font>
                        </div>
                        
                        <div class="col-sm-6">
                            &nbsp;<input type="text" name="email">
                        </div>
                    </div>
                    
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <?php echo form_error("email","<font color='red'>","</font>");?>
                        </div>
                    </div>
                    
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">name: &nbsp;</font>
                        </div>
                        
                        <div class="col-sm-6">
                            &nbsp;<input type="text" name="name">
                        </div>
                    </div>
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">surname: &nbsp;</font>
                        </div>
                        
                        <div class="col-sm-6">
                            &nbsp;<input type="text" name="surname">
                        </div>
                    </div>
                   
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <?php if(isset($poruka))
                                          echo "<font color='red'>$poruka</font><br>";
                                     ?>
                        </div>
                    </div>
                    
                    
                    <div class="row" align="center">
                       <div class="offset-sm-3 col-sm-3">
                            <input width='10%' class="btn btn-info" height='10%' type='submit' value='Confirm' align='center'>
                       </div> 
                        <div class="col-sm-3">
                            <input width='10%' class="btn btn-secondary" height='10%' type='reset' align='center' value='Cancel'>
                       </div> 
                    </div> 
                    
                    
                    <br/>
                    <br/>
                    <br/>
                    <hr></hr>
                    <hr size="2" color="black">
                    
                    <div class="row" align="center">
                       <div class="col-sm-12">
                            <img class="img img-fluid" src="<?php echo base_url('images/zac_signup.png')?>" height="300">
                       </div> 
                    </div> 
                    
                    <div class="row">
                        <div class="offset-sm-8 col-sm-2" align="right"  bgcolor="edecd3">
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
                    
                    
                </form>
            </div>

	</body>
</html>