
<?php 
/*$valor=5;
if ($valor>3) {
	echo "el valor es mayor";
}
else{
	echo "el valor es menor";
}*/
$limitMonth =12;
$jesus = [['titulo'=> 'php developer',
'descripcion'=> 'jesus olivera contreras',
'visible'=> true,
'months'=> 6],

['titulo'=> 'python dev',
'visible'=> true,
'months'=> 4],

['titulo'=> 'develr',
'visible'=> true,
'months'=>3],

['titulo'=> 'devop',
'visible'=> false,
'months'=>5],

['titulo'=> 'frondend dev',
'visible'=> true,
'months'=>2]];
//var_dump($jesus[0])
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>jes</title>
</head>
<body>
<h1><?php echo $jesus[0]['titulo']; ?></h1>
<ul>
	<?php
	$idx=0; 
    $contarmeses=0;
	for ($idx=0; $idx <count($jesus) ; $idx++) {
		$contarmeses=$contarmeses + $jesus[$idx]['months'];
		if ($contarmeses>$limitMonth) {
			break;
		}
		if ($jesus[$idx]['visible']== false) {
		  continue;
			# code...
		}
		  echo '<li class="work-position">';
          echo '<h5>'.$jesus[$idx]['titulo'].'</h5>';
          echo '<p>'.$jesus[$idx]['descripcion'].'</p>';
          echo '<p>'.$contarmeses.'</p>';
          echo '<strong>Achievements:</strong>';
          echo '<ul>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '</ul>';
          echo '</li>';


	}
		
	

	 ?>

</ul>
</body>
</html>

