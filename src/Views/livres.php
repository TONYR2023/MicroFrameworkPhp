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
                    <td><a href='?controller=SearchController&method=searchByTitre&id=<?php echo $livre->getId(); ?>'>
                    <?php echo $livre->getTitre() ?></a>
                    </td>
                    <td><?php echo $livre->getAuteur(); ?></td>
                    <td><?php echo $livre->getGenre()->getNom(); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
        </table>

      </div>
</div>

</div>
</div>
