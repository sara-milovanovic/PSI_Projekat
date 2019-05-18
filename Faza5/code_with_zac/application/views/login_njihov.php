<form name="loginform" action="<?php echo site_url('Gost/ulogujse') ?>" method="post">
    <?php if(isset($poruka))
        echo "<font color='red'>$poruka</font><br>";
    ?><table>
    <tr>
        <td>Korisnicko ime:</td>
        <td><input type="text" name="korime" value="<?php echo set_value('korime') ?>"/></td>
        <td><?php echo form_error("korime","<font color='red'>","</font>"); ?></td>
    </tr>
    <tr>
        <td>Lozinka:</td>
        <td><input type="password" name="lozinka"/></td>
        <td><?php echo form_error("lozinka","<font color='red'>","</font>"); ?></td>
    </tr>
    <tr>
        <td><input type="submit" value="Log in"/></td>
    </tr>
    </table>
</form>
