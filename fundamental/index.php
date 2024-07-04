<?php
$bookName = "PHP Fundamental";
$isRead = true;

if ($isRead) {
    $message = "I have read $bookName";
} else {
    $message = "I have not read $bookName";
}

$books = [
    "PHP Fundamental",
    "PHP Advanced",
    "PHP OOP",
    "PHP Design Pattern"
];

$booksKeyValue = [
    [
        "title" => "PHP Fundamental",
        "author" => "John Doe",
        "price" => 100
    ],
    [
        "title" => "PHP Advanced",
        "author" => "Jane Doe",
        "price" => 200
    ],
];

function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

// anonymous function
// $filterByAuthor = function ($booksKeyValue, $authorName) {
//     $authorBooks = [];
//     foreach ($booksKeyValue as $book) {
//         if ($book["author"] == $authorName) {
//             $authorBooks[] = $book;
//         }
//     }
//     return $authorBooks;
// }

// $filterBooksByAuthor = filter($booksKeyValue, function ($book) {
//     return $book["author"] == "John Doe";
// });

$filterBooksByAuthor = array_filter($booksKeyValue, function ($book) {
    return $book["author"] === "John Doe";
});

include "index.view.php";
