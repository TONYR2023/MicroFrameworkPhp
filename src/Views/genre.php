
<div class="card">
<div class="card-body">

    <div class="card">
    <div class="card-body">
        <table class="table">
     
              <thead>
                <tr>
                  <th scope="col">TITRE</th>
                  <th scope="col">AUTEUR</th>
                </tr>
              </thead>

              <tbody>
       
        <?php foreach ($livres as $livre): ?>
            <tr>
                <td>
                <a href="?controller=LivreController&method=displayLivre&id=<?php echo $livre->getId(); ?>">
                    <?php echo htmlspecialchars($livre->getTitre()); ?>
                </a>
                </td>

                <td>
                <a href="?controller=LivreController&method=displayLivre&id=<?php echo $livre->getId(); ?>">
                    <?php echo htmlspecialchars($livre->getAuteur()); ?>
                </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>

    </div>
</div>
</div>

