<?php
    if (isset($_POST['name']) && isset($_POST['email'])){
        $text = 'Email: ' . $_POST['email'] . "\nCustomer: " . $_POST['name'];
        mail( 'me@bannik.eu', 'Site customer', $text, 'From: me@bannik.eu');
        header ('Location: /#email-bckg=0');
  }
  else{
      header('Location: /#email-bckg=1');
  } 
?>
