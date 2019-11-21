<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<script type="text/javascript">
    function incrementValue()
    {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value<10){
            value++;
            document.getElementById('number').value = value;
        }
    }
    function decrementValue()
    {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            document.getElementById('number').value = value;
        }

    }
</script>
</body>
</html>







<?php


function component($productname,$productprice,$productimg,$productid,$product_image){
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"post\">
              <div class=\"card shadow\">
                  <div>
                   
                    <a href =\"$product_image\"><img src=\"$productimg\" alt=\"image1\" class=\"img-fluid card-img-top\"></a>
                    
    
                  </div>
                    <div class=\"card-body\">
                     <h5 class=\"card-title\">$productname</h5>
                    <h6>
                      <i class=\"fas fa-star\"></i>
                      <i class=\"fas fa-star\"></i>
                      <i class=\"fas fa-star\"></i>
                      <i class=\"fas fa-star\"></i>
                      <i class=\"far fa-star\"></i>

                    </h6>
                    <p class=\"card-text\">
                        Some explaination
                    </p>
                    <h5>
                        <small><s class=\"text-secondary\">$519</s></small>
                        <span class=\"price\">$productprice</span>
                    </h5>

                    <button type=\"submit\" class =\"btn btn-warning my-3\" name=\"add\" >Add to Cart<i class=\"fas fa-shopping\"></i></button>
                    <input type='hidden' name='product_id' value='$productid'>
                    </div>    
               </div>
           </form> 
           </div> ";
    echo $element;
}



function cartElement($productimg,$productname,$productprice,$productid){
    $element="
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg class=\"img-fluid\" alt=\"image1\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\"> Seller</small>
                                <h5 class=\"pt-2\">$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                               <div>
                                    <button type=\"button\" onclick='decrementValue()' value='-' class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" name='quantity' id='number' value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" onclick='incrementValue()' value='+' class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
    
                                                        </div>

                        </div>
                    </div>
                </form>
    
    ";
    echo $element;
}


?>




















































































