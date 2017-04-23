
<?php
include_once('header.php');


?>

<?php

$i=1;
foreach ($_GET['chosen_magics'] as $key => $value) {

	// echo $key." / ".$value."<br>";
	$magic[$i]=$value;
	$i++;
}
$count= count($magic);
if ($count<4) {
	$_SESSION['error'] = "Chose 4 magics for battle!";
	header('Location: pre-arena.php');
}else{
	$_SESSION['error'] = "";
}

echo "<div id='wrapper_arena'>";
$read_query2 = "SELECT * FROM `magics` 
WHERE `magic_id`= $magic[1] || `magic_id`= $magic[2] || `magic_id`= $magic[3] || `magic_id`= $magic[4]";
$read_result2 = mysqli_query($conn, $read_query2);
echo "<div id='spells'>";
if (mysqli_num_rows($read_result2) > 0) {
	
	$res2 = mysqli_query($conn, $read_query2);


	if (mysqli_num_rows($res2) > 0){ 
		

		while($row2 = mysqli_fetch_assoc($read_result2)){

			// var_dump($row1);
			
			echo "<img class='spells' data-info='".$row2['magic_info']."' data-spell-id='".$row2['magic_id']."' data-power='".$row2['magic_power']."' src='".$row2['magic_avatar']."'>";


			

		}
	}
	echo "</div>";
}









$enemy_random = rand(1,2);
// echo $enemy_random;

if($enemy_random == 1){
	$src = 'img/sprites/creature-orc-right.png';
	$position = '-483px -18px';
	$width = '215px';
	$height = '190px'; 
	$top = "150px";
}else{
	$src = 'img/sprites/abc.png';
	$position = '-1166px -248px';
	$width = '198px';
	$height = '115px'; 
	$top = "210px";
}
?>
<style type="text/css" media="screen">
	#spells{
		width:400px;
	}
	#spells > img{
		margin-right:4%;
		margin-bottom:3%;
	}
	#spells > img:nth-of-type(4){
		margin-right:0!important;
	}
	#player_1 {
		position:absolute;
		background: url('img/sprites/human-knight.png') no-repeat -66px 0;
		width: 98px;
		height: 236px;
		margin-bottom: 2%;
		top:150px;

	}
	#spells{
		/*	margin-top:90%;*/
		position:absolute;
		left:40%;
		bottom:0;
		z-index: 99999;

	}
	#enemy{
		position:absolute;
		background: url('<?php echo $src ?>') no-repeat <?php echo $position ?>;
		width:<?php echo $width ?>;
		height: <?php echo $height ?>;
		margin-left: 80%;
		top:<?php echo $top ?>;

	}
/*#container_life{
	border:red 2px solid;
	width:180px;
	height:180px;
	border-radius: 50%;
	position:absolute;
	left:20%;
	bottom:2%;
	display: block;
	position:relative;


}*/
.container_life {
	/*border:red 2px solid;*/
	width:56%;
	height:30%;
	/*border-radius: 50%;*/
	position:absolute;
	/*left:20%;*/
	bottom:2%;
	display: block;
	background: url('img/hud2.png') no-repeat ;
	background-size: 40% 40%;
	top:0;
}

.container_life2 {
	/*border:red 2px solid;*/
	width:56%;
	height:30%;
	/*border-radius: 50%;*/
	position:absolute;
	/*left:20%;*/
	bottom:2%;
	display: block;
	background: url('img/hud3.png') no-repeat ;
	background-size: 40% 40%;
	top:0;
	margin-left: 78%;
}	
.skillbar-bar2 {
	/*border:2px red solid;*/
	height:10px;
	width:190px;
	margin-top:63px;
	margin-left:1%;

	background:#6adcfa;
	border-radius:20px;
	/*opacity: 0.3;*/
}
.skill-bar-percent2 {
	position:absolute;
	right:10px;
	left:29%;
	top:10%;
	font-size:11px;
	height:35px;
	line-height:35px;
	color:#fff;
	/*color:rgba(0, 0, 0, 0.4);*/
}
.skillbar-bar {
	/*border:2px red solid;*/
	height:10px;
	width:190px;
	margin-top:63px;
	margin-left:13%;

	background:#6adcfa;
	border-radius:20px;
	/*opacity: 0.3;*/
}
.skill-bar-percent {
	position:absolute;
	right:10px;
	left:7%;
	top:10%;
	font-size:11px;
	height:35px;
	line-height:35px;
	color:#fff;
	/*color:rgba(0, 0, 0, 0.4);*/
}
.enemy_spell1 {
	background: url('img/sprites/hit_effect_right.png') no-repeat  -495px -62px;
	width: 308px;
	height: 205px;
	margin-top: 10%;
	display: none;
	margin-left:-2%;
}
.enemy_spell2 {
	background: url('img/sprites/sword_hit_effect.png') no-repeat -947px -95px;
	width: 203px;
	height: 205px;
	margin-top: 10%;
	display: none;
	float:right;
	margin-right:5%; 
}
.enemy_spell6 {
	background: url('img/sprites/abc.png') no-repeat -588px -1439px;
	width: 491px;;
	height: 195px;
	margin-top: 10%;
	display: none;
	float:right;
	margin-right:1%; 

}
.enemy_spell7 {
	background: url('img/sprites/abc.png') no-repeat -55px -727px;
	width: 180px;
	height: 109px;
	margin-top: 15%;
	display: none;
	float:right;
	margin-right:6%; 

}


}


</style>
<div class="enemy_spell1"></div>
<div id="player_1">

</div>
<div class="enemy_spell2">
	
</div>
<div class="enemy_spell6">
	
</div>
<div class="enemy_spell7">
	
</div>
<div id="enemy">

</div>
<div id="hud">
	<img  src="img/hud.png" alt="asdasdasd"  style="position:absolute;left:35%;bottom:0;">
</div>

<!-- <div id="container_life">
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
</div> -->
<div class="container_life clearfix ">
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
	
</div> 
<div class="container_life2 clearfix ">
	<div class="skillbar-bar2" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent2">100%</div>
	
</div><!-- End Skill Bar -->
<!-- <img src="img/hud2.png" width="20%" height="20%" alt="faill"> -->
<!-- <div class="container_life clearfix ">
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
	
</div> --> <!-- End Skill Bar -->
<!-- <div class="container_mana clearfix ">
	<div class="skillbar-bar-mana" style="background: #5277f1;"></div>
	<div class="skill-bar-percent-mana">100%</div>
	
</div> -->

<center><img id="fight" src="img/fight.gif" style="display:none"></center>
<div id="dificulty" style="display: none"><?php echo $_GET['dificulty'] ?></div>

</div>
<div id="end" style="display:none">
<form action="arena2.php" method="POST">
<input type="hidden" name="xp" id="xp" value="">
<input type="hidden" name="win" id="win" value="">
<input type="submit" name="submit" value="Continue">

</form>
</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {

		alert( "ready!" );
		var counter = 0;
		var life = 100;
		var impact = 0;
		var life2 = 100;
		var impact2 = 0;
		var round = 1;
		var diff = $('#dificulty').text();
		// alert($('#dificulty').text());
		

		$(".header").slideUp("slow");
		$(".w3_navigation").slideUp("slow");
		$("#hud").fadeIn("slow");
		$('#fight').css('display','block');
		$('#fight').fadeOut(1200);
		var win = 0;
		var win_xp = 0;
  				if(diff == "easy"){
  					var rand_en_dmg = Math.floor((Math.random() * 10) + 1); 
  					win_xp = 25;
  				}
  				if(diff == "medium"){
  					var rand_en_dmg = Math.floor((Math.random() * 50) + 1); 
  					win_xp = 50;
  				}
  				if(diff == "hard"){
  					var rand_en_dmg = Math.floor((Math.random() * 70) + 10); 
  					win_xp = 75;
  				}

  //  $("#player_1").mouseover(function() {
  //   $(this ).css({'backgroundPosition':'-264px -9px','width':'153px'})

  // }).mouseout(function(){
  // 	$(this ).css({'backgroundPosition':'-66px 0','width':'98px'})
  // }).click(function() {
  // 	$(".skillbar-bar").css('width','180px');

  // })
  // $("#enemy").mouseover(function() {
  //   $(this ).css({'backgroundPosition':'-11px -18px','width':'215px','height':'200px'})

  // }).mouseout(function(){
  // 	$(this ).css({'backgroundPosition':'-483px -18px','width':'215px'})

  // }).click(function() {
  	
  // })
 
  if(counter == 0){  
  	$(".spells").click(function(){

  		var spell_id = $(this).data('spellId');
  		var win = 0;
  		var magic_power = $(this).data('power')
  		// alert(magic_power);
  		$('#spells').css('z-index','-99999');

  		impact+=magic_power;
  		var dmg = (life - impact);
  		if(<?php echo $enemy_random ?> == 1){
  			$("#enemy").css({'backgroundPosition':'-11px -18px','width':'215px','height':'200px'});
  		}else{
  			$("#enemy").css({'backgroundPosition':'-1821px -268px','width':'198px','height':'115px'});
  		}
  		setTimeout( function(){
  			if(<?php echo $enemy_random ?> == 1){
  			$('#enemy').css({'backgroundPosition':'-483px -18px','width':'215px','z-index':'-9999'});
  			}else{
  			$('#enemy').css({'backgroundPosition':' -1166px -248px','width':'215px','z-index':'-9999'});
  			}
  			$('.skillbar-bar2').css('width',(190*dmg)/100+'px');
  			$('.skill-bar-percent2').html((100-impact)+'%');
  			if((100-impact) <= 0 ){
  				alert('enemy dead');
  				$("#wrapper_arena").fadeOut("slow");
  				// $("#win").val('1');
  				win += 1;
  			}
  			if(spell_id == 5){
  			$('.enemy_spell2').css({'display':'block'});
  			}
  			$('#enemy').css({'z-index':'9999'});
  			// alert(spell_id);
  			if(spell_id == 6){
  				$('.enemy_spell6').css({'display':'block','z-index':'9999','backgroundPosition':'-1165px -1422px'});
  				if(<?php echo $enemy_random ?> == 1){
  				$('#enemy').css({'backgroundPosition':'-483px -18px','width':'215px','z-index':'-9999'});
  				}else{
  					$('#enemy').css({'backgroundPosition':'-1166px -248px','width':'215px','z-index':'-9999'});
  				}
  
  				// 
  				setTimeout( function(){
  			$('.enemy_spell6').css({'display':'none','z-index':'-9999'});
  			$('#enemy').css({'z-index':'9999'});
  		},600);


  			}
  			if(spell_id == 7){
  				$('.enemy_spell7').css({'display':'block','z-index':'9999','backgroundPosition':'-55px -727px'});
  				if(<?php echo $enemy_random ?> == 1){
  					$('#enemy').css({'backgroundPosition':'-483px -18px','width':'215px','z-index':'-9999'});
  				}else{
  					$('#enemy').css({'backgroundPosition':'-1166px -248px','width':'215px','z-index':'-9999'});
  				}
  
  				// 
  				setTimeout( function(){
  			$('.enemy_spell7').css({'display':'none','z-index':'-9999'});
  			$('#enemy').css({'z-index':'9999'});
  		},500);


  			}

setTimeout( function(){
	$('.enemy_spell2').css({'display':'none'});},500);
  		},200);
  		counter =1;
  	
  		if(counter == 1){
  			setTimeout( function(){
  				$('.enemy_spell1').css({'display':'block'});

  				$('.enemy_spell1').fadeOut();
  				$('.enemy_spell1').fadeIn();


  				$("#player_1").css({'backgroundPosition':'-528px -3px','width':'153px'})
  				// 
  			},1000);
  			setTimeout( function(){
  			$("#player_1").css({'backgroundPosition':'-66px 0','width':'98px'})
  		},2000);
  			setTimeout( function(){
  				
  				// var rand_en_dmg = Math.floor((Math.random() * 50) + 1); 
  				// alert(rand_en_dmg);
  				impact2 += rand_en_dmg;
  				var dmg2 = (life2 - impact2);
  				$('.skillbar-bar').css('width',(190*dmg2)/100+'px');
  				$('.skill-bar-percent').html((100-impact2)+'%');
  				if((100-impact2) <= 0 || (100-impact) <= 0){
  					if ((100-impact2) <= 0) {
  						alert('you are  dead');
  					}
  				
  				$("#wrapper_arena").fadeOut("slow");
  				$("#xp").val(win_xp);
  				$("#win").val(win);
  				$("#end").css({'display':'block','margin-left':'50%'});
  				}else{
  					setTimeout( function(){
  			round++;
  			alert('Round '+round);
  			$('#spells').css('z-index','99999');
  			$('#fight').css('display','block');
		$('#fight').fadeOut(1200);
  		},3000);
  				}
  				$('.enemy_spell1').css({'display':'none'});
  			},2000);
  			counter = 0;
  		}
  		


  	});
  }

});

</script>
