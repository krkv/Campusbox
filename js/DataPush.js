 $(document).ready(function(){
     setInterval(datapush, 1000);
 });

function datapush() {
    $.getJSON("item/json", function(data) {
        $('#items').html(data)
	    });
    };