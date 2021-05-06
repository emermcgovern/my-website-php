<?php $title= 'contact';?>
<!DOCTYPE html>
  <html> 
    <head>
      <title>Contact<?php echo $title?> </title> 
   <?php include './components/nav-menu.php'?>
 </head>
<body> 
     <?php include './components/header.php'?>   
        <H1> Contact Infomation &#128515;</H1>
        <h2>Email:</h2>
      <p style="text-align:center">Emermcgovern22@gmail.com</p>
      <h2>Phone number:</h2>  
      <p style="text-align:center">0879397142</p>
        <p> I hope you enjoyed learning a bit more about me through this website! Feel free to contact me using my contact details listed above or send me a message directly using the button below.</p>
      
      <form action="https://formspree.io/f/xlearlpv" method="POST">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Contact </button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Contact me!</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <p>First Name:</p>
      <input type="text" name="firstname" placeholder="John">
    
      <p>Last Name:</p>
      <input type="text"name="lastname" placeholder="Smith"> 
    
      <p>Email:</p>
      <input type="text"name="email" placeholder="johnsmith@gmail.com">

      <p>Message:</p> 
      <textarea name="Message" rows="20" cols="60"></textarea>
    
      <p>Query Type:</p>
      <input type="radio" name="querytype" value="Professional"/> Professional
      <input type="radio" name="querytype" value="Personal"/> Personal
      
      <p>Area of Interest:</p>
      <input type="checkbox" name="interests" value="Recreation"/> Recreation<br/>
      <input type="checkbox" name="interests" value="Education"/> Education<br/>
      <input type="checkbox" name="interests" value="Work Related"/> Work Related<br/>
        <br/><br/>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      
      </div>
    </div>
  </div>
</div>
      </form>
    </div>
  </body>
</html>
