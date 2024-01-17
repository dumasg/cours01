<?php

    require '../views/header.php';

    $date = date("Y_m_d_H_i_s");
    $filename = "../contact/contact_".$date.".txt";
    $formValad = true;
?>

<main class="mainFormulaire">

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){?>

    <?php 
      $data = $_POST;
      foreach ($data as $key => $value){
          if($key == "email"){
              if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
                  $formValad = false;
              }
          }
          if(empty($value)){
              $formValad = false;
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


