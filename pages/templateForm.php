<?php
//var_dump($_POST);
global$checkingError;
?>


<h2>Formulaire de contact : </h2>

<form id="formulaire" method="post" action="?page=contact" >
    <div class="mb-3">
        <select name="genre" class="form-select" aria-label="genre">
            <option>-- Selectionner votre genre</option>
            <option <?php if(isset($_SESSION['userForm']['genre']) && $_SESSION['userForm']['genre'] === "man"){ echo "selected" ;} ?> value="man">Messieur</option>
            <option <?php if(isset($_SESSION['userForm']['genre']) && $_SESSION['userForm']['genre'] === "woman"){ echo "selected" ;} ?> value="woman">Madame</option>
        </select>
        <?php if($checkingError['genre'] == false) { ?>
            <span>Votre genre ne peut être que Homme ou Femme !</span>
        <?php } ?>
    </div>
    <div class="mb-3">

        <label for="name" class="form-label">Nom</label>
        <input type="text" name="name" class="form-control form-text" id="name" aria-describedby="userName" value="<?php if(isset($_SESSION['userForm']['name'])){ echo $_SESSION['userForm']['name']; }?>">
        <?php if($checkingError['name'] == false) { ?>
        <span>Votre nom ne peut pas être vide</span>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="firstName" class="form-label">Prénom</label>
        <input type="text" name="firstName" class="form-control form-text" id="firstName" aria-describedby="userFirstName" value="<?php if(isset($_SESSION['userForm']['firstName'])){ echo $_SESSION['userForm']['firstName']; }?>">
        <?php if($checkingError['firstName'] == false) { ?>
            <span>Votre prénom ne peut pas être vide</span>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control form-text" id="email" aria-describedby="userEmail" value="<?php if(isset($_SESSION['userForm']['email'])){ echo $_SESSION['userForm']['email']; }?>">
        <?php if($checkingError['email'] == false) { ?>
        <span>Votre email n'est pas valide !</span>
        <?php } ?>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input <?php if(isset($_SESSION['userForm']['demande_service']) && ($_SESSION['userForm']['demande_service'] === "proposition_emploi")){ echo "checked" ;} ?>  class="form-check-input" type="radio" name="demande_service" value="=proposition_emploi" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Proposition d'emploi
            </label>
        </div>
        <div class="form-check">
            <input <?php if(isset($_SESSION['userForm']['demande_service']) && ($_SESSION['userForm']['demande_service'] === "demande_information")){ echo "checked" ;} ?> class="form-check-input" type="radio" name="demande_service" value="demande_information" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Demande d'information
            </label>
        </div>
        <div class="form-check">
            <input <?php if(isset($_SESSION['userForm']['demande_service']) && ($_SESSION['userForm']['demande_service'] === "prestations")){ echo "checked" ;} ?> class="form-check-input" type="radio" name="demande_service" value="prestations" id="flexRadioDefault3" >
            <label class="form-check-label" for="flexRadioDefault3">
                Prestations
            </label>
        </div>
        <?php if($checkingError['demande_service'] == false) { ?>
            <span>Votre demande n'est pas valide !</span>
        <?php } ?>
    </div>
    <div class="form-floating mb-3">
        <textarea name="message" class="form-control" placeholder="Votre message ici" id="message"><?php if(isset($_SESSION['userForm']['message'])){ echo $_SESSION['userForm']['message']; }?></textarea>
        <label for="message">Votre message</label>
        <?php if($checkingError['message'] == false) { ?>
            <span>Votre message ne peut pas être vide !</span>
        <?php } ?>
    </div class="mb-3">
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
