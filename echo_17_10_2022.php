





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
 
 <?php   
 $text = <<< TEXTE
<table class="table table-dark table-striped">
 <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Sexe</th>
      <th scope="col">Profession</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Haussy</td>
      <td>Salome</td>
      <td>33 ans</td>
      <td>Femme</td>
      <td>Dev web</td>
    </tr>
    <tr>
      <td>Martin</td>
      <td>Justine</td>
      <td>25 ans</td>
      <td>Femme</td>
      <td>Infirmière</td>
    </tr>
    <tr>
      <td>Durand</td>
      <td>Julien</td>
      <td>28 ans</td>
      <td>Homme</td>
      <td>Routier</td>
    </tr>

        <tr>
      <td>Dupon</td>
      <td>Toto</td>
      <td>45 ans</td>
      <td>Homme</td>
      <td>Pompier</td>
    </tr> 
  </tbody>
</table>
TEXTE;

echo $text;
echo nl2br (" ceci est un tabeau \n Lorem ipsum dolor sit amet. \n  Sit corporis magni vel mollitia necessitatibus \n hic eligendi aperiam hic explicabo harum ut perferendis \n  ipsum qui repellendus libero. \n Cum autem modi sed internos iste est ipsum ducimus aut autem repellendus \t hic suscipit maiores sed sint iste eos rerum aliquid.");
?>

</body>
</html>