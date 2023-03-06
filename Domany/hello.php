<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/stylesheet.css">
    <title>Hello PHP</title>
</head>
<body>
<form method="post">
    <input required
        type="text"
        name="pali"
        placeholder="Ide ird a szoveget"
    >
    <input type="submit">
</form>
<?php
    if(isset($_POST['pali'])) {
        $text = $_POST['pali'];
        if (strrev($text) === $text) {
            echo "<p>A $text szo palindrom</p>";
        } else {
            echo "<p>A $text szo <b>nem</b> palindrom</p>";
        }
    }
?>
</body>
</html>
