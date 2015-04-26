function latestItems(time){
    var string = {'timestamp' : time};

    //$.post(URL,data,callback);
    $.post('helpers/datapush.php', string,
        function (data) {
            var obj = $.parseJSON(data);
            //obj.content
            //so this is the part where new item should be displayed 
            //next line should add item
            $('#here').prepend(obj.content);
            latestItems(obj.timestamp);
        });
    }
        
function currentTime(){
    var date = new Date();

    var month = date.getMonth() + 1;
    var day = date.getDate();
    var hour = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();

    if (month < 10) {
        month = '0' + month;
    }
    if (day < 10) {
        day = '0' + day;
    }
    if (hour < 10) {
        hour = '0' + hour;
    }
    if (minutes < 10) {
        minutes = '0' + minutes;
    }
    if (seconds < 10) {
        seconds = '0' + seconds;
    }

    //YYYY-MM-DD HH:MI:SS
    return date.getFullYear() + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
}

latestItems(currentTime());