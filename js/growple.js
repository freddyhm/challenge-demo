
var playerName;
var playerSquarePic;
var playerBigPic;
var selectedFriendPic;
var selectedFriendName;
var selectedLoc;
var selectedFriendBigPic;
var selectedFriendFirstName;
var selectedFriendID;
var otherFriends = new Array();

$(document).ready(function(){
	loadView('firstview');
});

function loadView(view)
{

	switch(view)
	{
		case 'firstview':
			$('#mainscreen').load('firstview.php').hide().fadeIn(3000);
			break;
		case 'challengeview': 
			$('#mainscreen').load('challengeview.php').hide().fadeIn(2000);
			break;
		case 'demochallengeview':
			$('#mainscreen').load('demochallengeview.php').hide().fadeIn(2000);
			break;
		case 'streamview':
			$('#mainscreen').load('streamview.php').hide().fadeIn(2000);
			break;
		case 'playercardview':
			$('#mainscreen').load('playercardview.php').hide().fadeIn(2000);
			break;
		case 'endview':
			$('#mainscreen').load('endview.php').hide().fadeIn(2000);
			break;
		default:

	}
}





