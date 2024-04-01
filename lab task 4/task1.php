<html>
<head>
    
    <title>Name</title>
    <style>
        fieldset {
                width: 160px; 
            }
        hr {
            border: 1px solid black; 
            margin: 10px 0; 
        }
    </style>
</head>
<body>
    <form method="post">
 
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" value="<?php
                if (isset($_POST["submit"])){
                    $name = $_POST["name"];
                    if (empty($name)) {
                        print("Name cannot be empty");
                    } elseif (!preg_match('/^[a-zA-Z][a-zA-Z. -]+$/', $name)) {
                        print("Invalid format");
                    } elseif (str_word_count($name) < 2) {
                        print("Name must contain at least two words");
                    } else {
                        print($name);
                    }
                } else {
                    print(" ");
                }
            ?>" ><br>
            <input type="submit" name="submit">
            
        </fieldset>
    </form>
    <br>
    
</body>
</html>
 