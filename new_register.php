<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>
<div class="row">
        <section class="col-md-9">
            <form method="POST" action="new.php" >
                <div class="form-group row">
                    <label for="fantasy_name" class="col-sm-2 col-form-label">Nome Fantasia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fantasy_name" name="fantasy_name"> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="social_reason" class="col-sm-2 col-form-label">Razão Social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="social_reason" name="social_reason">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone">                  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cnpj" class="col-sm-2 col-form-label">CNPJ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cnpj" name="cnpj">                  
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>
</html>