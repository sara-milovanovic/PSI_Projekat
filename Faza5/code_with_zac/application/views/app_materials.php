<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(Approving Materials)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	
	<table align="right">
		<tr>
			<td align="right"> <font size="5" face="Cursive"> Hello <b>Admin!</b></font></td>
		</tr>
	</table>
	<br/> <br/>
	<hr size="2" color="black">
		<table>
			<tr>
				<td width="15%"align='left'> <img src="zac2.jpg" height="150"> </td>
				<td width="65%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align="right"> <button type="button" align="left"> <font size="4"><a href="start_unreg.html">Sign out</a></font></button> </td>
				<td width="10%" align="left">  </td>
			</tr>
		</table>
		
		<table width='100%'>
			<tr>
				<td align='right'>
					<font face="Cursive" size='5'>Best student in this month is <b>Pera</b>! Congratulations! </font>
				</td>
			</tr>
			
		</table>
		
		<br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
		
		
		
		<table width='100%'>
			<tr>
				<td width='15%'></td>
				<td align='center' bgcolor="edecd3"> <font size="5" face="Cursive"><a href="start_reg.html">Home page</a></font></td>
				<td width='3%'></td>
				<td align='center' bgcolor="edecd3"> <font size="5" face="Cursive"><a href="FAQ_only_view.html">Frequently Asked Questions</a></font></td>
				<td width='3%'></td>
				<td align='center' bgcolor="edecd3"> <font size="5" face="Cursive"><a href="Documents.html">Documents</a></font></td>
				<td width='15%'></td>
			</tr>
		</table>
		
		<br/>	
		<hr size="2" color="black">
		<br/>
		
		<table>
			<tr>
				<td>
					<font face='Cursive' size='6'>
						Approve New Materials
					</font>
				</td>
			
			</tr>
		</table>
		
                <table>
                    
                    <tr>
                        
                        <td>
                           
                        </td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td>
                           
                        </td>
                        
                    </tr>
                    
                    <?php
                        foreach ($materijali as $mat) {
                            echo "<tr><td>" ;
                            echo $mat->Ime;
                            echo "</td></tr><tr><td>";
                            echo $mat->Tekst;
                            echo "</td><td>";
                            
                            echo "<a href='odobri_materijal/".$mat->IdMaterijali_na_cekanju."'><input type='button' value='Approve'></a><a href='ponisti_materijal/".$mat->IdMaterijali_na_cekanju."'><input type='button' value='Reject'></a></td></tr>";

                            
                                     
			}
                        ?>
                    
                </table>
		
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive">FAQ/How to use<font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<p align="center"> <font size="4" face="Cursive">Thanks for using our app!<font/></p>
	</body>
</html>