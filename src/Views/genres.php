

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

