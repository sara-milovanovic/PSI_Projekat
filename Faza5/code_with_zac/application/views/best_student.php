<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(The_best_student)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                <br>
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <font size="5" face="Cursive"> Hello <b><?php if(isset($username)) echo $username ?>!</b></font>
                    </div>
                </div>
                
                
                <hr size="2" color="black">
                
                
                
               <div class="row" align="center">
                    <div class="col-sm-4">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>">
                    </div>
                    <div class="col-sm-4">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="offset-sm-2 col-sm-2">
                        <a href="<?php echo site_url("Profesor/logout")?>"><input type="button" value="Sign Out" class="btn btn-info" align="left"> </a>
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
                

		<hr size="2" color="lightblue">
		
                
                
                <div class="row" align="center">
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Profesor/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Profesor/ucitaj_faq")?>">Frequently asked questions</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Profesor/ucitaj_documents")?>">Documents</a></font>
                    </div>
                    
                    
                </div>
                
                <br/>	
		<hr size="2" color="black">
		
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                      <font face='Cursive' size='6'>Choose the best student for this month</font>  
                    </div> 
                </div>
                <br>
                <?php
                    foreach($student as $s){
                        echo "<div class='row' style='background-color:#edecd3' height='100' align='center'><div class='col-sm-12' bgcolor='lightyellow'><font size='6' face='Cursive'>&nbsp;&nbsp;&nbsp;";

                        echo $s->Username;                                
                        echo '&nbsp;';
                        echo $s->procenat_tacnih.'%';
                        $promenljiva1=($s->IdRegistrovani);   
                        echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
                        echo "<a href='proglasi_najboljeg/".$promenljiva1."'><input type='button' class='btn btn-info' value='Promote'></a>";
                        echo "</div></div><br>";
                    }
                ?>
                
                
                
                <br><br>
                
                 <div class="row">
                        <div class="offset-sm-8 col-sm-2" align="right"  bgcolor="edecd3">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Profesor/ucitaj_faq")?>">FAQ/How to use</a><font/>
                        </div>
                        <div class="col-sm-2" align="right"  bgcolor="edecd3">
                            <font size="4" face="Cursive"><a href="#top">PageUp</a><font/>
                        </div>
                 </div>
                 
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