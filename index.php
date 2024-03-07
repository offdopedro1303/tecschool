<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEC.SCHOOL</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: rgba(220, 255, 230, 1);
        }

        .navbar {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
        }

        .navfont{
            color: rgba(0, 80, 3, 1);
            margin-right: 150px;
            transition: color 0.3s; /* Adicionado para suavizar a transição */
            text-decoration: none;
        }

        .navfont:hover {
            color: rgba(0, 255, 10, 1); /* Cor alterada para verde ao passar o mouse */
        }

        .navfont1{
            color: rgba(0, 80, 3, 1);
            margin-left: 150px;
            transition: color 0.3s; /* Adicionado para suavizar a transição */
            text-decoration: none;
        }

        .navfont1:hover {
            color: rgba(0, 255, 10, 1); /* Cor alterada para verde ao passar o mouse */
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            text-align: center;
            background-color: rgba(0, 80, 3, 1);
            padding: 20px;
            width: 350px;
            border-radius: 70px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.6);
        }

        input, select, button {
            margin: 10px 0;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        h1, h5 {
            color: #fff;
        }

        button {
            background-color: rgba(0, 255, 10, 1);
            color: #fff;
            cursor: pointer;
            width: 200px;
            border-radius: 67px;
        }

        footer {
            background-color: rgba(0, 80, 3, 1);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
            color: #f5f5f5;
            text-align: center;
            padding: 50px;
        }
        .sexo{
            font-size: 23px;
        }
        .input {
            width: 100%;
            height: 40px;
            line-height: 28px;
            padding: 0 1rem;
            padding-left: 2.5rem;
            border: 2px solid transparent;
            border-radius: 8px;
            outline: none;
            background-color: #f3f3f4;
            color: #0d0c22;
            transition: 0.3s ease;
        }

        .input::placeholder {
            color: #9e9ea7;
        }

        .input:focus,
        input:hover {
            outline: none;
            border-color: rgba(247, 127, 0, 0.4);
            background-color: #fff;
            box-shadow: 0 0 0 4px rgb(247 127 0 / 10%);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="" class="navfont">Cadastrar Aluno</a>
        <a href="" class="navfont1">Cadastrar Notas</a>
    </div>
<br>
<br>
    <div class="main-content">
        <form action="cadastrar.php" method="post">
            <h1>TEC.SCHOOL</h1>
            <h5 style="color: rgba(0, 255, 10, 1); margin-top: -10px;">Cadastrar Aluno</h5>
            <input class="input" name="nome" placeholder="Nome">
            <br>
            <input class="input" type="date" name="data" placeholder="Data de Nascimento">
            <br>
            <select class="input" name="curso" required="required">
                <option name="curso" value="DEV">Desenvolvimento de Sistemas</option>
                <option name="curso" value="ELT">Eletroeletrônica</option>
            </select>
            <br>
            <input class="input" name="rm" placeholder="RM" type="number" maxlength="4">
            <br>
            <br>
            <a style="color: rgba(0, 255, 10, 1);" class="sexo">Sexo:</a>
            <br>
            <input type="radio" name="sexo" value="Masculino" id="masc">
            <label for="masc" style="color: #f5f5f5;">Masculino</label>
            <input type="radio" name="sexo" value="Feminino" id="fem">
            <label for="fem" style="color: #f5f5f5;">Feminino</label>
            <br>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
<br>
<br>
    <footer>
        &copy; 2024 TEC.SCHOOL. Todos os direitos reservados.
    </footer>
</body>
</html>
