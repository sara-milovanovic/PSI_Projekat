<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(MyInformations)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                <br>
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <font size="5" face="Cursive"> Hello <b><?php if(isset($username)) echo $username ?></b></font>
                    </div>
                </div> 
                
                <hr size="2" color="black">
                
                <div class="row" align="center">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo site_url("Student/logout")?>"><input type="button" value="Sign Out" class="btn btn-info" align="left"> </a>
                    </div>
                    
                </div>
                
                <div class="row" align="right">
                    <div class="col-sm-12">
                        
                        <?php 
                        if(isset($najbolji)) 
                            echo "<font size='5' face='Cursive'> Best student in this month is <b>". $najbolji." </b>! Congratulations!</font>";
                                ?>
                        
                    </div>
                </div>
                
                <br/>
		<hr size="2" color="lightblue">
                <br/>
                
                
                <div class="row" align="center">
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_faq")?>">Frequently asked questions</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_documents")?>">Documents</a></font>
                    </div>
                    
                </div>
                
                <br/>
		<hr size="2" color="black">
		<br/>
		
                
                <div class="row" align="center">
                    <div class="col-sm-6">
                        username
                    </div>
                    <div class="col-sm-6">
                        <b><?php if(isset($username)) echo $username ?></b>
                    </div>
                    
                </div>
                <br/>
                
                <div class="row" align="center">
                    <div class="col-sm-6">
                        e-mail
                    </div>
                    <div class="col-sm-6">
                        <b><?php if(isset($e_mail)) echo $e_mail ?></b>
                    </div>   
                </div>
                <br/>
                <div class="row" align="center">
                    <div class="col-sm-6">
                        name
                    </div>
                    <div class="col-sm-6">
                        <b><?php if(isset($name)) echo $name ?></b>
                    </div>   
                </div>
                <br/>
                <div class="row" align="center">
                    <div class="col-sm-6">
                        surname
                    </div>
                    <div class="col-sm-6">
                        <b><?php if(isset($surname)) echo $surname ?></b>
                    </div>   
                </div>
                <br/>
                <div class="row" align="center">
                    <div class="col-sm-12">
                         <a href="<?php echo site_url("Student/ucitaj_change_infos")?>"><input class='btn btn-info' type="button" value="Change"></a>
                    </div>
                </div>
                <br><br>
                <div class="row" align="center" height="200">
                    <div class="col-sm-12">
                        <font size='5' face='Cursive'>Your score:</font>
                    </div>
                </div>
                <br><br>
                <div class="row" align="center" height="200">
                    <div class="col-sm-12">
                        <img class="img img-fluid" src="<?php echo base_url('images/c.png')?>">
                    </div>
                </div>
                
                 <?php
                    foreach ($oblasti as $o) {
                        echo "<div class='row' align='center'><div class='col-sm-12'>*".$o->Ime;
                        echo '*'.$o->Procenat_tacnih.'%</div></div>';
                    }
                 ?>
                
                
                
                
                <br><br>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <img src="<?php echo base_url('images/zac_score.png')?>" height="130">
                    </div>
                </div>
                <br/>
		<hr size="2" color="black">
                
                
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
