<?php
session_start();
$id = $_SESSION['userId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt me</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FED08F;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        fieldset {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 500px;
            padding: 30px;
            text-align: center;
            border: none;
        }

        legend h1{
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        img {
            width: 200px;
            height: auto;
            margin-bottom: 10px;
            border-radius: 6px;
        }

        h3 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 5px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="input"],
        textarea {
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
            background-color: #feb900;
            color: #fff;
            transition: background-color 0.3s;
        }

        button[type="reset"] {
            background-color: #ccc;
        }

        button:hover {
            background-color: #feb971;
        }
    </style>
</head>
<body>
    <center>
        <fieldset>
            <legend><h1>Fill this form to adopt me :3</h1></legend>
            <form action="adopt_action.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="idCat" value="<?php echo $cat['idCat']; ?>">
                <?php
                require_once('../models/cat.php');
                require_once('../controllers/catController.php');

                
                if (isset($_GET['idCat'])) {
                    $cCtrl = new catController();
                    $i = $_GET['idCat'];
                    $cat = $cCtrl->getCat($i);
                
                    
                    if ($cat) {
                        echo "
                        <input type='hidden' name='idCat' value='{$cat['idCat']}'>
                        <h3>Cat's information : </h3>
                        <img src='data:image/jpeg;base64," . base64_encode($cat['imgCat']) . "' alt=''>
                        <p>Id: {$cat['idCat']}</p>
                        <p>Breed: {$cat['namerace']}</p>
                        <h3>Name: {$cat['nameCat']}</h3>
                        <p>Description: {$cat['desCat']}</p>
                        <span>Age: {$cat['ageCat']}</span>";
                    } else {
                        echo "<p>Cat not found.</p>";
                    }
                } else {
                    echo "<p>No idCat specified.</p>";
                }
                ?>

                <p>--------------------------------------------------------------------</p>
                        
                <?php
                require_once('../models/user.php');
                require_once('../controllers/userController.php');

                $uCtrl = new userController();
                $u=$uCtrl->getUser($id);

                if ($u) {
                    echo "
                        <h3>Personal information : </h3>
                        <p>Id : {$u['userId']}</p>
                        <h3>Name : {$u['name']}</h3>
                        <p>E-mail : {$u['email']}</p>";
                } else {
                    echo "<p>User not found.</p>";
                }
                ?>
                <br><br>
                <label for="adresse">Adresse : </label>
                <input type="input" name="adresse"><br><br>
                    
                <label for="phone">Phone : </label>
                <input type="input" name="phone"><br><br>
                    
                <label for="why">Why do you want to adopt a cat ? </label><br><br>
                <textarea name="why" id="why" cols="50" rows="20" placeholder="Write something..."></textarea><br><br>

                <button type="submit">Send form </button>
                <button type="reset">RESET</button>
            </form>
        </fieldset>
    </center>
   
</body>
</html>
