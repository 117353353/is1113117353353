<!DOCTYPE html>

    <html>  
    
    <head> 
    
        <title>Selected product</title>       
        <!--jQuery-->        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
        <script type="text/javascript" src="cost_calc.js"></script>  
        
        <style>
        .backgroundimage{
        background-image:url(http://backgroundcheckall.com/wp-content/uploads/2017/12/best-white-background-design-6.png);
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
        <center>
       <h1>  Please enter your Payment Details</h1>
       
       </br>
       <br/>
       
       <form method="POST" action="Ebus3.php">
           
       First name:<input type="text" name="firstname" id="firstname" maxlength="20">
       <br>
       </br>
       
       Last name:<input type="text" name="lastname" id="lastname" maxlength="20">
       <br>
       <br>
       
        Email:<input type="email" name="email" id="email" maxlength="40">
       <br>
       <br>
           
        <label for="user_pin">PIN</label>
           
        <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
           
        <button type="submit" id="btnPurchase">Proceed with Purchase</button>
        
       </form>
       
       </br>
       
       <button onClick="validateDetails()">Validate</button>
       
       </center>
       
       </br>
       </br>
       
       <center><img src="https://amenetwork.com/wp-content/uploads/web-protect.jpg" alt="protected website symbol" width="400" height="400"></center>
       
      
       
       <script type="text/javascript" src="Ebus2_validator.js"></script>
       
         <?php
         

        // Set session variables

        

        $_SESSION["Subtotal"] = $_POST["subtotal"];

        

        $_SESSION["Discount"] = $_POST["discount"];

        

        $_SESSION["Vat"] = $_POST["vat"];

        

        $_SESSION["Total"] = $_POST["total"];

        

        $_SESSION["firstname"] = $_POST["firstname"];
        
        
        
        $_SESSION["lastname"] = $_POST["lastname"];

        

        $_SESSION["Email"] = $_POST["email"];

        

        ?>
     

        

        <br/>

        <br/> 
       
    </body>
    </html>
    
    