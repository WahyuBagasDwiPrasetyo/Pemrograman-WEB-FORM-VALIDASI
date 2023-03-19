<?php include("components/header.php"); ?>
<?php include("components/menu.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<style type="text/css">
        /* Set background color */
body {
  background-color: #F5F5F5;
}

/* Center the form */
form {
  margin: 0 auto;
  width: 500px;
  height: auto;
  padding: 1em;
  border: 1px solid #CCC; 
  border-radius: 1em;
  background-color: #FFF;
}

/* Style the form elements */
ul {
  list-style: none; 
  padding: 0; 
  margin: 0;
}

form li + li { 
  margin-top: 1em;
}

label {
  display: inline-block; 
  width: 90px; 
  text-align: right;
  font-weight: bold;
}

input,
textarea {
  font: 1em sans-serif;
  width: 300px; 
  border: 1px solid #999;
  border-radius: 4px;
  box-sizing: border-box;
  padding: 0.5em;
  margin: 0.5em 0;
}

input:focus, 
textarea:focus {
  border-color: #000;
  outline: none;
}

textarea {
  tical-align: top;
  height: 5em;
}

/* Style the submit button */
.button { 
  margin-top: 1em;
  text-align: center;
}

button {
  font-size: 1em;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  padding: 0.5em 1em;
  margin-left: .5em;
  transition: all 0.3s ease-in-out;
}

button:ho {
  background-color: #3e8e41;
}
    </style>
<body>
    <form action="pros.php" method="post">
        <ul>
            <li>
                <label for="name">Name:</label>
                <input type="text" id="name" name="user_name" required>
            </li>
            <li>
                <label for="mail">Email:</label>
                <input type="text" id="mail" name="user_email">
            </li>
            <li>
                <label for="msg">Message:</label>
                <textarea id="msg" name="user_message"></textarea>
            </li>
            <li class="button">
                <input type="submit" name="button" id="button"
                value="Send your message" />
            </li>
        </ul>
    </form>
</body>
</html>