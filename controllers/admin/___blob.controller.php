<?php

use App\modeles\ModeleClasse;

function uploadImage($file)
{
    // Vérifiez si le fichier a été téléchargé sans erreur
    if ($file['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/article/';
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        // Vérifiez si le type de fichier est autorisé
        if (in_array($file['type'], $allowedTypes)) {
            $fileName = basename($file['name']);
            $uploadFilePath = $uploadDir . $fileName;

            // Vérifiez si un fichier avec le même nom existe déjà
            while (file_exists($uploadFilePath)) {
                $fileInfo = pathinfo($fileName);
                $baseName = $fileInfo['filename'];
                $extension = $fileInfo['extension'];

                // Générer un nouveau nom unique en ajoutant un suffixe numérique
                $fileName = $baseName . '_' . uniqid() . '.' . $extension;
                $uploadFilePath = $uploadDir . $fileName;
            }

            // Déplacez le fichier téléchargé vers le répertoire de destination
            if (move_uploaded_file($file['tmp_name'], $uploadFilePath)) {
                return $uploadFilePath;
            } else {
                throw new Exception('Erreur lors du téléchargement de l\'image.');
            }
        } else {
            throw new Exception('Type de fichier non autorisé.');
        }
    } else {
        throw new Exception('Erreur lors du téléchargement du fichier.');
    }
}

function deleteImage($filePath)
{
    if (file_exists($filePath)) {
        unlink($filePath);
    }
}


if (!empty($_POST) && empty($_GET['id'])) :
    extract($_POST);
    try {
        // Téléchargez l'image et obtenez le chemin du fichier
        if (isset($_FILES['Image'])) {
            $imagePath = uploadImage($_FILES['Image']);
            $_POST['Image'] = $imagePath; // Ajoutez le chemin de l'image au tableau POST
        }
        $_POST['Identreprise'] = 1;
        // Ajoutez l'article avec le chemin de l'image
        ModeleClasse::add("actualite", $_POST);
        $success = "article ajouté avec succès";
    } catch (Throwable $th) {
        return $error = $th->getMessage();
    }
endif;


try {
    $listArticle = [];
    $read = ModeleClasse::getall("actualite");
    foreach ($read as $row) {
        $object = [
            'id' => $row['id'],
            'Titre' => $row['titre'],
            'Contenu' => $row['contenu'],
            'Detail_Contenu' => $row['detail_contenu'],
            'Image' => $row['image']
        ];
        array_push($listArticle, $object);
    }
} catch (Throwable $th) {
    echo $th->getMessage();
}

if (!empty($_GET["id"])) :
    extract($_GET);
    $explode = explode('-', $id);
    if ($explode[0] == 'edit') :
        if (!empty($_POST)) :
            extract($_POST);
            if (isset($_FILES['Image'])) {
                $imagePath = uploadImage($_FILES['Image']);
                $_POST['Image'] = $imagePath; // Ajoutez le chemin de l'image au tableau POST
            }
            try {
                ModeleClasse::update('actualite', $_POST, $explode[1]);
                $success = "Mise à jour effectuée avec succès";
                header('location:' . LINK . '___blob');
            } catch (Throwable $th) {
                echo $th->getMessage();
                die();
            }
        else :
            echo "vide";
            die();
        endif;
    elseif ($explode[0] == 'del') :
        try {
            // Récupérer l'article à supprimer pour obtenir le chemin de l'image
            $article = ModeleClasse::getone($explode[1],'actualite');
            if ($article && !empty($article['Image'])) {
                deleteImage($article['Image']);
            }
            ModeleClasse::delete($explode[1], 'actualite');
            $success = "Suppression effectuée avec succès";
            header('location:' . LINK . '___blob');
        } catch (Throwable $th) {
            echo $th->getMessage();
            die();
        }
    endif;
endif;
