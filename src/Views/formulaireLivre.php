<div class="container">
    <h2>Ajouter un nouveau livre</h2>
    <form action="?controller=LivreController&method=addLivre" method="post">
        <div class="form-group">
            <label for="titre">Titre du livre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="form-group">
            <label for="auteur">Auteur du livre</label>
            <input type="text" class="form-control" id="auteur" name="auteur" required>
        </div>
        <div class="form-group">
            <label for="id_genre">Genre du livre</label>
            <select class="form-control" id="id_genre" name="id_genre" required>
                <?php foreach ($genres as $genre) : ?>
                    <option value="<?php echo $genre->getId(); ?>">
                        <?php echo $genre->getNom(); ?>
                    </option>
                <?php endforeach; ?>
                
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter le livre</button>
    </form>
</div>