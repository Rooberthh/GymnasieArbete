<?php

require('layout/header.php'); 

?>
 
      <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radio-1" value="1">
      20000
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radio-2" value="2">
      30000
    </label>

    <div class="row center">
            <h2 class="pricing-title" id="account_price"></h2>
    </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>  
    var buttonValue = 0;
    var currentCost = 0;

          $('#radio-1').change(function(){
           buttonValue = $(this).val();
           calcCost()
           });

           $('#radio-2').change(function(){
           buttonValue = $(this).val();
           calcCost()
           });

      
            function calcCost()
            {
                currentCost = 0;

                 if(buttonValue == 1)
                {
                  currentCost = 15;
                  document.getElementById("account_price").innerHTML = currentCost +"$";
                  document.getElementById("amt_val").value = currentCost;

                }
                else if(buttonValue == 2)
                {
                  currentCost = 20;
                  document.getElementById("account_price").innerHTML = currentCost +"$";
                  document.getElementById("amt_val").value = currentCost;
                }
            }

</script>