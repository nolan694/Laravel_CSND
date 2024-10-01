<!DOCTYPE html>
<html>
<head>
    <title>All characters</title>
    <link rel="stylesheet" href="css/tab.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th> ID</th>
                <th> Label</th>
                <th> Price</th>
                <th> Description</th>
                <th> Birth Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <td> {{$character->id}}</td>
                <td> {{$character->label}}</td>
                <td> {{$character->price}}</td>
                <td> {{$character->desc}}</td>
                <td> {{$character->birth_date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
