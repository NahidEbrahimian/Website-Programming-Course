        var map;
        var lat = 36.3212565;
        var lng = 59.5404382;
        var flag = false

        function get_distance(start, end){
            x1 = start.lat();
            y1 = start.lng();
            x2 = start.lat();
            y2 = start.lng();

            var distance = Math.sqrt((x1 - x2)**2 + (y1 - y2)**2);
            console.log(distance);
        }

        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(lat, lng),
                zoom: 8,
            };
            map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                lat = position.coords.latitude;
                lng = position.coords.longitude;

                var myCenter = new google.maps.LatLng(lat, lng)
                map.setCenter(myCenter);

                var location_start = new google.maps.Marker({
                    position: myCenter,
                    draggable: true,
                    animation: google.maps.Animation.BOUNCE,
                });
                location_start.setMap(map);


                google.maps.event.addListener(location_start, 'click', function() {
                        var tag_p_lat = document.getElementById("lat-start");
                        var tag_p_lng = document.getElementById("lng-start");

                        var selected_location = location_start.getPosition()
                        tag_p_lat.innerHTML = selected_location.lat();
                        tag_p_lng.innerHTML = selected_location.long();

                if (flag == false) {
                    flag = true
                    
                            document.getElementById("select-location").innerHTML = "مقصد را انتخاب کنید";
                            var location_end = new google.maps.Marker({
                                position: myCenter,
                                draggable: true,
                                animation: google.maps.Animation.BOUNCE,
                            });
                            location_end.setMap(map);

                            google.maps.event.addListener(location_end, 'click', function() {
                                var tag_p_lat = document.getElementById("lat-end");
                                var tag_p_lng = document.getElementById("lng-end");

                                var selected_location = location_end.getPosition()
                                tag_p_lat.innerHTML = selected_location.lat();
                                tag_p_lng.innerHTML = selected_location.long();
                            
                                distance = get_distance(location_start, location_end);
                                var price = distance * 2000;
                                console.log(price);
                            });
                        }
                    });
                }
            });
        } else {
            allert("Geolocation is not supported by this browser.");
        }