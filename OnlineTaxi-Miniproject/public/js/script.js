var map;
var lat = 36.3141306;
var lng = 59.549162;
var flag = false;
// var active_drivers = drivers;
// var active_drivers_positions = [[36.32381351414994, 59.54072602929689], [36.3326645, 59.5146335]];

function marker(car_position)
{
    console.log(car_position);
    var marker_ = new google.maps.Marker({
        position: car_position,
        draggable: true,
        animation: google.maps.Animation.BOUNCE,
        
    });
    marker_.setMap(map);
}       

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
        // Show active drivers
        // for (i=0; i<active_drivers_positions.length; ++i) {
        //     marker(active_drivers_positions[i]);
        //     // console.log(active_drivers_positions[i]);
        //     // ... do something with s ...
        //   }
        // for(driver_position in active_drivers_positions)
        // {
        //     marker(driver_position);
        //     console.log(driver_position);
        // }
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
            var tag_input_lat = document.getElementById("lat-start");
            var tag_input_lng = document.getElementById("lng-start");

            var start_location = marker_start.getPosition();
            tag_input_lat.value = start_location.lat();
            tag_input_lng.value = start_location.lng();

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
                    var tag_input_lat = document.getElementById("lat-end");
                    var tag_input_lng = document.getElementById("lng-end");
                    var tag_input_price = document.getElementById("price");
    
                    var end_location = marker_end.getPosition();
                    tag_input_lat.value = end_location.lat();
                    tag_input_lng.value = end_location.lng();

                    var distance = calculate_distance(start_location, end_location);
                    var price = Math.round(distance * 2000);

                    tag_input_price.value = price + "هزار تومان";
                    message.innerHTML = " هزینه سفر" + price + "هزار تومان." + "برای تایید سفر درخواست تاکسی را بزنید.";
                    // message.innerHTML = "درخواست سفر شما ثبت شد. هزینه سفر" + price + "هزار تومان";
                    // message.classList.remove("alert-success");
                    // message.classList.add("alert-warning");
                    // show_notification();
                });
            }
        });
    });
} else {
    allert("Geolocation is not supported by this browser.");
}

function accept_request(request_id, csrf_token) {
    var message = document.getElementById("ُmessage");
    var json_data = {
        request_id: request_id,
    };

    fetch("/accept-request", {
        method: "post",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": csrf_token,
        },
        body: JSON.stringify(json_data),
    })
        .then(result => result.text())
        .then(result => {
            message.innerHTML = "درخواست شما ثبت گردید.";
        });
}