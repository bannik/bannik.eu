<?php
    if(isset($_POST['name']) && isset($_POST['phone'])){
        $text = "Phone number: " . $_POST['phone'] . "\nCustomer name: " . $_POST['name'];
        mail ( 'me@bannik.eu', 'Site customer', $text, 'From: me@bannik.eu');
        header('Location: /#modalcall=0');
    }
    else{
        header('Location: /#modalcall=1');
    }
    ?>
