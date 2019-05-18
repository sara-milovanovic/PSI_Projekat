<table>
    <tr><th>Korisnicko ime</th><th>Ime i prezime</th>  
    <?php
    foreach ($autori as $autor) {
        echo "<tr><td>".$autor->korisnicko_ime."</td><td>".$autor->ime." ".$autor->prezime."</tr>";
    }
    ?>
</table>