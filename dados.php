<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gerador de Assinaturas</title>
<style type="text/css">
.informe {
	font-size: 12px;
}
</style>
</head>
 <script language="JavaScript">

 function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }
 </script>
 <script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(d{2})(d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(d)(d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeypress = function(){
		mascara( this, mtel );
	}
}
</script>
<body>
<p>Preencha os dados a seguir</p>
<div class="panel-heading">
<form method="get" action="index-old.php">

<table width="908" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="135"><h3>Nome*:</h3></td>
    <td width="318">
      <p>
        <label for="nome"></label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome e Sobre Nome" required autofocus/>
      </p></td>
    <td width="14">&nbsp;</td>
    <td width="114"><h3>Cargo*:</h3></td>
    <td width="327">
      <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Cargo" required/>
    </td>
    </tr>
  <tr>
    <td><h3>Contato 1*:</h3></td>
    <td><input type="text" maxlength="14" name="c1" id="telefone" class="form-control" placeholder="Contato 1" required/></td>
    <td>&nbsp;</td>
    <td><h3>Contato 2:</h3></td>
    <td><input type="text" name="c2" id="c2" class="form-control" placeholder="Contato 2"/></td>
  </tr>
  <tr>
    <td><h3>Contato 3:</h3></td>
    <td><input type="text" name="c3" id="c3" class="form-control" placeholder="Contato 3"/></td>
    <td>&nbsp;</td>
    <td><h3>Cidade*:</h3></td>
    <td><input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required/></td>
  </tr>
  <tr>
    <td><h3>UF*:</h3></td>
    <td><select name="uf" id="uf" class="form-control" required>
      <option value="">SELECIONE</option>
      <option value="AC">AC</option>
      <option value="AL">AL</option>
      <option value="AP">AP</option>
      <option value="AM">AM</option>
      <option value="BA">BA</option>
      <option value="CE">CE</option>
      <option value="DF">DF</option>
      <option value="ES">ES</option>
      <option value="GO">GO</option>
      <option value="MA">MA</option>
      <option value="MT">MT</option>
      <option value="MS">MS</option>
      <option value="MG">MG</option>
      <option value="PR">PR</option>
      <option value="PB">PB</option>
      <option value="PA">PA</option>
      <option value="PE">PE</option>
      <option value="PI">PI</option>
      <option value="RJ">RJ</option>
      <option value="RN">RN</option>
      <option value="RS">RS</option>
      <option value="RO">RO</option>
      <option value="RR">PR</option>
      <option value="SC">SC</option>
      <option value="SE">SE</option>
      <option value="SP">SP</option>
      <option value="TO">TO</option>
    </select></td>
    <td>&nbsp;</td>
    <td><h3>Filial/Matriz*:</h3></td>
    <td><select name="fm" id="fm" class="form-control" required>
      <option value="">SELECIONE</option>
      <option value="(Filial)">Filial</option>
      <option value="(Matriz)">Matriz</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="4" align="right"><h3>Ramal:</h3></td>
    <td><input type="text" name="ramal" id="ramal" class="form-control" placeholder="Ramal"/></td>
    </tr>
  <tr>
    <td colspan="5" align="right"><h3 class="informe">*Dados Obrigatórios / Só informe o numero do ramal se possuir Ramal VOIP no setor</h3></td>
    </tr>
  <tr>
    <td colspan="5"><input class="btn btn-lg btn-danger btn-block" type="submit" name="button" id="button" value="Gerar Assinatura" /></td>
  </tr>
</table>
</form>
</div>
<p> </p>
</body>
</html>