<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">

<link rel="stylesheet" href="css/jPages.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/estilos.css">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

<script src="js/jPages.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/codigo.js"></script>

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-28718218-1']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<script>
  /* when document is ready */
  $(function() {

    /* initiate plugin */
    $("div.holder").jPages({
      containerID : "itemContainer",
      perPage     : 3,
      animation   : "fadeInDown",
      delay       : 50,
      direction   : "auto"
    });

    /* on select change */
    $("select").change(function() {
      /* get new direction */
      var newDirection = $(this).val();

      /* destroy jPages and initiate plugin again */
      $("div.holder").jPages("destroy").jPages({
        containerID : "itemContainer",
        perPage     : 5,
        animation   : "fadeInDown",
        delay       : 50,
        direction   : newDirection
      });
    });
  });
  </script>


</head>
<body>
    

    <div id="content" class="defaults">


<!-- item container -->
<ul id="itemContainer">

<?php 
include ('database.php');
$clientes = new Database();
$listado=$clientes->read();
?>

<?php 
while ($row=mysqli_fetch_object($listado)){
$id=$row->id;
$nombres=$row->nombres." ".$row->apellidos;
$telefono=$row->telefono;
$direccion=$row->direccion;
$email=$row->correo_electronico;
?>

<li><img class="img-lista" src="img/goku.jpg" alt="image">


<?php
}
?>    



</ul>

<!-- navigation holder -->
<div class="holder"></div>

</div> <!--! end of #content -->

</body>
</html>



