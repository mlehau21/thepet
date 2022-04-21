<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title> Dog </title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/index.css" />
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php include('../partials/header.php') ?>

<main>  
		<h2>Random ảnh các loài chó</h2>
       
		<div class="image-content"></div>
    <a  href='javascript:void(0);' class='get-dog'><button type="button" class="btn btn-info">Đổi ảnh mới!</button></a>

</main>     


<?php include('../partials/footer.php') ?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
        function getDog(){
            $.getJSON("https://dog.ceo/api/breeds/image/random", function( data ) {
            
                $(".image-content").html("<img src='" + data.message + "'>");
                
            });
        }
        $('.get-dog').click(function(){
            getDog();
        });

        $(document).ready(function() {
            getDog();
        });

    </script>
</body>
</html>
