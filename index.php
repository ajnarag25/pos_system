<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<html lang="en">

<head>
    <title>POS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="main/images/pos.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        body {
            background-image: url(bg1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            height: 100vh;
            font-family: 'Mukta', sans-serif;
        }
        
        .form--user__icon span{
            font-size: 32px;
            position: absolute !important;
            top: 50% !important;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .container {
                width: 60%;
    margin: 0 auto;
    background: white;
    border-radius: 4px;
    position: absolute;
    top: 50%;
    z-index: 2;
    color: #fff;
    content: '';
    width: 500px;
    padding: 20px;
    left: 50%;
    transform: translate(-50%, -50%);
        }
        
        
        .form--user__icon {
                  border-radius: 50%;
    height: 100px;
    z-index: 9;
    top: -50px;
    text-align: center;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    background: #ea7a1a;
    width: 100px;
    color: #fff;
        }
        
        button {

     width: 100%;
     color:#fff !important;
    border-radius: 50px !important;
    border: 0 !important;
    background: #003296 !important;
        }
        
        .container h4 {
            margin-top: 32px;
        }
        form a{
        color:#fff !important;
        text-decoration:underline !important;
        }
    </style>

    <div class="container">
        <div class="form--user__icon">
            <div class="icon--img">
                <span class="glyphicon glyphicon-wrench"></span>
            </div>
        </div>
        <br>
        <h2 class="text-center" style="color: black;"><strong>Hardware Store</strong></h2>
        <div id="login">
        <?php
            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                    echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
                }
                unset($_SESSION['ERRMSG_ARR']);
            }
        ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username" style="color: black"> <span class="glyphicon glyphicon-user"></span> Username:</label>
                    <input type="username" class="form-control" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="pwd" style="color: black"> <span class="glyphicon glyphicon-lock"></span> Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>