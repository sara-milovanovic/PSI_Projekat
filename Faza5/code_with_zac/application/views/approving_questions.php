<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(Approving Questions)</title>
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
                
                
                
                <div class="row" align="center">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3" align="right">
                        <a href="<?php echo site_url("Admin/logout")?>"><input type="button" value="Sign Out" class="btn btn-info" align="left"> </a> &nbsp;

                    </div>
                </div>
                <div class="row" align="center">
                    <div class="col-sm-12" align="right">
                        <?php 
                        if(isset($najbolji)) 
                            echo "<font size='5' face='Cursive'> Best student in this month is <b>". $najbolji." </b>! Congratulations!</font>";
                                ?>
                    </div> 
                </div>
                
                <hr size="2" color="lightblue">
                
                <div class="row" align="center">
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color: lightblue">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_documents")?>">Documents</a></font>
                    </div>
                </div>
                
                
                <br/>
		<hr size="2" color="black">
		<br/>
                
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <font face='Cursive' size='6'>Approve New Questions</font>
                    </div>
                </div>
                
                <!--Ovde treba da ide php blok koji ispisuje pitalice -->
                 <?php
                    foreach ($pitalice as $p) {
                        echo "<br><br><font size='4' face='Cursive'><b><div class='row' align='center'><div class='col-sm-12'>" ;
                        echo "Question: ".$p->Tekst;
                        echo "</div></div></b></font><br><br><div class='row' align='right'><div class='col-sm-6'>";
                        echo "Type: ".$p->Tip;
                        echo "</div><br><br>";
                        echo "<div class='col-sm-6' align='left'>Correct answer: ".$p->Odgovor."</div></div><br><br>";
                        echo "<div class='row' ><div class='col-sm-6' align='right'><a href='odobri_pitalicu/".$p->IdPitalica."'><input type='button' class='btn btn-info' value='Approve'></a></div><div class='col-sm-6' align='left'><a href='ponisti_pitalicu/".$p->IdPitalica."'><input class='btn btn-info' type='button' value='Reject'></a></div></div><br><br>";                        
                        

                        
                    }
                  ?>
                
                
                
                
                <br/>
		<hr size="2" color="black">
                
                
                <div class="row" align="right">
                        <div class="offset-sm-9 col-sm-3">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">FAQ/How to use</a><font/>&nbsp;&nbsp;&nbsp;
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