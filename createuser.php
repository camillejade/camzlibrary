<?php 
include('session.php');
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
 <tr>
<form method="post" action="insertuser.php">
 <td>
 <table width="100%" border="0" cellspacing="1" cellpadding="0">
 <tr>
 <td>&nbsp;</td>
 <td colspan="3"><strong>Add User</strong> </td>
 </tr>
 <tr>
 <td align="center">&nbsp;</td>
 <td align="center">&nbsp;</td>
 <td align="center">&nbsp;</td>
 <td align="center">&nbsp;</td>
 </tr>
 <tr>
 <td align="center">&nbsp;</td>
 <td align="center"><strong>Username</strong></td>
 <td align="center"><strong>Name</strong></td>
 <td align="center"><strong>Lastname</strong></td>
 <td align="center"><strong>Address</strong></td>
 <td align="center"><strong>Contact</strong></td>
 <td align="center"><strong>Email</strong></td>
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td align="center">
<input name="username" type="text" id="username">
</td>
<td align="center">
<input name="name" type="text" id="name">
</td>
 <td align="center">
<input name="lastname" type="text" id="lastname">
</td> 	
<td align="center">
<input name="address" type="text" id="address">
</td>
<td align="center">
<input name="contact" type="text" id="contact">
</td>
 <td>
<input name="email" type="text" id="email">
</td>
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td align="center">
<input type="submit" name="Submit" value="Submit">
</td>
 <td>&nbsp;</td>
 </tr>
 </table>
 </td>
</form>
 </tr>
 </table>