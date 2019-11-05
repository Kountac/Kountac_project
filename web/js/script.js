$(function(){$("#back-top").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$("#back-top").fadeIn()}else{$("#back-top").fadeOut()}});$("#back-top a").click(function(){$("body,html").animate({scrollTop:0},800);return false})});$("#slider-id").codaSlider();$("input, textarea").placeholder();$(".menu").mobileMenu({defaultText:"Navigate to...",className:"mnav",subMenuDash:"&emsp;"});$(".menu li").hover(function(){$(this).children("ul").css({visibility:"visible",display:"none"}).slideDown(300)},function(){$("ul",this).css({visibility:"hidden"})});$("#ei-slider").eislideshow({animation:"sides",autoplay:true,easing:"easeOutExpo",titleeasing:"easeOutExpo",});/mobile/i.test(navigator.userAgent)&&!location.hash&&setTimeout(function(){if(!pageYOffset){window.scrollTo(0,1)}},1000);var a={nextButton:false,prevButton:false,animateStartingFrameIn:true,transitionThreshold:250,afterLoaded:function(){$("#nav").fadeIn(100);$("#nav li:nth-child("+(b.settings.startingFrameID)+") a").addClass("active")},beforeNextFrameAnimatesIn:function(){$("#nav li:not(:nth-child("+(b.nextFrameID)+")) a").removeClass("active");$("#nav li:nth-child("+(b.nextFrameID)+") a").addClass("active")}};var b=$("#sequence").sequence(a).data("sequence");$("#nav li a").click(function(c){c.preventDefault()});$("#nav li").click(function(){if(!b.active){$(this).children("img").removeClass("active").children("img").addClass("active");b.nextFrameID=$(this).index()+1;b.goTo(b.nextFrameID)}})});$(window).load(function(){$(".menu").lavaLamp({fx:"backout",speed:700});

	//console.log('Working!!!');
	var con 		= $('.themes_settings'),
		opener 		= $('.trigger a'),
		colorGroup 	= $('.color .group a'),
		bgGroup 	= $('.bg .group a');
		
	con.animate({left: '-214px'},800);
	
	//Open & Close
	opener.on('click', function(e){
		e.preventDefault();
		con = $(this).parents().find(con);
		conPos = con.css('left');
		if(conPos != '0px'){
			con.animate({left: '0px'},700,'swing');
		}
		else{
			con.animate({left: '-214px'},900,'swing');
		}
	});
	
	//Color Settings
	colorGroup.on('click', function(e){
		colorGroup.removeClass('active');
		color = $(this).addClass('active').data('color');
		$('.mainColorCss').prop('href','css/' + color + '.css');
		if ($.browser.msie  && parseInt($.browser.version, 10) === 9) {
			$('.ieColorCss').prop('href','css/ie-' + color + '.css'); 
		}
		e.preventDefault();
		
	});
	
	//Background Settings
	bgGroup.on('click', function(e){
		bgGroup.removeClass('active');
		bg = $(this).addClass('active').data('bg');
		$('body').prop('class',bg);
		e.preventDefault();
	});
});

// JQuery Twitter Feed
$(document).ready(function () {
 
    var displaylimit = 2;
    var twitterprofile = "tomelliott0";
    var screenname = "Tom Elliott";
    var showdirecttweets = false;
    var showretweets = true;
    var showtweetlinks = true;
    var showprofilepic = true;
 
    var headerHTML = '';
    var loadingHTML = '';
    /*headerHTML += '<a href="https://twitter.com/" ><img src="images/twitter-bird-light.png" width="34" style="float:left;padding:3px 12px 0px 6px" alt="twitter bird" /></a>';*/
    /*headerHTML += '<h1>'+screenname+' <span style="font-size:13px"><a href="https://twitter.com/'+twitterprofile+'" >@'+twitterprofile+'</a></span></h1>';*/
    loadingHTML += '<div id="loading-container"><img src="images/ajax-loader.gif" width="32" height="32" alt="tweet loader" /></div>';
 
    //$('#twitter_update_list').html(headerHTML + loadingHTML);
 
    $.getJSON('get-tweets.php',
        function(feeds) {
            //alert(feeds);
            var feedHTML = '';
            var displayCounter = 1;
            for (var i=0; i<feeds.length; i++) {
                var tweetscreenname = feeds[i].user.name;
                var tweetusername = feeds[i].user.screen_name;
                var profileimage = feeds[i].user.profile_image_url_https;
                var status = feeds[i].text;
                var isaretweet = false;
                var isdirect = false;
                var tweetid = feeds[i].id_str;
 
                //If the tweet has been retweeted, get the profile pic of the tweeter
                if(typeof feeds[i].retweeted_status != 'undefined'){
                   profileimage = feeds[i].retweeted_status.user.profile_image_url_https;
                   tweetscreenname = feeds[i].retweeted_status.user.name;
                   tweetusername = feeds[i].retweeted_status.user.screen_name;
                   tweetid = feeds[i].retweeted_status.id_str
                   isaretweet = true;
                 };
 
                 //Check to see if the tweet is a direct message
                 if (feeds[i].text.substr(0,1) == "@") {
                     isdirect = true;
                 }
 
                //console.log(feeds[i]);
 
                 if (((showretweets == true) || ((isaretweet == false) && (showretweets == false))) && ((showdirecttweets == true) || ((showdirecttweets == false) && (isdirect == false)))) {
                    if ((feeds[i].text.length > 1) && (displayCounter <= displaylimit)) {
                        if (showtweetlinks == true) {
                            status = addlinks(status);
                        }
 
                        if (displayCounter == 1) {
                            feedHTML += headerHTML;
                        }
 
                        feedHTML += '<li>';
                        /*feedHTML += '<div class="twitter-pic"><a href="https://twitter.com/'+tweetusername+'" ><img src="'+profileimage+'"images/twitter-feed-icon.png" width="42" height="42" alt="twitter icon" /></a></div>';
                        feedHTML += '<div class="twitter-text"><p><span class="tweetprofilelink"><strong><a href="https://twitter.com/'+tweetusername+'" >'+tweetscreenname+'</a></strong> <a href="https://twitter.com/'+tweetusername+'" >@'+tweetusername+'</a></span><span class="tweet-time"><a href="https://twitter.com/'+tweetusername+'/status/'+tweetid+'">'+relative_time(feeds[i].created_at)+'</a></span><br/>'+status+'</p></div>';
                        feedHTML += '</div></li>';*/
                        feedHTML += status+'<span class="tweet-time"> <a href="https://twitter.com/'+tweetusername+'/status/'+tweetid+'">'+relative_time(feeds[i].created_at)+'</a></span>';
                        feedHTML += '</li>';

                        displayCounter++;
                    }
                 }
            }
 
            $('#twitter_update_list').html(feedHTML);
    });
 
    //Function modified from Stack Overflow
    function addlinks(data) {
        //Add link to all http:// links within tweets
        data = data.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
            return '<a href="'+url+'" >'+url+'</a>';
        });
 
        //Add link to @usernames used within tweets
        data = data.replace(/\B@([_a-z0-9]+)/ig, function(reply) {
            return '<a href="http://twitter.com/'+reply.substring(1)+'" style="font-weight:lighter;" >'+reply.charAt(0)+reply.substring(1)+'</a>';
        });
        return data;
    }
 
    function relative_time(time_value) {
      var values = time_value.split(" ");
      time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
      var parsed_date = Date.parse(time_value);
      var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
      var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
      var shortdate = time_value.substr(4,2) + " " + time_value.substr(0,3);
      delta = delta + (relative_to.getTimezoneOffset() * 60);
 
      if (delta < 60) {
        return '1m';
      } else if(delta < 120) {
        return '1m';
      } else if(delta < (60*60)) {
        return (parseInt(delta / 60)).toString() + 'm';
      } else if(delta < (120*60)) {
        return '1h';
      } else if(delta < (24*60*60)) {
        return (parseInt(delta / 3600)).toString() + 'h';
      } else if(delta < (48*60*60)) {
        //return '1 day';
        return shortdate;
      } else {
        return shortdate;
      }
    } 
});