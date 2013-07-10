/*
 * Social Action Counting - Javascript File
 * 
 * GitHub Repo: https://github.com/ccagle8/php-js-social-action-counter
 * 
 * @created 06/10/2013
 * @author Chris Cagle <admin@cagintranet.com>
 * 
 */

var Debugger = function() { }
Debugger.log = function(message) {
 try {
  console.log(message); 
 } 
 catch(exception) {
  return; 
 }
};

/*
 * Facebook Counter
 */
window.fbAsyncInit = function() {

  FB.init({
    appId      : 'XXXXXXXXX', // App ID from the App Dashboard
    channelUrl : '//yourdomain.com/channel.php', // Channel File for x-domain communication
    status     : true, // check the login status upon init?
    cookie     : true, // set sessions cookies to allow your server to access the session?
    xfbml      : true  // parse XFBML tags on this page?
  });

  FB.Event.subscribe('edge.create', function(response) { 
		$.ajax({
		  url: 'socialcounter.php?t=facebook&a=add',
		  success: function(response){
	      Debugger.log('Facebook added...');
		  }
		}); 
	});

	FB.Event.subscribe('edge.remove', function(response) {
		$.ajax({
		  url: 'socialcounter.php?t=facebook&a=del',
		  success: function(response){
	      Debugger.log('Facebook removed...');
		  }
		});
	});

};


/*
 * LinkedIn Counter
 */
function linkedClick(data){
	
  if(data!="undefined"){
    $.ajax({
		  url: 'socialcounter.php?t=linkedin&a=add',
		  success: function(response){
        Debugger.log('LinkedIn added...');
		  }
		});
  }
  
} 


/*
 * Google+ Counter
 */
function plusClick(data){

  if(data.state=="on"){
    $.ajax({
		  url: 'socialcounter.php?t=googleplus&a=add',
		  success: function(response){
        Debugger.log('Google Plus added...');
		  }
		});
  } else if (data.state=="off"){
    $.ajax({
		  url: 'socialcounter.php?t=googleplus&a=del',
		  success: function(response){
        Debugger.log('Google Plus removed...');
		  }
		});
  }
  
}
 
 
/*
 * Twitter Counter
 */
twttr.ready(function(twttr) {
	
	twttr.events.bind('tweet', function(event) {
    $.ajax({
		  url: 'socialcounter.php?t=twitter&a=add',
		  success: function(response){
	      Debugger.log('Twitter followed...');
		  }
		});
	});
	
});
