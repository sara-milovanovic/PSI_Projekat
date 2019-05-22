<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(UserHome)</title>
		<link rel="icon" type="image/png" href="slika.png"/>
	</head>
	<body background="bg.jpg">
	<table align="right">
		<tr>
			<td align="right"> <font size="5" face="Cursive"> Hello <b><?php if(isset($username)) echo $username ?></b></font></td>
		</tr>
	</table>
	<br/> <br/>
	<hr size="2" color="black">
	<!--tabela uvod-->
		<table  width="100%">
			<tr>
				<td width="15%" align="left"> <img src="zac2.jpg" height="150"> </td>
				<td width="60%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align=""> <button type="button" > <font size="4"><a href="<?php echo site_url("Student/logout")?>">Sign out</a></font></button> </td>
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
		<table >
			<tr>
				<td  width="20%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="FAQ_only_view.html">Frequently Asked Questions</a></font></td>
				<td  width="3%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="#courses">Courses</a></font></td>
				<td  width="3%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="#soon">Coming Soon</a></font></td>
				<td  width="3%"> </td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="Documents.html">Documents</a></font></td>
				<td  width="3%"> </td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="<?php echo site_url("Student/ucitaj_infos")?>">My Informations</a></font></td>
				<td width="20%" > </td>
				</tr>
		</table> 
		<br/>
		<hr size="2" color="black">
		<br/>
		
		<!--tabela text-->
		<table >
			<tr>
				<td width="49%"><font size="3"></font><font face="Cursive">Hi, I'm Zac! Basic programming has become an essential skill for grown-ups and children alike. And the benefits of picking up this skill, especially for kids, are huge: Learning how to build simple websites and games helps kids refine their design, logic, and problem-solving abilities. It also allows them to express ideas and creativity in unique ways. So if your kids, class or school are excited about using technology to change the world, this course will give you everything you need to provide a practical and fun foundation for your kids to fall in love with coding. This course is also for teachers who want to bring code into class</font></td>
				<td width="2"></td>
				<td width="49%"><font size="3" face="Cursive">It's predicted that by 2020 there will be 1,000,000 more computer science jobs than computer science students. Wow!

But more than any of that, when taught correctly, programming can be a whole heap of fun! Learning to code is an amazing, practical and hugely rewarding hobby and skill for kids of all ages.

In this jam-packed 1 hour course, we focus on the tools, techniques and ideas you can use to inspire fun and creativity in programming. With an emphasis on applications, the course steers away from code syntax or the conventions of any specific language and keeps the focus on making coding fun. In fact you won't need any background or knowledge in programming at all.</font></td>
			
			</tr>
		</table>
		
		<br/>
		<hr>
		
		<!--centralna tabela-->		
		<table width="100%" align="center" >
			<tr align="center">
				<td width="5%"></td>
				<td bgcolor="c1f3d8" width="60%" id="courses"> <font size="6" face="Cursive"><b>Courses<b/></font></td>
				<td width="25%"></td>
				<td width="30%"></td>
				<td></td>
			</tr>
			<tr height="15" align="center">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr  align="center">
				<td></td>
				<td><img src="c.png" height="130"></td>
				<td></td>
				<td></td>
			</tr>
			<tr align="left">
				
				<td></td>
				<td> <font size="4" face="Cursive">
					<ul>
						<li>Introduction ----------------------------------------</li>
						<li>Data types ------------------------------------------</li>
						<li>Arrays ----------------------------------------------</li>
						<li>For loop ---------------------------------------------</li>
						<li>While loop ------------------------------------------</li>
						<li>Switch/Case ----------------------------------------</li>
						<li>Pointers ---------------------------------------------</li>
						<li>What is output of the following code... -----------</li>
						<li><a href='Student_test.html'>Final test (random questions)</a> ----------------------</li>
					</ul>
					<font/>
				</td>
				<td width="10%"> <font size="4" face="Cursive">
					<ul type="circle">
						<li>55%</li>
						<li>90%</li>
						<li>?</li>
						<li>89%</li>
						<li>59%</li>
						<li>100%</li>
						<li>70%</li>
						<li>? </li>
						<li>82%</li>
					</ul>
					<font/>
				</td>
				<td><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"> <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating: <b>4.7<b/> <font/>
				
				
				&nbsp;&nbsp;<a href="user_rate_app.html"><font size="4" face="Cursive">Rate this course <font/></a>
				
				</td>
				
                                <td width="50" align="center"> <font size="4" face="Cursive"><img src="zac_com.png" height="150"><br/><a href="<?php echo site_url("Student/ucitaj_komentare")?>"><input type="button" value="View comments" ></a><font/></td>
			</tr>
			<!--Python-->
			<tr align="center">
				<td></td>
				<td><img src="python.png" height="130"></td>
				<td></td>
				<td></td>
			</tr>
			<tr align="left">
				
				<td id="soon"> </td>
				<td> <font size="4" face="Cursive">
					<ul>
						<li> Coming soon...</li>
					</ul>
					<font/>
				</td>
				<td><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"> <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating: <b>...<b/> <font/></td>
				<td></td>
				<td width="50" align="left"> <font size="4" face="Cursive"><img src="zac_sad.png" height="150"><br/><font/></td>
			</tr>
			<!--Scratch-->
			<tr align="center">
				<td></td>
				<td><img src="scratch.jpg" height="130"></td>
				<td></td>
				
				<td></td>
			</tr>
			<tr align="left">
				
				<td></td>
				<td> <font size="4" face="Cursive">
					<ul>
						<li> Coming soon...</li>
					</ul>
					<font/>
				</td>
				<td><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"><img src="star.png" height="45"> <font size="4" face="Cursive">&nbsp;&nbsp;&nbsp;Course rating: <b>...<b/> <font/></td>
				<td></td>
				<td width="50" align="left"> <font size="4" face="Cursive"><img src="zac_sad.png" height="150"><br/><font/></td>
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
				
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="myInformations.html">My Informacions</a><font/> </td>
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<p align="center"> <font size="4" face="Cursive">Thanks for using our app!<font/></p>
	</body>
</html>
