<div class="row mapa" id="map"></div>
<script type="text/javascript">
    function initMap() {
        <?php $location = get_field('mapa',19); ?>
        var uluru = {lat: <?php echo substr($location['lat'], 0, 10); ?>, lng: <?php echo substr($location['lng'], 0, 10); ?>};
        var cent = {lat: <?php echo ( substr($location['lat'], 0, 10) + 0.00000 ); ?>, lng: <?php echo (substr($location['lng'], 0, 10) - 0.00000); ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: cent,
            scrollwheel: false,
        });
        var icon = {
            scaledSize: new google.maps.Size(50, 50), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            animation: google.maps.Animation.DROP,
            // icon: icon
        });

    }
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHv5wzQEFzph1zyGSpEZR9BcKK405QEME&callback=initMap"  async defer></script>