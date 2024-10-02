<!DOCTYPE html>
<html>
<head>
    <title>All characters</title>
    <link rel="stylesheet" href="css/tab.css">
</head>
<body>
<ul>
    <li>{{ $character -> label}}</li>
    <li>{{ $character -> price}}</li>
    <li>{{ $character -> desc}}</li>
    <li>{{ $character -> birth_date}}</li>
    <img src="{{$character -> image_path}}" alt="Texte alternatif"  height="150">
</ul>
</body>
</html>







