<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop 1</title>
</head>

<body>
    <?php
    require_once __DIR__ .  "/classes/movie.php";

    $movie1 = new Movie('Matrix', 'It depicts a dystopian future in which humanity is unknowingly trapped inside a simulated reality, the Matrix', 'Keanu reves', 'Dystopian', 9);
    var_dump($movie1);

    $movie2 = new Movie('Inception', 'Cobb and Arthur are extractors; they perform corporate espionage using experimental dream-sharing technology to infiltrate their target subconscious and extract information', 'Leonardo Di Caprio', 'Action/Sci-fi', 9);
    var_dump($movie2);
    ?>



</body>

</html>