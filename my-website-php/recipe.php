<?php $title= 'Recipe';?>
<!DOCTYPE html>
  <html> 
    <head>
      <title> Recipe<?php echo $title?> </title> 
   <?php include './components/nav-menu.php'?>
</head>
    <body> 
    <?php include './components/header.php'?>
<h1>My Recipe for Oreo Cheesecake</h1>
        <p> This is my recipe for no bake Oreo Cheesecake!
            It's really easy and quick to make! It takes around 1/2 an hour to make
            Serves 10-12 people</p>
            <p><img src="oreo.jpg" height=300px; width=200px; alt="oreo-cheesecake" class="rounded"></p>

    
            <div class="row">
            <div class="col-4">     
                   <h2> Ingredients:</h2>
            <ul> 
                <li> 75g of unsalted butter</li>
                 <li> 250g of Oreo cookies</li>
                 <li> 400g of cream cheese</li>
                 <li> 200g of icing sugar </li>
                 <li> 300g of mascarpone </li>
                 <li> 1 tsp vanilla extract </li>
                 <br>
            <p>Total cost of ingredients: &euro; 10.50</p>
            </ul></div>

        <div class="col-8">
            <h2>Instructions:</h2>
            <ol> 
                <li>Place the digestive biscuits into a sealable freezer bag. Push all the air out and seal the bag.
                    Crush the biscuits with a rolling pin, being careful not to break any holes in the bag.</li>
            <br> 
                <li>Melt the butter in a large saucepan. Tip the biscuit crumbs into the butter and mix well
                 until thoroughly combined. Press the buttery crumbs into the bottom of a 23cm/9in 
                 springform or loose-bottomed tin. Chill in the refrigerator while you make the topping.</li>
            <br>
                <li>Combine the cream cheese and mascarpone in a large mixing bowl. Using an electric handheld mixer,
                     blend the cheeses together until light and fluffy.Add the icing sugar a little at a time and blend to
                     incorporate. Finally, mix in the vanilla.The mixture should be very light and fluffy</li>
            <br>
                <li>Place the malted milk balls in the sealable freezer bag and close.Knock the malted milk balls with a 
                    rolling pin to just break them apart. Fold half of the crushed malted milk balls 
                    into the cream cheese mixture until thoroughly combined.</li>
            <br> 
                <li>Spread the cream cheese mixture over the biscuit base and smooth the top 
                    with a palette knife or spatula. Cover with cling film and chill in the fridge for at least four hours.</li>
            <br> 
                <li>When ready to serve,release the catch of the springform tin carefully, then slice and serve</li>
            </ol> 
      </div>
    <?php include './components/footer.php'; ?>
  </body>
</html>