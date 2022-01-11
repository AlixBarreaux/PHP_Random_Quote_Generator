<?php

$quotes_list = [
  ['author' => 'Abraham Lincoln',
  'text' => 'Give me six hours to chop down a tree and I will spend the first four sharpening the axe.',
  'cite' => 'https://www.goodreads.com/quotes/83633-give-me-six-hours-to-chop-down-a-tree-and'
  ],

  [
    'author' => 'Alix',
    'text' => 'Oh... 01010011 01101111 01110010 01110010 01111001 00100000 01100110 01101111 01110010 00100000 01110100 01101000 01100101 00100000 01100010 01101001 01101110 01100001 01110010 01111001 00100000 01101111 01110101 01110100 01110000 01110101 01110100 00100001',
    'cite' => ''
  ],

  ['author' => 'Andrei Tarkovsky ',
  'text' => 'When a tree is growing, it\'s tender and pliant. But when it\'s dry and hard, it dies. [...] Pliancy and weakness are expressions of the freshness of being. Because what has hardened will never win.',
  'cite' => 'https://www.goodreads.com/quotes/314315-let-everything-that-s-been-planned-come-true-let-them-believe'
  ],

  ['author' => 'Seneca',
  'text' => 'Many things have fallen only to rise higher.',
  'cite' => 'http://www.quotationspage.com/quotes/Seneca/31'
  ],

  ['author' => 'Confucius',
  'text' => 'The gem cannot be polished without friction, nor man perfected without trials.',
  'cite' => 'https://www.goodreads.com/quotes/83633-give-me-six-hours-to-chop-down-a-tree-and'
  ],

  ['author' => ' Martin Luther King Jr.',
  'text' => 'Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that.',
  'cite' => 'https://www.goodreads.com/quotes/943-darkness-cannot-drive-out-darkness-only-light-can-do-that'
  ],

  [
    'author' => 'Unkown',
    'text' => 'In this crazy world, full of change and chaos, there is one thing of which I am certain, one thing which does not change: my love for you.',
    'cite' => 'https://www.treasurequotes.com/quotes/in-this-crazy-world-full-of-change-and-chaos'
  ],

  [
    'author' => ' Sun Tzu, The Art of War ',
    'text' => 'To win one hundred victories in one hundred battles is not the acme of skill. To subdue the enemy without fighting is the acme of skill.',
    'cite' => 'The art of war: https://www.goodreads.com/quotes/334175-to-win-one-hundred-victories-in-one-hundred-battles-is'
  ]
];

$rand_quote_index = array_rand($quotes_list);
$quote = $quotes_list[$rand_quote_index];

$quote_author = $quote['author'];
$quote_text = $quote['text'];
$quote_cite_tag_value = '<blockquote cite="' . $quote['cite'] . '"';

?>
