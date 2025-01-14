<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Breed</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FED08F;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        fieldset {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            padding: 30px;
            text-align: left;
            border: none;
        }
        legend h1 {
            font-size: 1.8em;
            margin: 0;
            color: #333;
            text-align: center;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="input"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        button {
            width: calc(50% - 12px);
            padding: 10px;
            margin: 15px 6px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }
        button[type="submit"] {
            background-color: #feb900;
            color: #fff;
        }

        button:hover {
            opacity: 0.9;
        }
        button[type="submit"]:hover {
            background-color: #feb971;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
<?php
require_once('../controllers/breedController.php');

$bCtrl = new breedController();
$b = $bCtrl->getBreed($_GET['id']);
?>
    <center>
        <fieldset>
            <legend><h1>EDIT BREED: </h1></legend>
            <form action="modifyBreed_action.php" method="POST">
                <label for="idrace">Breed id :</label>
                <input type="input" name="idrace" value="<?php echo $b['idrace'] ?>" readonly ><br><br>
                <label for="namerace">Breed name :</label>
                <input type="input" name="namerace" value="<?php echo $b['namerace'] ?>"><br><br>
                <button type="submit">EDIT</button><br><br>
        </form><br><br>
        </fieldset>
    </center>
</body>
</html>