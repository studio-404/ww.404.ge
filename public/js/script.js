$(document).ready(function(){
	Studio404.mobileDetect();
}); 

$(document).on("click", ".About", function(){
	Studio404.page('About');
	$("title").html("About - " + Studio404.name);
	$(".footer-nav a").css("color","#555555");
	$(this).css("color","red");
});

$(document).on("click", ".Github", function(){
	Studio404.page('Github');
	$("title").html("Github - " + Studio404.name);
	$(".footer-nav a").css("color","#555555");
	$(this).css("color","red");
});

$(document).on("click", ".Android", function(){
	Studio404.page('Android');
	$("title").html("Android - " + Studio404.name);
	$(".footer-nav a").css("color","#555555");
	$(this).css("color","red");
});

$(document).on("click", ".Java", function(){
	Studio404.page('Java');
	$("title").html("Java - " + Studio404.name);
	$(".footer-nav a").css("color","#555555");
	$(this).css("color","red");
});

$(document).on("click", ".Websites", function(){
	Studio404.page('Websites');
	$("title").html("Websites - " + Studio404.name);
	$(".footer-nav a").css("color","#555555");
	$(this).css("color","red");
});

var Studio404 = {
	name: "Studio 404",
	home: "http://ww.404.ge",
	ajax: "http://ww.404.ge/index.php",
	page: function(p){
		switch(p){
			case "About":
				this.sendRequest("About", "getAbout");			
			break;
			case "Websites": 
				this.sendRequest("Websites", "getWebsites"); 				
			break;
			case "Github": 
				this.sendRequest("Github", "getGithub");				
			break;
			case "Android":
				this.sendRequest("Android", "getAndroid");				
			break;
			case "Java":
				this.sendRequest("Java", "getJava");	
			break;
			default:
			break;
		}
	},
	sendRequest: function(p, a){
		window.history.pushState('page2', p, '/'+p);
		$(".container_").fadeOut("slow", function(){
			$(".loader").fadeIn("slow");
			$.post(this.ajax, { ajax:"true", load:a }, function(r){
				var obj = $.parseJSON(r);
				var inx = "";
				if(p=="About"){
					inx += '<div class="box">';
					inx += '<h1>'+obj['title']+'</h1>';
					inx += '<p>';
					inx += obj['text'];
					inx += '</p>';
					inx += '</div>';
					/* Form */
				}else{
					for(var i = 0; i < obj.length; i++){
						inx += "<div class=\"project-item\" ";
						inx += "onclick=\"window.open('"+obj[i].url+"','_blank');\" ";
						inx += "onmouseover=\"Studio404.hoverChangeBg(this)\" ";
						inx += "onmouseleave=\"Studio404.outChangeBg(this)\"> ";
						inx += "<p>";
						inx += obj[i].title+"<br />";
						inx += "<em>"+obj[i].sub_title+"</em>";
						inx += "</p>";
						inx += "</div>";
					}
				}

				$(".loader").fadeOut("slow", function(){
					$(".container_").html(inx).fadeIn("slow"); 	
					$('.footer-nav').fadeIn('slow');
					$('.footer-nav .'+p).css('color','red');
					Studio404.mobileDetect();
				});
				
			});
		});
	},
	hoverChangeBg: function(e){
		e.style.backgroundColor = this.randomColor();
		$("p", e).css("color","#fffff1");
	},
	outChangeBg: function(e){
		e.style.backgroundColor = "#fffff1";
		$("p", e).css("color","#555555");
	},
	randomColor: function() {
	    var letters = '0123456789ABCDEF'.split('');
	    var color = '#';
	    for (var i = 0; i < 6; i++ ) {
	        color += letters[Math.floor(Math.random() * 16)];
	    }
	    return color;
	},
	mobileDetect: function(){
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		 	$('.footer-nav').css("display","none");
		}
	},
	goWelcome: function(){
		location.href = this.home;
	}
};