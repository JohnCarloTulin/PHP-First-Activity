<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP: First Activity</title>
</head>
<body>
<div class = "container">
  <form action="get.php" method = "GET">
      <h1>Discriminant of a quadratic equation</h1>
      <p>Made by: John Carlo Tulin</p>
      <p>A: 
          <input type="text" name="first_value" size="30" maxlength="30" placeholder = "Value of A here"/>
      </p>
      <p>B: 
          <input type="text" name="second_value" size="30" maxlength="30" placeholder = "Value of B here"/>
      </p>
      <p>C: 
          <input type="text" name="third_value" size="30" maxlength="30" placeholder = "Value of C here"/>
      </p>
      <label>
          <input type="submit" value = "SUBMIT" name = "submitName"/>
      </label> 
  </form>
</div>
</body>
</html>