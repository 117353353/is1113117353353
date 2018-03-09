<?php

session_start()

?>



<!DOCTYPE html>

<html>

    <head>

        <!-- title -->

        <title> PURCHASE RECEIPT</title>
        
        <style>
       .backgroundimage{
        background-image:url(https://static.pexels.com/photos/235994/pexels-photo-235994.jpeg);
        }

        .backgroundimage{
        background-size: cover;
        }

        .backgroundimage{ 
        background-repeat: no-repeat;
        }
       </style>

    </head>

    

 <body class="backgroundimage">

          <!-- subheading -->

<center>

          <h1>RECEIPT </h1>

 

          <?php

          //Echo Session variables that were set on previous page

           echo "First-name: " . $_POST["firstname"] . "<br /> <br />";

       
           echo "Last-name: " . $_POST["lastname"] . "<br /> <br />";              


           echo "Email: " . $_POST["email"] . "<br /> <br />";

       
           echo "Subtotal: " . $_SESSION["subtotal"] . " Euro.<br /> <br />";


           echo "Discount: " . $_SESSION["discount"] . " Euro.<br /> <br />";


           echo "Vat: " . $_SESSION["vat"] . " Euro.<br /> <br />";

       

           echo "Total: " . $_SESSION["total"] . " Euro.<br /> <br />";

           ?>
<br/>
<br/>
<br/>

  <font color="blue" size="7">Thank you for purchasing from our website!</font>
  
<br/>
<br/>
<br/>
<br/>
<br/>

   contact our customer support on (353)9999999999 if you have any problems or queries

       </center>
       </body>
       
       
       </html>