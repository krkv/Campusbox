 $(document).ready(function(){
     setInterval(datapush, 10000);
 });

	function datapush() {
			$.getJSON("item/json", function(data) {
                $(data).prependTo("#items");

/*				var new_items = [];
				$.each(data, function(val) {
					if(document.getElementById(val.id) === null){
						new_items.push(
                        '<div class="col-xs-12 col-sm-6 col-md-4">'
                            +'<div class="thumbnail">'
                                +'<div id= '+ val.id + 'class="caption">'
                                    +'<h3>' + wordwrap(val.title, 20) + '</h3>'
                                    +'<p>' + val.description + '</p>'
                                    +'<p>'
                                        +'<a class="btn btn-primary" href="item/view/'+ val.id + '" role="button">'
                                            +'<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>'
                                            +'Details'
                                        +'</a>'
                                    +'</p>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        );
					}
				});

				$.each(new_items, function(value) {
					$(value).appendTo("#items");
				});

                */
	    });
    };

// http://james.padolsey.com/snippets/wordwrap-for-javascript/


/*
function wordwrap( str, width, brk, cut ) {
 
    brk = brk || 'n';
    width = width || 75;
    cut = cut || false;
 
    if (!str) { return str; }
 
    var regex = '.{1,' +width+ '}(\s|$)' + (cut ? '|.{' +width+ '}|.+$' : '|\S+?(\s|$)');
 
    return str.match( RegExp(regex, 'g') ).join( brk );
 
}
*/
