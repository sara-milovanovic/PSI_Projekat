<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(AdminDeletingUsers)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class='container'>
                
                <div class="row">
                    <div class="col-sm-12" id="top" align="right">
                        <font size="5" face="Cursive"> Hello <b>Admin!</b></font>
                        <br>
                        <hr size="2" color="black">
                    </div>   
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3" align="right">
                        <button type="button" align="left"> <font size="4"><a href="<?php echo site_url("Admin/logout")?>">Sign out</a></font></button>
                    </div>
                </div>
                <hr size="2" color="lightblue">
                <div class="row">
                    <div class="col-sm-12" align="right">
                        <font size="5" face="Cursive"> Best student in this month is <b>Pera</b>! Congratulations!</font>
                    </div> 
                </div>
                <br/>
		<hr size="4" color="black">

		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index#courses")?>">Courses</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index#soon")?>">Coming Soon</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_documents")?>">Documents</a></font>
                    </div>
                </div>
                
                <br/>
                <hr size="2" color="black">
                <br/>
                
                
                <div class="row" heigt="100">
                    <div class="col-sm-12" align="center">
                        <font size="7" face="Cursive"> Who do you want to delete today?</font>
                    </div>
                </div>
                <br><br>
                 <?php
                    foreach($student as $s){
                        echo "<div class='row' style='background-color:#edecd3' height='100' align='center'><div class='col-sm-12' bgcolor='lightyellow'><font size='6' face='Cursive'>&nbsp;&nbsp;&nbsp;";

                        echo $s->Ime;                                
                        echo '&nbsp;';
                        echo $s->Prezime;
                        echo '&nbsp;';
                        echo $s->e_mail;
                        $promenljiva1=($s->IdRegistrovani);   
                        
                        
                        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
                        echo "<a href='obrisi/".$promenljiva1."'><input type='button' value='Delete'></a>";
                        echo "</div></div><br>";
                        }
                 ?>
            
       
                    <br/>
                    <hr size="2" color="black">
                    
                    <div class="row" align="right">
                        <div class="offset-sm-9 col-sm-1">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">FAQ/How to use</a><font/>
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
