<!DOCTYPE html>
<html>
    
    <head>
        <title> Please Select Product</title>
        </br>
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        </script>
    
    <style>
    .button_1{
  height:37px;
  background:#0f847c;
  border:0;
  padding-left: 19px;
  padding-right:19px;
  color:#ffffff;
  cursor: pointer;
}
    .cancel{
border: 2px solid #f44335;
    background-color: white; 
    color: red;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
 .hover:hover{
     background-color: #f44336;
    color: white; 
 }
 
 .backgroundimage{
    background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtc4kHpY72qEC5n0D8Dsc8LBxGPsw8Cpz99QVG_vsnlD7xD_Ue3Q);
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
            
        <h4> Please Select a product</h4>
        
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPv_i0QCHcADIptTPGHE3i6CJJsD7TH9UqysMIFxLxllYxXUqQ" alt="Shopping Cart" width="150" height="150">
        </br>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ &euro;100
            </label>
            
            <br/> 
            </br>
            
            <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                C9 @ &euro;200
            </label>
            
            <br/>
            </br>
            
            <label for="AWS">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                AWS @ &euro;300
            </label>
            
            <br/>
            </br>
            
            <label for="Gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ &euro;400
            </label>
            
            <br/>
            </br>
            
             <label for="subtotal">
                Subtotal &euro;
                <input type="text"name="subtotal" id="subtotal" value="0.00"  readonly/>
            </label>
            
            </br>
            </br>
            
            <label for="discount">
                Discount &euro;
                <input type="text" name="discount" id="discount"  value="0.00" readonly/>
            </label>
            
            </br>
            </br>
            
             <label for="vat">
                VAT &euro;
                <input type="text" name="vat" id="vat" value="0.00" readonly/>
            </label>
            
            
            </br>
            </br>
            
            
            <label for="total">
                Total &euro;
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            </br>
            
            <button  type="submit" id="btnProceed">Add to Shopping Cart</button>
        </form>
        
        <br/>
        
        <button class ="button_1" onClick="calcSub()";"calcDisVatTotal()";>Calculate Cost</button>
        
        <a rule="button" class="cancel hover" href="Ebus1.php">Clear  Selected Choice</a>
        </br>
        
        </center>
        
    </body>
</html>