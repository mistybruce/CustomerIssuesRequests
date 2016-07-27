$(function () {

	$.getJSON( "user.json", function( data ) {
		// Get data about our products from user.json.

		// Call a function that will turn that data into HTML.
		generateAllusersHTML(data);

		// Manually trigger a hashchange to start the app.
		$(window).trigger('hashchange');
	});


	$(window).on('hashchange', function(){
		// On every hash change the render function is called with the new hash.
		// This is how the navigation of our app happens.
		render(decodeURI(window.location.hash));
	});


		// Hide whatever page is currently shown.
		$('.main-content .page').removeClass('visible');

		var map = {
			// welcomePage
			'#welcomePage': function() {
               	var welcomePage = = $('.loginPage'),

			      renderWelcomePage(user_profiles);
			},
			  //login page
            '#loginPage': function() {

			      renderUserPage(user_profiles);
			},

           function renderSingleUserPage(index, user_profiles){
		   var page = $('.home'),
			container = $('.overlay');
    
			// singleUser page.
			'#singleUser': function() {

				// Get the index of which user we want to show and call the appropriate function.
				var index = url.split('#user/')[1].trim();

				renderRequestIssuePage(index, user_profiles);
			},

				// singleUser page.
			'#logout': function() {

				// Get the index of which user we want to show and call the appropriate function.
				var index = url.split('#user/')[1].trim();

				renderlogout();
			},

		// Execute the needed function depending on the url keyword (stored in temp).
		if(map[temp]){
			map[temp]();
		}
		// If the keyword isn't listed in the above - render the error page.
		else {
			renderErrorPage();
		}

	}
	}
	function renderErrorPage(){
		// Shows the error page.
	}

	function createQueryHash(filters){
		// Get the filters object, turn it into a string and write it into the hash.
	}

});