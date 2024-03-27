$(function () {

    "use strict";

    $(document).on("submit", '[data-form="contact"]', function (e) {
        
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'), 
            type: "POST",
            dataType: "json",
            data: $(this).serialize(),
            success: function (result) {
              console.log(result);
            },
            error: function (xhr, resp, text) {
              console.log(xhr, resp, text);
            },
          });
    });
  
    
  });
  
