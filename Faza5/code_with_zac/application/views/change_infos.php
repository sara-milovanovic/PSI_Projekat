<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(ChangeInfos)</title>
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
                <br/> <br/>
                
                <div class="row" align="center">
                    <div class="col-sm-3">
                        <img class="img img-fluid" src="<?php echo base_url('images/zac2.jpg')?>">
                    </div>
                    <div class="col-sm-6">
                        <img class="img img-fluid" src="<?php echo base_url('images/logo2.png')?>">
                    </div>
                    <div class="col-sm-3">
                        <button type="button"> <font size="4"><a href="<?php echo site_url("Student/logout")?>">Sign Out</a></font></button>
                    </div>
                </div>
                
                <hr size="2" color="black">
                
                
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <font size="5" face="Cursive"> Best student in this month is <b>Pera</b>! Congratulations!</font>
                    </div>
                </div>
                <br/> <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
                
                <div class="row" align="center">
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_faq")?>">Frequently asked questions</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_documents")?>">Documents</a></font>
                    </div>
                    <div class="col-sm-3" style="background-color:lightblue ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_infos")?>">My informations</a></font>
                    </div>
                    
                </div>
                
                <br/>	
		<hr size="2" color="black">
		<br/>
                
                <form name="change_form" action="<?php echo site_url('Student/promeni_informacije') ?>" method="post">
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">username:&nbsp;</font>
                        </div>
                        <div class="col-sm-6">
                            &nbsp;&nbsp;<input type='text' name="username">
                        </div>
                    </div>
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                             <font size="6" face="Cursive">new password :&nbsp;</font>
                        </div>
                        <div class="col-sm-6">
                             &nbsp;&nbsp;<input type='password' name="new_password">
                        </div>
                    </div>
                    
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive"> retype new password(*): &nbsp;</font>
                        </div>
                        
                        <div class="col-sm-6">
                             &nbsp;&nbsp;&nbsp;<input type='password' name="retype_password">
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">name: &nbsp;</font>
                        </div>
                        <div class="col-sm-6">
                            &nbsp;&nbsp;<input type='text' name="name">
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-sm-6">
                            <font size="6" face="Cursive">surname: &nbsp;</font>
                        </div>
                        <div class="col-sm-6">
                            &nbsp;&nbsp;<input type='text' name="surname">
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-sm-12">
                            <?php if(isset($poruka))
                               echo "<font color='red'>$poruka</font><br>";
                             ?>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="offset-sm-4 col-sm-2">
                            <input width='10%' height='10%' type='submit' value="Confirm" align='center' >
                        </div>
                        <div class="col-sm-2">
                            <input width='10%' height='10%' type='reset' align='center'value="Cancel" >
                        </div>
                    </div>
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