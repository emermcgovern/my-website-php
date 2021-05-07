<?php $title= 'Home Page';?>
<!DOCTYPE html>
  <html> 
    <head>
      <title>Home Page<?php echo $title?> </title> 
      <?php include './components/head.php'; ?>
</head> 
  <body>
  <?php include './components/nav-menu.php'; ?>
    <h1>Welcome to my website</h1>
          <p> On this website there is a total of five pages to learn more about my placement experience, 
         volunteering and part time job. This website also includes
         my Curriculum Vitae and contact infomation.</p>
         
        <h2>These pages include</h2>
        <p><ul>
          <li><h3>My Curriculum Vitae</h3></li>
        <p> On this page, there is a copy of my Curriculum Vitae.
        This page documents all my prior work expereince, education and achievements.</p>
  <br> 
          <li><h3>Contact Infomation</h3></li>
        <p>This page includes my personal contact details including 
          my email, mobile number and query submission.</p>
  <br> 
          <li><h3>My Volunteering expereince</h3> </li>
        <p>I dicuss my involment in the ATS volunterring programme in NUI Galway.
        I also talk about how the programme has adapted in the wake of the COVID 19 Pandemic.</p>
  <br>
          <li><h3>My favourite recipe</h3></li>
        <p>For this page I decided to share my favouite recipe.This page shows how to make a
         simple but delicious Oreo Cheescake. I go through the indegreients, prepartion and
          instructions on how to make this dessert.This page also includes images of the finished product.</p>
  <br> 
          <li><h3> My placement experience</h3></li>
        <p>On this webpage I write a short piece about my current placement.
          I detail what I do for placment as well as highlighting how COVID 19 has affected my experience.</p>
        </ul>
        <?php include './components/footer.php'; ?>
   </body>
</html>

