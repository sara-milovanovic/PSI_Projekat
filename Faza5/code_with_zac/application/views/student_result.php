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
                
                
                <?php 
                   
                        echo "<div class='row'><div class='col-sm-12> <font size='6' color='red'> Your score:".$rezultat."</font>";
                        echo "<br></div></div>";
                        
                        echo "<br>Correct answers:<br><br><div class='row'><div class='col-sm-12> <font size='4' > Q1:<br>".$this->session->userdata('radio')[0]->Tekst."<br>";
                        echo "</font></div></div>";
                        
                        echo "<div class='row'><div class='col-sm-12> <font size='4' > Q2:<br>".$this->session->userdata('list')[0]->Tekst."<br>";
                        echo "</font></div></div>";
                        
                        echo "<div class='row'><div class='col-sm-12> <font size='4' > Q3:<br>".$this->session->userdata('fill')[0]->Tekst."<br>";
                        echo "</font></div></div>";
                        
                        echo "<div class='row'><div class='col-sm-12> <font size='4' > Q4:<br>";
                        foreach ($this->session->userdata('checkbox') as $t) {
                            
                            echo $t->Tekst."<br>";
                           
                        }
                        echo "</font></div></div>";
                   
                
                ?>
                
                               
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
