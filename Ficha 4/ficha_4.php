<!DOCTYPE html>
<html>
<head>
    <title>Ficha 4</title>
</head>
<body>
    <form action=results.php method="post">
    <label>Nome: </label>
    <input type="text" name="nome">
    <br>
    <label>Apelido: </label>
    <input type="text" name="apelido">
    <label> Aluno do CTESP de Informática?</label>
    <input type="checkbox" name="aluno" checked>
    <br>
    <label>Idade: </label>
    <input type="radio" name="idade" value="menor ou igual que 20"> <=20 <br>
    <input type="radio" name="idade" value="entre 21 e 30"> 21-30 <br>
    <input type="radio" name="idade" value="de 31 a 40"> 31-40 <br>
    <input type="radio" name="idade" value="maior que 40"> >40 <br>
    <label>Localidade: </label>
    <select name ="localidade">
        <option value="Chaves">Chaves</option>;
    </select><br>
    <label>Sugest: </label>
    <textarea name="sugestoes" rows="5" cols="30"></textarea>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar"> 

</form>
</body>
</html>