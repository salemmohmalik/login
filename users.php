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
            background-color: #dfe6e9;
        }
        
        h1 {
            text-align: center;
            padding: 35px 0;
            font-family: 'Roboto Mono', monospace;
            font-size: 60px;
        }
        
        table {
            background-color: #22a6b3;
            margin: 20px 0;
            width: 100px;
            border: 4px solid #2980b9;
        }
        
        table a {
            text-decoration: none;
            color: #ffffff;
        }
        
        a {
            text-decoration: none;
        }
        
        h2 {
            text-align: center;
            margin-top: 20px;
            font-family: 'Roboto Mono', monospace;
        }
        
        .trheader {
            color: #000000 !important;
            font-family: 'Roboto Mono', monospace;
        }
    </style>
</head>

<body>
    <h1>Table Users</h1>
    <?php 

$pdo = new PDO("mysql:host=localhost;dbname=crud", "root", "");
    $request = "SELECT * FROM users";
				$statement = $pdo->prepare($request);
                $statement->execute();
                ?>
    <table class="table table1 table-striped">
        <tr class="trheader" style='color:red'>
            <th>Id</th>
            <th>Nom</th>
            <th>PreNom</th>
            <th>Email</th>
            <th>Password</th>
            <th>button</th>
        </tr>
        <?php
                
                    while ($user = $statement->fetch()){
                    echo "<tr>";
                        echo "<td>".$user['id']."</td>";
                        echo "<td>".$user['username']."</td>";
                        echo "<td>".$user['name']."</td>";
                        echo "<td>".$user['email']."</td>";
                        echo "<td>".$user['password']."</td>";
                        echo '<td><button type="button" class="btn btn-secondary"><a href="update_user.php?id='.$user['id'].'">update</a></button>
                        <button type="button" class="btn btn-secondary"><a href="delete_user.php?id='.$user['id'].'">Afficher</a></button>
                        </td>';
                    echo "</tr>";}
                   ?>



    </table>
    <a href="index.php">
        <h2>Ajouter user</h2>
    </a>
    <a href="login.php">
        <h2>Déconecté</h2>
    </a>

</body>

</html>