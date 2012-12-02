var t = [0, 0, 0, 0, 0, 0, 0, 1];

var timeTaken;
var timeCountMs;

function ss() 
{
	t[t[2]]=(new Date()).valueOf();
	t[2]=1-t[2];

	if (0==t[2]) 
	{
		clearInterval(t[4]);
		t[3]+=t[1]-t[0];
		var ttt = document.getElementById("lap");
		var a = document.createElement("div");
        a.id="div1";
        a.innerHTML+="<table><tr><td width=65 align=center>"+'Lap '+(t[7]++)
        +"</td><td width=116 align=center>"+
		format(t[3])+"</td><td width=110 align=center>"+
		format(t[1]-t[0])+"</td></tr></table>";
		
		/* append to html */
		//ttt.appendChild(a);



		timeTaken = format(t[3]);
		timeCountMs = t[3];

		/* time elapsed between start/stop. Lap function */ 
		//var timeElapsed = format(t[1]-t[0]);

		t[4] = t[1] = t[0] = 0;
		disp();
	} 
	else
	{
		t[4]=setInterval(disp, 43);
	}
}

function r() 
{
	$('#dcSecondOne').attr('src', 'images/views/demochallenge/num_0.png');
	$('#dcSecondTwo').attr('src', 'images/views/demochallenge/num_0.png');
	$('#dcMinuteOne').attr('src', 'images/views/demochallenge/num_0.png');
	$('#dcMinuteTwo').attr('src', 'images/views/demochallenge/num_0.png');
}

function disp() 
{
	if (t[2]) t[1]=(new Date()).valueOf();
	var timeCount = t[3]+t[1]-t[0];
	format(timeCount);
	//t[6].value=format(timeCount);
}

function format(ms) 
{
	var d=new Date(ms+t[5]).toString().replace(/.*([0-9][0-9]:[0-9][0-9]:[0-9][0-9]).*/, '$1');
	var x=String(ms%1000);
	
	var secOne = d.substring(7);
	var secTwo = d.substring(6,7);
	var minOne = d.substring(4,5);
	var minTwo = d.substring(3,4);

	var hundredmin = d.substring(1,2);

	$('#dcSecondOne').attr('src', 'images/views/demochallenge/num_' + secOne + '.png');
	$('#dcSecondTwo').attr('src', 'images/views/demochallenge/num_' + secTwo + '.png');
	$('#dcMinuteOne').attr('src', 'images/views/demochallenge/num_' + minOne + '.png');
	$('#dcMinuteTwo').attr('src', 'images/views/demochallenge/num_' + minTwo + '.png');

	if(hundredmin != 0)
	{
		r();
	}

	
	while (x.length<3)
	{
		x ='0'+ x;
	} 

	d += '.'+x;

	return d;
}

function stopwatch() 
{
	t[5] = new Date(1970, 1, 1, 0, 0, 0, 0).valueOf();
	//t[6] = document.getElementById('disp');
	disp();
}

