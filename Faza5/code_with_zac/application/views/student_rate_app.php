<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(UserRate)</title>
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
                        <a href="<?php echo site_url("Student/logout")?>"><input type="button" value="Sign Out" class="btn btn-info" align="left"> </a> &nbsp;
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
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student")?>#courses">Courses</a></font>
                    </div>
                    
                    <div class="col-sm-3" style="background-color: #edecd3">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_documents")?>">Documents</a></font>
                    </div>
                    
                </div>
                <br/>
		<hr size="2" color="black">
		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <font size="6" face="Cursive"><b>How did you like our course?<b/></font>
                    </div>
                </div>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <img src="<?php echo base_url('images/star.png')?>" style="height:50px;width: 50px;">
                        <img src="<?php echo base_url('images/star.png')?>" style="height:50px;width: 50px;">
                        <img src="<?php echo base_url('images/star.png')?>" style="height:50px;width: 50px;">
                        <img src="<?php echo base_url('images/star.png')?>" style="height:50px;width: 50px;">
                        <img src="<?php echo base_url('images/star.png')?>" style="height:50px;width: 50px;">
                    </div>
                </div>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <font size="3" face="Cursive"><b>Choose one and rate<b/></font>
                    </div>
                </div>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <img src="<?php echo base_url('images/c.png')?>" style="height:150px;width: 150px;" >
                    </div>
                </div>
                
                 <form name="signupform" action="<?php echo site_url('Student/oceni') ?>" method="post">
                
                 <div class="row" align="center">
                    <div class="col-sm-2">
                        <input type="radio" name="star" value="1">1
                    </div>
                     <div class="col-sm-2">
                        <input type="radio" name="star" value="2">2
                    </div>
                     <div class="col-sm-2">
                             <input type="radio" name="star" value="3">3
                    </div>
                     <div class="col-sm-2">
                        <input type="radio" name="star" value="4">4
                    </div>
                     <div class="col-sm-2">
                        <input type="radio" name="star" checked value="5">5</td>
                    </div>
                     <div class="col-sm-2">
                        <input type="submit" class="btn btn-info " value="Rate">&nbsp;&nbsp;&nbsp;
                        <input type="reset" class="btn btn-info ">
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
