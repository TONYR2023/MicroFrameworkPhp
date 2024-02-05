<div class="card">
<div class="card-body">
<h2>Nom de L'auteur : <?php echo htmlspecialchars($auteur); ?></h2>
    <div class="card">
    <div class="card-body">
        <h3>Livre : 
        <a href="?controller=LivreController&method=displayLivre&id=<?php echo $livre->getId(); ?>">
        <?php echo htmlspecialchars($auteur); ?>
        </a>
        </h3>

        <h3>Genre : 
        <a href="?controller=GenreController&method=displayGenre&id=<?php echo $genre->getId(); ?>">
        <?php echo htmlspecialchars($genre->getNom()); ?>
        </a>
        </h3>

        <br>

        <a href='?controller=LivreController&method=livre'
        class="btn btn-primary">
        <h3> Retour </h3></a>

    </div>
    </div>

</div>
</div>
