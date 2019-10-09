<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>
<p>message: <?php echo $_POST['message']; ?> </p>
<p>votre choix <?php echo $_POST['choix']; ?> </p>
<p>la case qui a été coché est:
    <?php
    echo $_POST['case'];
    if(isset($_POST['case']) && isset($_POST['case1'])) {
        echo 'les cases cochés sont :' . $_POST['case'] . 'et ' . $_POST['case1'];
    }


    ?>
</p>
<!-- <p>ton animal préféré est: <php 
foreach($_POST['case'] as $valeur) {
    echo 'La valeur est' . $valeur . 'a été cochée<br>'; 
} ?>-->

</p>
<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>