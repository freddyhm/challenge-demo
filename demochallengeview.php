
<script>

  $('#btnStartStop').click(showTimer);

  var appWidth = 24;
  var appHeight = 24;
  var flashvars = {'event_handler': 'microphone_recorder_events', 'upload_image': 'images/upload.png'};
  var params = {};
  var attributes = {'id': "recorderApp", 'name':  "recorderApp"};
  swfobject.embedSWF("recorder.swf", "flashcontent", appWidth, appHeight, "10.1.0", "", flashvars, params, attributes);

	var status = 'start';

	function blinkRec(){


    	$('#dcRec').fadeIn(800, function(){ 

    		$('#dcRec').fadeOut(800, function(){ 

    		});

    	});
	}

	function showTimer() 
	{
		if(status == 'start')
		{			
			$('#dcToolTipOut').hide();
			showRecorderDiv();
			Recorder.record('audio', 'audio.wav');
		}
		else
		{

			ss();
			Recorder.record('audio', 'audio.wav');
			loadView('streamview');
		}
	}

	function showRecorderDiv(){

		$("#recorderApp").css("visibility","visible");

	}

	function hideRecorderDiv(){
		$("#recorderApp").css("visibility","hidden");	
	}

	function startRecAndTimer(){

		hideRecorderDiv();
    	$('#btnStartStop').attr('src', 'images/views/demochallenge/btn_stop.png');
    	

    	self.setInterval("blinkRec()",1000);

    	stopwatch();
    	ss();
    	status = 'stop';
	}

	function cancelPermission(){

		$('#btnStartStop').attr('onclick', 'javascript:void(0)');

	}

</script>
<div id="demochallengeview">
			<a href="javascript:void(0)" ><img id="dcToolTipOut" src="images/views/challenge/demotooltip.png"/></a>				
			<img src="images/views/demochallenge/bg_tooltip.png" id="dcToolTip" />
			<p  id="descToolTip">Say "Growple grows people and gropes the rope so great growing groups get going to go fo sho!" as fast as you can</p>
			<img src="images/views/demochallenge/header.png"  id="dcHeader" />
			<img id="dcRec" src="images/views/demochallenge/recording.png" />
			<a href="javascript:void(0)"><img id="btnStartStop" src="images/views/demochallenge/btn_start.png" /></a>
			<img src="images/views/demochallenge/bg_timer.png"  id="dcBgTimer" />
			<div id="dcNumbers">
				<img id="dcMinuteTwo" src="images/views/demochallenge/num_0.png" />
				<img id="dcMinuteOne" src="images/views/demochallenge/num_0.png" />
				<img id="dcSecondTwo" src="images/views/demochallenge/num_0.png" />
				<img id="dcSecondOne" src="images/views/demochallenge/num_0.png" />
			</div>
</div>

