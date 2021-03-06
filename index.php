<?php
    $message = "Hello";
    $name = "Brady Peterson";
    $greeting = "{$message} {$name}";
    echo $greeting;
    
    var_dump($greeting);

    $articles = ["First post", "Another Post", "Third Post"];

    var_dump($articles);

    echo $articles[0];

    $associateIndex = [
      "first" => "First post", 
      "second" => "Another Post", 
      "third" => "Third Post"
    ];

    var_dump($associateIndex);

    echo $associateIndex["second"];

    $articlesMap = [
      ["title" => "First Post", "content" => "This is the first post"],
      ["title" => "Second Post", "content" => "This is the second post"],
      ["title" => "Third Post", "content" => "This is the third post"],
    ];

    foreach ($articlesMap as $index => $article) {
      echo $index . ": " . $article["title"], ", ";
    }

    foreach ($associateIndex as $index => $article) {
      echo $index . ": " . $article . ", ";
    }

    if (empty(articles)) {
      echo "Articles is empty";
    } else {
      echo "it's not empty";
    }

    if ("2" == 2) {
      echo "no type check";
    } 
    if ("2" === 2) {
      echo "type check";
    }


    $day = "Tuesday";

    switch($day) {
      case "Monday":
        echo "Happy Monday!";
        break;
      case "Tuesday":
        echo "It's Tuesday";
        break;
      default:
        echo "no day";
    }
?>
<!DOCTYPE html>
    <body>
    <h1>Hello</h1>
    <?php foreach ($associateIndex as $index => $article) : ?>
      <h3> <?= $article; ?> </h3>
    <?php endforeach; ?>
    </body>
</html>