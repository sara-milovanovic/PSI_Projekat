<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(AddQuestion)</title>
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
                
                <div class="row" align="center"><div class="col-sm-3" style="background-color:#edecd3 ">
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
                
                
                <form name="formpad" action="<?php echo site_url('Profesor/add_question') ?>" method="post">
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <font face="cursive" color="darkblue" size="5"><b>You can add new question here:</b></font>
                        </div>
                    </div>
                    
                    <br><br>
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font face="cursive" color="darkblue" size="4"><b>Enter your question here:</b></font>
                        </div> 
                        <div class="col-sm-6">
                           <font face="cursive" color="darkblue" size="4"><b>Pick a topic:</b></font>
                        </div>
                    </div>
                    <br>
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <input type='text' name='question' maxlength="255" size="50" value="<?php echo $q ?>">
                        </div> 
                        <div class="col-sm-6">
                           <select name="topic">
                                <option value='Introduction' selected>Introduction</option>
                                <option value='Data types'>Data types</option>
                                <option value='Arrays'>Arrays</option>
                                <option value='For loop'>For loop</option>
                                <option value='While loop'>While loop</option>
                                <option value='Switch/Case'>Switch/Case</option>
                                <option value='Pointers'>Pointers</option>
                                <option value='What is output of the following code...'>What is output of the following code...</option>
                                <option value='Final test (random questions)'>Final test (random questions)</option>
                           </select>
                        </div>
                    </div>
                    <br><br>
                    
                    <div class="row" align="center">
                            <div class="col-sm-12">
                                <?php echo form_error("question","<font color='red'>","</font>");?>
                            </div>
                    </div>
                    
                    <div class="row" align="left">
                        <div class="col-sm-12">
                            <font face="cursive" color="darkblue" size="4"><b>Choose type of question:</b></font>
                        </div>
                    </div>
                    <br><br>
                    <div class="row" align="center">
                        <div class="col-sm-3">
                            <input type='radio' value='radio' name='a' checked>radio
                        </div>
                        <div class="col-sm-3">
                            <input type='radio' value='checkbox' name='a'>checkbox
                        </div>
                        <div class="col-sm-3">
                            <input type='radio' value='list' name='a'>list
                        </div>
                        <div class="col-sm-3">
                            <input type='radio' value='Fill the box' name='a'>Fill the box
                        </div>
                    </div>
                    
                    <br><br>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                           <?php if(isset($poruka))
                               echo "<font color='red'>$poruka</font><br>";
                           ?> 
                        </div>
                    </div>
                    <br><br>
                    <div class="row" align="left">
                        <div class="col-sm-3">
                            <input type='checkbox' name="c1"><font face="cursive" color="darkblue" size="4">offered answer 1:</font>
                        </div>
                        <div class="col-sm-3">
                            <input type='text' name='ans1' value="<?php echo $a1 ?>">
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                           <?php echo form_error("ans1","<font color='red'>","</font>");?>
                        </div>
                    </div>
                    
                    <br><br>
                    <div class="row" align="left">
                        <div class="col-sm-3">
                            <input type='checkbox' name="c2"><font face="cursive" color="darkblue" size="4">offered answer 2:</font>
                        </div>
                        <div class="col-sm-3">
                            <input type='text' name='ans2' value="<?php echo $a2 ?>">
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    
                    
                    
                    <br><br>
                    <div class="row" align="left">
                        <div class="col-sm-3">
                            <input type='checkbox' name="c3"><font face="cursive" color="darkblue" size="4">offered answer 3:</font>
                        </div>
                        <div class="col-sm-3">
                            <input type='text' name='ans3' value="<?php echo $a3 ?>">
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    <br><br>
                    <div class="row" align="left">
                        <div class="col-sm-3">
                            <input type='checkbox' name="c4"><font face="cursive" color="darkblue" size="4">offered answer 4:</font>
                        </div>
                        <div class="col-sm-3">
                            <input type='text' name='ans4' value="<?php echo $a4 ?>">
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    <br><br>
                    <div class="row" align="center">
                        
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-info" value='Send question'>
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                </form>
                <div class="row" align="center">
                        <div class="col-sm-12">
                            <img src='<?php echo base_url('images/zac_note_add_question.png')?>' style="width: 700px; height:350px;" class="img img-fluid">
                        </div>
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
                
            </div>	
	</body>
</html>
