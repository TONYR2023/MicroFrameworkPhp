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
                <td><?php echo $livre->getId_genre(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
 
</div>
</div>
</br>
 
<div class="card">
  <div class="card-body">
 
<form action="?controller=LivreController&method=addlivre" method='POST'>
    <h2>Formulaire de création d'un livre</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">Titre du livre</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Un titre" name="titre">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Auteur du livre</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Un auteur" name="auteur">
  </div> <label for="formGroupExampleInput2">Genre</label>
  <select class="form-select" aria-label="Default select example" name="id_genre">
  <option selected>Select le genre</option>
  <option value="1">Fantastique</option>
  <option value="3">Comédie</option>
  <option value="4">Drame</option>
  <option value="5">Action</option>
  <option value="6">Science-Fiction</option>
  <option value="7">Horreur</option>
  
</select>
        </br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Ajouter</button>
  </div>
 
 
</form>
</div>
</div>