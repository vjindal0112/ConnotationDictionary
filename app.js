  $(document).ready(function() {
    $('.search-btn').on("click", function(event) {
			event.preventDefault();
      $("#searchTerm").val("");
      $(".popUpPage").css("display", "flex");
			// $('.alerts').hide();
			if ($('#searchTerm').val() != "") {
				$.get('scraper.php?word=' + $('#searchTerm').val(), function(data) {
					if (data == "") {
					} else {
						$('#theDefinition').html(data);
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
