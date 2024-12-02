<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cat</title>
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
        }
        legend h1 {
            font-size: 1.8em;
            margin: 0;
            color: #333;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="input"], input[type="file"], select {
            width: calc(100% - 10px);
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
            background-color: #fff;
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


        select {
            width: calc(100% - 130px);
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
            background-color: #fff;
            display: inline-block;
        }
    </style>
</head>
<body>
    <center>
        <fieldset>
            <legend><h1>ADD CAT</h1></legend>
            <form action="addCat_action.php" method="POST" enctype="multipart/form-data">
                <select name="race">
                    <option value=".">Select breed</option>
                    <?php
                    require_once('../database/config.php');
                    require_once('../controllers/breedController.php');
                    $bCtrl = new breedController();
                    $res = $bCtrl->listRace();
                    foreach ($res as $row) {
                        echo "<option value='$row[idrace]'>$row[namerace]</option>";
                    }
                    ?>
                </select><br><br>
                <label for="nameCat">Name:</label>
                <input type="input" name="nameCat"><br><br>
                
                <label for="age">Age:</label>
                <input type="input" name="age"><br><br>
                
                <label for="des">Description:</label>
                <input type="input" name="des"><br><br>
                
                <label for="pic">Picture:</label>
                <input type="file" name="pic"><br><br>
                
              
                
                
                <button type="submit">ADD</button>
            </form>
        </fieldset>
    </center>
</body>
</html>