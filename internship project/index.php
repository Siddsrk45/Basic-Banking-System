<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic banking system</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="navbar.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="heading">
        <img src="bank.jpg" alt="" width=350px height= 350px>
        <h1>
        Online Banking system 
        </h1>
        <div id="b1">
        <a href="transfer_money.php"><button type = "button" class="btn btn-outline-dark btn-lg">Transfer Money</button>
     </div>
     <div id = "b2">
        <a href="transact_history.php"><button type="button" class="btn btn-outline-dark btn-lg">Transaction history</button>
        </div>
    </div>

</body>
</html>