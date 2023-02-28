<?php
require "array_functions.php";

$author = $_GET["author"]??"";

//on essaie d'affecter à la variable auteur quelque chose qui existe pas
//$author = $_GET["author"];


$books = [
		[
				"title" => "L’étranger",
				"author" => "Albert Camus",
				"release_date" => "1942"
		],
		[
				"title" => "La peste",
				"author" => "Albert Camus",
				"release_date" => "1947"
		],
		[
				"title" => "La conjuration des imbéciles",
				"author" => "John Kennedy Toole",
				"release_date" => "1980"
		]
];

$filterByAuthor = function ($item) use($author):bool
{
	return $item["author"] === $author;
};

$filteredBooksByAuthors = filter($books, $filterByAuthor);


$authors = array_column($books, "author", "author");

//on demande la vue apres avoir fait toute ces opérations
require "index.view.php";

