<html>
<head>
<style>
        fieldset {
                width: 200px; 
            }
        hr {
            border: 1px solid black; 
            margin: 10px 0; 
        }
        </style> 
    <title>Email</title>
</head>
<body>
    <form method="post">
 
        <fieldset>
            <legend>Email</legend>
            <input type="text" name="Email" value="<?php
                if (isset($_POST["submit"])){
                    $email = $_POST["Email"];
                    if (empty($email)) {
                        echo "Email cannot be empty";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "Invalid email format";
                    } else {
                        echo "Your Email is: $email";
                    }
                }
            ?>" >
            <button title="exp: anything@example.com">i</button>
            <hr><br>
            <input type="submit" name="submit">
            
        </fieldset>
    </form>
    <br>
</body>
</html>
 