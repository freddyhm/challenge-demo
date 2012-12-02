<script type="text/javascript">

/* ------- Rough Animation Sequence  ---------- */

//show challengebox
	      //show playerprofilepic
	      //show friendprofilepic	   
			   //show playbutton
			   //Recorder.playBack('audio');
			   		//showplayertime
			   			//show talkabout
			   				//showcomment1
			   				//showvote1
			   					//showcomment2
			   					//showvote2
			   			//hide talkabout
			   		//play friend's audio
			   			//show friend's time
			   				//show winner
			   					//show 20 points
			   				//show talkabout
			   					//show comment 1 + comment 2
			   					//show 5 points
/* ------- Rough Animation Sequence  ---------- */


$(document).ready(function(){

	$('.btnGo').hide();

    $('#svWinStar').after("<img id='svPlayerProfilePic' src='" + playerSquarePic + "' />");	
	$('#svCheerRight').after("<img id='svFriendProfilePic' src='" + selectedFriendPic + "' />");  

  
	var otherIndexFriend1 = otherFriends[0];
	var otherIndexFriend2 = otherFriends[1];

    $('#svTalkAbout').after("<img id='svComment1' src='" + friendlist[otherIndexFriend1].pic_square + "' />");
    $('#svTalkAbout').after("<span id='svComment1Name'>" + friendlist[otherIndexFriend1].name + "</span><br /><p id='svComment1Msg'>OK, we all know who's gonna win ;)");
    $('#svTalkAbout').after("<img id='svComment2' src='" + friendlist[otherIndexFriend2].pic_square + "' />");
	$('#svTalkAbout').after("<span id='svComment2Name'>" + friendlist[otherIndexFriend2].name + "</span><br /><p id='svComment2Msg'>This is gonna get intense!</p>");
	$('#highlightPlayer').append(playerName);
	$('#highlightFriend').append(selectedFriendName);

	$('#svTalkAbout').after("<img id='svPoints5' src='images/views/stream/pt_5.png' />"); 

	if($.browser.webkit == true){

	    $('#svComment1').css('margin', '218px 0px 0px 26px');
	    $('#svComment1Name').css('margin', '236px 0px 0px 60px');
	    $('#svComment1Msg').css('margin', '230px 0px 0px 60px');

	    $('#svComment2').css('margin', '265px 0px 0px 26px');
	    $('#svComment2Name').css('margin', '285px 0px 0px 60px');
	    $('#svComment2Msg').css('margin', '277px 0px 0px 60px');

	    $('#svPlayerProfilePic').css('border', '0');
	    $('#svFriendProfilePic').css('border', '0');

	    $('#svComment1').css('border', '0');
	    $('#svComment2').css('border', '0');
	    $('.btnGo').css('margin-top', '312px');

    }

    $('#svContent').fadeIn(2000, function() {

      	showChallengeBox();

     });


      setTimeout("$('#svBtnAudio1').attr('src', 'images/views/stream/btn_audio_green.png')", 2000);
    $('#svToolTipOut1').show();
 	$('#svBtnAudio1').click(animateInteraction);

});

function animateInteraction(){

	$('#svToolTipOut1').hide();
	Recorder.playBack('audio');
	setTimeout("showPlayerTime()",timeCountMs); 
}

function animateFriendAudio(){

	$('#svToolTipOut2').hide();
	setTimeout("showSecondComment('first')", 1000);

}

function animateWinner(){

	$('#svToolTipOut3').hide();
	document.getElementById("dummyspanGrowple").innerHTML = "<embed src='growplesound.wav' hidden=true autostart=true loop=false>";
	setTimeout("showFriendTime()", 12000);
}

function animatePoints(){

	$('#svToolTipOut4').hide();
	setTimeout("showTalkAbout('again')", 1000);
	
	$('#svFriendTime').fadeOut(1000, function() {
	});

	$('#svPlayerTime').fadeOut(500, function(){
	});
	
}

function showChallengeBox(){

	
	$('#svChallengeBox').fadeIn(500, function() {
	});
}

function showPlayerTime(){

	var div1 = document.getElementById('svPlayerTime');

	div1.innerHTML = timeTaken;


	$('#svBtnAudio1').attr('src', 'images/views/stream/btn_audio.png');

	$('#svPlayerTime').fadeIn(timeCountMs + 3000, function(){

		$('#svPlayerTime').fadeOut(500, function(){
		});

		setTimeout("showTalkAbout('first')", 500);

	});

}

function showTalkAbout(lap){

	$('#svTalkAbout').fadeIn(100, function() {

		showFirstComment(lap);

	});

	$('#svTATitle').css('color', '#1771b1');
	$('#svCBTitle').css('color', 'grey');

}

function showFirstComment(lap){

	if(lap == 'again')
	{
		showSecondComment(lap);
	}

	$('#svComment1').fadeIn(500, function() {
		});

	 $('#svComment1Name').fadeIn(500, function() {
		});

	 $('#svComment1Msg').fadeIn(500, function() {

	 	if(lap == 'first')
	 	{
	 	    document.getElementById("dummyspanCheerPlayer").innerHTML = "<embed src='cheer.wav' hidden=true autostart=true loop=false>";	
	 		$("#svVoteBarPlayer").animate({"height": "+=30", "top": "-=30"}, 1000);

	 		$("#svNumVotePlayer").animate({"height": "+=30", "top": "-=30"}, 1000, function(){

	 			document.getElementById('svNumVotePlayer').innerHTML = '1';
	 		});

	 		$('#svToolTipOut2').show();
	 		$('#svToolTipOut2').click(animateFriendAudio);

	 	}
	 	else
	 	{
	 		document.getElementById("dummyspanPointsWatcher").innerHTML = "<embed src='5points.wav' hidden=true autostart=true loop=false>";
		    $('#svPoints5').fadeIn(1000, function() {
		    
		      $('#svPoints5').fadeOut(1000, function() {

		          $('#svToolTipOut5').show();
		          $('.btnGo').show();

		          $('.btnGo').click(function(){

		          	loadView('playercardview');

		          });
		       });
		   });
	     }

	 });
}


function showSecondComment(lap){

	$('#svComment2').fadeIn(1000, function() {
		});

	 $('#svComment2Name').fadeIn(1000, function() {
		});

	 $('#svComment2Msg').fadeIn(1000, function() {

	 if(lap == 'first')
	 	setTimeout("hideTalkAbout()", 2000);
	});

	if(lap == 'first')
	{
	  document.getElementById("dummyspanCheerFriend").innerHTML = "<embed src='cheer.wav' hidden=true autostart=true loop=false>";	
	  $("#svVoteBarFriend").animate({"height": "+=30", "top": "-=30"}, 1000);
	  $("#svNumVoteFriend").animate({"height": "+=30", "top": "-=30"}, 1000, function(){

	 				document.getElementById('svNumVoteFriend').innerHTML = '1';
	 		});

	}
}

function hideTalkAbout(){

	 $('#svComment1').fadeOut(500, function() {
		});

	 $('#svComment1Name').fadeOut(500, function() {
		});

	 $('#svComment1Msg').fadeOut(500, function() {
		});

	 $('#svComment2').fadeOut(500, function() {
		});

	 $('#svComment2Name').fadeOut(500, function() {
		});

	 $('#svComment2Msg').fadeOut(500, function() {
		});

	 $('#svTalkAbout').fadeOut(1000, function() {

	 	$('#svBtnAudio2').attr('src', 'images/views/stream/btn_audio_green.png');

	 	$('#svToolTipOut3').show();
	 	$('#svBtnAudio2').click(animateWinner);
	 	
	 
	 	});

	 $('#svTATitle').css('color', 'grey');
	 $('#svCBTitle').css('color', '#1771b1');
}

function showFriendTime(){

	$('#svFriendTime').fadeIn(2000, function() {

		setTimeout("$('#svPlayerTime').css('color', '#ff5357')", 1000);
		$('#svBtnAudio2').attr('src', 'images/views/stream/btn_audio.png');
		setTimeout("showWinnings()", 2000);

	});

	$('#svPlayerTime').fadeIn(2000, function(){
	});
}

function showWinnings(){

    document.getElementById("dummyspanWin").innerHTML = "<embed src='win.wav' hidden=true autostart=true loop=false>";
	$('#svWinStar').fadeIn(4000, function() {

		document.getElementById("dummyspanPointsWinner").innerHTML = "<embed src='20points.wav' hidden=true autostart=true loop=false>";
		$('#svPoints20').fadeIn(1000, function() {
			
			$('#svPoints20').fadeOut(1000, function() {

				$('#svToolTipOut4').show();
				$('#svToolTipOut4').click(animatePoints);

			});
		});
	});
}

</script>
<img src="images/views/stream/demotooltip1.png" id="svToolTipOut1" />
<a href="javascript:void(0)"><img src="images/views/stream/demotooltip2.png" id="svToolTipOut2" /></a>
<img src="images/views/stream/demotooltip3.png" id="svToolTipOut3" />
<a href="javascript:void(0)"><img src="images/views/stream/demotooltip4.png" id="svToolTipOut4" /></a>
<img src="images/views/stream/demotooltip5.png" id="svToolTipOut5" />
<div id="streamview">	
		<img class="topBar" src="images/views/common/nav_bar.png"/>
		<div id="svContent">		
			<img id="svBckg" src="images/views/stream/bg_challengeview.png" />
			<div id="svText">
				<p id="svTitle">Challenge: Growple! SmackDown</p>
				<p id="svChallenge">
					<span id = "highlightPlayer"></span> challenges
					<span id = "highlightFriend"></span>
					<span class = "highlightAction"> to the Growple SmackDown!</span>
					<br />
					<span id="svChallengeMsg">-Hey, I bet you can't say this faster than me!</span>
				</p>
			</div>	


			<div id = "svPlayerFriend">
				<img id="svCheerLeft" src="images/views/stream/btn_cheer_left.png" />
				<img id="svWinStar" src="images/views/stream/win.png" />
				<img id="svPoints20" src="images/views/stream/pt_20.png" />	
				<img id="svVoteBarPlayer" src="images/views/stream/votebar.png" />
				<span class="svNumVote" id="svNumVotePlayer">0</span>
				<img id = "svVsLabel" src="images/views/stream/label_vs.png" />
				<img id="svCheerRight"src="images/views/stream/btn_cheer_right.png" />
				<img id="svVoteBarFriend" src="images/views/stream/votebar.png" />
				<span class="svNumVote" id="svNumVoteFriend">0</span>
			</div>


			<div id = "svChallengeBox">
				<span id="svCBTitle">Challenge Box</span>
				<span id="svTATitle">Talkabout</span>
				<a href="javascript:void(0)"><img id="svBtnAudio1" src="images/views/stream/btn_audio.png" /></a>
				<a href="javascript:void(0)"><img id="svBtnAudio2" src="images/views/stream/btn_audio.png"/></a>
				<p id="svPlayerTime"></p>
				<p id="svFriendTime">00:00:12:423</p>
				<img id="svBtnPlus" src="images/views/stream/btn_plus.png">
			</div>
			<div id = "svTalkAbout">
			</div>
			<a  href="javascript:void(0)"><img class ="btnGo" src="images/views/common/btn_go.png" /></a>
		</div>
</div>
<span id='dummyspanGrowple'></span>
<span id='dummyspanPointsWinner'></span>
<span id='dummyspanPointsWatcher'></span>
<span id='dummyspanCheerPlayer'></span>
<span id='dummyspanCheerFriend'></span>
<span id='dummyspanWin'></span>    