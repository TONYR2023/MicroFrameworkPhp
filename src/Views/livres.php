<div class="card ">
  <div class="d-flex justify-contentent-between">
  <div class="card-body ">
        <a href="?controller=LivreController&method=formulaireLivre" 
        class="btn btn-primary">Ajouter un nouveau livre
        </a>
  </div>
</div> 

  <br>

<div class="card">
<div class="card-body">

<h2>Les Livres :</h2>

    <div class="card">
        <div class="card-body">
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">TITRE</th>
                      <th scope="col">AUTEUR</th>
                      <th scope="col">GENRE</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($livres as $livre) : ?>
                      <tr>
                      <td>
                          <a href="?controller=LivreController&method=displayLivre&id=<?php echo $livre->getId(); ?>">
                              <?php echo htmlspecialchars($livre->getTitre()); ?>
                          </a>
                      </td>
                      <td>
                      <a href="?controller=AuteurController&method=displayauteur&id=<?php echo $livre->getId(); ?>">
                        <?php echo htmlspecialchars($livre->getAuteur()); ?>
                      </td>

                      
                        <td><?php echo $livre->getGenre()->getNom(); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
            </table>

          </div>
    </div>

</div>
</div>

              <td>
                  <a href="?controller=GenreController&method=displayGenre&id=<?php echo $genre->getId(); ?>">
                  <?php echo $livre->getGenre()->getNom(); ?>
                </td>
