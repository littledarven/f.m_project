<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>G.Empresas</title>
</head>
<body>
    <div id="page-wrap">
        <div class="hdr">
            <h1>Empresas Cadastradas</h1>
            <h5><a href="new_register.php"> Nova Empresa </a></h5>
        </div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Tamanho</th>
                    <th>Opções</th>
                </tr>
                <?php
                    $i = 1;
                    $file = fopen('hist_firm.txt','r');
                    while(! feof($file)){ 
                        $data = fgets($file);                        
                        if ($data != "") {
                            $data = explode(',', $data); ?>
                            <tr>
                                <td><?= $data[0] ?></td>
                                <td><?= $data[1] ?></td>  
                                <td><?= $data[2] ?></td>
                                <td><?= $data[3] ?></td>
                                <td><?= $data[4] ?></td>
                                <td><?= $data[5] ?></td>
                                <td>
                                    <a href="edit_register.php?id=<?=$i?>">Editar</a>
                                    <a href="data.php?id=<?=$i?>">Deletar</a>
                                </td>
                            </tr>
                        <?php
                        }$i++;
                    }
                ?>
            </table>
            </form>
    </div>
</body>