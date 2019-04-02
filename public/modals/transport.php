<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
<div id="quick_view" class="modal_window">
        <button class="close arcticmodal-close"></button>
        <div class="clearfix">
        <div class="row">
            <div class="col-sm-6 col-md-6">


                    <div class="geocoder">
                            <div id="geocoder" ></div>
                        </div>
                        <div id="map"></div>   
            </div>

            <div class="col-sm-6 col-md-6">
   
          <div class="single_product_description">
          <a href="">If you know About Shipping Location, <span style="weight:700;color:#ff4557">please click to Skip.</span></a>  
   
           <div class="theme_box">
   
             <a href=""><p class="form_caption">Select Shipping Cart item.</p></a>  
   
               <form id="estimate_shipping" class="type_2">
   
                   <ul>
                        <div class="form-group row">
                              
                                <div class="col-md-12">
                                  <select style="width:100%" name="category[]" id="category" class="select2 form-control col-md-12" multiple="multiple" placeholder="search for Category">
                                 
                                  <optgroup label="Shopping Cart Item" id="cart-item">

                                    </optgroup>
                                
                                  
                                  </select>
                                </div>
                              </div>

   
                       <li class="row">
                           
                           <div class="col-xs-12">
   
                               <label>Country</label>
   
                               <div class="custom_select">
   
                                   <select>
                                       
                                       <option value="Australia">Australia</option>
                                       <option value="Austria">Austria</option>
                                       <option value="Argentina">Argentina</option>
                                       <option value="Canada">Canada</option>
                                       <option selected value="USA">USA</option>
   
                                   </select>
   
                               </div>
   
                           </div>
   
                       </li>
   
                       <li class="row">
                           
                           <div class="col-lg-7 col-md-6">
   
                               <label>State/Province</label>
   
                               <div class="custom_select">
   
                                   <select>
   
                                       <option value="Alabama">Alabama</option>
                                       <option value="Illinois">Illinois</option>
                                       <option value="Kansas">Kansas</option>
   
                                   </select>
   
                               </div>
   
                           </div><!--/ [col] -->
   
                           <div class="col-lg-5 col-md-6">
   
                               <label for="postal_code">Zip/Postal Code</label>
                               <input type="text" name="" id="postal_code">
   
                           </div><!--/ [col] -->
   
                       </li>
   
                   </ul>
   
               </form>
   
           </div><!--/ .theme_box -->
   
           <footer class="bottom_box">
   
               <button type="submit" form="estimate_shipping" class="button_grey middle_btn">Get a Quote</button>
   
           </footer>
   
          </div>
          </div>
          </div>    
    </div>
    
    </div>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $.ajax({        
        url : '/cart-item',
        type: "GET",
        success: function(data)
        {
            $('#cart-item').html(data);
        }
    });
});

//78.10098082241404,9.959194195481757;78.09465931140852,9.893505079270398
    var saved_markers = '';
    var user_location = [78.10098082241404,9.959194195481757];
    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFraHJhd3kiLCJhIjoiY2pscWs4OTNrMmd5ZTNra21iZmRvdTFkOCJ9.15TZ2NtGk_AtUvLd27-8xA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v9',
        center: user_location,
        zoom: 10
    });
    //  geocoder here
    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        // limit results to Australia
        //country: 'IN',
    });

    var marker ;

    // After the map style has loaded on the page, add a source layer and default
    // styling for a single point.
     map.on('load', function() {
      addMarker(user_location,'load');
        //add_markers(saved_markers);

        // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
        // makes a selection and add a symbol that matches the result.
    //     geocoder.on('result', function(ev) {
    //         alert("aaaaa");
    //         console.log(ev.result.center);

    //     });
    });
    map.on('click', function (e) {
        marker.remove();
        addMarker(e.lngLat,'click');
        var current_loc ='78.10098082241404,9.959194195481757;';
        var newCoords = current_loc + '78.09465931140852,9.893505079270398';
        getMatch(newCoords);
       // console.log(e.lngLat.lat);
        // document.getElementById("lat").value = e.lngLat.lat;
        // document.getElementById("lng").value = e.lngLat.lng;
    
    });

    function getMatch(e) {
        var url = 'https://api.mapbox.com/directions/v5/mapbox/cycling/' + e
            +'?geometries=geojson&steps=true&access_token=' + mapboxgl.accessToken;
        var req = new XMLHttpRequest();
        req.responseType = 'json';
        req.open('GET', url, true);
        req.onload  = function() {
            var jsonResponse = req.response;
            var distance = jsonResponse.routes[0].distance*0.001;
            var duration = jsonResponse.routes[0].duration/60;
            var steps = jsonResponse.routes[0].legs[0].steps;
            var coords = jsonResponse.routes[0].geometry;
          //  console.log(steps);
        console.log(coords);
         //  console.log(distance);
          // console.log(duration);

            // get route directions on load map
            steps.forEach(function(step){
                //instructions.insertAdjacentHTML('beforeend', '<p>' + step.maneuver.instruction + '</p>');
            });
            // get distance and duration
           // instructions.insertAdjacentHTML('beforeend', '<p>' +  'Distance: ' + distance.toFixed(2) + ' km<br>Duration: ' + duration.toFixed(2) + ' minutes' + '</p>');
            console.log('Distance: ' + distance.toFixed(2) + ' km<br>Duration: ' + duration.toFixed(2) + ' minutes');
            // add the route to the map
            //addRoute(coords);
          //  console.log(coordinates);

        };
        req.send();
    }

    function addMarker(ltlng,event) {

        if(event === 'click'){
            user_location = ltlng;
        }
        marker = new mapboxgl.Marker({draggable: true,color:"#d02922"})
            .setLngLat(user_location)
            .addTo(map)
            .on('dragend', onDragEnd);
    }
    function add_markers(coordinates) {

        var geojson = (saved_markers == coordinates ? saved_markers : '');

        console.log(geojson);
        // add markers to map
        geojson.forEach(function (marker) {
            console.log(marker);
            // make a marker for each feature and add to the map
            new mapboxgl.Marker()
                .setLngLat(marker)
                .addTo(map);
        });

    }

    function onDragEnd() {
        var lngLat = marker.getLngLat();
        document.getElementById("lat").value = lngLat.lat;
        document.getElementById("lng").value = lngLat.lng;
        console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
    }

    // $('#signupForm').submit(function(event){
    //     event.preventDefault();
    //     var lat = $('#lat').val();
    //     var lng = $('#lng').val();
    //     var url = 'locations_model.php?add_location&lat=' + lat + '&lng=' + lng;
        // $.ajax({
        //     url: url,
        //     method: 'GET',
        //     dataType: 'json',
        //     success: function(data){
        //         alert(data);
        //         location.reload();
        //     }
        // });
    // });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

</script>
