<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(Approving Materials)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-12" id="top" align="right">
                        <font size="5" face="Cursive"> Hello <b><?php if(isset($username)) echo $username ?>!</b></font>
                        <br>
                        <hr size="2" color="black">
                    </div>   
                </div>
                <div class="row" align="center">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" class="img img-fluid" height="170" align="center">
                    </div>
                    <div class="col-sm-3" align="right">
                        <a href="<?php echo site_url("Admin/logout")?>"><input type="button" value="Sign Out" class="btn btn-info" align="left"> </a>

                    </div>
                </div>
                
                
                <hr size="2" color="black">
                
                <div class="row" align="right">
                    <div class="col-sm-12">
                         <?php 
                        if(isset($najbolji)) 
                            echo "<font size='5' face='Cursive'> Best student in this month is <b>". $najbolji." </b>! Congratulations!</font>";
                                ?>
                    </div>
                </div>
                
                
		<hr size="2" color="lightblue">
		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-4" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">Frequently asked questions</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_documents")?>">Documents</a></font>
                    </div>
                </div>
                
                
                <br/>	
		<hr size="2" color="black">
		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <font face='Cursive' size='6'>Approve New Materials</font>
                    </div> 
                </div>
                <br><br><br>
                 <?php
                    foreach ($materijali as $mat) {
                        echo "<font size='6' face='Cursive'><b><div class='row' align='center'><div class='col-sm-12'>" ;
                        echo $mat->Ime;
                        echo "</div></div></b></font><br><div class='row' align='center'><div class='col-sm-12'>";
                        echo $mat->Tekst;
                        echo "</div></div><br><br>";
                        echo "<div class='row' ><div class='col-sm-6' align='right'><a href='odobri_materijal/".$mat->IdMaterijali_na_cekanju."'><input type='button' class='btn btn-info' value='Approve'></a></div><div class='col-sm-6' align='left'><a href='ponisti_materijal/".$mat->IdMaterijali_na_cekanju."'><input class='btn btn-info' type='button' value='Reject'></a></div></div><br><br>";                        
                    }
                  ?>
                
                <br><br><br>
                <div class="row">
                    <div class="offset-sm-10 col-sm-2" align="right"  bgcolor="edecd3">
                        <font size="4" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">FAQ/How to use</a><font/>
                    </div>
                </div>
		<hr size="2" color="black">
		
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <font size="4" face="Cursive" width="40%">Thanks for using our app!<font/>
                        <br><br>
                        
                    </div>
                </div>
                
            </div>
	</body>
</html>