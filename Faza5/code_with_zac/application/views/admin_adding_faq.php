<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(AdminFAQ)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	
	
	<!--tabela uvod-->
	<table align="right" id="top">
		<tr>
			<td align="right"> <font size="5" face="Cursive"> Hello <b>Admin!</b></font></td>
		</tr>
	</table>
	<br/> <br/>
	<hr size="2" color="black">
		<table >
			<tr>
				<td width="15%" align="left"> <img src="zac2.jpg" height="150"> </td>
				<td width="65%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align="right"> <button type="button" align="left"> <font size="4"><a href="<?php echo site_url("Admin/logout")?>">Sign out</a></font></button> </td>
				<td width="10%" align="left">  </td>
			</tr>
			
		</table>
		<table align="right" >
			<tr>
				<td align="right"> <font size="5" face="Cursive"> Best student in this month is <b>Pera</b>! Congratulations!</font></td>
			</tr>
			
		</table>
		<br/> <br/> <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
		
		
		<!--tabela precice-->
		<table >
			<tr>
				<td  width="45%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index")?>">Home</a></font></td>

				<td  width="3%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index#courses")?>">Courses</a></font></td>
				<td  width="3%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/index#soon")?>">Coming Soon</a></font></td>
				<td  width="3%"> </td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="<?php echo site_url("Admin/ucitaj_documents")?>">Documents</a></font></td>
				<td width="20%" > </td>
				</tr>
		</table> 
		<br/>
		<hr size="2" color="black">
		<br/>
		
		
		<form name="addfaqform" action="<?php echo site_url('Admin/add_faq') ?>" method="post">
		<!--centralna tabela-->
		<table  width="100%">
			<tr height="100">
				<td width="20%"></td>
				<td align="center" bgcolor="lightblue"><font size="7" face="Cursive"> Frequently asked questions:</font></td>
				<td width="20%"></td>
			</tr>
			<tr height="50">
				<td></td>
				<td></td>
				<td></td>
			</tr>
                        <?php
                            foreach($faq as $f){
                                echo "<tr height='100'><td></td><td bgcolor='lightyellow'><font size='5' face='Cursive'>&nbsp;&nbsp;&nbsp;<b>Q: </b>";
                                echo $f->Pitanje;
                                echo "</font></td></tr>";

                                echo "<tr height='100'><td></td><td  bgcolor='lightblue'><font size='5' face='Cursive'>&nbsp;&nbsp;&nbsp;<b>A: </b>";
                                echo $f->Odgovor;
                                echo "</font></td><tr height='20'></tr></tr>";
                            }
			?>
			
			<tr height="20"></tr>
			<tr height="100">
				<td></td>
				<td  bgcolor="lightblue">
                                    
                                <center><font size="5" face="Cursive">&nbsp Enter question: </font></center>
                                <br><br>
				<center><input type="text" name="pitanje" size="35">
				
                                
                                <br><br>
                                
				<font size="5" face="Cursive" align="left">&nbsp Enter answer: </font>
				<br>
				<br>
				
				<center><input type="text" name="odgovor" size="35"></center>
                                    <br><br>    
                                <input type="submit" >
                                </td>
				<td align="left"></td>
			</tr>
                        
                        <tr align="center">
                            <td colspan="3"><?php echo form_error("pitanje","<font color='red'>","</font>");?></td>
                            <br>
                        </tr>
                        <tr align="center">
                            <td colspan="3"><?php echo form_error("odgovor","<font color='red'>","</font>");?></td>
                        </tr>
		</table>
		<!--end_centralna tabela-->
                </form>
		<br/>
		<hr size="2" color="black">
		<table align="right">
			<tr>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="#top">PageUp</a><font/> </td>
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<table align="center">
			<tr>
				<td><font size="4" face="Cursive" width="40%">Thanks for using our app!<font/></td>
			</tr>
		</table>
	</body>
</html>
