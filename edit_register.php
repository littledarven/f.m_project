<?php
    session_start();
    $id = $_GET['id'];
    $line = 1;
    $file = fopen('hist_firm.txt','r');
    while(! feof($file)){ 
        $data = fgets($file);
        if ($id==$line){
            $data = explode(",",$data);
            break; 
        }
        $line++;                 
    }
    $new_firm = array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]);
    $new_firm = implode (',',$new_firm);
    $_SESSION['new_firm'] = $new_firm;
    $_SESSION['id'] = $id;
?>

<div class="row">
        <section class="col-md-9">
            <form method="POST" action="edit.php">
                <div class="form-group row">
                    <label for="new_fantasy_name" class="col-sm-2 col-form-label">Nome Fantasia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="new_fantasy_name" name="new_fantasy_name" value="<?=$data[1]?>"> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_social_reason" class="col-sm-2 col-form-label">Razão Social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="new_social_reason" name="new_social_reason" value="<?=$data[2]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_email" class="col-sm-2 col-form-label">new_email</label>
                    <div class="col-sm-10">
                        <input type="new_email" class="form-control" id="new_email" name="new_email" value="<?=$data[3]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_phone" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="new_phone" name="new_phone" value="<?=$data[4]?>">                  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new_phone" class="col-sm-2 col-form-label">new_cnpj</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="new_cnpj" name="new_cnpj" value="<?=$data[5]?>">                  
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>