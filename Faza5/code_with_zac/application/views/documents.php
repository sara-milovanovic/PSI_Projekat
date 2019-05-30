<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(Documentation)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <font size="5" face="Cursive"> Hello <b><?php if(isset($username)) echo $username ?>!</b></font>
                    </div>
                </div>
                
                <hr size="2" color="black">
                <div class="row text-center">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3" align="right">
                        <a href="<?php echo site_url("Student/logout")?>"><input type="button" value="Sign Out" class="btn btn-info" align="left"> </a> &nbsp;
                    </div>
                </div>
                
                <hr size="4" color="black">
                <div class="row">
                    <div class="col-sm-12" align="right">
                        <?php 
                        if(isset($najbolji)) 
                            echo "<font size='5' face='Cursive'> Best student in this month is <b>". $najbolji." </b>! Congratulations!</font>";
                        ?>
                    </div> 
                </div>

                <hr size="2" color="lightblue">
                <br/>    
                
                <div class="row" align="center">
                    <div class="col-sm-6" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-6" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                </div>
                
                <hr size="2" color="black">
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <img src="<?php echo base_url('images/c.png')?>" style="height:150px;width:150px;">
                    </div> 
                </div>
                
                <?php
                    foreach ($oblast as $obl) {
                        echo "<br><div class='row' align='center'><div class='col-sm-12'><font face='Cursive' size='5'><b>";
                        echo "<u>".$obl->Ime."</u>";
                        echo "</b></font></div><br><br><div class='col-sm-12'>";
                        echo $obl->Materijal;
                        echo "</div></div>";
                                     
                    }
                ?>
                <br><br><br>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                       <img src="<?php echo base_url('images/zac_doc.png')?>" style="height:350px;width:400px;">
                    </div>
                </div>
                
                
                <br/>
		<hr size="2" color="black">
                
                
                <div class="row" align="right">
                        <div class="offset-sm-9 col-sm-1">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_faq")?>">FAQ/How to use</a><font/>
                        </div>
                        <div class="col-sm-1">
                            <font size="4" face="Cursive"><a href="#top">PageUp</a><font/>
                        </div>
                    </div>
                    
               
                    <hr size="2" color="black" >
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <font size="4" face="Cursive" width="40%">Thanks for using our app!<font/>
                        </div>
                    </div>
                    <br>
                
                
            </div>
	</body>
</html>
