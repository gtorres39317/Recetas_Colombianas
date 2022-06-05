/* Google Maps */

/**
 * Ubicacion de las sedes
 */

function initMap(){
    let universidad_ean = {lat: 4.6635257, lng: -74.0550485}
    let universidad_ean_chile = {lat: 4.6555538, lng: -74.0580349}
    let Laboratorios_ean = {lat: 4.6578011,lng: -74.056404}
     
    map = new google.maps.Map(document.getElementById("map"), {
      center: universidad_ean,
      zoom: 15,
      
/**
 * Marcador de las sedes
 */

    })
    const marker = new google.maps.Marker({
        position: universidad_ean,
        map: map,
        
    })
    const marker_1 = new google.maps.Marker({
        position: universidad_ean_chile,
        map: map,
    })
    const marker_2 = new google.maps.Marker({
        position: Laboratorios_ean,
        map: map,
    })
/**
 * Ventana de informacion
 */
    const infoWindow = new google.maps.InfoWindow({
        
        });
    let html = '<h3>Universidad EAN Legacy</h3><img src=./img/legacy.jpg>'
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
        google.maps.event.addListener(marker, "click", ()=>{
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
        })
    
    let html_1 = '<h3>Universidad EAN Sede Av Chile</h3><div align="center"><img src=./img/chile.jpg></div>'
    google.maps.event.addListener(marker_1, "click", ()=>{
        infoWindow.setContent(html_1);
        infoWindow.open(map, marker_1);
    })
    let html_2 = '<h3>Universidad EAN Laboratorios</h3><div align="center"><img src=./img/74.jpg></div>'
    google.maps.event.addListener(marker_2, "click", ()=>{
        infoWindow.setContent(html_2);
        infoWindow.open(map, marker_2);
    })
  }