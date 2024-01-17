<?php

    require '../views/header.php';

    $date = date("Y_m_d_H_i_s");
    $filename = "../contact/contact_".$date.".txt";
    $formValad = true;
    $dataClean = [];
    $checkingError = [
            "genre" => true,
            "name" => true,
            "firstName" => true,
            "email" => true,
            "demande_service" => true,
            "message" => true
    ];
    $test = "test";
?>

<main class="mainFormulaire">

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
    <?php
    $data = $_POST;

     //Dans cette section je nettoie les valeurs de l'utilisateur
      foreach ($data as $key => $value){
          if($key == "genre"){
              $value = htmlspecialchars($value, ENT_QUOTES);
              $dataClean[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
          }
          if($key == "name" || $key == "firstName" || $key == "message") {
              $value = htmlspecialchars($value);
              $dataClean[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
          }
          if ($key == "email"){
              $dataClean[$key] = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
          }
          if ($key == "demande_service"){
              $value = htmlspecialchars($value, ENT_QUOTES);
              $dataClean[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
          }
      }

      // Dans cette partie je vérifie les données de l'utilisateur
      foreach ($dataClean as $key => $value){
          if ($key == "genreClean"){
              if($value != "man" && $value != "woman"){
                  $formValad = false;
                  $checkingError[$key] = false;
              }

          }elseif ($key == "name" || $key == "firstName" || $key == "message"){
              if (empty($value)){
                  $formValad = false;
                  $checkingError[$key] = false;
              }
          }elseif ($key == "email"){
              if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                  $checkingError[$key] = false;
              }
          }
          else if($key == "demande_service"){
              if ($value == "proposition_emploi" || $value == "demande_information" || $value == "prestations"){
                  $formValad = false;
                  $checkingError[$key] = false;
              }
          }
      }
      if($formValad){
          $status = file_put_contents($filename, $data);
          if($status){
              ?>
              <div>
                  <h2>Merci pour la soumission de votre formulaire !</h2>
                  <p> Votre fichier est bien enregistré ! </p>
                  <?php require 'templateForm.php' ?>
              </div>
              <?php
          }else{
              ?> <h3>Votre fichier n'a pas été enregistré !</h3> <?php
          }
      }else{
          ?> <h2>Un des champs du formulaire a mal été rempli !</h2> <?php
          require 'templateForm.php';
      }

    ?>
<?php } else {

    require 'templateForm.php';

} ?>

</main>

<?php

    include '../views/footer.php';

?>


