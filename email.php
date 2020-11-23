<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
?>
<form action="emailvalidator.php" method="post">
<tr>
     <td>Validar Email:</td>
     <td><input type="text" name="email" /></td>
</tr>
<input type="submit" name="submit" value="Submit" />
</form>