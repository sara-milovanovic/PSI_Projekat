<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title>CodeWithZac(Admin_Comments)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
		
		<table align="right">
			<tr>
				<td align="right"> <font size="5" face="Cursive"> Hello <b>Admin!</b></font></td>
			</tr>
		</table>
		<br/><br/>
		<hr size="2" color="black">
		
		
		<!--tabela uvod-->
		<table id="top">
			<tr>
				<td width="15%" align="left"> <img src="zac2.jpg" height="150"> </td>
				<td width="65%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align="right">  </td>
				<td width="10%" align="left"> <button type="button" align="left"> <font size="4"><a href="start_unreg.html">Sign out</a></font></button> </td>
			</tr>
			
		</table>
		<table align="right">
			<tr>
				<td align="right"> <font size="5" face="Cursive"> Best student in this month is <b>Pera</b>! Congratulations!</font></td>
			</tr>
		</table>
		<br/> <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
		
		
		<!--tabela precice-->
		<table align="center">
			<tr>
				<td  width="30%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="start_admin.html">Home page</a></font></td>
				<td  width="3%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="FAQ_only_view.html">Frequently Asked Questions</a></font></td>
				<td width="30%" > </td>
				</tr>
		</table> 
		<br/>
		<hr size="2" color="black">
		<br/>
		
		<!--centralna tabela-->
		<table  width="100%">
			<tr height="100">
				<td width="20%"></td>
				<td align="center" bgcolor="lightblue"><font size="5" face="Cursive"> Comments that you left about C++ course:</font></td>
				<td width="20%"></td>
			</tr>
			<tr height="50">
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			    <?php
                        foreach ($komentari as $kom) {
                            echo "<tr height='100'><td></td><td><img align='center' src='star.png' height='45'><font size='4' face='Cursive'>&nbsp;&nbsp;&nbsp;" ;
                                    echo $kom->Tekst;
                                    echo "</font></td><td align='left'><font size='4' face='Cursive'>-";
                                    echo $kom->Ime;
                                    echo "</font></td>";
                                    $pomocna=$kom->IdKomentari;
                                    echo "<td style='text-align:left;'><a href='brisi_komentar/".$pomocna."'><input type='button' value='Delete'></a></td>";
 
                                    echo "</tr>";
                                     
			}
                        ?>
			
			<tr height="100">
				<td></td>
				<td height='80' ><font size="4" face="Cursive">&nbsp;&nbsp;&nbsp; Leave a comment: </font> <textarea rows="5" cols="80%"></textarea></td>
				<td width="10%" align="left"> <button type="button" align="left"> <font size="4"><a href="Admin_Comments.html">Submit</a></font></button> </td>
			</tr>
			
			<tr height="100">
				<td></td>
				<td><img align="center" src="zac_thankyou.png" height="400"></td>
				<td align="left"></td>
			</tr>
		</table>
		<!--end_centralna tabela-->
		<br/>
		<hr size="2" color="black">
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="FAQ_only_view.html">FAQ/How to use</a><font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="#top">PageUp<font/></a> </td>
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