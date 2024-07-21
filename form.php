<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students form</title>
    <style>

        body{
            max-width:700px;
        }
    </style>
</head>
<body>
    <form method="POST" action="./formhandler.php">
        <input placeholder="Enter first Name " name ="fName" type ="text">
        <input placeholder="Enter last Name " name ="lName" type ="text">
        <input placeholder="Enter age  " name ="age" type ="number">
        <input placeholder="Enter roll No " name ="roll" type ="text">
        
        <button type="submit" >Submit </button>
    </form>
</body>
</html>