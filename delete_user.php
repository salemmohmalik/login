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
    <title>Document</title>
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
    </style>
</head>

<body>
    
<div class="bodyall">
<div class="contenue">
        <form method="POST" action="">
            <h3>User N°
                <?php echo $_GET['id'] ?>
            </h3>
          
            <h4>Email : 
                <?php 
                    $pdo = new PDO("mysql:host=localhost;dbname=crud", "root", "");
                    $request1 = " SELECT email FROM users WHERE id= ?";
                    $statement = $pdo->prepare($request1);
                    $statement->execute(array($_GET['id']));
                    $user = $statement->fetch();
                    print_r($user['email'])
                                   
                                    ?>
            </h4>
           
<button class="btn" name="delete" type="submit" >Delete</button>
           
            <a href="users.php"><h2>Afficher users</h2>
        </form>
        <?php

if (isset($_POST["delete"])){
$pdo = new PDO("mysql:host=localhost;dbname=crud", "root", "");
$request = "DELETE FROM users WHERE id=?";
                $statement = $pdo->prepare($request);
                $statement->execute(array($_GET["id"]));

header("location:users.php");

}
?>
</div>
</div>
</body>

</html>