<?php 
	//pull content from another page
	$content = file_get_contents('http://54.235.78.70/resume/give_Quincy.php?request=resume');	
	//format in jason 
	$formatted_content = json_decode($content,true);
?>

<!doctype>
<html>
	<head>
		<!meta charset="UTF-8">
		
		<!Title>
		<title>Quincy's Resume</title>
		<link href='http://fonts.googleapis.com/css?family=Simonetta' rel='stylesheet' type='text/css'>	
		<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>	
		<!--Styling my sections-->
		<style>
		
body{
			font-family: 'Simonetta', cursive;
			font-size: 16px;
			margin: 0px;
			zoom: reset;
		}
		h1, h2, h3, p{
			margin:0px;
		}
		h2, h3, p{
			margin-left: 10px;
		}
		section#General-Info{
			text-align:right;
			width: 500px;
			float: right;
			padding: 20px;
			margin-top: -20px;
			}
			
		#Education, #Relevant-Experience, #Skills, #Awards, {
			margin: 20px;
			border-bottom: solid black 1px;
			padding-bottom: 50px;
		}
		 #EducationTitle, #Relevant-ExperienceTitle, #SkillsTitle, #AwardsTitle{
			font-family: 'Merriweather Sans', sans-serif;
		}
		
		#EducationTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: 125px;
			margin-bottom: 240px;
			margin-left: 122px;
			margin-right: -45px;
			float: left;
		}
		
		#Education h3{
			font-size: 25px;
			margin-bottom: 240px;
			padding-bottom: 100px !important;

		}
		
		#Education p{
			margin-left: 100px;

		}
		
		
		/*#Relevant-Experience{
			height: 135px;
		}*/
		#Relevant-ExperienceTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: 125px;
			margin-bottom: 240px;
			margin-left: 56px;
			margin-right: -45px;
			float: left;
		}
		
			#Relevant-Experience h3{
			font-size: 25px;
			margin-top: 125px;
		}
			#Relevant-Experience p{
			margin-left: 100px;
			margin-top: 10px;
		}
		#Skills{
			height: 240px;
		}
	
		#SkillsTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 0px;
			height: 240px;
			margin-top: 125px;
			margin-bottom: 240px;
			margin-left: 116px;
			margin-right: -45px;
			float: left;
			font-size: 25px;
		}
		
		#Skills p{
			margin-left: 100px;
		}

		#Awards{
			height: 240px;
		}
		#AwardsTitle{
			transform:rotate(-90deg);
			-ms-transform:rotate(-90deg); /* Internet Explorer */
			-moz-transform:rotate(-90deg); /* Firefox */
			-webkit-transform:rotate(-90deg); /* Safari and Chrome */
			-o-transform:rotate(-90deg); /* Opera */
			
			width: 230px;
			height: 0px;
			margin-top: 124px;
			margin-bottom: 0px;
			margin-left: -191px;
			margin-right: -25px;
			float: left;
		}

		
		#Awards h3{
			display: inline;
			margin-right: 87px;
			font-size: 10px;
		}
		
		#Awards p{
			margin-left: 100px;
		}

		
		
		/*--#Mauricio-Sanchez-Duque{
			font-family: 'Iceberg', cursive;
			font-size: 40px;
			margin: auto;
		}--*/

/*--example of how to make a p of text

			.Pixie-Sticks{ font-size: 8em; color: red;}

--*/
						
</style> 
	</head>
	<body>
		<?php foreach($formatted_content as $a => $b){ 
			$h1IDs = str_replace(' ', '-', $a);?>
			<section id="<?php echo $h1IDs;?>">
			<h1 id="<?php echo $h1IDs;?>Title"><?php echo $a; ?></h1>
			<?php if(is_array($b)){
				foreach($b as $B => $c){
					if(is_array($c)){
						$h2IDs = str_replace(' ', '-', $B); ?> 
						<h2 id="<?php echo $h2IDs;?>"><?php echo $B;?></h2>
						<?php foreach($c as $C => $d){
							$pIDs = str_replace(' ', '-', $d); ?>
							<p id="<?php echo $pIDs;?>"><?php echo $d;?></p>
						<?php }
				 	}
					else{ 
						$h3IDs = str_replace(' ', '-', $c);
						$h3IDs2 = str_replace(')', '', $h3IDs);
						$h3IDs3 = str_replace('(', '', $h3IDs2);
						$h3IDs4 = str_replace(',', '', $h3IDs3);
						$h3IDs5 = str_replace('/', '', $h3IDs4); 
						$h3IDs6 = str_replace('"', '', $h3IDs5);
						$h3IDs7 = str_replace('±', '', $h3IDs6);
						$h3IDs8 = str_replace('Ã', '', $h3IDs7);
						?>
						<h3 id="<?php echo $h3IDs8;?>"><?php echo $c;?></h3>
					<?php	
					}
				}
			}
			else{ 
				$pIDs2 = str_replace(' ', '-', $b);?>
				<p id="<?php echo $pIDs2;?>"><?php echo $b;?></p>
			<?php } ?>
			</section>
<?php	} ?>	
	</body>
</html>
