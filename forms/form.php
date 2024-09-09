<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>

<body>

    <form method="post">
        <fieldset>
            <legend>Article</legend>

            <div>
                <label for="title">Title:</label> <input type="text" name="title" id="title" placeholder= "name">
            </div>
            <div>
               <label for = "area_text"> Content: </label> <textarea name="content" rows="4" cols="40" id="area_text" placeholder="Write something in here"></textarea>
            </div>

        </fieldset>
        <fieldset>
            <legend>Atribute</legend>
        <label><input type="checkbox" name="visible" value="yes">Visible</label>
        </fieldset>
        <div>
        <fieldset>
            <legend>Colors</legend>
            <label><input type="radio" name="colour" value="blue" checked>Blue</label>
            <br>
            <label><input type="radio" name="colour" value="red">Red</label>
            <br>
            <label><input type="radio" name="colour" value="green">Green</label>
            <br>
        </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Select your country</legend>
                <select name ="lang" id="lang">
                    <option value = "en">English</option>
                    <option value  = "fr">French</option>
                    <option value = "es">Spanish</option>
                </select>
            </fieldset>
        </div>
        <div>
            <button>Send</button>
        </div>
    </form>

</body>

</html>
