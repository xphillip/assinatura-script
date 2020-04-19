<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.font {
	font-family: Calibri;
	color: #951a1d;
	font-size: 28px;
}
.font2 {
	font-family: Calibri;
	color: #6d6e71;
	font-size: 14px;
}
.font3 {
	font-family: Calibri;
	font-size: 14px;
}
.font-p {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
<script language="javascript">
function copiar(id)
{
	holdtext.innerText = document.getElementById(id).innerHTML;
	Copied = holdtext.createTextRange();
	Copied.execCommand("Copy");
}
</script>
</head>
<body>
<div id="paraCopiar">
<p class="font-p"><span class="font-p">Atenciosamente,</span></p>
<table width="607" height="113" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="204" rowspan="5"><span class="font-p"><img src="logo.png" alt="" width="" height="113" longdesc="file:///C|/xampp/htdocs/assinatura/logo.png" /></span></td>
    <td width="350" height="35" class="font"><span class="font-p"><?php echo $_GET['nome'] ?></span></td>
  </tr>
  <tr>
    <td class="font2"><span class="font-p">
      <?php $cargo = strtoupper($_GET['cargo']);echo $cargo?>
    </span></td>
  </tr>
  <tr>
    <td class="font3" style="font-family: Calibri"><span class="font-p">
      <?php if($_GET['c1'] <> NULL){echo $_GET['c1'];};?>  
      <?php if($_GET['c2'] <> NULL)echo " | ".$_GET['c2']?>  
      <?php if($_GET['c3'] <> NULL)echo " | ".$_GET['c3']?>
    </span></td>
  </tr>
  <tr>
    <td height="17" class="font3" style="font-family: Calibri"><span class="font-p"><?php echo $_GET['cidade'] ?>/<?php echo $_GET['uf'] ?> <?php echo $_GET['fm'] ?>  
      <?php if($_GET['ramal'] > 1){echo " | Ramal: ".$_GET['ramal'];}; ?>
    </span></td>
  </tr>
  <tr>
    <td class="font3"><span class="font-p"><a target="_blank" href="http://www.assuncaopromotora.com.br">www.assuncaopromotora.com.br</a></span></td>
  </tr>
</table>
</body>
</html>