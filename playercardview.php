<script type="text/javascript">

$('#playercardview').after("<img id='pcvPlayerProfilePic' src='" + playerBigPic + "' />");	


$('#pcvBtnOff').click(function(){

	$('#pcvBtnOff').hide();
	$('#pcvBtnOn').show();

});

$('#pcvBtnOn').click(function(){

	$('#pcvBtnOn').hide();
	$('#pcvBtnOff').show();

});

$('.btnGo').hide();

document.getElementById("dummyspanBar").innerHTML = "<embed src='bar_rise.wav' hidden=true autostart=true loop=false>";

$('#pcvIndicBar').animate({
    opacity: 1,
    left: '+23.90px'
  }, 4000, function() {

  	
    
    $('#pcvIndicBar').fadeOut(1000, function() {

    });

    $('#pcvIndicator3').fadeOut(1000, function() {

    	$('#pcvIndicLU').fadeIn(1000, function(){

    	$('#pcvIndic3Lvl').replaceWith('<p id="pcvIndic3Lvl">LV.2</p>');

    	$('#pcvIndic3Lvl').css('color', '#ff5357');
		document.getElementById("dummyspanNL").innerHTML = "<embed src='nextlevel.wav' hidden=true autostart=true loop=false>";    	

    	});

    });

	    $('#pcvToolTipOut1').show();
	    $('.btnGo').show();

	    $('.btnGo').click(function(){

	    	if($('#pcvBtnOn').is(":visible"))
	    	{
	    		$.post("imagecompo.php", { playerpic: playerBigPic, friendpic: selectedFriendBigPic },
	    			function(data){
	    			  postChallenge(data);
	   		     });
	    	}
	  
    		loadView('endview');    
		});
  
 });
    
</script>
<img src="images/views/playercard/demotooltip.png" id="pcvToolTipOut1" />
<div id='playercardview'>
	<img class="topBar" src="images/views/common/nav_bar.png" />
	<div id="pcvContent">
		<img id="pcvPlayerCard" src="images/views/playercard/bg_playercard.png"/>
		<img id="pcvPlayerPic" />

		<p id="pcvIndicTitle1">DRUM PRACTICE</p>
		<p id="pcvIndic1Lvl">LV.1</p>
		<img id="pcvIndicator1" src="images/views/playercard/indicator_normal.png"/>

		<p id="pcvIndicTitle2">WRITING NOVEL</p>
		<p id="pcvIndic2Lvl">LV.1</p>
		<img id="pcvIndicator2" src="images/views/playercard/indicator_normal.png"/>

		<p id="pcvIndicTitle3">JUST FOR FUN</p>
		<p id="pcvIndic3Lvl">LV.1</p>
		<img id="pcvIndicator3" src="images/views/playercard/indicator_2.png"/>
		<img id="pcvIndicBar" src="images/views/playercard/bar_small.png"/>
		<img id="pcvIndicLU" src="images/views/playercard/indicator_lvup.png"/>
		<p id="pcvIndicTitle4">SKY DIVING</p>
		<p id="pcvIndic4Lvl">LV.1</p>
		<img id="pcvIndicator4" src="images/views/playercard/indicator_normal.png"/>
		<img id="pcvPostFb" src="images/views/playercard/bg_postfb.png"/>
		<a href="javascript:void(0)"><img id="pcvBtnOn" src="images/views/playercard/btn_on.png"/></a>
		<a href="javascript:void(0)"><img id="pcvBtnOff" src="images/views/playercard/btn_off.png"/></a>
		<a href="javascript:void(0)"><img class="btnGo" src="images/views/common/btn_go.png" /></a>
	</div>
</div>
<span id='dummyspanBar'></span>
<span id='dummyspanNL'></span>