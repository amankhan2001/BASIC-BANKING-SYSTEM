<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row intro py-1" style="background-image: url(img/background.jpg);">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h2 style="color:gold">Welcome to</h2>
                    <h1 style="color:gold"> Bank of TheSparksFoundation</h1>
                </div>
            </div>
            
        </div>

        <div class="card-group">
            <div class="card">
                
                <div class="card-body text-center">
                <img src="img/createuser.jpeg" alt="createuser" width="256" height="256" class="img-fluid">
                <br>
                <br>
                <a href="createuser.php"><button style="background-color: purple;">Create User</button></a>
                </div>
                
            </div>
            <div class="card ">
                
                <div class="card-body text-center">
                <img src="img/TRANSACTION.JPEG" alt="transferimg" width="256" height="256"  class="img-fluid">
                <br>
                <br>
                <a href="transfermoney.php"><button style="background-color: purple;">Make a Transaction</button></a>
                </div>
                
            </div>
            <div class="card">
                
                <div class="card-body text-center">
                <img src="img/HISTORY.jpeg" alt="historyimg" width="256" height="256" class="img-fluid">
                <br>
                <br>
                <a href="transactionhistory.php"><button style="background-color:purple;">Transaction History</button></a>
                </div>
                
            </div>
        </div>


    </div>

    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>AMANKHAN PATHAN</b><br>GRIP TheSparksFoundation.<br><a href="https://www.linkedin.com/in/amankhan-pathan-3933b0174/">Linkedin</a>                                            <a href="url">GitHub</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>