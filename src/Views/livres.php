<div class="card">
  <div class="card-body">
  <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITRE</th>
            <th scope="col">AUTEUR</th>
            <th scope="col">GENRE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($livres as $livre): ?>
            <tr>
                <th scope="row"><?php echo $livre->getId(); ?></th>
                <td><?php echo $livre->getTitre(); ?></td>
                <td><?php echo $livre->getAuteur(); ?></td>
                <td><?php echo $livre->getIdGenre(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
</div>
</br>

<div class="card">
  <div class="card-body">

<form  action='?controller=LivreController&method=addLivre' method='POST'>
    <h2>Formulaire de création d'un livre</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">Titre du livre</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titre du livre">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Auteur du livre</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Auteur du livre">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Genre du livre</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Genre du livre">
  </div>
        </br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Ajouter</button>
  </div>


</form>
</div>
</div>











