<?

	$productChoice=array(
	"BlueSquare"=>"The Blue Square, is symmetrical which makes it wonderful for building anything your heart desires! This square is the fastest selling product out of all the squares, so do not delay and buy today!",
	"GreenSquare"=>"Interested in knowing what the future holds? Then look no further than the Green Square. The Green Square can not only give you a glimps into time and space but also alert you when your next big Chemisty test will be. Never be late again for that surprise quiz or exam. Know what to study and how to ace it each and everytime, guarenteed!",
	"YellowSquare"=>"Having a fancy party? What you need then is the Yellow Square! Your guests will think it's anything but square!",
	"PurpleSquare"=>"The purple square is a supreme shape that will make sure that everyone knows that you mean business! No one will even think about messing with you when you are rocking a purple square.",
	"BlueCircle"=>"Is the best circle for any occasion. From parties to just putting circles on the wall. Even for where the wedding party should stand. Fun for all ages!!!",
	"GreenCircle"=>"The Green Circle is the greenest shape of them all! Good for the environment, and the soul! Go Green!!!",
	"YellowCircle"=>"The Yellow Circle, perfect replica for the sun. If you have to do anything during the night, just bring along your Yellow Circle. It will float above you to illuminate the world around you. It also has a built in heater to keep you warm as well. Never buy a flashlight again.",
	"PurpleCircle"=>"Perfect for all your household decoration needs: Bedrooms, Livingrooms, Kitchen... EVERYWHERE! Just Grab'EM.",
	"BlueStar"=>"The Blue Star is great for meditating on the greater cosmic meaning of the universe. Staring at it makes you think of incredibly large masses of heat and energy, in a cool blue color!",
	"GreenStar"=>"The green star is the perfect shape for admiring the stars. Use this shape to observe the night sky and build your favorite constellations!",
	"YellowStar"=>"Make every night a stary night with our fine line of yellow stars! This product is perfect for star gazing pros and beginners alike. Also great for romantic evenings or flashy ninjas. Get your stars today!",
	"PurpleStar"=>"The Purple Star, otherwise known as the Boost Star, is the star of vitality. One touch of this star and you will feel rejuvenated. Say goodbye to energy drinks and coffee! The Purple Star works by providing you with natural energy through the palm of your hand. Grab a hold and power up!");

	function echoGet()
	{
		return "You selected the $_GET[color] $_GET[shape]";
	}
	
	function makeTitle()
	{
		return "$_GET[color] $_GET[shape]";
	}
	
	function makeImage()
	{
		$imageName  = "<img src='images/";
		$imageName .= $_GET['color'] . $_GET['shape'];
		$imageName .= "full.png' alt = 'Product Image' width='250' height='250'>";
		
		return $imageName;
	}
	
	function describeProduct ()
	{
		global $productChoice;
		
		$keyname = $_GET['color'] . $_GET['shape'];
		
		$product = $productChoice[$keyname];
		
		return $product;
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=makeTitle();?></title>
    </head>
    
    <body>
    	<p><?=makeImage();?></p>
        <p><?=describeProduct();?></p>
    </body>
</html>