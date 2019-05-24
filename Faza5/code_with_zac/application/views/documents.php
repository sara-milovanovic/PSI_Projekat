<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(Documentation)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	<table align="right">
		<tr>
			<td align="right"> <font size="5" face="Cursive"> Hello <b>Lana!</b></font></td>
		</tr>
	</table>
	<br/> <br/>
	<hr size="2" color="black">
	<!--tabela uvod-->
		<table  width="100%" id="top">
			<tr>
				<td width="15%" align="left"> <img src="zac2.jpg" height="150"> </td>
				<td width="60%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align=""> <button type="button" > <font size="4"><a href="start_unreg.html">Sign Out</a></font></button> </td>
				<td width="10%"></td>
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
		<table>
			<tr>
				<td  width="36%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="FAQ_only_view.html">Frequently asked questions</a></font></td>
				<td  width="2%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="start_reg.html">Home page</a></font></td>
				<td  width="2%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="myInformations.html">My informations</a></font></td>
				<td width="23%" > </td>
				</tr>
		</table> 
		<br/>
		<hr size="2" color="black">
		<br/>
		<!--centralna tabela-->
		<table width="100%" >
                    <tr>
                        <td>
                            <img src="c.png" height="120">
                        </td>
                    </tr>
                    <?php
                        foreach ($oblast as $obl) {
                            echo "<tr><td>";
                            echo $obl->Ime;
                            echo "</td><td>";
                            echo $obl->Materijal;
                            echo "</td></tr>";
                                     
			}
                        ?>
                 		
                </table>
				</font></td>
				
				<td width="15%"></td>
			</tr>
			<tr>
				<td></td>
				<td width="15%"  height="2" bgcolor="gray"></td>
				
				<td width="15%"></td>
			</tr>		
			<tr>
				<td></td>
				<td align="center"> <img src="zac_doc.png" height="300"></td>
				
				<td></td>
			</tr>		
		</table>
		
		<br/>
		<hr size="2" color="black">
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="FAQ_only_view.html">FAQ/How to use</a><font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="#top">PageUp</a><font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="myInformations.html">My informations</a><font/> </td>
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<p align="center"> <font size="4" face="Cursive">Thanks for using our app!<font/></p>
	</body>
</html>
