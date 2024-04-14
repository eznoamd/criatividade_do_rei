<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <?php
        require_once 'shared/compartilhado.php';
    ?>
    <style>
        label{
            color:black; 
        }
    </style>
</head>
<body>
    <?php
        if($_POST){                                          //
            if($_POST['type-form'] == 'pergunta-1'){                    //  Isso faz que a pagina siga sendo apenas uma
                array_push($_SESSION['response'],$_POST['response']);   //
                $choice = 2;                                             
            }
            if($_POST['type-form'] == 'pergunta-2'){
                array_push($_SESSION['response'],$_POST['response']);
                $choice = 3;
            }
            if($_POST['type-form'] == 'pergunta-3'){
                array_push($_SESSION['response'],$_POST['response']);
                $choice = 4;
            }
            if($_POST['type-form'] == 'pergunta-4'){
                array_push($_SESSION['response'],$_POST['response']);
                $choice = 5;
            }
            if($_POST['type-form'] == 'pergunta-5'){
                array_push($_SESSION['response'],$_POST['response']);
                $choice = 6;
            }
            if($_POST['type-form'] == 'pergunta-6'){
                array_push($_SESSION['response'],$_POST['response']);
                echo '<script>window.location.replace("./controller/calcResponse.php");</script>';
            }
        }else{
            $choice = 1;
        }
    ?>
    <?php
        $jsonString = file_get_contents("./response.json");
        $data = json_decode($jsonString, true); 
        switch($choice){
            case 1:
                echo'
                
                <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
                    <div class="caixa shadow rounded bg-light p-4">
                        <form class="p-5" method="POST" action="./perguntas.php">
                            <h5>Pergunta nº 1</h5>
                            <h5 class="mb-4">'.$data['1']['titulo'].'</h5>
                            <label><input type="radio" name="response" checked value="a"> '.$data['1']['correta'].'</label><br>
                            <label><input type="radio" name="response" value="b"> '.$data['1']['errada-3'].'</label><br>
                            <label><input type="radio" name="response" value="c"> '.$data['1']['errada-2'].'</label><br>
                            <label><input type="radio" name="response" value="d"> '.$data['1']['errada-1'].'</label>

                            <center><button class="btn btn-lg btn-success mt-5">Começar</button></center>
                            <input hidden value="pergunta-1" name="type-form" />     
                        </form>
                    </div>
                </div>

                ';
                break;
            case 2:
                echo'
                
                <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
                    <div class="caixa shadow rounded bg-light p-4">
                        <form class="p-5" method="POST" action="./perguntas.php">
                            <h5>Pergunta nº 2</h5>
                            <h5 class="mb-4">'.$data['2']['titulo'].'</h5>
                            <label><input type="radio" name="response" checked value="a"> '.$data['2']['errada-1'].'</label><br>
                            <label><input type="radio" name="response" value="b"> '.$data['2']['errada-3'].'</label><br>
                            <label><input type="radio" name="response" value="c"> '.$data['2']['errada-2'].'</label><br>
                            <label><input type="radio" name="response" value="d"> '.$data['2']['correta'].'</label>

                            <center><button class="btn btn-lg btn-success mt-5">Começar</button></center>
                            <input hidden value="pergunta-2" name="type-form" />     
                        </form>
                    </div>
                </div>

                ';
                break;
            case 3:
                echo'
                
                <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
                    <div class="caixa shadow rounded bg-light p-4">
                        <form class="p-5" method="POST" action="./perguntas.php">
                            <h5>Pergunta nº 3</h5>
                            <h5 class="mb-4">'.$data['3']['titulo'].'</h5>
                            <label><input type="radio" name="response" checked value="a"> '.$data['3']['errada-2'].'</label><br>
                            <label><input type="radio" name="response" value="b"> '.$data['3']['errada-3'].'</label><br>
                            <label><input type="radio" name="response" value="c"> '.$data['3']['correta'].'</label><br>
                            <label><input type="radio" name="response" value="d"> '.$data['3']['errada-1'].'</label>

                            <center><button class="btn btn-lg btn-success mt-5">Começar</button></center>
                            <input hidden value="pergunta-3" name="type-form" />     
                        </form>
                    </div>
                </div>

                ';
                break;
            case 4:
                echo'
                
                <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
                    <div class="caixa shadow rounded bg-light p-4">
                        <form class="p-5" method="POST" action="./perguntas.php">
                            <h5>Pergunta nº 4</h5>
                            <h5 class="mb-4">'.$data['4']['titulo'].'</h5>
                            <label><input type="radio" name="response" checked value="a"> '.$data['4']['errada-2'].'</label><br>
                            <label><input type="radio" name="response" value="b"> '.$data['4']['errada-3'].'</label><br>
                            <label><input type="radio" name="response" value="c"> '.$data['4']['correta'].'</label><br>
                            <label><input type="radio" name="response" value="d"> '.$data['4']['errada-1'].'</label>

                            <center><button class="btn btn-lg btn-success mt-5">Começar</button></center>
                            <input hidden value="pergunta-4" name="type-form" />     
                        </form>
                    </div>
                </div>

                ';
                break;
            case 5:
                echo'
                
                <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
                    <div class="caixa shadow rounded bg-light p-4">
                        <form class="p-5" method="POST" action="./perguntas.php">
                            <h5>Pergunta nº 5</h5>
                            <h5 class="mb-4">'.$data['5']['titulo'].'</h5>
                            <label><input type="radio" name="response" checked value="a"> '.$data['5']['errada-3'].'</label><br>
                            <label><input type="radio" name="response" value="b"> '.$data['5']['correta'].'</label><br>
                            <label><input type="radio" name="response" value="c"> '.$data['5']['errada-2'].'</label><br>
                            <label><input type="radio" name="response" value="d"> '.$data['5']['errada-1'].'</label>

                            <center><button class="btn btn-lg btn-success mt-5">Começar</button></center>
                            <input hidden value="pergunta-5" name="type-form" />     
                        </form>
                    </div>
                </div>

                ';
                break;
            case 6:
                echo'
                
                <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
                    <div class="caixa shadow rounded bg-light p-4">
                        <form class="p-5" method="POST" action="./perguntas.php">
                            <h5>Pergunta nº 6</h5>
                            <h5 class="mb-4">'.$data['6']['titulo'].'</h5>
                            <label><input type="radio" name="response" checked value="a"> '.$data['6']['errada-1'].'</label><br>
                            <label><input type="radio" name="response" value="b"> '.$data['6']['errada-3'].'</label><br>
                            <label><input type="radio" name="response" value="c"> '.$data['6']['errada-2'].'</label><br>
                            <label><input type="radio" name="response" value="d"> '.$data['6']['correta'].'</label>

                            <center><button class="btn btn-lg btn-success mt-5">Começar</button></center>
                            <input hidden value="pergunta-6" name="type-form" />     
                        </form>
                    </div>
                </div>

                ';
                break;
        }
    ?>
</body>
</html>