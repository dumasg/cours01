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
              </div>
              <?php
          }else{
              ?> <h3>Votre fichier n'a pas été enregistré !</h3> <?php
          }
      }else{
          ?> <h2>Un des champs du formulaire a mal été rempli !</h2> <?php
      }

    ?>
<?php } else { ?>


<h2>Formulaire de contact : </h2>
    
<form id="formulaire" method="post" action="?page=contact" >
    <div class="mb-3">
        <select name="genre" class="form-select" aria-label="genre">
        <option selected>-- Selectionner votre genre</option>
        <option value="man">Messieur</option>
        <option value="woman">Madame</option>
        </select>
    </div>
  <div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" name="name" class="form-control form-text" id="name" aria-describedby="userName">
  </div>
  <div class="mb-3">
    <label for="firstName" class="form-label">Prénom</label>
    <input type="text" name="firstName" class="form-control form-text" id="firstName" aria-describedby="userFirstName">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control form-text" id="email" aria-describedby="userEmail">
  </div>
  <div class="mb-3">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="demande_service" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Proposition d'emploi
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="demande_service" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Demande d'information
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="demande_service" id="flexRadioDefault3" checked>
        <label class="form-check-label" for="flexRadioDefault3">
            Prestations
        </label>
    </div>
  </div>
  <div class="form-floating mb-3">
  <textarea name="message" class="form-control" placeholder="Votre message ici" id="message"></textarea>
  <label for="message">Votre message</label>
</div class="mb-3">
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php } ?>

</main>

<?php

    include '../views/footer.php';

?>


