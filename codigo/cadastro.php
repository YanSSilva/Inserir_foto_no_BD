<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cadastro de usuário</title>
    </head>

    <body>
        <h1>Cadastro de Usuário</h1>
        <form action="inserecadastro.php" method="post" enctype="multipart/form-data" name="cadastro" >
            Nome:<br />
            <input type="text" name="nome" /><br /><br />
            Email:<br />
            <input type="text" name="email" /><br /><br />
            Foto de exibição:<br />
            <input type="file" name="foto" /><br /><br />
            <input type="submit" name="cadastrar" value="Cadastrar" />
        </form>
    </body>
</html>
