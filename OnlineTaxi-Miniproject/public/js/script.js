var map;
var lat = 36.3141306;
var lng = 59.549162;
var flag = false;

function calculate_distance(start, end)
{
    x1 = start.lat();
    y1 = start.lng();
    x2 = end.lat();
    y2 = end.lng();

    var distance = Math.sqrt(Math.pow((x1 - x2), 2), Math.pow((y1 - y2), 2));
    return distance;
}

function myMap() 
{
    var mapProp = {
        center: new google.maps.LatLng(lat, lng),
        zoom: 10,
    };
    map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

if (navigator.geolocation) 
{
    navigator.geolocation.getCurrentPosition(function (position) {
        lat = position.coords.latitude;
        lng = position.coords.longitude;

        var myCenter = new google.maps.LatLng(lat, lng)
        map.setCenter(myCenter);

        var marker_start = new google.maps.Marker({
            position: myCenter,
            draggable: true,
            animation: google.maps.Animation.BOUNCE,
        });
        marker_start.setMap(map);

        google.maps.event.addListener(marker_start, 'click', function () {
            // var tag_p_lat = document.getElementById("lat-start");
            // var tag_p_lng = document.getElementById("lng-start");

            var start_location = marker_start.getPosition();
            // tag_p_lat.innerHTML = start_location.lat();
            // tag_p_lng.innerHTML = start_location.lng();

            if (flag == false){
                flag = true;
                var message = document.getElementById("ُmessage");
                message.innerHTML = "لطفا مقصد را انتخاب کنید";
                
                var marker_end = new google.maps.Marker({
                    position: myCenter,
                    draggable: true,
                    animation: google.maps.Animation.BOUNCE,
                });
                marker_end.setMap(map);
    
                google.maps.event.addListener(marker_end, 'click', function () {
                    // var tag_p_lat = document.getElementById("lat-end");
                    // var tag_p_lng = document.getElementById("lng-end");
    
                    var end_location = marker_end.getPosition();
                    // tag_p_lat.innerHTML = end_location.lat();
                    // tag_p_lng.innerHTML = end_location.lng();

                    var distance = calculate_distance(start_location, end_location);
                    var price = Math.round(distance * 2000);

                    message.innerHTML = "درخواست سفر شا ثبت شد. هزینه سفر" + price + "تومان";
                    message.classList.remove("alert-success");
                    message.classList.add("alert-warning");
                    show_notification();
                });
            }
        });
    });
} else {
    allert("Geolocation is not supported by this browser.");
}
