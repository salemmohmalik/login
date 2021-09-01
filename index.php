<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>index</title>
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
            text-shadow: 4px 4px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
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
            margin: 25px auto;
            width: 400px !important;
            height: 40px;
        }
        
        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        button {
            width: 120px !important;
            background-color: #38ada9 !important;
            margin: 10px auto;
        }
        
        button:hover {
            background-color: #b8e994 !important;
        }
        
        a {
            text-decoration: none;
        }
        
        a h2 {
            margin: 30px auto;
            font-family: 'Roboto Mono', monospace;

        }
    </style>
</head>

<body>
<?php 
if (isset($_POST["btn"])){
if (isset($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["pwd"])&&

 !empty($_POST["nom"])
&& !empty($_POST["prenom"])
&& !empty($_POST["email"])
&& !empty($_POST["pwd"])
){
    echo "<h2 style=color:green> ajout avec succés !</h2> ";
    $pdo = new PDO("mysql:host=localhost;dbname=crud", "root", "");
    $request = "INSERT INTO users( name,username,email, password) VALUES (?,?,?,?)";
					$statement = $pdo->prepare($request);
                    $statement->execute(array($_POST["nom"],$_POST["prenom"], $_POST["email"],$_POST["pwd"]));
                    header("location:login.php");

                    

}else {
    echo "<h2 style=color:red> echec ! </h2>";
}
}


?>



    <div class="bodyall">
        <div class="contenue">
            <form method="POST" action="">
                <h3>Add New User</h3>
                <input type="text" class="form-control" name="nom" placeholder="Add New Nom">
                <input type="text" class="form-control" name="prenom" placeholder="Add New PreNom">
                <input type="email" class="form-control" name="email" placeholder="Add New Email">
                <input type="password" class="form-control" name="pwd" placeholder="Add New Password">
                <button type="submit" name="btn" class="btn btn-primary btn-lg" value="add">Add</button>
                <a href="login.php">
                    <h2>Login</h2>
                </a>
            </form>

        </div>
    </div>

</body>

</html>