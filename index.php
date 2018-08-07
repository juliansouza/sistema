<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Login em ação</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        
    </head>
    <body>
<nav id="menu">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Missão</a></li>
        <li><a href="#">Links</a></li>
        <li><a href="#">Contato</a></li>
    </ul>
</nav>
        
        <a href="envia.php">Cadastro</a>
        
        <!-- na primeira linha usaremos o “action=ope.php” para que o formulário repasse as informações para a pagina ope.php */-->
        <form method="post" action="ope.php" id="formlogin" name="formlogin" >
<fieldset id="fie">
<legend>LOGIN</legend><br />
<label>Email : </label>
<!-- o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados . -->
<input type="text" name="login" id="login" value=""  /><br />
<label>SENHA :</label>
<input type="password" name="senha" id="senha" value=""/><br />
<input type="submit" value="LOGAR"  />
</fieldset>
</form>
        
    </body>
    </html>