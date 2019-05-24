<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(Approving Materials)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            <div class="container">
                
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <font size="5" face="Cursive"> Hello <b>Admin!</b></font>
                    </div>
                </div>
                
                <div class="row" align="center">
                    <div class="col-sm-3">
                        <img src="<?php echo base_url('images/zac2.jpg')?>" height="150">
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo base_url('images/logo2.png')?>" height="170" align="center">
                    </div>
                    <div class="col-sm-3">
                        <button type="button"> <font size="4"><a href="<?php echo site_url("Admin/logout")?>">Sign out</a></font></button>
                    </div>
                </div>
                
                <br/> <br/>
                <hr size="2" color="black">
                
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <font face="Cursive" size='5'>Best student in this month is <b>Pera</b>! Congratulations! </font>
                    </div>
                </div>
                
                
                <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-4" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index")?>">Home page</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">Frequently asked questions</a></font>
                    </div>
                    <div class="col-sm-4" style="background-color:#edecd3 ">
                        <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_documents")?>">Documents</a></font>
                    </div>
                </div>
                
                
                <br/>	
		<hr size="2" color="black">
		<br/>
                
                <div class="row" align="center">
                    <div class="col-sm-12">
                        <font face='Cursive' size='6'>Approve New Materials</font>
                    </div> 
                </div>
                
                 <?php
                    foreach ($materijali as $mat) {
                        echo "<div class='row' align='center'><div class='col-sm-12'>" ;
                        echo $mat->Ime;
                        echo "</div></div><div class='row' align='center'><div class='col-sm-12'>";
                        echo $mat->Tekst;
                        echo "</div><div>";
                        echo "<a href='odobri_materijal/".$mat->IdMaterijali_na_cekanju."'><input type='button' value='Approve'></a><a href='ponisti_materijal/".$mat->IdMaterijali_na_cekanju."'><input type='button' value='Reject'></a></td></tr>";                        
                    }
                  ?>
                
                <br><br><br>
                <div class="row">
                    <div class="offset-sm-10 col-sm-2" align="right"  bgcolor="edecd3">
                        <font size="4" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_faq")?>">FAQ/How to use</a><font/>
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