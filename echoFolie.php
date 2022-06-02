<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier PHP 1 : Echo Folie</title>
</head>
<body>
    <?php
    $nom="Cariou";
    $prenom="Kevin";
    $age=36;
    $email="kevin-cariou@hotmail.fr";
    ?>
    <p>Je m'appelle <?php echo $prenom ." ".$nom ;?>, j'ai <?php echo $age ;?> ans, mon adresse mail est <?php echo $email ;?>.</p>

    <?php if($age >=18) { ?>
        <p>Je suis majeur.</p>
        <?php } ?>

        <?php for($i =0 ; $i<5 ; $i ++) { 
            echo "<p> Titre </p>
            <p> Date  </p>
            <p> Auteur </p/>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, doloribus architecto? Illo ipsam incidunt sunt optio odio, sed delectus at eaque aperiam porro sapiente voluptate expedita tenetur, possimus neque voluptatibus. </p>"

         ;} ?>

</body>
</html>