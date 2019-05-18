
<?php echo form_open("$controller/pretraga", "method=get"); ?>
Pretraga: <input type="text" name="pretraga">
<br>
<input type="submit" value="Trazi">
<br>
<?php echo form_close(); ?>
<table>
    <tr><th>Naslov</th><th>Autor</th>  
<?php
foreach ($vesti as $vest) {
    echo "<tr><td>".$vest->naslov."</td><td>".$vest->autor. "</td>";
    echo "<td><a href=\"".site_url("$controller/prikazivest/".$vest->id)."\">Prikazi</a><td></tr>";
}
?>

</table>