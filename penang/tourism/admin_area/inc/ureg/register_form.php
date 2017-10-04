
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account Registration</title>
<link rel="stylesheet"  href="styles/login_style.css" media="all" />

</head>
<body style="background-color:#2c3e50;" onload="<?php echo "document.reg.$badfield.focus();"; ?>">
<form id="reg" name="reg" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?task=process">

  <table width="350" style="float:center;" border="0" cellspacing="2" cellpadding="1">
    <tr>
      <td colspan="2" width="160" style="float:center;color: white; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center;font-size: 30px;"><p>Please enter the following information<br />&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td style="text-align: center;color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center;font-size: 24px;">Full name :</td>
      <td><input name="name" type="name" id="pass2" size="15" maxlength="15" /></td>
    </tr>
    <tr>
      <td width="160" style="text-align: center;color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center;font-size:24px;">Username :</td>
	  <td width="190"><input name="user" type="text" id="user" size="30" maxlength="30" value="<?php echo $username; ?>" /></td>
    </tr>
    <tr>
      <td style="text-align: center;color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center;font-size: 24px;">Password :</td>
      <td><input name="pass1" type="password" id="pass" size="15" maxlength="15" /></td>
    </tr>
    <tr>
      <td style="text-align: center;color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center;font-size: 24px;">Re-enter password :</td>
      <td><input name="pass2" type="password" id="pass2" size="15" maxlength="15" /></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><br /><input name="submit" style="font-size: 18px;color: #fff;" type="submit" id="submit" value="Submit" /></td>
    </tr>
	<tr>
	  <td colspan="2" style="text-align: center; font-size: 16px; color: #F00;"><br /><?php echo $msg; ?></td>
	</tr>
  </table>
</form>

</body>
</html>