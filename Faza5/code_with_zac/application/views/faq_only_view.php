<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title>CodeWithZac(FAQ)</title>
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
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3">
                        
                    </div>
                </div>
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <button type="button" align="left"> <font size="4"><a href="<?php echo site_url("Gost/signup_formValidation")?>">Sign Up</a></font></button>
                        <button type="button" align="left"> <font size="4"><a href="<?php echo site_url("Gost/login")?>">Log In</a></font></button>
                    </div>
                </div>
                 
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <font size="5" face="Cursive"> Best student in this month is <b>Pera </b>! Congratulations!</font>
                    </div>
                </div>
                <br/> <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-12" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/index")?>">Home page</a></font>
                    </div>
                </div>
                
                <br/>
		<hr size="2" color="black">
		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-12" style="background-color:lightblue">
                        <td align="center" bgcolor="lightblue"><font size="7" face="Cursive"> Frequently asked questions:</font></td>
                    </div>
                </div>
                <br><br>
                
                <?php
                
                
                    foreach($faq as $f){
                         echo "<div class='row' style='background-color:lightyellow' align='center' height='100'><div class='col-sm-12' bgcolor='lightyellow'><font size='5' face='Cursive'>&nbsp;&nbsp;&nbsp;<b>Q: </b>";
                         echo $f->Pitanje;
                         echo "</font></div></div>";
                         echo "<div class='row' style='background-color:lightgrey' height='100' align='center'><div class='col-sm-12' bgcolor='lightblue'><font size='5' face='Cursive'>&nbsp;&nbsp;&nbsp;<b>A: </b>";
                         echo $f->Odgovor;
                         echo "</font></div></div><br><br>";
                            }
                ?>
                 <br><br><br>  
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac_thankyou.png')?>" height="400">
                    </div>
                </div>
                
                <div class="row" align="center">
                    <div class="offset-sm-8 col-sm-4" bgcolor="edecd3">
                        <font size="4" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">FAQ/How to use</a><font/>
                        <font size="4" face="Cursive"><a href="#top">PageUp</a><font/>
                    </div>
                    
                </div>
                <br/>
                <hr size="2" color="black">

                <div class="row" align="center">
                    <div class="col-sm-12">
                        <font size="4" face="Cursive" width="40%">Thanks for using our app!<font/>
                         <br><br>
                    </div>
                </div> 
            </div>
	</body>
</html>