<<<<<<< HEAD

<?php
        foreach ($genres as $genre) {
            echo "<li>  <a class='text-decoration-none text-black' 
            href='?controller=GenreController&method=displayGenre&id=" 
            . $genre->getId() . "'>Genre " . $genre->getId() . " : " . $genre->getNom() . "</a> </li>";
        }

        ?>

        
        