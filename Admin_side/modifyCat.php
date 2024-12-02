<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cat</title>
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
            width: 500px;
            padding: 30px;
            text-align: left;
            border: none;
            min-height: 500px;
        }
        legend h1{
            font-size: 1.8em;
            margin: 0;
            color: #333;
            text-align: center;
            padding: 0 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
            width: 120px; 
        }
        .input-wrapper {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        .input-wrapper-half {
            display: flex;
            justify-content: space-between;
        }
        .input-wrapper-half .input-field {
            width: 48%;
        }
        .input-wrapper input[type="input"],
        .input-wrapper input[type="file"],
        .input-wrapper select {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1em;
            background-color: #fff;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .input-wrapper input[type="input"]:focus,
        .input-wrapper input[type="file"]:focus,
        .input-wrapper select:focus {
            border-color: #feb900;
            box-shadow: 0 0 5px rgba(254, 185, 0, 0.5);
            outline: none;
        }
        button {
            padding: 12px 20px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            background-color: #feb900;
            color: #fff;
            transition: background-color 0.3s, box-shadow 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #feb971;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
<?php
require_once('../controllers/catController.php');

$cCtrl = new catController();
$c = $cCtrl->getCat($_GET['id']);
?>
    <center>
        <fieldset>
            <legend><h1>Edit Cat</h1></legend>
            <form action="modifyCat_action.php" method="POST" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <label for="idCat">Cat ID:</label>
                    <input type="input" name="idCat" value="<?php echo $c['idCat'] ?>" readonly>
                </div>
                <div class="input-wrapper">
                    <label for="idrace">Breed ID:</label>
                    <input type="input" name="idrace" value="<?php echo $c['idrace'] ?>">
                </div>
                <div class="input-wrapper">
                    <label for="nameCat">Name:</label>
                    <input type="input" name="nameCat" value="<?php echo $c['nameCat'] ?>">
                </div>
                <div class="input-wrapper">
                    <label for="ageCat">Age:</label>
                    <input type="input" name="ageCat" value="<?php echo $c['ageCat'] ?>">
                </div>
                <div class="input-wrapper">
                    <label for="desCat">Description:</label>
                    <input type="input" name="desCat" value="<?php echo $c['desCat'] ?>">
                </div>
                <div class="input-wrapper">
                    <label for="imgCat">Picture:</label>
                    <input type="file" name="imgCat">
                </div>
                <div class="button-wrapper">
                    <button type="submit">EDIT</button>
                </div>
            </form>
        </fieldset>
    </center>
</body>
</html>
