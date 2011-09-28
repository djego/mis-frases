// JavaScript Document
$(document).ready(function() {
  // get current rating
//  getRating();
  // get rating function
  function getRating(){
    $.ajax({
      type: "GET",
      url: "update.php",
      data: "do=getrate",
      cache: false,
      async: false,
      success: function(result) {
        // apply star rating to element
        $("#current-rating").css({
          width: "" + result + "%"
        });
      },
      error: function(result) {
        alert("some error occured, please try again later");
      }
    });
  }
		
  // link handler
  $('#ratelinks li a').click(function(){
    $.ajax({
      type: "GET",
      url: "update.php",
      data: "rating="+$(this).text()+"&do=rate",
      cache: false,
      async: false,
      success: function(result) {
        // remove #ratelinks element to prevent another rate
        $("#ratelinks").remove();
        // get rating after click
        getRating();
      },
      error: function(result) {
        alert("some error occured, please try again later");
      }
    });
			
  });
});
