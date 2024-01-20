<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['text']) && isset($_POST['shift'])) {
    $text = $_POST['text'];
    $shift = (int)$_POST['shift'];

    function caesarCipher($text, $shift) {
      $result = '';
      $length = strlen($text);

      for ($i = 0; $i < $length; $i++) {
        $char = $text[$i];

        if (ctype_alpha($char)) {
          $ascii = ord($char);
          $isUpperCase = ctype_upper($char);
          $offset = $isUpperCase ? 65 : 97;
          $result .= chr(($ascii - $offset + $shift + 26) % 26 + $offset);
        } else {
          $result .= $char;
        }
      }

      return $result;
    }

    $encryptedText = caesarCipher($text, $shift);
  }
}
?>

<h2>Enkripsi / Dekripsi menggunakan Caesar Cipher</h2>
<form method="POST" action="">
  <label for="text">Teks:</label>
  <input type="text" name="text" required>

  <label for="shift">Pergeseran (Shift):</label>
  <input type="number" name="shift" required>

  <button type="submit">Proses</button>
</form>

<?php
if (isset($encryptedText)) {
  echo '<p>Hasil: ' . $encryptedText . '</p>';
}
?>
