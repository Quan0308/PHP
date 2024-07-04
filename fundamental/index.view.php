<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <!-- <?php echo $message; ?> -->
        <?= $message; ?>
    </h1>

    <h1>Recommended books</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book; ?></li>
        <?php endforeach; ?>
    </ul>
    <p>
        <?= $books[0]; ?>
    </p>

    <h1>Recommended books with key value</h1>
    <ul>
        <?php foreach ($booksKeyValue as $book) : ?>
            <li>
                <h2><?= $book["title"]; ?></h2>
                <p>Author: <?= $book["author"]; ?></p>
                <p>Price: <?= $book["price"]; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Recommended books by John Doe</h1>
    <ul>
        <?php foreach ($filterBooksByAuthor as $book) : ?>
            <li>
                <h2><?= $book["title"]; ?></h2>
                <p>Author: <?= $book["author"]; ?></p>
                <p>Price: <?= $book["price"]; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>