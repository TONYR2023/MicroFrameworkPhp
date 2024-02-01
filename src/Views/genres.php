<div class="card">
  <div class="card-body">
  <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOM</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($genres as $genre): ?>
            <tr>
                <th scope="row"><?php echo $genre->getId(); ?></th>
                <td><?php echo $genre->getNom(); ?></td>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>

</br>