  $(document).ready(function() { 
    
    $(".search-btn").on("click", function() {
     
      $("#searchTerm").val("");
      $(".popUpPage").css("display", "flex");

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