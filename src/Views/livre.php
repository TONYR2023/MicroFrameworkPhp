<div class="card">
<div class="card-body">

<h2>Le Titre du Livre : <?php echo htmlspecialchars($titre); ?></h2>

    <div class="card">
        <div class="card-body"> 

            <h3>Auteur : 
            <a href="?controller=LivreController&method=displayLivre&id=<?php echo $livre->getId(); ?>">
            <?php echo htmlspecialchars($livre->getAuteur()); ?>
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
</div>