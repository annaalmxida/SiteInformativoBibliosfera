<?php
include __DIR__.'/includes/header.php';

//vereifica se o user esta logado atraves da sessao
session_start();
if(isset($_SESSION['usuario'])){
    header('location:painel.php');
    die();
}
?>
<header>

   <form action="logar.php" method="post">
   
   <label>login:</label>
   <input type="text" maxlenght="100" required><br>

      <label>password:</label>
   <input type="password" name="senha" maxlenght="100" required><br>

 <input type="submit" value="login">
   </form>

<a href='form-cad.php'>cadastrar</a>

</header>

<?php

include __DIR__.'/includes/footer.php';
?>