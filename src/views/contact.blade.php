<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('contact')}}" method="post">
  <label for="name">First name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="message">message:</label><br>
  <input type="text" id="message" name="message">
  <button type="submit"  value="Submit">Submit</button>

</form>
</body>
</html>