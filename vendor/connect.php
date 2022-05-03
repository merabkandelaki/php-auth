<?php
  $connect = mysqli_connect('localhost', 'root', 'root', 'test'); // ვუკავშირდებით მონაცემთა ბაზას

  if (!$connect) {
    die('Error connect to DataBase'); // თუ ვერ დავუკავშირდებით მონაცემთა ბაზას, ეკრანზე გამოიტანს ამ შეტყობინებას და კოდის მუშაობა შეწყდება
  }
?>
