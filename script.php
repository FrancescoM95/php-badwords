<?php
      $paragraph = trim($_GET["paragraph"]);
      $word = trim($_GET["word"]);
  
    // Stampo il paragrafo e la sua lunghezza
    echo "<p>$paragraph</p><p>Lunghezza: " . strlen($paragraph) . "</p>";

    // Sostituisco la parola da censurare con ***
    $censored_paragraph = str_replace($word, '***', $paragraph);

    // Stampo il paragrafo censurato e la sua lunghezza
    echo "<p>$censored_paragraph</p><p>Lunghezza: " . strlen($censored_paragraph) . "</p>";


