<script type="text/javascript">

var load_friends = "No";
var load_locs = "No";
var load_player = "No";

$(document).ready(function(){

	fbConnected();
   showLoadingSign();	

   $('.btnGo').click(function() {

		$('#cvToolTipOut').hide();
  		saveSelected();
  		loadView('demochallengeview');
    });

});


function getOwnNamePic(){

    FB.api(
    {
      method: 'fql.query',
      query: "SELECT name, pic_square, pic_big, first_name FROM user WHERE uid = me()"

    },
    function(response) 
    {
       loadFbPlayerInfo(response); 

    });

}

function getFiveFbFriends () {

    FB.api(
    {
      method: 'fql.query',
      query: "SELECT name, pic_square, pic_big, first_name, uid FROM user WHERE uid != me() AND uid IN (SELECT uid2 FROM friend WHERE uid1 = me() LIMIT 5)"

    },
    function(response) 
    {
       loadFbFriends(response); 

    });
  }

 
  function getCommentFbFriends()
  {
    var someComments;

    FB.api(
      {
        method: 'fql.query',
        query: "SELECT name, pic_square, pic_big, first_name, uid FROM user WHERE uid != me() AND uid IN (SELECT fromid from comment WHERE post_id IN (SELECT post_id FROM stream WHERE source_id = me()) LIMIT 5)"

      },
      function(response) {

        someComments = (response instanceof Array && response.length >= 5 ) ? true : false;
      
        if(someComments)
          loadFbFriends(response);      
        else
          getFiveFbFriends();

      });
  }

  function fbConnected()
  {
      getOwnNamePic();
      
      var publicWall;

      FB.api(
      {
        method: 'fql.query',
        query: "SELECT name, pic_square, pic_big, first_name, uid FROM user WHERE uid IN (SELECT actor_id FROM stream WHERE filter_key = 'others' AND source_id = me())"

      },
      function(response) {

        publicWall = (response instanceof Array && response.length >= 5 ) ? true : false;
  
        if(publicWall)
          loadFbFriends(response);      
        else
          getCommentFbFriends();

      });

      
  }


function showLoadingSign(){

	 $('#challengeview').hide();
	 $('#chLoading').show();

}

function hideLoadingSign(){

	if(load_friends == "Yes" && load_player == "Yes" && load_locs == "Yes"){
		$('#challengeview').show();
	 $('#chLoading').hide();	
	}
     
}



function saveSelected(){

	selectedLoc = document.getElementById('selectLoc').value;
	var i = document.getElementById('selectFriend').value;
	selectedFriendName = friendlist[i].name;
	selectedFriendPic =  friendlist[i].pic_square;
	selectedFriendBigPic = friendlist[i].pic_big;
	selectedFriendFirstName = friendlist[i].first_name;
	selectedFriendID = friendlist[i].uid;

	var j = 0; 

	for(x in friendlist)
	{
		if(friendlist[x].name != selectedFriendName)
		{
			otherFriends[j] = x;
			j++; 
		}
	}
}


/* Fb functions */
function loadFbFriends(list)
{
	friendlist = list;
	var i;

	if(load_friends == "No"){
		for (i = 0; i <= 4; i++)
	    {
	    	var str = "<option value='"+ i + "'>" + friendlist[i].name + "</option>";
	    	$('#selectFriend').append(str);
	    }
	}

   load_friends = "Yes";
   hideLoadingSign();

}

function loadFbPlayerInfo(info) 
{
	playerName = info[0].name; 
	playerSquarePic = info[0].pic_square;
	playerBigPic = info[0].pic_big;

	load_player = "Yes";	
	hideLoadingSign();
}

	/* Geoloc variables */

	var map;
	var infowindow;

	var currentLat;
	var currentLong;
	var map;
	var pyrmont;

	var placeName = new Array();
	var i = 0;

	 /* Geoloc functions */
	function showCoords(position) 
	{
		 showLoadingSign();

	     $('#challengeview').hide();
	     $('#chLoading').show();

		  currentLat = position.coords.latitude;
		  currentLong = position.coords.longitude;

		  pyrmont = new google.maps.LatLng(currentLat, currentLong);

		  map = new google.maps.Map(document.getElementById('map'), {
		  mapTypeId: google.maps.MapTypeId.ROADMAP,
		  center: pyrmont,
		  zoom: 15
			});


		  var request = {
		  location: pyrmont,
		  radius: 50
		};

		infowindow = new google.maps.InfoWindow();
		var service = new google.maps.places.PlacesService(map);
		service.search(request, callback);
	}


	function showError(error) 
	{
	  //alert(error.code);
	}


	function initializeGeoLoc() 
	{
		navigator.geolocation.getCurrentPosition(showCoords,showError);
	}

	function callback(results, status) 
	{
		if (status == google.maps.places.PlacesServiceStatus.OK) {
		  for (var i = 0; i < results.length; i++) {
		    createMarker(results[i]);
		  }
		}

		if(load_locs == "No"){
			for (i = 0; i <= 4; i++)
			{
				if(placeName[i] != undefined)
				{
					var str = "<option value='"+ placeName[i] + "'>" + placeName[i] + "</option>";
					$('#selectLoc').append(str);
				}
			}
		}

		load_locs = "Yes";
		hideLoadingSign();
	}


	function createMarker(place) {

		placeName[i] = place.name;
		i++;
	}  


	initializeGeoLoc();
</script>
<div id='map'></div>
<img id="chLoading" src="images/views/challenge/loading.gif" />
<img src="images/views/challenge/demotooltip.png" id="cvToolTipOut" /> 
<div id="challengeview">
			
			<a href="javascript:void(0)" ><img id="cvToolTipOut" src="images/views/challenge/demotooltip.png"/></a>
			<img src="images/views/challenge/header_challenge.png" id="challengeheader" />
			<img src="images/views/challenge/bg_challenge.png" id="bg" />
			<select id="selectFriend">
			</select>
			<input id="txtChallenge"  name="Search" type="text" value="Growple! Smackdown Challenge" readonly="readonly"  />
			<select id="selectLoc">
			</select>
			<a  href="javascript:void(0)"><img class ="btnGo" src="images/views/common/btn_go.png" /></a>
</div>
