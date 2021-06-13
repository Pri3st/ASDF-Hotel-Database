<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <style>
      caption {
        background: blanchedalmond;
        color: darkblue;
      }
  </style>
</head>
<a href="queriesgeneral.html" class="button">Back</a>
<center><h2 style = "color:white;">Most Used Spaces by Customer Age Category</h2></center>
<center><h3 style = "color:white;">Please Insert one of the following numbers corresponding to the respective age category.</h3></center>
<form action = "displaymostusedspacesbyagemonth.php" method="get">
        <br>
        <center style="color:white;">Age Category:
            <input type="text" name="search1" size="48">
            </br>
            <br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </center>
        <br>

</form>

<table border="2" align="center" cellpadding="5" cellspacing="5">
    <caption style="text-align:left">Age Categories Refference Numbers</caption>  <tr>
    <th style="color:white;">20-40</th>
    <th style="color:white;">41-60</th>
    <th style="color:white;">61+</th>
  </tr>
  <tr>
    <td style="color:white;">1</td>
    <td style="color:white;">2</td>
    <td style="color:white;">3</td>
  </tr>
</table>

</body>
</html>