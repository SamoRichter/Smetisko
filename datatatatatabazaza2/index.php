<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridať komentár</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 570px;
            margin: 0 auto;
            padding: 20px;
            background-color:#f2f2f2 ;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-top: 0px;

        }
        
        .formular {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .form-skupina {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        textarea {
            height: 100px;
            resize: vertical;
        }
        
        .tlacitko {
            background-color: #1877f2;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 20px;
        }
        

    </style>
</head>
<body>

    
    <div class="formular">
    <h1>Pridať komentár</h1>
        <form action="index.php" method="post">
            <div class="form-skupina">
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" required>
            </div>
            
            <div class="form-skupina">
                <label for="komentar">Komentár:</label>
                <textarea id="komentar" name="komentar" required></textarea>
            </div>
            
            <button type="submit" class="tlacitko">Odoslať </button>
        </form>
    </div>
</body>
</html> 
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $author = $_POST['autor'];
    $comment = $_POST['komentar'];
}





    $dsn = 'mysql:host=localhost;dbname=moja_db';
    $username = 'root';
    $password = '';

    $pdo = new PDO($dsn, $username, $password);
    $sql= "INSERT INTO komentáre (author, komentár) VALUES (':$author', ':$comment')";
    $pdo -> exec($sql);

