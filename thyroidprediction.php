<?php
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Disease Diagnosis Based on Patient's Health Parameters</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
 <?php include "Includes/header.php"; ?>

 
      <div class="col-lg-9">

        <div class="row">

          <div class="col-lg-12">
            <div class="card h-100">
           
              <div class="card-body">
                <center><h4 class="card-title">
               Hypothyroidism Disease Diagnosis Percentage  Graph According to our DataSet
                </h4></center><hr>
         
<?php
									include "connection.php";
									  $id=$_SESSION['userid'];
									
			$sql="select * from thyroid_user_profile where user_id='$id' order by ID desc limit 1";
				
									$execute_query=mysql_query($sql);
									 mysql_num_rows($execute_query);
									if(mysql_num_rows($execute_query)!='0'){ 
									
									while($row=mysql_fetch_array($execute_query)){
										
									 $age=$row['age'];
									 $Tumor=$row['Tumor'];
									$sex=$row['sex'];
									$Goitre=$row['Goitre'];
									$T3=$row['T3'];
									$TT4=$row['TT4'];$T4U=$row['T4U'];
									
									
		} ?>
								
		<?php							 
    if($T3>220 && $TT4>12 && $T4U>5.5){
		
		echo "<h4>You Having Hypothyroidism. Visit Your Doctor Earliest! </h2>";
		?>
        <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Your Hypothyroidism Disease Diagnosis Percentage Based on your Health Parameter"
	},
	subtitles: [{
		text: "in percentage"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: [
					{ y: 100, label: "You Having Hypothyroidism" }
					
				]
	}]
});
chart.render();
 
}
</script>      
		<?php }else  if($T3<185 && $TT4<12 && $T4U<5.5){
		
		
		?>
        <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Your Hypothyroidism Disease Diagnosis Percentage Based on your Health Parameter"
	},
	subtitles: [{
		text: "in percentage"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: [
					{ y: 100, label: "You Thyroid Range is Perfect!"}
					
				]
	}]
});
chart.render();
 
}
</script>      
		<?php }else{ ?>
			
	     <script>		
			window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Your Hypothyroidism Disease Diagnosis Percentage Based on your Health Parameter"
	},
	subtitles: [{
		text: "in percentage"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: [
					{ y: 50, label: "Your Thyroid is Working Fine" },
					{ y: 50, label: "Some Parameters Having High Value than Normal Range Visit your Doctor." }
				]
	}]
});
chart.render();
 
}</script> 
			 <?php } ?>
        
        
        
        
    
    
  
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 <hr> 
<h5>You Must Follow Following Points to get back to Normal Range</h5>
<hr>


<p><strong>Consult Doctor: </strong> Consult your Family Doctor / Physician .</p>



<h3>Avoid Following Points</h3>
<h5>Foods to Avoid</h5>
<p>Fortunately, there aren’t many foods that you need to avoid if you have hypothyroidism.</p>

<p>However, foods that contain goitrogens should be eaten in moderation and ideally cooked.</p>

<p>You should also avoid eating highly processed foods, as they usually contain more calories. This can be a problem for someone with hypothyroidism, since they may gain weight easily.</p>

<strong><p>Here is a list of foods and supplements you should avoid completely:</p></strong>

<p><strong>Millet: All varieties.</strong>
Highly processed foods: Hot dogs, cakes, cookies, etc.
Supplements:Although adequate selenium and iodine is essential for thyroid health, too much may cause harm. Selenium and iodine supplements should be avoided unless prescribed by your doctor.
Here is a list of foods you can eat in moderation. These foods have goitrogens or are known irritants if consumed in large amounts.</p>

<p>Foods that contain gluten: Bread, pasta, cereals, beer, etc.<br>
Soy foods: Tofu, tempeh, edamame beans, soy milk, etc.<br>
Cruciferous vegetables: Broccoli, kale, spinach, cabbage, etc.<br>
Certain fruits: Peaches, pears and strawberries.<br>
Beverages: Coffee, green tea and alcohol — these beverages may irritate your thyroid gland (31Trusted Source, <br>32Trusted Source, 33Trusted Source).</p>






<strong>Foods to Eat</strong>
<p><strong>There are plenty of food options for people with hypothyroidism, including the following:</strong></p>

<p>Eggs: Whole eggs are best, as much of the iodine and selenium are found in the yolk, while the whites are full of protein.<br>
Meats: All meats, including lamb, beef, chicken, etc.<br>
Fish: All seafood, including salmon, tuna, halibut, shrimp, etc.<br>
Vegetables: All vegetables are fine to eat. Cruciferous vegetables are fine to eat in moderate amounts, especially when cooked.<br>
Fruits: All other fruits including berries, bananas, oranges, tomatoes, etc.<br>
Gluten-free grains and seeds: Rice, buckwheat, quinoa, chia seeds and flaxseed.<br>
Dairy: All dairy products including milk, cheese, yogurt, etc.<br>
Beverages: Water and other non-caffeinated beverages.</p>



<h3>Tips for Maintaining a Healthy Weight</h3>
<h3>It’s very easy to gain weight with hypothyroidism due to a slow metabolism.</h3>

<p><strong>Here are a few tips to help you maintain a healthy weight.
</strong></p>
<p>Get plenty of rest: Aim for 7 to 8 hours of sleep every night. Sleeping less than this is linked with fat gain, especially around the belly area (35Trusted Source).</p>
<p>Practice mindful eating: Paying attention to what you're eating, why you’re eating and how fast you’re eating can help you develop a better relationship with food. Studies also show that it can help you lose weight (36Trusted Source, 37Trusted Source).</p>
<p>Try yoga or meditation: Yoga and meditation can help you de-stress and improve your overall health. Research also shows that they are effective at helping you maintain a healthy weight (38Trusted Source).</p>
<p>Try a low to moderate carb diet: Eating a low to moderate amount of carbs is very effective for maintaining a healthy weight. However, avoid trying a ketogenic diet, as eating too few carbs may lower your thyroid hormone levels (39Trusted Source, 40Trusted Source).</p>


<?php  }else{
		 echo "<a href='thyroid.php'>Please Upload Your Profile First!</a>";
		 }  ?> 

              </div>
             
            </div>
          </div>

         

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Disease Diagnosis Based on Patient's Health Parameters | Developed By Vaishali</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php 
require "connection.php";
if(isset($_POST['name'])){
echo $name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$sql="insert into user(name, email, password, contact) values('$name','$email','$password','$city');";
$execute_query=mysql_query($sql);
if($execute_query>0){
	echo "<script>alert('User Registered Successfully!!');</script>";	
	}else{
echo mysql_error();
	}
}
?>
