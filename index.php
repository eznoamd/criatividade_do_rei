<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <?php
        require_once 'shared/compartilhado.php';
    ?>
</head>
<body>
    <?php
        if($_POST){
            if($_POST['type-form'] == 'submit'){
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['response'] = array();
                
                header('location:./perguntas.php');
            }
        }
    ?>
    <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
        <div class="caixa shadow rounded bg-light p-4">
            <center><h1 class="dark-blue mt-5">A Criatividade do Rei</h1></center>
            <form class="p-5" method="POST" action="./index.php">
                <div class="form-floating">
                    <input type="text" name="name" id="name" placeholder="Nome:" class="form-control" required=""/>
                    <label for="name">Nome:</label>
                </div>
                <center><button class="btn btn-lg btn-success mt-5">Começar</button></center>
                <input hidden value="submit" name="type-form" />
            </form>
        </div>
    </div>
</body>
</html>