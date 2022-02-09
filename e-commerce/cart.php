<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/cart.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>
<body>
    <div class="header">
        Cart Page
    </div>
    <div class="main ">
        <table class="table">
            <thead class="table-header">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr>
                    <td>
                        <img src="img/cart.png">
                    </td>
                    <td>
                        <h2> Vagetable</h2>
                    </td>
                    <td>
                        <span>$210</span>
                    </td>
                    <td>
                        <input type="number" value="1" min="1">
                    </td>
                    <td>
                        <span>$210</span>
                    </td>
                    <td>
                        <i class="fas fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="img/cart1.png">
                    </td>
                    <td>
                        <h2> Meet</h2>
                    </td>
                    <td>
                        <span>$210</span>
                    </td>
                    <td>
                        <input type="number" value="1" min="1">
                    </td>
                    <td>
                        <span>$210</span>
                    </td>
                    <td>
                        <i class="fas fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="img/cart2.png">
                    </td>
                    <td>
                        <h2> Fruits</h2>
                    </td>
                    <td>
                        <span>$210</span>
                    </td>
                    <td>
                        <input type="number" value="1" min="1">
                    </td>
                    <td>
                        <span>$210</span>
                    </td>
                    <td>
                        <i class="fas fa-trash"></i>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div class="coupon" >
            <div class="coupon-1">
                <input type="text" placeholder="Coupon Code">
                    <div class="coupon-1-1">Apply Coupon</div>
            </div>
            <div class="coupon-2">
                <a>Update Cart</a>
            </div>
        </div>
        <div class="cart-out">
           <div class="cart-out-1"></div>
           <div class="cart-out-2">
                <div style="text-align: center;"><h3>Cart Total</h3></div>
                <hr style="color: #c8c9c7;">
                
                
                <div style="float: left;">Subtotal:</div>
                <div style="float: right;">$220.00</div><br>

                <hr style="color: #c8c9c7;"><br>

                <div style="float: left;">Shipping:</div><br><br>

                <div style="float: left;">Free Shipping</div>
                <div style="float: right;">$0.00</div><br><br>

                <div style="float: left;">Standard:</div>
                <div style="float: right;">$10.00</div><br><br>
                
                <div style="float: left;">Express:</div>
                <div style="float: right;">$15.00</div><br><br>

                <h2>Estimate for Your Country</h2>

                <a href="#">Change address</a><br>

                <hr style="color: #c8c9c7;">

                <div style="float: left;">Total:</div>
                <div style="float: right;">$245.00</div><br><br>

                <div style="text-align: center;cursor: pointer;color:#81AC27 ; border: 2px solid #81AC27; height: 40px;line-height: 40px;">Checkout</div>
            </div>
        </div>

    </div>

</body>
</html>