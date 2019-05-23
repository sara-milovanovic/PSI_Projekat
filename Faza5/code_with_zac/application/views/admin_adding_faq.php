<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(AdminFAQ)</title>
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
                
                <div class="row text-center">
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
                <div class="row">
                    <div class="col-sm-12" align="right">
                        <font size="5" face="Cursive"> Best student in this month is <b>Pera</b>! Congratulations!</font>
                    </div> 
                </div>
                <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
                
                <div class="row" bgcolor="edecd3" align="center">
                    <div class="col-sm-4" style="background-color:lightblue " bgcolor="#edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index#courses")?>">Courses</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index#soon")?>">Coming Soon</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_documents")?>">Documents</a></font>
                    </div>
                </div>
                
		<br/>
		<hr size="2" color="black">
		<br/>
                
                <form name="addfaqform" action="<?php echo site_url('Admin/add_faq') ?>" method="post">
                    <div class="row" height="150">
                        <div class="col-sm-12" align="center" bgcolor="lightblue">
                            <font size="7" face="Cursive"> Frequently asked questions:</font>
                            <br><br>
                        </div>
                        
                        
                    </div>
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
                    
                    <div class="row" height="120">
                        <div class="col-sm-12" bgcolor="lightblue">
                            
                            <center><font size="5" face="Cursive">&nbsp Enter question: </font></center>
                            <br>
                            <center><input type="text" name="pitanje" size="35"></center>
                            <br><br>
                            <center><font size="5" face="Cursive" align="left">&nbsp Enter answer: </font></center>
				<br>
				
				
				<center><input type="text" name="odgovor" size="35"></center>
                                    <br>    
                                <center><input type="submit" value="Add"></center>
                        </div> 
                    </div>
                    <div class="row" align="center">
                        <?php echo form_error("pitanje","<font color='red'>","</font>");?>
                        <br>
                    </div>
                    
                    <div class="row" align="center">
                        <?php echo form_error("odgovor","<font color='red'>","</font>");?>
                        <br>
                    </div>
                    <br/>
                    <hr size="2" color="black">
                    
                    
                </form>
                
                <div class="row">
                    <div class="offset-sm-10 col-sm-2" align="right"  bgcolor="edecd3">
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
