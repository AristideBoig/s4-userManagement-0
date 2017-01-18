<?php
include"connexion.php";
/**
 * Created by PhpStorm.
 * User: arist
 * Date: 18/01/2017
 * Time: 14:35
 */

$bdd = connexion();
$req = $bdd->prepare("SELECT name, count(idrole), role.id FROM role JOIN user ON user.idrole = role.id GROUP BY role.id, name ORDER by name desc");
$req->execute();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="PremierTD">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <table class="table table-bordered" >
        <tr>
            <th> Name <button type="button" class="glyphicon glyphicon-arrow-up"><button type="button" class="glyphicon glyphicon-arrow-down"></th>
            <th> Nombre utilisateurs <button type="button" class="glyphicon glyphicon-arrow-up"><button type="button" class="glyphicon glyphicon-arrow-down"></th>
            <th> Actions </th>
        </tr>
        <?php
        while($donnees = $req->fetch()){
        ?>
        <tr>
            <td><?php echo $donnees['name'];?></td>
            <td><?php echo $donnees['count(idrole)'] ?></td>
            <td> <button type="button" class="glyphicon glyphicon-cog"><button type="button" class="glyphicon glyphicon-trash"></td>
        </tr>
        <?php
        } ?>
    </table>
</body>

</html>