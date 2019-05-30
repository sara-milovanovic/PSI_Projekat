<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(Test)</title>
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
                    <div class="col-sm-4">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>">
                    </div>
                    <div class="col-sm-4">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="offset-sm-2 col-sm-2">
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
                
                
                
		<hr size="2" color="lightblue">
		<br/>
                <div class="row" align="center">
                    <div class="col-sm-3" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_infos")?>">My Informations</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_documents")?>">Documents</a></font>
                    </div>
                    
                </div>
                
                <br/>
		<hr size="2" color="black">
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <font color='#83B8EC' face="Cursive" size="8"><b>Good luck!</b></font>
                    </div>
                </div>
                
                <form name="testform" action="<?php echo site_url('Student/oceni_test') ?>" method="post">
                    <!--RADIO-->
                    <br><br>
                    <div class="row">
                        <div class="col-sm-12" align="center">
                            <?php echo "<font size='5' face='Cursive' color='#1A4570'><b>Pitanje 1: <br>".$radio->Tekst."</font></b><br><br>"?>
                        </div>
                    </div>
                    
                    <?php
                        foreach($radio_odg as $odg){
                            echo "<div class='row' style='background-color:#edecd3' height='100' align='center'><div class='col-sm-12' bgcolor='lightyellow'><font size='4' face='Cursive'>&nbsp;&nbsp;&nbsp;";

                            echo "<input type='radio' name='p1' value='".$odg->Tacan."'>";                                
                            echo '&nbsp;';
                            echo $odg->Tekst;
                            echo '&nbsp;';
                            
                            echo "</font></div></div><br>";
                            }
                     ?>
                    <hr>
                    
                    <!--LIST-->
                    <br><br>
                    <div class="row">
                        <div class="col-sm-12" align="center">
                            <?php echo "<font size='5' face='Cursive' color='#1A4570'><b>Pitanje 2: <br>".$list->Tekst."</b></font><br><br>"?>
                        </div>
                    </div>
                    <div class='row' style='background-color:#edecd3' height='100' align='center'>
                        <div class='col-sm-12' bgcolor='lightyellow'>
                            <select name="p2">
                            <?php
                                foreach($list_odg as $odg){
                                    echo "<font size='6' face='Cursive'>&nbsp;&nbsp;&nbsp;";

                                    echo "<option value='".$odg->Tacan."'>".$odg->Tekst."</option>";                                
                                    

                                    echo "</font>";
                                }
                             ?>
                            </select>
                        </div>
                    </div>   
                     
                    <hr>
                    
                                  
                    <!--FILL THE BOX-->
                    <br><br>
                    <div class="row">
                        <div class="col-sm-12" align="center">
                            <?php echo "<font size='5' face='Cursive' color='#1A4570'><b>Pitanje 3: <br>".$fill->Tekst."</b></font><br><br>";
                           
                           echo "<input type='text' hidden name='fill3' value='".$fill_odg[0]->Tekst."'>";
                                    ?>
                        </div>
                    </div>
                    <div class='row' style='background-color:#edecd3' height='100' align='center'>
                        <div class='col-sm-12' bgcolor='lightyellow'>
                            <input type='text' name='p3'>
                        </div>
                    </div>   
                     
                    <hr>
                    
                    <!--CHECKBOX-->
                    <br><br>
                    
                    <?php echo "<div class='row'> <div class='col-sm-12' align='center'><font size='5' face='Cursive' color='#1A4570'><b>Pitanje 4: <br>".$checkbox->Tekst."</b></font><br></div></div><br>"?>
                        
                    
                        
                           
                    <?php
                            $i=1;
                            
                            foreach($checkbox_odg as $odg){
                                echo "<div class='row' style='background-color:#edecd3' height='100' align='center'><div class='col-sm-12' bgcolor='lightyellow'><font size='4' face='Cursive'>&nbsp;&nbsp;&nbsp;";

                                echo "<input type='checkbox' name='c".$i."' value='".$odg->Tacan."'>&nbsp;".$odg->Tekst;
                                
                                
                                
                                echo "</font></div></div><br>";
                                    
                                $i++;
                            }
                                
                                
                        ?>
                            
                        </div>
                    </div>   
                     
                    <hr>
                    
                    <div class="row" align="center">
                        
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-info" value='Submit'>
                        </div>
                        <div class="col-sm-12">
                            
                        </div>
                        
                    </div>
                    
                </form>
                
                               
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
