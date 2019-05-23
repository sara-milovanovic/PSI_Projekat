<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(SignUp)</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('images/slika.png')?>"/>
	</head>
	<body background="<?php echo base_url('images/bg.jpg')?>">
            
            
        
		<table>
			<tr>
				<td width="15%"align='left'> <img src="<?php echo base_url('images/zac2.jpg')?>" height="150"> </td>
				<td width="65%" align="center"> <img src="<?php echo base_url('images/logo2.png')?>" height="170" align="center"> </td>
				<td width="10%" align="right"> <button type="button" align="left"> <font size="4"><a href="<?php echo site_url("Gost/ucitaj_login")?>">Log In</a></font></button> </td>
				<td width="10%" align="left"> </td>
			</tr>
			
		</table>
		
		<br/> <br/>
		<hr size="4" color="black">
		<hr size="2" color="lightblue">
		<br/>
		<table width='100%'>
			<tr>
				<td width='40%'></td>
				<td width='20%' align='center' bgcolor="edecd3"> <font size="6" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_home")?>">Home page</a></font></td>
				<td width='40%'></td>
			</tr>
		</table> 
		<br/>	
		<hr size="2" color="black">
		<br/>
		
                <form name="signupform" action="<?php echo site_url('Gost/signup') ?>" method="post">
		<table width='100%' >
			<tr>
				<td align='right' width='48%'>
					<font size="6" face="Cursive">
						username:*&nbsp;
					</font>
				</td>
				<td width='10%'>
                                    &nbsp;<input type="text" name="username">
				</td>
				<td width='45%' align='left' rowspan="5">
					<img src="zac_signup.png" height="300">
				</td>
			</tr>
                        <tr>
                                 <td align='right'><?php echo form_error("username","<font color='red'>","</font>");?></td>
                            </tr>
                            
			<tr>
				<td align='right' width='30%'>
					<font size="6" face="Cursive">
						password:*&nbsp;
					</font>
				</td>
				<td width='10%'>
					<input type='password' name="password">
				</td>
				
			</tr>
                        <tr>
                                 <td align='right'><?php echo form_error("password","<font color='red'>","</font>");?></td>
                            </tr>
			<tr>
				<td align='right' width='30%'>
					<font size="6" face="Cursive">
						e-mail:*&nbsp;
					</font>
				</td>
				<td width='10%'>
					&nbsp;<input type="text" name="email">
				</td>
				
			</tr>
                        <tr>
                                 <td align='right'><?php echo form_error("email","<font color='red'>","</font>");?></td>
                            </tr>
			<tr>
				<td align='right' width='30%'>
					<font size="6" face="Cursive">
						name: &nbsp;
					</font>
				</td>
				<td width='10%'>
					&nbsp;<input type="text" name="name">
				</td>
				
			</tr>
			<tr>
				<td align='right' width='30%'>
					<font size="6" face="Cursive">
						 surname: &nbsp;
					</font>
				</td>
				<td width='10%'>
					&nbsp;<input type="text" name="surname">
				</td>
				
			</tr>
                        
			<tr>
                                <td align='right'>
                                     <?php if(isset($poruka))
                                          echo "<font color='red'>$poruka</font><br>";
                                     ?>
                                </td>
                         
                            </tr>
                        
			<tr height='10'></tr>
			
			<tr>
				<td align='right' width='30%'>
					
				</td>
				
				<td width='10%'>
					
				</td>
				
			</tr>
			
			
		</table>
               
		<table width='100%'>
			<tr>
				<td align='right' width='53%'>
					<input width='10%' height='10%' type='submit' value='Confirm' align='center'>
				</td>
				
				<td width='40%'>
					<input width='10%' height='10%' type='reset' align='center' value='Cancel'>
				</td>
				<td width='30%'>
					
				</td>
			</tr>
		
		</table>
                </form>
		<br/>
		
		
		
		<br/>
		<br/>
		<br/>
		<hr></hr>
		<hr size="2" color="black">
		<table align="right">
			<tr>
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="<?php echo site_url("Gost/ucitaj_faq")?>">FAQ/How to use</a><font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<p align="center"> <font size="4" face="Cursive">Thanks for using our app!<font/></p>
	</body>
</html>