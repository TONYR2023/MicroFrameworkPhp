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