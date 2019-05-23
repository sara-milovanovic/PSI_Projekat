<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(The_best_student)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	
	<table align="right">
		<tr>
			<td align="right"> <font size="5" face="Cursive"> Hello <b>professor Mike!</b></font></td>
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
						Choose the best student for this month
					</font>
				</td>
			
			</tr>
		
			<table width="100%" align="center">
                            <?php
                                foreach($student as $s){
                                    echo "<div class='row' style='background-color:#edecd3' height='100' align='center'><div class='col-sm-12' bgcolor='lightyellow'><font size='6' face='Cursive'>&nbsp;&nbsp;&nbsp;";

                                    echo $s->Username;                                
                                    echo '&nbsp;';
                                    echo $s->procenat_tacnih.'%';
                                    $promenljiva1=($s->IdRegistrovani);   


                                    echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
                                    echo "<a href='proglasi_najboljeg/".$promenljiva1."'><input type='button' value='Promote'></a>";
                                    echo "</div></div><br>";
                                    }
                             ?>
                        </table>
		
		
		
		
		
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="FAQ_only_view.html">FAQ/How to use<font/></a> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<p align="center"> <font size="4" face="Cursive">Thanks for using our app!<font/></p>
	</body>
</html>