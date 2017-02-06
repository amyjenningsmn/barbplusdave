console.log("Is this thing on?");

jQuery(document).ready( function($) {

	// $.ajax({
	// 	url: "http://localhost:8888/barbplusdave/",
	// 	success: function( data ) {
	// 		alert( 'Your home page has ' + $(data).find('div').length + ' div elements.');
	// 	}
	// })

  $(".gif").on("click", function(){
			   $.get('http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&rating=pg').done(function(response){
			     var printGif = response;
			     console.log(printGif);
			    $(".gifHere").html("<img src=\"" + printGif.data.image_url + "\">");
			   })

			})
			// need to remove "Get Gif Test" from front-page.php in instagram section after testing

});
