<?php
require_once "acoes.php";

$table_users = selecionarTabela('usuarios');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>
<body>
   <table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Cargo</th>
    </tr>>
    <?php foreach ($table_users as $user): ?> 
       <tr>
         <td>
           <?php echo $user ['id'] ?>

        </td>
        <td>
           <?php echo $user ['nome'] ?>

        </td>
         <td>
           <?php echo $user ['email'] ?>

        </td>
         <td>
           <?php echo $user ['senha'] ?>

        </td>
         <td>
           <?php echo $user ['cargo'] ?>

        </td>
       </tr>
    <?php endforeach  ?>
   </table>
</body>
</html>