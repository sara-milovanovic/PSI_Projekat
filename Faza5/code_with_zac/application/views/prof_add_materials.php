<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(AddMaterials)</title>
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
                        <a href="<?php echo site_url("Profesor/logout")?>"><input type="button" value="Sign Out" class="btn btn-info" align="left"> </a> &nbsp;
                    </div>
                </div>
                
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
                    <div class="col-sm-3" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Profesor/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Profesor/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Profesor")?>#courses">Courses</a></font>
                    </div>
                    
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Profesor/ucitaj_documents")?>">Documents</a></font>
                    </div>
                    
                </div>
                
                <br/>
		<hr size="2" color="black">
		<br/>
                <form name="formpad" action="<?php echo site_url('Profesor/add_material') ?>" method="post">
                    <br/><br/>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <font face="cursive" color="darkblue" size="5">You can add new materials here:</font>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <font face="cursive" color="darkblue" size="4"><b><center>Enter your text here:</center></b></font>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <?php echo form_error("mat","<font color='red'>","</font>");?>
                        </div>
                    </div>
                    <br/>
                     <div class="row" align="center">
                        <div class="col-sm-12">
                             <?php if(isset($poruka)){
                                $p=str_replace("_", " ", $poruka);
                                echo "<font color='red'>$p</font><br>";
                             
                             }
                             ?>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <input type='text' name='mat' maxlength="255" size="50" value="<?php echo $materijal ?>">
                        </div>
                        
                    </div><br><br>
                    <div class='row' align="center">
                        <div class="col-sm-12">
                             <font face="cursive" color="darkblue" size="4"><b>Pick a topic:</b></font>
                        </div>
                    </div><br><br>
                    <div class="row" align="center">
                       
                        <div class="col-sm-12">
                             <select name="obl">
                                <option selected>Introduction</option>
                                <option>Data types</option>
                                <option>Arrays</option>
                                <option>For loop</option>
                                <option>While loop</option>
                                <option>Switch/Case</option>
                                <option>Pointers</option>
                                
                             </select>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row" align="center">
                        
                        <div class="col-sm-12">
                             <input type="submit" class="btn btn-info" value="Add">
                             <input type="reset" class="btn btn-info" value="Clear">
                        </div>
                    </div>
                   </form> 
                </div>
                
		
		
		
                    
                
		
		
		<br/>
		<hr size="2" color="black">
                
                
                <div class="row" align="right">
                        <div class="offset-sm-9 col-sm-1">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Profesor/ucitaj_faq")?>">FAQ/How to use</a><font/>
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
	</body>
</html>


