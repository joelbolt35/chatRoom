<?php include './database.php'?>
<?php
  //Create Select Query
  $shouts = mysqli_query($con, "SELECT * FROM shouts ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JS Shoutbox</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div id="container">
      <header>
        <h1>JS Shoutbox</h1>
      </header>
      <div id="shouts">
        <ul>
          <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
            <li><?php echo $row['name'].': '.$row['shout'].' ['.$row['date'].']' ?></li>
          <?php endwhile ?>
        </ul>
      </div>
      <footer>
        <form>
          <label for="">Name: </label>
          <input type="text" id="name">
          <label for="">Shout Text</label>
          <input type="text" id="shout">
          <input type="submit" id="submit" value="SHOUT!">
        </form>
      </footer>
    </div>
  </body>
</html>
