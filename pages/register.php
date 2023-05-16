
<!--https://youtube.com/shorts/RnIGxm8JTAc?feature=share -->

<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../css/index.css">
    <title>Cadastro | Texugo Futebol Club</title>
</head>
<body>
	<div class="container">
		<h1>Cadastro</h1>
		<form action="register.php" method="POST">
			<div>
				<label class="form-label" for="name">Nome</label>
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<div>
				<label class="form-label" for="name">Idade</label>
				<input class="form-control" type="text" name="idade" id="idade">
			</div>

			<input class="btn btn-success w-100 mt-3"  name="botao" type="submit" value="Cadastrar">
		</form>
	</div>
<?php 
if (isset($_POST['botao'])) {
 $nome=$_POST['name'];
 $idade=$_POST['idade'];

 if($idade >=7&&$idade <= 9){
echo "<h2> Classificação fraldinha </h2>";
 }
 else if($idade >=10&&$idade <=11){
echo "<h2> Classificação dente de leite</h2>";
}
else if($idade >=12&&$idade <=13){
echo  "<h2> Classificação mirim</h2>";
}
else if($idade >=14&&$idade <=15){
echo  "<h2> Classificação infantil</h2>";
}
else if($idade >=16&&$idade <=16){
echo  "<h2> Classificação infanto-juvenil</h2>";
}
else if($idade >=17&&$idade <=17){
echo  "<h2> Classificação juvenil</h2>";
}
else if($idade >=18&&$idade <=20){
echo  "<h2> Classificação júnior</h2>";
	}
}
?>
</body>
</html>
