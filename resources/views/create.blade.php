<!DOCTYPE html>
<html>
<head>
    <title>formulaire pour creer un personnage</title>
</head>
<body>
    
    <form action="/characters" method="post">
    @csrf
        <label for="label">label :</label>
        <input type="text" id="label" name="label" required>

        <label for="price"> price :</label>
        <input type="text" id="price" name="price" required>

        <label for="description">description :</label>
        <input type="text" id="description" name="description" required>

        <label for="image">image :</label>
        <input type="text" id="image" name="image" >

        <label for="date">date :</label>
        <input type="date" id="date" name="date" required>

        <button>valider</button>
    </form>
</body>
</html>