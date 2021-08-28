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

    foreach ($articlesMap as $article) {
      echo $article["title"], ", ";
    }
?>