<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title>CodeWithZac(Comments)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
                <div class="container">
                    <br/>         
                    <hr size="2" color="black">
                    <div class="row" align="center">
                        <div class="col-sm-3">
                            <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                        </div>
                        <div class="col-sm-6">
                            <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170">
                        </div>
                        <div class="col-sm-3" valign="center">
                        <a href="<?php echo site_url("Gost/signup_formValidation")?>"><input type="button" value="Sign Up" class="btn btn-info" align="left"> </a> &nbsp;
                        <a href="<?php echo site_url("Gost/login")?>"><input type="button" value="LogIn" class="btn btn-info" align="left"> </a>
                    </div>
                    </div>
                    
                    
                    
                    <hr size="2" color="lightblue">
                    
                    <div class="row" align="center">
                        <div class="col-sm-6" style="background-color:#edecd3">
                            <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/index")?>">Home page</a></font>
                        </div>
                        <div class="col-sm-6" style="background-color:#edecd3">
                            <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                        </div>
                        
                    </div>
                    
                    <br/>
                    <hr size="2" color="black">
                    <br/>
                    
                    <div class="row" align="center" height="150">
                        <div class="col-sm-12" style="background-color:lightblue">
                            <font size="5" face="Cursive"> Comments that you left about C++ course:</font>
                        </div>
                    </div>
                    <br><br><br>
                    
                    <?php
                        foreach ($komentari as $kom) {
                            echo "<hr><div class='row' align='center' height='100'><div class='col-sm-6'><font size='4' face='Cursive'>&nbsp;&nbsp;&nbsp;" ;
                                    echo $kom->Tekst;
                                    echo "</font></div><div class='col-sm-6'><font size='4' face='Cursive'>-";
                                    echo $kom->Ime;
                                    echo "</font></div></div>";
			}
                    ?>
                    <hr>
                    <br><br><br><br>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <img class="img img-fluid" height="100" align="center" src="<?php echo base_url('images/zac_thankyou.png')?>">
                        </div>
                    </div>
                    
                    
                    
                    <div class="row">
                        <div class="offset-sm-8 col-sm-2" align="right"  bgcolor="edecd3">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">FAQ/How to use</a><font/>
                        </div>
                        <div class="col-sm-2" align="right"  bgcolor="edecd3">
                            <font size="4" face="Cursive"><a href="#top">PageUp</a><font/>
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