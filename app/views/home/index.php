<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./public/css/style.css">
  <title>Simple MVC PHP</title>
</head>
<body>
<p><strong>Welcome to the home/index view</strong></p>
<p>Below is the result of the parameters passed into the URL. You can pass in the controller and model name too. Try it... /home/index/{name}/{mood}</p>
<p> <?=$data['name']?> is <?=$data['mood']?> </p>
</body>
</html>
