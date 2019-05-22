<!--autor: Sara Milovanovic-->
<html>
	<head>
		<title> CodeWithZac(ChangeInfos)</title>
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
		<table>
			<tr>
				<td width="15%" align="left"> <img src="zac2.jpg" height="150"> </td>
				<td width="60%" align="center"> <img src="logo2.png" height="170" align="center"> </td>
				<td width="10%" align="right"> <button type="button" > <font size="4"><a href="start_unreg.html">Sign Out</a></font></button> </td>
				<td width="15%" align="left"> </td>
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
		<table width='100%'>
			<tr align="center">
			<td  width="13%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="start_reg.html">Home page</a></font></td>
				<td  width="2%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="FAQ_only_view.html">Frequently asked questions</a></font></td>
				<td  width="2%"> <font size="6"></font></td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="Documents.html">Documents</a></font></td>
				<td  width="2%"> </td>
				<td bgcolor="edecd3"> <font size="5" face="Cursive"><a href="myInformations.html">My informations</a></font></td>
				<td width="13%" > </td>
			</tr>
		</table> 
		<br/>	
		<hr size="2" color="black">
		<br/>
		
		<form name="change_form" action="<?php echo site_url('Student/promeni_informacije') ?>" method="post">
                    <table width='100%' >
                            <tr>
                                    <td align='right' width='48%'>
                                            <font size="6" face="Cursive">
                                                    username:&nbsp;
                                            </font>
                                    </td>
                                    <td width='15%'>
                                            &nbsp;&nbsp;<input type='text' name="username">
                                    </td>
                                    <td width='35%' align='left' rowspan="6">
                                            <img src="zac_note.png" height="250">
                                    </td>
                            </tr>
                            <tr>
                                    <td align='right' width='30%'>
                                            <font size="6" face="Cursive">
                                                    new password :&nbsp;
                                            </font>
                                    </td>
                                    <td width='15%'>
                                            &nbsp;&nbsp;<input type='password' name="new_password">
                                    </td>

                            </tr>
                            <tr>
                                    <td align='right' width='30%'>
                                            <font size="6" face="Cursive">
                                                    retype new password(*): &nbsp;
                                            </font>
                                    </td>
                                    <td width='15%'>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='password' name="retype_password">
                                    </td>

                            </tr>

                            <tr>
                                    <td align='right' width='30%'>
                                            <font size="6" face="Cursive">
                                                     name: &nbsp;
                                            </font>
                                    </td>
                                    <td width='15%'>
                                            &nbsp;&nbsp;<input type='text' name="name">
                                    </td>

                            </tr>
                            <tr>
                                    <td align='right' width='30%'>
                                            <font size="6" face="Cursive">
                                                     surname: &nbsp;
                                            </font>
                                    </td>
                                    <td width='15%'>
                                            &nbsp;&nbsp;<input type='text' name="surname">
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

                                    <td width='15%'>

                                    </td>

                            </tr>

                    <table width="100%">
                            <tr>
                            <td align="right"><font size="5" face="Cursive" color="red"></font></td>
                            </tr>
                    </table>
                    </table>
                    <table width='100%'>
                            <tr>
                                    <td align='right' width='53%'>
                                            <input width='10%' height='10%' type='submit' value="Confirm" align='center' >
                                    </td>

                                    <td width='40%'>
                                           <input width='10%' height='10%' type='reset' align='center'value="Cancel" >
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
				<td bgcolor="edecd3">  <font size="4" face="Cursive"><a href="FAQ_only_view.html">FAQ/How to use</a><font/> </td>
				
				<td  width="25">  <font size="4" face="Cursive"><font/> </td>
				
				
			</tr>
		</table>
		<br/> <br/>
		<hr size="2" color="black" >
		<p align="center"> <font size="4" face="Cursive">Thanks for using our app!<font/></p>
	</body>
</html>