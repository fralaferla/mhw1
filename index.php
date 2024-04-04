
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
    .header {
    position: relative;
    width: 100%; /* Set the width of the header */
    height: 300px; /* Set the height of the header */
    background-image: url('IMG_3971.JPEG'); /* Set the background image */
    background-size: cover; /* Make sure the background image covers the entire header */
    background-position: center; /* Center the background image */
    text-align: center; /* Center the text horizontally */
    color: white; /* Set text color to white */
  }

  /* CSS for the h1 text */
  .header h1 {
    position: absolute;
    top: 50%; /* Position the text in the vertical middle */
    left: 50%; /* Position the text in the horizontal middle */
    transform: translate(-50%, -50%); /* Center the text using translate */
    margin: 0; /* Remove any default margin */
    font-size: 32px; /* Adjust font size as needed */
    /* You can add more styles as per your design */
  }
  nav{
    position:fixed;
    top:0;
    width: 150px;
    height: 100%;
    background-color: aqua;
    z-index: 1000;
  }
  li{
    margin-left:0;
    margin-right: 3px;
  }
  ul{
    list-style-type: none;
  }
</style>
<body>
  <div class="header">
    <h1>This is my header</h1>
  </div>
  <nav>
    <ul>
      <li> <a href="goole.com">google</a></li>
      <li><a href="booking.com">booking</a></li>
      <li><a href="skyscanner.net">skyscanner</a></li>
      <li><a href="facebook.com">Fb</a></li>
    </ul>
  </nav>
</body>
</html>