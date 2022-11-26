<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Stores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php require_once 'header.php'?>
<br><br>
<div class="searchtext">Please use the location selector and click the individual stores in the maps to see thier respective opening hours and locations. You can select among the list of store or simply search in the search section. 
</div>

<br>
<div class="map"><iframe src="https://my.atlistmaps.com/map/91b20fff-ae9b-4307-8356-57cfd53ea0d7?share=true" allow="geolocation" 
    width="100%" height="600px" frameborder="0" scrolling="no" allowfullscreen></iframe>
</div>  <br>
<br>
<?php require_once 'footer.php'?>
</body>
</html>