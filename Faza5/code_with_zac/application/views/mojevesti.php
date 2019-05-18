<?php

foreach ($vesti as $vest) {
    echo $vest->naslov;
    ?> 
<a href="<?php echo site_url("Korisnik/izmenivest/".$vest->id); ?>">Izmeni</a>
<a href="<?php echo site_url("Korisnik/obrisivest/".$vest->id); ?>">Obrisi</a><br>
<?php
    
}

