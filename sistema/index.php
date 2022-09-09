<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Formulário </title>
</head>
<body>
    <h2> Cadastrar Funcionário </h2>
    <form method="post" action="cad.php">
        <p> Id: <input type="text" name="id"> </p>
        <p> Nome: <input type="text" name="nome"> </p>
        <p> Cargo: <input type="text" name="cargo"> </p>
        <p> Salário: <input type="text" name="salario"> </p>
        <p> Qtd Dependentes: <input type="number" name="dependentes"> </p>
        <button type="submit"> Cadastrar </button>
    </form>
</body>
</html>