<?php
class nome{
	private $nome;
	private $email;
	private $cor;
	private $idade;

	public function setnome($nome)
	{
		$this->nome=$nome;
	}
	public function getnome()
	{
		return $this->nome;

}
	public function setemail($email)
	{
		$this->email=$emailail;
	}
	public function getemail()
	{
		return $this->email;

}	
	
	public function setidade($idade)
	{
		$this->idade=$idade;
	}
	public function getidade()
	{
		return $this->idade;

}
}
?>
<?php
	$nome=new nome();
	$nome->setnome($_POST['nome']);
	$nome->setemail($_POST['email']);
	$nome->setidade($_POST['idade']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST">
    <h1>Cadastro</h1>
		<p>Nome:<input type="text" name="nome" size="30" maxlength="30" pattern="[0,9A-Za-z]{3,10}" title="Letras ou números sem caracteres especiais" required></p>
		<p>Email:<input type="passaword" name="email" size="10" maxlength="10" required></p>
		<p>Idade:<input type="date" name="idade" required></p>
        <p><input type="nuber" name="botao" required></p>
		<p><input type="submit" name="enviar" value="Cadastrar"></p>   
</form> 
<?php 
    if (isset($_POST['botao'])){
    $numero=

    }
</body>
</html>