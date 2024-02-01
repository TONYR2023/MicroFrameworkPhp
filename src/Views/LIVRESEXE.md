 elseif (!isset($_POST['titre']) ||
                !isset($_POST['auteur']) ||
                isset($_POST['id_genre']) === false)
                {
                    $message = "il faut remplir un des champs";
                    echo $message;
                }