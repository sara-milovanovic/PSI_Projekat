<!--autor: Iva Veljkovic-->
<html>
	<head>
		<title> CodeWithZac(AddMaterials)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	
	
	<!--tabela uvod-->
	<table align="right">
		<tr>
			<td align="right"> <font size="5" face="Cursive"> Hello, <b>professor Susan!</b></font></td>
		</tr>
	</table>
	<br/> <br/>
	<hr size="2" color="black">
		<table >
			<tr>
				<td width="15%" align="left"> <img src="zac2.jpg" height="150"> </td>
				<td width="65%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align="right"> <button type="button" align="left"> <font size="4"><a href="start_unreg.html">Sign out</a></font></button> </td>
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
				<td  width="20%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="FAQ_only_view.html">Frequently Asked Questions</a></font></td>
				<td  width="3%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="#courses">Courses</a></font></td>
				<td  width="3%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="#soon">Coming Soon</a></font></td>
				<td  width="3%"> </td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="Docuents.html">Documents</a></font></td>
				<td width="20%" > </td>
			</tr>
		</table> 
		<br/>
		<hr size="2" color="black">
		<br/>
		<form name="formpad" action="<?php echo site_url('Profesor/add_material') ?>" method="post">
                    <table>

                    <tr>
                    <td width="10%"></td>
                    <td width="70%"><font face="cursive" color="darkblue" size="5"><b></b><center>You can add new materials here:</center></b></font></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td width="10%"></td>
                    <td width="70%"><font face="cursive" color="darkblue" size="4"><b><center>Enter your text here:</center></b></font></td>
                    <td width="20%"></td>
                    </tr>
                    <tr>
                        <td align='right'><?php echo form_error("mat","<font color='red'>","</font>");?></td>
                    </tr>
                    <tr>
                                <td align='center'>
                                     <?php if(isset($poruka))
                                          echo "<font color='red'>$poruka</font><br>";
                                     ?>
                                </td>
                         
                            </tr>
                    <tr>
                    <td width="10%">


                    </td>
                    <td width="70%"><center>
                    <input type='text' name='mat' value="<?php echo $materijal ?>">
                    <td width="20%">

                    <font face="cursive" color="darkblue" size="4"><b><center>Pick a topic:</center></b></font>
                    <center><select name="obl">
                    <option selected>Introduction</option>
                    <option>Data types</option>
                    <option>Arrays</option>
                    <option>For loop</option>
                    <option>While loop</option>
                    <option>Switch/Case</option>
                    <option>Pointers</option>
                    <option>What is output of the following code...</option>
                    <option>Final test (random questions)</option>
                    </select></center>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Add">
                    <input type="reset" value="Clear">


                    </td>
                    </tr>
                    </table>
                </form>
		
		
		<br/>
		<hr size="2" color="black">
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="FAQ_only_view.html">FAQ/How to use</a><font/> </td>
				
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


