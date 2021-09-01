<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,400;1,700&display=swap" rel="stylesheet">

    <title>Modifier les donné</title>
    <style>
        body {
            width: 100%;
            height: 100%;
            background-color: #dfe6e9;
            position: absolute;
        }
        
        .bodyall {
            position: relative;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .contenue {
            width: 500px;
            height: 400px;
            background-color: #b2bec3;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0px 0px 6px 3px rgba(16, 69, 100, 0.59);
            -webkit-box-shadow: 0px 0px 6px 3px rgba(16, 69, 100, 0.59);
            -moz-box-shadow: 0px 0px 6px 3px rgba(16, 69, 100, 0.59);
        }
        
        form {
            padding: 40px;
            text-shadow: 4px 4px 16px rgba(0, 0, 0, 0.2);
        }
        
        h3 {
            text-align: center;
            padding: 15px 0;
            font-family: 'Roboto Mono', monospace;
            font-size: 40px;
        }
        
        .cc {
            margin: 15px 0;
        }
        
        input {
            margin: 15px 20px;
        }
        
        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        button {
            width: 140px;
            background-color: #38ada9 !important;
        }
        
        button:hover {
            background-color: #b8e994 !important;
        }
    </style>

</head>

<body>
    <div class="bodyall">
        <div class="contenue">
            <?php
$pdo = new PDO("mysql:host=localhost;dbname=crud", "root", "");
            $request1 = " SELECT * FROM users WHERE id= ?";
            $statement = $pdo->prepare($request1);
            $statement->execute(array($_GET['id']));
            $user= $statement->fetch();
            if (isset($_POST["btn"])){
                if (isset($_POST["email"],$_POST["pwd"])&&
                !empty($_POST["email"])
                && !empty($_POST["pwd"])
                ){
                   
                    $pdo = new PDO("mysql:host=localhost;dbname=crud", "root", "");
                    $request = "UPDATE users SET email=?,password=? WHERE id=?";
                                    $statement = $pdo->prepare($request);
                                    $statement->execute(array( $_POST["email"],$_POST["pwd"],$_GET["id"]));
                                    echo "<h2 style=color:green> Modifier avec succés !</h2> ";
                                    header("location:users.php");
                }else {
                    echo "<h2 style=color:red> echec ! </h2>";
                }
                }
                




?>

                <form method="POST">
                    <h3>Update User</h3>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="cc col-sm-2 col-form-label"><h5>Email</h5></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" name="email" placeholder="Email" value=<?php echo $user[ 'email'];?>>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="cc col-sm-2 col-form-label"><h5>Password</h5></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="pwd" placeholder="Password" value=<?php echo $user[ 'password'];?>>
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit" type="submit" name="btn" value="Modifier" class="btn btn-primary btn-lg">Modifier</button>

                    </div>

                </form>
        </div>
    </div>










</body>

</html>