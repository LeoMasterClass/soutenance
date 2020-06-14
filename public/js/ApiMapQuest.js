

// 'map' refers to a <div> element with the ID map
window.onload = function () {
    L.mapquest.key = 'Tjd5Z7pdQkYSGY4RaG3TTn5O0vbjcJ8G';
    L.mapquest.map('map', {
        center: [47.6479253, -2.7772206],
        layers: L.mapquest.tileLayer('map'),
        zoom: 12
    });
    L.marker([47.6479253, -2.7772206], {
        icon: L.mapquest.icons.marker(),
        draggable: false
    }).bindPopup('Denver, CO').addTo(map);
    L.mapquest.control().addTo(map);
}