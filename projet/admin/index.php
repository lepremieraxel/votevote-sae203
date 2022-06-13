<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- META -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- LINK -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- TITLE -->
    <title>ADMIN</title>
  </head>
  <body>
    <?php 
      include "../src/includes/question_active.php";
      include "../src/includes/page_admin.php";
    ?>
    <div class="container mt-4">
      <h1 class="text-uppercase text-center">Administration</h1>
      <div class="d-flex flex-row flex-wrap mt-5 justify-content-between">
        <div class="d-flex flex-column">
          <div class="d-flex flex-column">
            <div class="d-flex flex-row flex-wrap align-items-center">
              <h3 class="text-uppercase text-decoration-underline">Question active :</h3>
            </div>
            <h3 class="fw-normal ms-3"><?php echo $question;?></h3>
            <div class="d-flex flex-row flex-wrap align-items-start justify-content-between ps-3 pe-3 mt-3">
              <div class="d-flex flex-column align-items-center">
                <div class="d-flex flex-row align-items-center">
                  <h4 class="fs-4">Nombre de votants :</h4>
                  <h4 class="fw-normal ms-3"><?php echo $nbVotants;?></h4>
                </div>
                <div class="resultat-active">
                  <canvas class="chart" aria-label="chart" role="img"></canvas>
                </div>
              </div>
              <div class="d-flex flex-column align-items-center ms-5">
                <h4>Votes (précis) :</h4>
                <ul>
                  <li>Réponse1 : 30</li>
                  <li>Réponse2 : 25</li>
                  <li>Réponse3 : 150</li>
                  <li>Réponse4 : 38</li>
                  <li>Réponse5 : 78</li>
                  <li>Réponse6 : 46</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column mb-3 mt-5">
            <div class="d-flex flex-row">
              <h3 class="text-uppercase text-decoration-underline">Base de données :</h3>
            </div>
            <div class="d-flex flex-column align-items-start justify-content-between ps-3 pe-3 mt-3">
              <div class="d-flex flex-row align-items-center ">
                <h4 class="fs-4">Nombre de questions :</h4>
                <h4 class="fw-normal ms-3">34</h4>
              </div>
              <div class="d-flex flex-row align-items-center ">
                <h4 class="fs-4">Nombre de votes (total) :</h4>
                <h4 class="fw-normal ms-3">1346</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center m-auto">
          <div class="d-flex flex-column bg-light shadow rounded p-5">
            <a href="new/" class="btn btn-lg btn-primary mb-5">Ajouter une question</a>
            <a href="questions/ " class="btn btn-lg btn-primary">Gérer les questions</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../src/js/chart.js"></script>
  </body>
</html>