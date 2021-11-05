<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function changeURL() {
            history.replaceState(null, null, 'thee.html');
            return false;
        }
    </script>
</head>
<body>
    <Button on onclick="changeURL()">
        Click to change th URL
    </Button>
    
</body>
</html>