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
    //$data = $_POST;
    $args = array(
            "genre" => FILTER_SANITIZE_SPECIAL_CHARS,
            "name" => FILTER_SANITIZE_SPECIAL_CHARS,
            "firstName" => FILTER_SANITIZE_SPECIAL_CHARS,
            "email" => FILTER_SANITIZE_EMAIL,
            "demande_service" => FILTER_SANITIZE_SPECIAL_CHARS,
            "message" => FILTER_SANITIZE_SPECIAL_CHARS
    );


    $dataClean = filter_input_array(INPUT_POST, $args);

     //Dans cette section je nettoie les valeurs de l'utilisateur
//      foreach ($data as $key => $value){
//          if($key == "genre"){
//              $value = htmlspecialchars($value, ENT_QUOTES);
//              $dataClean[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
//          }
//          if($key == "name" || $key == "firstName" || $key == "message") {
//              $value = htmlspecialchars($value);
//              $dataClean[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
//          }
//          if ($key == "email"){
//              $dataClean[$key] = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//          }
//          if ($key == "demande_service"){
//              $value = htmlspecialchars($value, ENT_QUOTES);
//              $dataClean[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
//          }
//      }
    $_SESSION['userForm'] = $dataClean;
    //var_dump($_SESSION['userForm']);
      // Dans cette partie je vérifie les données de l'utilisateur
      foreach ($dataClean as $key => $value){
          if ($key == "genre"){
              if($value !== "man" && $value !== "woman"){
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
                  $formValad = false;
                  $checkingError[$key] = false;
              }
          }
          else if($key == "demande_service"){
              if (($value !== "emploi") && ($value !== "information") && ($value !== "prestations")){
                  $formValad = false;
                  $checkingError[$key] = false;
              }
          }
      }
      if($formValad){
          $status = file_put_contents($filename, $dataClean);
          $_SESSION['userForm'] = [];
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


