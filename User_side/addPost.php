<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
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
        legend h1{
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        .input-wrapper {
            margin-bottom: 15px;
        }
        .input-wrapper input[type="input"],
        .input-wrapper input[type="email"] {
            width: calc(100% - 20px);
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
        .input-wrapper input[type="email"]:focus {
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
    <center>
        <fieldset>
            <legend><h1>ADD POST</h1></legend>
            <form action="addPost_action.php" method="POST" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <label for="title">Title : </label>
                    <input type="input" name="title">
                </div>
                <div class="input-wrapper">
                    <label for="descrip">Description : </label>
                    <textarea name="descrip" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input-wrapper">
                    <label for="image">Picture : </label>
                    <input type="file" name="image">
                </div>
                <button type="submit">ADD</button>
            </form>
        </fieldset>
    </center>
</body>
</html>
