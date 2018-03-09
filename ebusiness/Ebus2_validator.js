/* global $*/
function validateDetails(){
    var pin;
    var firstname;
    var lastname;
    var email;
    
    pin=document.getElementById("user_pin").value;
    
    if(firstname==""){alert("please enter your first name");
    }
    
    if (lastname==""){alert("please enter your last name");
    }
    
    if(email==""){alert("please enter your email");
    }

    if (pin==""){alert("Please Enter your PIN");
    }
    
    else if (String(pin).length<4){alert("Please make sure your PIN is accurate")}
    
    else {enablebtnPurchase();}
}
function enablebtnPurchase(){
    $("#btnPurchase").prop("disabled",false);
}

function disablebtnPurchase(){
    $("#btnPurchase").prop("disabled",true);
}
    