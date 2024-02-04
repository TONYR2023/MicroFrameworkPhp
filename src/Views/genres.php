<<<<<<< HEAD


<?php foreach ($genres as $genre): ?>
    <div class="btn-group" role="group" aria-label="Basic example">
        <form action="?controller=GenreController&method=genre" method="get">
            <input type="hidden" name="id" value="<?php echo $genre->getId(); ?>">
            <button class="btn btn-secondary" type="submit" role="search">
            
                <?php echo $genre->getNom(); ?>
               
            </button>
        </form>
    </div>
<?php endforeach; ?>
<div class="btn-group" role="group" aria-label="Basic example">
        <form action="?controller=GenreController&method=LivreParGenres" method="get">
            <input type="hidden" name="id" value="<?php echo $genre->getId(); ?>">
            <button class="btn btn-secondary" type="submit" role="search">
            
                <?php echo $genre->getNom(); ?>
               
            </button>
            </button>
        </form>
    </div>

=======
<div class="card">
    <div class="card-body">

        <form action="?controller=GenreController&method=addGenre" method="post">
            <h2>Formulaire de création d'un genre</h2>
                
                <div class="form">
                    <label for="nom">Nom du genre</label>
                    <input type="text" class="form" id="nom" placeholder="Un genre" name="nom">
                </div>
   
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
</div>
<br>
<h2>Les Genres :</h2>
<div class="card">
  <div class="card-body">
        <?php foreach ($genres as $genre): ?>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <form action="?controller=GenreController&method=genre" method="get">
                    <input type="hidden" name="id" value="<?php echo $genre->getId(); ?>">
                    
                    <button class="btn btn-secondary" type="submit" role="search">
                        <?php echo $genre->getNom(); ?>
                    </button>
                    
                    </form>
                </div>
        <?php endforeach; ?>

    </div>
</div>


>>>>>>> tonyr
