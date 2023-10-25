let map;
let marker;
let myLatLng = { lat: -25.363, lng: 131.044 };
async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");
  myLatLng = { lat: -25.363, lng: 131.044 };
  map = new Map(document.getElementById("map"), {
      center: { lat: -34.397, lng: 150.644 },
      zoom: 8,
  });
  map.setCenter( myLatLng);
  marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
});
}
initMap();
function updatePosition(newLat, newLng)
{
    // alert('Its work');
    const latLng = { lat: newLat, lng: newLng};
    // alert(latLng);
    marker.setPosition(latLng);
    map.setCenter(latLng);
}
let n=0;
window.Echo.channel('notification')
            .listen('MessageNot' , (e)=>{
                n++;
                updatePosition(e.lat, e.lng)}
            )