<div class="container">
    <h2>Ajouter un nouveau Genre</h2>
    <form action="?controller=GenreController&method=addGenre" method="post">
        <div class="form-group">
           
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>