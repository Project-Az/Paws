<HEAD>

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function Login(){
var done=0;
var username=document.login.username.value;
username=username.toLowerCase();
var password=document.login.password.value;
password=password.toLowerCase();
if (username=="admin" && password=="senha") { window.location="HomePage.html"; done=1; }
if (username=="outro" && password=="outrosenha") { window.location="HomePage.html"; done=1; }
if (username=="outro" && password=="outrasenha") { window.location="HomePage.html"; done=1; }
if (done==0) { alert("Senha ou Usuário inválido."); }
}
// End -->
</SCRIPT>

<BODY>

<center>
<form name=login>
<table width=225 border=1 cellpadding=3 height="123">
<tr><td colspan=2 height="13"><center>
  <p><font face="Arial Black">Área restrita:</font></p>
  </center></td></tr>
<tr><td height="22">
  <p align="right"><font face="Verdana" style="font-size: 8pt; font-weight:700">
  <img border="0" src="Usuário.gif" width="80" height="80" align="left"></font><p align="right">
  <br>
  <font face="Verdana" style="font-size: 8pt; font-weight:700">
  <br>
  Usuário:</font></td>
  <td height="22" align="center">
  <input type=text name=username size="20"></td></tr>
<tr><td height="22">
  <p align="right"><font style="font-size: 8pt" face="Verdana">
  <b><img border="0" src="Senha.gif" align="left" width="80" height="80"><br>
  <br>
  Senha</b>:</font></td><td height="22">
  <input type=text name=password size="20"></td></tr>
<tr><td colspan=2 align=center height="26"><input type=button value="Entrar" onClick="Login()"></td></tr>
</table>
</form>
</center>

<p>

<p align="center" style="margin-top: 0; margin-bottom: 0"> </p>