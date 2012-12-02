<script type="text/javascript">
// respond to clicks on the login and logout links
document.getElementById('fb-auth').addEventListener('click', function(){
  FB.login(function(response) 
    {
        if (response.authResponse) 
        {
            //load challenge view screen 
            loadView('challengeview');
        } 
        else 
        {
            
        }
    }, {scope:'read_stream, user_likes'}); 
});
</script>
<a href="javascript:void(0)" ><img id="fvToolTipOut" src="images/views/first/demotooltip.png"/></a>
<div id="firstview">
      <img src="images/views/first/tooltip.png" id="tooltip" />
      <img src="images/views/first/logo.png"  id="logo" />
      <img src="images/views/first/divider.png" id="divup" />
      <a  href="javascript:void(0)"><img id="fb-auth" src="images/views/first/btn_fb.png" /></a>
      <img src="images/views/first/divider.png" id="divdown" />
</div>