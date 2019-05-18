

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload a item</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="shop-item.css" rel="stylesheet" type="text/css" />
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
      <img src="img_avatar2.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload another ITEM</a>
    </li>
     <li class="nav-item">
         <a class="nav-link" href="index.php">Back</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="index1.php"><strong>LOG OUT<strong></a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
   
    
    <form name="frmImage" enctype="multipart/form-data" action="save.php" method="post" class="frmImageUpload">
        
        
        
         
                 <table border='0' align='center'>
                     <tr calspan="2">
                         <td><label>Upload Image File:</label></td> </tr>
                     <tr calsapn="2"><td><input name="image" type="file" class="inputFile" /></td></tr>
                     <tr><td><label>Nume Domnitor:</label></td>
                         <td><input name="image_name" type="text" class="inputFile" /></td>
</tr>
<tr>
    <td><label>ID:</label></td>
    <td><input name="id" type="text" class="inputFile"/></td>
</tr>
<tr>
    <td><label>Batalii:</label></td>
    <td><input name="Batalii" type="text" class="inputFile"/></td>
</tr>




<tr colsapn="2">             
                
                
    <td><input type="submit" name="submit" value="Submit" class="btnSubmit" /></td>
</tr>
 </table>
*Nu uita de imagine!!!
</form>
</div>
</BODY>
</HTML>
