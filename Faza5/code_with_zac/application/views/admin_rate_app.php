<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(UserRate)</title>
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
				<td width="10%" align=""> <button type="button" > <font size="4"><a href="start_unreg.html">Sign out</a></font></button> </td>
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
				<td  width="13%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="FAQ_only_view.html">Frequently Asked Questions</a></font></td>
				<td  width="2%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="start_reg.html#courses">Courses</a></font></td>
				<td  width="2%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="start_reg.html#soon">Coming soon</a></font></td>
				<td  width="2%"> </td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="Documents.html">Documents</a></font></td>
				<td  width="2%"> </td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="myInformations.html">My informations</a></font></td>
				<td width="13%" > </td>
				</tr>
		</table> 
		<br/>
		<hr size="2" color="black">
		<br/>
		
		<!--centralna tabela-->		
		<table width="100%" align="center" >
			<tr align="center">
				
				<td bgcolor="c1f3d8" colspan="4"> <font size="6" face="Cursive"><b>How did you like our course?<b/></font></td>
				
			</tr>

			<tr height="15" align="center">

				<td  colspan="4"><center><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"> <font size="4" face="Cursive"> </center></td>
			</tr>
			<tr >
				
				<td width="30%"><img src="c.png" height="130" >
				<font size="3" face="Cursive"><b>Choose one and rate<b/></font></td>
				
				
			</tr>
                        <form name="signupform" action="<?php echo site_url('Student/oceni') ?>" method="post">
                            <tr>

                                    <td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="star" value="1">1
                                    <input type="radio" name="star" value="2">2
                                     <input type="radio" name="star" value="3">3
                                    <input type="radio" name="star" value="4">4
                                    <input type="radio" name="star" checked value="5">5</td>
                                    <td width="10%"><a href="user_rate_app.html"><input type="submit" value="Rate"></a>
                                    <a href="user_rate_app.html"><input type="reset"></a></td>
                                    <td width="65%"></td>

                            </tr>
                        </form>
			
			
		</table>	



<br>
<br>
<br>
<br>
<br>
<br>	
		
		
			
		<br/>
		<hr size="2" color="black">
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="FAQ_only_view.html">FAQ/How to use<font/></a><font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="#top">PageUp</a><font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="myInformations.html">My informations<font/></a> </td>
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<p align="center"> <font size="4" face="Cursive">Thanks for using our app!<font/></p>
	</body>
</html>
