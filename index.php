<!DOCTYPE html>
<html>
<head>
<title>Random Quote Generator</title>
 <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
  <h1>Quote of the Day:</h1>

  <?php require_once('./random_quote_generator.php'); ?>

  <blockquote cite="http://">

    <h2><em><?php echo $quote_text;?></em></h2>
    <strong id="author">- <?php echo $quote_author ?></strong>

  </blockquote>

</body>
</html>
