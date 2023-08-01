<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GETTING DATUM</title>
</head>
<body>
    <form action="recebedor.php" method="GET">
    <label for="">
        Enter your name
        <input type="text" name="nome" class="box">
    </label>    
    <label for="">
        Enter you age
        <input type="number" name="idade" class="box">
    </label>
    <label for="">
        Enter your song preferences (use comma)
        <input type="text" name="preferencias" class="box">
    </label>   
    <input type="submit" value="send" class="send"> 
    </form>
</body>
</html>