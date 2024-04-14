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
    if(!isset($_SESSION['score'])){
        header('location:./index.php');
    }
    $_SCORE = $_SESSION['score'];

    require_once './controller/banco.php';
    $banco = new banco();
    $banco->Conectar();
    $sql = 'SELECT * from score order by score DESC;';
    $_CONSULTA = $banco->Consultar($sql);
    $banco->Desconectar();

    ?>
    <div class="d-flex align-items-center justify-content-center" style="width:100vw; height:100vh;">
        <div class="caixa shadow rounded bg-light p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Seu Resultado:</h3>
                    <?php
                    $percent = ($_SCORE/6)*100;
                    echo'
                        <center><div class="rating mt-4">'.$percent.'%</div></center>
                    ';
                    ?>
                </div>
                <div class="col-lg-6">
                    <h3>Melhores tentativas:</h3>
                    <table class="table mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($_CONSULTA as $pointer){
                                echo'
                                
                                <tr>
                                    <th scope="col">'.$pointer['nome'].'</th>
                                    <th scope="col">'.$pointer['score'].'</th>
                                </tr>
                                
                                ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <center><a href="./index.php"><button class="btn btn-success mt-5">Tentar novamente?</button></a></center>
        </div>
    </div>
</body>
<script>
    
// Find al rating items
const ratings = document.querySelectorAll(".rating");

// Iterate over all rating items
ratings.forEach((rating) => {
  // Get content and get score as an int
  const ratingContent = rating.innerHTML;
  const ratingScore = parseInt(ratingContent, 10);

  // Define if the score is good, meh or bad according to its value
  const scoreClass =
    ratingScore < 40 ? "bad" : ratingScore < 60 ? "meh" : "good";

  // Add score class to the rating
  rating.classList.add(scoreClass);

  // After adding the class, get its color
  const ratingColor = window.getComputedStyle(rating).backgroundColor;

  // Define the background gradient according to the score and color
  const gradient = `background: conic-gradient(${ratingColor} ${ratingScore}%, transparent 0 100%)`;

  // Set the gradient as the rating background
  rating.setAttribute("style", gradient);

  // Wrap the content in a tag to show it above the pseudo element that masks the bar
  rating.innerHTML = `<span>${ratingScore} ${
    ratingContent.indexOf("%") >= 0 ? "<small>%</small>" : ""
  }</span>`;
});

</script>
</html>