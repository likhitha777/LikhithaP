<html>
<head>
    <title>Random</title>
    <style type="text/css">
        p {
font-size:100px;
position: absolute;
top: 20%;
left: 50%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body style="background-color: black;color: bisque;">
<p>
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s a');
    ?>.
</p>
</body>
</html>