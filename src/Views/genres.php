<div class="card ">
  <div class="card-body ">
        <a href="?controller=GenreController&method=formulaireGenre"
        class="btn btn-primary">Ajouter un nouveau genre
        </a>
    </div>

<div class="card">
  <div class="card-body">
 
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">GENRE</th>
        </tr>
        </thead>

        <tbody>
            <?php foreach ($genres as $genre) : ?>
            <tr>
                <td>
                   
                    <span>
                        <?php echo htmlspecialchars($genre->getId()); ?>
                    </span>
                </td>

                <td>
                    <a href="?controller=GenreController&method=displayGenre&id=<?php echo $genre->getId(); ?>">
                        <?php echo htmlspecialchars($genre->getNom()); ?>
                    </a>
                </td> 
            </tr>
            <?php endforeach; ?>
        </tbody>
    
    </table>
  </div>
</div>
</div> 