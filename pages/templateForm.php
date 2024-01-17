<?php
//var_dump($_POST);
global$checkingError;
?>


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
        <?php if($checkingError['name'] == false) { ?>
        <span>Votre nom ne peut pas être vide</span>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="firstName" class="form-label">Prénom</label>
        <input type="text" name="firstName" class="form-control form-text" id="firstName" aria-describedby="userFirstName">
        <?php if($checkingError['firstName'] == false) { ?>
            <span>Votre prénom ne peut pas être vide</span>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control form-text" id="email" aria-describedby="userEmail">
        <?php if($checkingError['email'] == false) { ?>
        <span>Votre email n'est pas valide !</span>
        <?php } ?>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="demande_service" value="=proposition_emploi" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Proposition d'emploi
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="demande_service" value="demande_information" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Demande d'information
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="demande_service" value="prestations" id="flexRadioDefault3" checked>
            <label class="form-check-label" for="flexRadioDefault3">
                Prestations
            </label>
        </div>
        <?php if($checkingError['demande_service'] == false) { ?>
            <span>Votre demande n'est pas valide !</span>
        <?php } ?>
    </div>
    <div class="form-floating mb-3">
        <textarea name="message" class="form-control" placeholder="Votre message ici" id="message"></textarea>
        <label for="message">Votre message</label>
        <?php if($checkingError['message'] == false) { ?>
            <span>Votre message ne peut pas être vide !</span>
        <?php } ?>
    </div class="mb-3">
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
