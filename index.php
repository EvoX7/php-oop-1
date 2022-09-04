<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop 1</title>
</head>

<body>


    <h1>Movies</h1>


    <?php
    require_once __DIR__ .  "/classes/movie.php"; ?>


    <ul>
        <li>


            <?php


            $movie1 = new Movie('Matrix', 'It depicts a dystopian future in which humanity is unknowingly trapped inside a simulated reality, the Matrix.', 'Keanu Reeves', 'Dystopian', 9);

            $movie1->setRating('Rating updated');

            echo 'Title:' .  $movie1->getTitle() . '<br>';
            echo 'Plot:' . $movie1->getPlot() . '<br>';
            echo 'Protagonist:' . $movie1->getProtagonist() . '<br>';
            echo 'Genre:' . $movie1->getGenre() . '<br>';
            echo 'User rating:' . $movie1->getRating() . '<br>' . '<br>' . '<li>';






            $movie2 = new Movie('Inception', 'Cobb and Arthur are extractors; they perform corporate espionage using experimental dream-sharing technology to infiltrate their target subconscious and extract informations.', 'Leonardo Di Caprio', 'Action/Sci-fi', 7);

            $movie2->setRating('Rating updated');

            echo 'Title:' . $movie2->getTitle() . '<br>';
            echo 'Plot:' . $movie2->getPlot() . '<br>';
            echo 'Protagonist:' . $movie2->getProtagonist() . '<br>';
            echo 'Genre:' . $movie2->getGenre() . '<br>';
            echo 'User rating:' . $movie2->getRating() . '<br>';

            ?>
        </li>
    </ul>




</body>

</html>