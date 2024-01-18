<?php global$userVisited; ?>
<footer id="footer" class="bg-secondary bg-gradient pt-5">
    <div class="container">
      <h2 class="text-white fs-2">CODA</h2>
      <hr>
      <ul class="m-0 p-3">
        <li><a href="../sitemap.xml" class="text-white">Plan du site</a></li>
        <li><a href="../mentionlegales.html" class="text-white">Mention légales</a></li>
      </ul>
        <p>Nous avez eu : <?= count($_SESSION['userSession']) ?> visites</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>