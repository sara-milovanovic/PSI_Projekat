<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(Home-Prof)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	
	
	<!--tabela uvod-->
	<table align="right">
		<tr>
			<td align="right"> <font size="5" face="Cursive"> Hello professor <b><?php if(isset($username)) echo $username ?></b></font></td>
		</tr>
	</table>
	<br/> <br/>
	<hr size="2" color="black">
		<table >
			<tr>
				<td width="15%" align="left"> <img src="zac2.jpg" height="150"> </td>
				<td width="65%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align="right"> <button type="button" align="left"> <font size="4"><a href="<?php echo site_url("Profesor/logout")?>">Sign out</a></font></button> </td>
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
		<table >
			<tr>
				<td width="49%"><font size="3"></font><font face="Cursive">Hi, I'm Zac! Basic programming has become an essential skill for grown-ups and children alike. And the benefits of picking up this skill, especially for kids, are huge: Learning how to build simple websites and games helps kids refine their design, logic, and problem-solving abilities. It also allows them to express ideas and creativity in unique ways. So if your kids, class or school are excited about using technology to change the world, this course will give you everything you need to provide a practical and fun foundation for your kids to fall in love with coding. This course is also for teachers who want to bring code into class</font></td>
				<td width="2"></td>
				<td width="49%"><font size="3" face="Cursive">It's predicted that by 2020 there will be 1,000,000 more computer science jobs than computer science students. Wow!

But more than any of that, when taught correctly, programming can be a whole heap of fun! Learning to code is an amazing, practical and hugely rewarding hobby and skill for kids of all ages.

In this jam-packed 1 hour course, we focus on the tools, techniques and ideas you can use to inspire fun and creativity in programming. With an emphasis on applications, the course steers away from code syntax or the conventions of any specific language and keeps the focus on making coding fun. In fact you won't need any background or knowledge in programming at all.</font></td>
			</table>
		
		<br/>
		<hr>
		
		<!--centralna tabela-->
		<table width="100%" cellspacing="0" >
			<tr height="30">
				<td width="26%"><font size="6" face="Cursive"><u><b>Professor privileges</u></b></font></td>
				<td></td>
				<td width="7%"></td>
				<td width="37%" id="courses"><font size="6" face="Cursive"><u><b>Courses</u></b></font></td>
				<td width="20%"></td>
				<td width="20%"></td>
			</tr>
			<tr height="130">
				<td><font size="4" face="Cursive"><ul type="circle"><li><u><a href="<?php echo site_url('Profesor/ucitaj_biranje_njaboljeg') ?>">Choose the best student in this month</a></u></li></ul></font></td>
				<td bgcolor="gray"></td>
				<td width="7%"></td>
				<td><img src="c.png" height="120"></td>
				<td></td>
				<td></td>
			</tr>
			<tr height="130">
				<td><font size="4" face="Cursive"><ul type="circle"><li><u><a href="<?php echo site_url('Profesor/ucitaj_dodavanje_pitanja') ?>">Add new questions for specific chapter</a></u></li></ul></font></td>
				<td bgcolor="gray"></td>
				<td width="7%"></td>
				<td> <font size="4" face="Cursive">
					<ul>
						<li>Introduction</li>
						<li>Data types</li>
						<li>Arrays</li>
						<li>For loop</li>
						<li>While loop</li>
						<li>Switch/Case</li>
						<li>Pointers and Lists</li>
						<li>What is output of the following code...</li>
						<li><a href='Student_test.html'>Final test (random questions)</a> ----------------------</li>
					</ul>
					<font/>
				</td>
				<td><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"> <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating: <b>4.7<b/> <font/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user_rate_app.html"><font size="4" face="Cursive">Rate this course <font/></a>
				</td>
				<td width="50" align="center"> <font size="4" face="Cursive"><img src="zac_com.png" height="150"><br/><a href="write_comment.html"><button type="button" >View comments</button></a><font/></td>
				</tr>
			<tr height="130">
				<td><font size="4" face="Cursive"><ul type="circle"><li><u><a href="<?php echo site_url('Profesor/ucitaj_dodavanje_materijala') ?>">Add more about some chapter (documentation)</a></u></li></ul></font></td>
				<td bgcolor="gray"></td>
				<td width="7%"></td>
				<td><img src="python.png" height="120"></td>
				<td></td>
				<td></td>
			</tr>
			<tr height="130">
				<td><font size="4" face="Cursive"></font></td>
				<td bgcolor="gray"></td>
				<td width="7%"></td>
				<td> <font size="4" face="Cursive">
					<ul>
						<br/> <br/>
						<li> Coming soon...</li>
						 <br/> <br/> 
					</ul>
					<font/>
				</td>
				<td><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"> <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating: <b>...<b/> <font/></td>
				<td width="50" align="left"> <font size="4" face="Cursive"><img src="zac_sad.png" height="150"><br/><font/></td>
			</tr>
			<tr height="130">
				<td></td>
				<td bgcolor="gray"></td>
				<td width="7%"></td>
				<td><img src="scratch.jpg" height="120"></td>
				<td></td>
				<td></td>
			</tr>
			<tr height="130">
				<td></td>
				<td bgcolor="gray"></td>
				<td width="7%"></td>
				<td id="soon"> <font size="4" face="Cursive">
					<ul>
						<br/> <br/>
						<li> Coming soon...</li>
						 <br/> <br/> 
					</ul>
					<font/>
				</td>
				<td><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"> <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating: <b>...<b/> <font/></td>
				<td width="50" align="left"> <font size="4" face="Cursive"><img src="zac_sad.png" height="150"><br/><font/></td>
			</tr>
		</table>
		<!--end_centralna tabela-->
		
		<br/>
		<hr size="2" color="black">
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="FAQ_only_view.html">FAQ/How to use<font/> </td>
				
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