 $(document).ready(function(){
     setInterval(ajaxcall, 1000);
     setInterval(datapush, 1000);
 });
 
 function ajaxcall(){
     $.ajax({
         url: location.protocol + "//" + location.host + "/resources/gettime.php",
         success: function(data) {
             data = data.split(':');
             $('#hours').html(data[0]);
             $('#minutes').html(data[1]);
             $('#seconds').html(data[2]);
         }
     });
 }

function datapush() {
    $.getJSON("item/json", function (data) {
        $('#items').html(data);
    });
}