<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(Home)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                <hr size="2" color="black"> 
                <div class="row" align="center">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>" height="150"> 
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3" valign="center">
                        <a href="<?php echo site_url("Gost/signup_formValidation")?>"><input type="button" value="Sign Up" class="btn btn-info" align="left"> </a> &nbsp;
                        <a href="<?php echo site_url("Gost/login")?>"><input type="button" value="LogIn" class="btn btn-info" align="left"> </a>
                    </div>
                </div>
                
                
		<hr size="2" color="lightblue">
		<br/>
                
                <div class="row" bgcolor="edecd3" align="center">
                    <div class="col-sm-4" style="background-color:lightblue " bgcolor="#edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/index#courses")?>">Courses</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/index#soon")?>">Coming Soon</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                </div>
                
                <br/>
		<hr size="2" color="black">
		<br/>
                
                
                <div class="row" align="center">
                    <div class="col-sm-6">
                        <font face="Cursive">Hi, I'm Zac! Basic programming has become an essential skill for grown-ups and children alike. And the benefits of picking up this skill, especially for kids, are huge: Learning how to build simple websites and games helps kids refine their design, logic, and problem-solving abilities. It also allows them to express ideas and creativity in unique ways. So if your kids, class or school are excited about using technology to change the world, this course will give you everything you need to provide a practical and fun foundation for your kids to fall in love with coding. This course is also for teachers who want to bring code into class</font>
				
                    </div>
                    <div class="col-sm-6">
                       <font size="3" face="Cursive">It's predicted that by 2020 there will be 1,000,000 more computer science jobs than computer science students. Wow!

But more than any of that, when taught correctly, programming can be a whole heap of fun! Learning to code is an amazing, practical and hugely rewarding hobby and skill for kids of all ages.

    In this jam-packed 1 hour course, we focus on the tools, techniques and ideas you can use to inspire fun and creativity in programming. With an emphasis on applications, the course steers away from code syntax or the conventions of any specific language and keeps the focus on making coding fun. In fact you won't need any background or knowledge in programming at all.</font>
			 
                    </div>
                </div>
                
                <br/>
		<hr>
                
                <div class="row" align="center">
                    <div class="col-sm-6" style="background-color: lightblue">
                         <font size="6" face="Cursive"><u><b>Courses</u></b></font>
                    </div>
                    <div class="col-sm-9">
                       
                    </div>
                       
                </div>
                
                <br><br>
                
                <div class="row" align="center">
                    <div class="col-sm-5">
                       <img class="img img-fluid" src="<?php echo base_url('images/c.png')?>" style="width:160px;height:150px;">
                    </div>
                    <div class="col-sm-1">
                        
                    </div>
                    <div class="col-sm-6">
                       
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-5" align="center">
                        <font size="4" face="Cursive">
				<?php 
                                
                                    foreach ($oblasti as $o) {
                                        echo "<div class='row'> <div class='col-sm-12'>*".$o->Ime."*</div></div>";
                                    }
                                
                                ?>
                        </font>
                    </div>
                    <div class="col-sm-2" id="courses">
                         
                    </div>
                    <div class="col-sm-2"><font size="4" face="Cursive">
                        Course rating: <b><?php if(isset($ocena)) echo $ocena ?></b> </font>
                       
                    </div>
                    <div class="col-sm-3" align="right">
                       <a href="<?php echo site_url("Gost/ucitaj_komentare")?>"><input type="button" class="btn btn-info" value="View comments"></a><img class="img img-fluid" src="<?php echo base_url('images/slika.png')?>" style='width:130px;height:150px;' ><font size='4' face="Cursive"></font>              
                    </div>
                </div>
                
                <br><br><br><br>
                
                <hr>
                <div class="row" id="soon">
                    <div class="col-sm-5" align="center">
                         <img class="img img-fluid" src="<?php echo base_url('images/python.png')?>" style="width:160px;height:150px;">
                    </div>
                    <div class="col-sm-1">
                       
                    </div>
                    <div class="col-sm-6" align="right">
                        <img src="<?php echo base_url('images/zac_sad.png')?>" height="150">
                    </div>
                    
                </div>
                
                <br><br>
                
                <div class="row">
                    <div class="col-sm-3">
                        
                    </div>
                    <div class="col-sm-4">
                       <font size="4" face="Cursive">
				<ul>
                                    <li>Comming soon</li>
				</ul>
                        </font>
                    </div>
                    
                    <div class="col-sm-2" align="centar">
                       <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating:...</font>
                    </div>
                    <div class="col-sm-3" align="centar">
                        
                    </div>
                    
                </div>
                  <br><br>  <br><br>
                  <hr>
                 <div class="row">
                    <div class="col-sm-5" align="center">
                        <img class="img img-fluid" src="<?php echo base_url('images/scratch.jpg')?>" style="width:180px;height:150px;">
                    </div>
                    <div class="col-sm-1">
                        
                    </div>
                    <div class="col-sm-6" align="right">
                        <img src="<?php echo base_url('images/zac_sad.png')?>" height="150">
                    </div>
                    
                </div> 
                  
                 
                 <div class="row">
                    <div class="col-sm-3">
                        
                    </div>
                    <div class="col-sm-4">
                       <font size="4" face="Cursive">
				<ul>
                                    <li>Comming soon</li>
				</ul>
                        </font>
                    </div>
                    
                    <div class="col-sm-2" align="centar">
                       <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating:...</font>
                    </div>
                    <div class="col-sm-3" align="centar">
                        
                    </div>
                    
                </div>
                
                  
                  
                  
                 <br/>
                    <hr size="2" color="black">
                    
                    <div class="row" align="right">
                        <div class="offset-sm-9 col-sm-1">
                            <font size="4" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">FAQ/How to use</a><font/>
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
