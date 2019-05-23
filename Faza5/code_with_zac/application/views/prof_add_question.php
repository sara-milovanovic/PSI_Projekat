<!--autor: Nedeljko Jokic-->
<html>
	<head>
		<title> CodeWithZac(AddQuestion)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	
	
	<!--tabela uvod-->
	<table align="right" id="top">
            
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
	<form name="formpad" action="<?php echo site_url('Profesor/add_question') ?>" method="post">
		<table>
		
		<tr>
		<td width="10%"></td>
		<td width="70%"><font face="cursive" color="darkblue" size="5"><b></b><center>You can add new question here:</center></b></font></td>
		<td></td>
		</tr>
		<tr>
		<td width="10%"></td>
		<td width="70%"><font face="cursive" color="darkblue" size="4"><b><center>Enter your question here:</center></b></font></td>
		<td width="20%"></td>
		</tr>
		<tr>
		<td width="10%">
		
		
		</td>
		<td width="70%"><center>
                    <input type='text' name='question' value="<?php echo $q ?>">
                </center></td>
		
		<td width="20%">
		
		<font face="cursive" color="darkblue" size="4"><b><center>Pick a topic:</center></b></font>
		<center><select name="topic">
		<option value='Introduction' selected>Introduction</option>
		<option value='Data types'>Data types</option>
		<option value='Arrays'>Arrays</option>
		<option value='For loop'>For loop</option>
		<option value='While loop'>While loop</option>
		<option value='Switch/Case'>Switch/Case</option>
		<option value='Pointers'>Pointers</option>
		<option value='What is output of the following code...'>What is output of the following code...</option>
		<option value='Final test (random questions)'>Final test (random questions)</option>
		</select></center>
		<br>
		<br>
		<br>
		
		
		</td>
		</tr>
                <tr>
                    <td align='right'><?php echo form_error("question","<font color='red'>","</font>");?></td>
                </tr>
		</table>
		<br>
		<br>
		
		<table width='100%'>
			<tr>
				<td>
					<font face="cursive" color="darkblue" size="4"><b>Choose type of question:</b></font>
				</td>
			</tr>
			<tr height='60'>
				<td width='25%'>
					<input type='radio' value='radio' name='a' checked>radio
				</td>
				<td width='25%'>
					<input type='radio' value='checkbox' name='a'>checkbox
				</td >
				<td width='25%'>
					<input type='radio' value='list' name='a'>list
				</td >
				<td width='25%'>
					<input type='radio' value='Fill the box' name='a'>Fill the box
				</td>
			</tr>
                        <tr>
                                <td align='center'>
                                     <?php if(isset($poruka))
                                          echo "<font color='red'>$poruka</font><br>";
                                     ?>
                                </td>
                         
                            </tr>
			<tr height='100'>
				<td>
					<input type='checkbox' name="c1"><font face="cursive" color="darkblue" size="4">offered answer 1:</font>
				</td>
				<td width='25%'>
					<input type='text' name='ans1' value="<?php echo $a1 ?>">
				</td>
				
			
			</tr>
                        <tr>
                    <td align='right'><?php echo form_error("ans1","<font color='red'>","</font>");?></td>
                </tr>
			<tr height='100'>
				<td>
					<input type='checkbox' name="c2"><font face="cursive" color="darkblue" size="4">offered answer 2:</font>
				</td>
				<td width='25%'>
					<input type='text' name='ans2' value="<?php echo $a2 ?>">
				</td>
				<td colspan='2' rowspan='3'>
					<img src='zac_note_add_question.png' width='700' height='400' align='center' valign='center'>
				
				</td>
			
			</tr>
			<tr height='100'>
				<td>
					<input type='checkbox' name="c3"><font face="cursive" color="darkblue" size="4">offered answer 3:</font>
				</td>
				<td width='25%'>
					<input type='text' name='ans3' value="<?php echo $a3 ?>">
				</td>
			
			</tr>
			<tr height='100'>
				<td>
					<input type='checkbox' name="c4"><font face="cursive" color="darkblue" size="4">offered answer 4:</font>
				</td>
				<td width='25%'>
					<input type='text' name='ans4' value="<?php echo $a4 ?>">
				</td>
			
			</tr>
                        
			
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" value='Send question'>
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
