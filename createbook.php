<?php 
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
 <tr>
<form method="post" action="insertbook.php">
 <td>
 <table width="100%" border="0" cellspacing="1" cellpadding="0">
 <tr>
 <td>&nbsp;</td>
 <td colspan="3"><strong>Add Book</strong> </td>
 </tr>
 <tr>
 <td align="center">&nbsp;</td>
 <td align="center">&nbsp;</td>
 <td align="center">&nbsp;</td>
 <td align="center">&nbsp;</td>
 </tr>
 <tr>
 <td align="center">&nbsp;</td>
 <td align="center"><strong>Title</strong></td>
 <td align="center"><strong>Author</strong></td>
 <td align="center"><strong>Date Publisher</strong></td>
 <td align="center"><strong>Copies</strong></td>
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td align="center">
<input name="title" type="text" id="title">
</td>
<td align="center">
<input name="author" type="text" id="author">
</td>
 <td align="center">
<input name="pubdate" type="text" id="pubdate">
</td> 	
<td align="center">
<input name="copies" type="text" id="copies">
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