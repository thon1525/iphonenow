<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route("make")}}">
        @csrf
    
        <!-- Add your form fields here -->
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br><br>
        <label for="email">email:</label>
        <input type="email" name="email" id="name"><br><br>
        <label for="password">password:</label>
        <input type="passworod" name="password" id="name">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>