<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title>CodeWithZac(Admin_Comments)</title>
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
                    <div class="col-sm-6" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-6" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">Frequently Asked Questions</a></font>
                    </div>
                </div>
                
                <hr size="2" color="black">
                
                
                
                <div class="row" align="center">
                    <div class="col-sm-12" style="background-color: lightblue">
                        <font size="5" face="Cursive"> Comments that you left about C++ course:</font>
                    </div>
                </div>
                  <br><br><br>
                <?php
                        foreach ($komentari as $kom) {
                            echo "<div class='row' height='100'><div class='col-sm-4'><font size='4' face='Cursive'>&nbsp;&nbsp;&nbsp;" ;
                                    echo $kom->Tekst;
                                    echo "</font></div><div class='col-sm-4'><font size='4' face='Cursive'>-";
                                    echo $kom->Username;
                                    echo "</font></div>";
                                    $pomocna=$kom->IdKomentari;
                                    echo "<div class='col-sm-4' style='text-align:left;'><a href='brisi_komentar/".$pomocna."'><input type='button' class='btn btn-info' value='Delete'></a></div><br>";
 
                                    echo "</div><br>";
                                     
			}
                ?>
                
                  <br><br><br>  <br>
                <form name="kom" action="<?php echo site_url('Admin/dodaj_komentar') ?>" method="post">
                    <div class="row">
                             <div class="col-sm-12" align="left">
                                 <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp; Leave a comment: </font> <input type="text" size='50' maxlength="255" name="novi_komentar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class='btn btn-info' align="left" value="Add"> 
                             </div>

                         </div>
                    <br><br><br>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <img class="img img-fluid" align="center" src="<?php echo base_url('images/zac_thankyou.png')?>" style="width:500px;height:250px;">
                        </div>
                    </div>
                </form>
                
                
                
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
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <font size="4" face="Cursive" width="40%">Thanks for using our app!<font/>
                        </div>
                    </div>
                    <br>
            </div>
	</body>
</html>