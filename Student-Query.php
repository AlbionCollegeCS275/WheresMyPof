<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <a href ="/index.php">Back to Home</a>
    <h1 class="padding-header albion-purple">Select a Professor</h1>
    <form class="padding-large" action="Request-Output.php" method="post">
      <select class="select" name="professor">
        <option value="">Select an Option</option>
        <option value="Reimann">David Reimann</option>
        <option value="Bollman">Mark Bollman</option>
        <option value="MacInnes">Ian MacInnes</option>
        <option value="Dick">Wesley Dick</option>
        <option value="Anderson">Paul Anderson</option>
        <option value="Mason">Darren Mason</option>
        <option value="Dickson">Michael Dickson</option>
        <option value="Sacks">Marcy Sacks</option>
        <option value="Voss">Philip Voss</option>
        <option value="Webb">Meghan Webb</option>
        <option value="McCavit">Carla McCavit</option>
      </select>
      <input class="padding-large input" type="submit">
    </form>
  </body>
</html>
