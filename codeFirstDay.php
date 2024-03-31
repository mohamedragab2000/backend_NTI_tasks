<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h2{text-align: center;}
        .class1 {
            display: block;
            text-align: center;
            margin-top: 2%;
        }
    </style>
</head>
    <div class="container">
        <div class="products">
            <h2>Products</h2>
            <form action="../../index.php" method="post">
                <div class="class1">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" >
                </div>
                <div class="class1">
                    <label for="Phone">Phone</label>
                    <input type="text" name="Phone">
                </div>
                <div class="class1">    
                    <label for="">products</label>
                    <select name="products" >
                        <option value="" hidden>select--</option>
                        <option value="TV">TV</option>
                        <option value="Laptop">Laptop</option>
                        <option value="T_shirt">T_shirt</option>
                        <option value="Mobile">Mobile</option>
                    </select>
                </div>
                <div class ="class1">
                    <label for="">City</label>
                    <select name="City" id="">
                        <option value="" hidden>select--</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Alex">Alex</option>
                        <option value="Others">Others</option>
                    </select>
                </div> 
                <div class ="class1">   
                    <button name="btn1" value="Buy"> Buy Now</button>
                    <button name="btn2" value="Add"> Add To Card</button>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>