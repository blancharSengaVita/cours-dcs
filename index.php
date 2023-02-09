<?php
$books = [
		[
				"title" => "L'étranger",
				"author" => "Albert Camus"
		],
		[
				"title" => "La peste",
				"author" => "Albert Camus"
		],
		[
				"title" => "La conjuration des imbéciles",
				"author" => "John Kennedy Toole"
		],
];


//$camusBooks = [];
// foreach ($books as $book){
//    if($book["author"] === "Albert Camus"){
//        $camusBooks[] = $book;
//    }
//        }
?>

<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> cours1 </title>
	<link rel="stylesheet" href="oui.css">
</head>
<body>



<?php foreach ($books as $book): ?>
	<?php if ( $book["author"] === $_GET["author"]): ?>
		<article>
			<h2> <?php echo $book["title"] ?> </h2>
			<p> ce livre a été écrit par <?= $_GET["author"]?></p>
		</article>
	<?php endif; ?>
<?php endforeach; ?>

<a href="http://cours1.localhost/?author=John+Kennedy+Toole"> John Kennedy Toole</a>
<a href="http://cours1.localhost/?author=Albert+Camus">Albert Camus</a>

</body>
</html>
