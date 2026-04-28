<?php
$comment = $_GET['comment'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
  <title>XSS Demo - Vulnerable</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Form Komentar (Tanpa Proteksi)</h2>

  <form method="GET">
    <input type="text" name="comment" placeholder="Tulis komentar...">
    <button type="submit">Kirim</button>
  </form>

  <div class="result">
    <h3>Komentar:</h3>
    <p class="danger">
      <?php echo $comment; ?>
    </p>
  </div>

  <div class="note red">
    Input tidak difilter. Script akan dieksekusi oleh browser.
  </div>

  <a href="protected.php" class="btn">Lihat Versi Aman</a>
</div>

</body>
</html>