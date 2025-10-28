<?php
include __DIR__."/includes/header.php";
?>

<form action="cad-user.php" method="post">

<label>nome</label>
<input type="text" name="nome" maxlenght="100" required><br>

<label>RG:</label>
<input type="text" name="RG" maxlenght="9" required><br>

<label>Data de nascimento</label>
<input type="date" name="data_nasc" required><br>

<label>login</label>
<input type="text" name="login" maxlenght="100" required><br>

<label>senha</label>
<input type="password" name="senha" maxlenght="100" required><br>
<input type="submit" value="cadastrar">
<input type="reset" value="limpar">
</form>