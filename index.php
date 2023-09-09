<?php
// -- Codice PHP --
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <!-- Libraries -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">
    <title>PHP - Password Generator</title>
</head>

<body>
    <div class="container p-5">
        <h1 class="p-3">Password Generator</h1>

        <form class="row p-3" method="GET" action="index.php">
            <label for="lunghezza">Lunghezza della Password:</label>
 
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password" min="1" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </form>

    </div>
</body>

</html>