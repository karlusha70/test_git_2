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
    <style>
        ol {     
            counter-reset: item; 
        } 
        ol li {     
            display: block;     
            position: relative; 
        } 
        ol li:before {     
            content: counters(item, ".")".";     
            counter-increment: item;     
            position: absolute;     
            margin-right: 100%;     
            right: 10px; /* space between number and text */ 
        }
    </style>
</head>
<body>
    <Button on onclick="changeURL()">
        Click to change th URL
    </Button>
    <ol>
        <li>Первый
            <ol>
                <li>Первый первый</li>
                <li>Первый второй
                    <ol>
                        <li>Первый второй первый</li>
                    </ol>
                </li>
            </ol>
        </li>
        <li>Второй</li>
    </ol>
</body>
</html>