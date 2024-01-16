<?php
    include '../views/header.php';
?>


  <section
    class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-evenly align-items-center mt-5">
    <div style="width: 300px;">
      <img class="img-thumbnail" src="../assets/photos/geremy 2.webp" alt="">
    </div>
    <div class="mt-3">
      <h2>Gérémy D.</h2>
      <hr>
      <p>Administrateur système DevOps</p>
      <button onclick="window.location='../download/papier_cv_gerem.pdf'" class="btn btn-secondary">Télécharger mon CV</button>
    </div>
  </section>

  <section class="container mt-5">
    <div>
      <h3>À propos</h3>
    </div>
    <div>
      <p>Je me présente <strong id="name">Gérémy DUMAS</strong>, j'ai appris le développement en partie en <span style="font-style: italic;">autodidacte</span> avant d'intégrer une formation de DevOps au campus numérique. Cette volonter d'intégrer la formation DevOps vient du fais que j'ai appris chez moi à mettre en place un petit serveur sous Open Media Vault afin de gérer une bibliothèque de film.</p>
    </div>
  </section>

  <section class="container p-5">
    <p class="bg-dark text-white p-3 text-center">"Je ne suis pas difficile, je me satisfais aisément du meilleur"</p>
  </section>

  <section class="container d-flex flex-column flex-sm-row align-items-start justify-content-evenly p-5">
    <div>
      <div>
        <h3>Compétences</h3>
      </div>
      <div>
        <ul>
          <li>Formation</li>
          <li>Informatique</li>
        </ul>
      </div>
    </div>
    <div class="mt-3 mt-sm-0">
      <div>
        <h3>Hobbies</h3>
      </div>
      <div>
        <ul>
          <li>Sport</li>
          <li>Informatique</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="container mt-5">
    <div>
      <h3>Expériences</h3>
    </div>
    <div class="mt-3">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Poste</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Formation DevOps</td>
            <td>2023 - 2025</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Formateur</td>
            <td>2019- 2023</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Coach sportif</td>
            <td>2019 - 2023</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

<?php

    include '../views/footer.php';

?>