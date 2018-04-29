  $(document).ready(function() {
    $('.search-btn').click(function(event) {
      console.log("button working");
			event.preventDefault();
      $(".popUpPage").css("display", "flex");
			// $('.alerts').hide();
			if ($('#searchTerm').val() != "") {
				$.get('scraper.php?word=' + $('#searchTerm').val(), function(data) {
					if (data == "") {
            console.log("failed to get");
					} else {
            $('#theDefinition').html(data)
            console.log($('#theDefinition').html());
					}
				});
			} else {
				// $('#nocitydiv').fadeIn();
			}

		});

    $('.search-text').keypress(function(e){
        if(e.which == 13){//Enter key pressed
            $(".search-btn").click();//Trigger search button click event
        }
    });



    $(".delete").on("click", function() {
          $(".popUpPage").css("display", "none");
    });




  });
