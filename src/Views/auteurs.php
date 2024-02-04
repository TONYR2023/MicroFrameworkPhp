

<div class="card">
<div class="card-body">
<h2>Les Auteurs :</h2>
<div class="card">
  <div class="card-body">
              
    <<table class="table">
    <thead>
        <tr>
            <th scope="col">AUTEUR</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($auteurs as $auteur) : ?>
            <tr>            
                <td>
                    <a href='?controller=AuteurController&method=Auteurs&id=<?php echo $auteur->getId(); ?>'>
                        <?php echo $auteur->getNom(); ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



        </div>
</div>

  </div>
</div>
