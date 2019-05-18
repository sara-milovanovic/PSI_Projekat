<?php
   // echo validation_errors();

    echo form_open("Korisnik/dodavanjeVesti","method=post");    
    echo "Naslov:";
    echo form_input("naziv",set_value("naziv")); 
    echo form_error("naziv",'<span style="color:red">','</span>');
    echo "<br>Sadrzaj:";
    echo form_input("sadrzaj",set_value("sadrzaj")); 
    echo form_error("sadrzaj",'<span style="color:red">','</span>');
    echo "<br>";
    echo form_submit("dodaj", "Dodaj");
    echo form_close();
?>
