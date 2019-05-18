<table>
    <tr>
        <td>Naslov:</td>
        <td><?php echo $vest->naslov ?></td>
    </tr>
    <tr>
        <td>Sadrzaj:</td>
        <td><?php echo $vest->sadrzaj; ?></td>
    </tr>
    <tr>
        <td>Datum:</td>
        <td><?php echo date('d.m.y g:i A', strtotime($vest->datum)); ?></td>
    </tr>
    <tr>
        <td>Autor:</td>
        <td><?php echo $vest->ime." ".$vest->prezime; ?></td>
    </tr>
</table>
