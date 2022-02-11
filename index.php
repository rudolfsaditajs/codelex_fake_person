<?php
require_once "vendor/autoload.php";


$faker = Faker\Factory::create();
?>
<html>
<body>
 <div style="display: flex ">
     <div>
<img src="<?php echo $faker->imageUrl(150,150); ?>" />
 </div>

<div>

<?php echo $faker->firstName(); ?>
<br>
<?php echo $faker->lastName(); ?>
<br>
<?php echo $faker->randomNumber(2); ?>
<br>
<?php echo $faker->address(); ?>
<br>
<?php echo $faker->email(); ?>
<br>
<?php echo $faker->phoneNumber(); ?>
 </div>
</body>




