<?php
$comment = $_GET['comment'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
  <title>XSS Demo - Protected</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Form Komentar (Dengan Proteksi)</h2>

  <form method="GET">
    <input type="text" name="comment" placeholder="Tulis komentar...">
    <button type="submit">Kirim</button>
  </form>

  <div class="result">
    <h3>Komentar:</h3>
    <p class="safe">
      <?php echo htmlspecialchars($comment); ?>
    </p>
  </div>

  <div class="note green">
    Script tidak dieksekusi, hanya ditampilkan sebagai teks.
  </div>

  <a href="index.php" class="btn">Lihat Versi Rentan</a>
</div>

</body>
</html>