$(document).ready(function () {
    $('.radioGroup input[value="OptionX"]').click(function () {
        $(this).parentsUntil('.radioGroup').nextAll('.other').show();
    });

    $('.radioGroup input[value!="OptionX"]').click(function () {
        $(this).parentsUntil('.radioGroup').nextAll('.other');
    });
}); 

$(document).ready(function(){
    $("button").click(function(){
        $("p").text("Transfer the amount to: reg. $957.00, to account 0009286322");
    });
});

$(document).ready(function () {
  
  $("#otherTextbox").keypress(function (e) {
     
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});

