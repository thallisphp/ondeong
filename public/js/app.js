(function() {
  jQuery(function(j) {
    var carregarLocais, map, mapOptions;
    mapOptions = {
      zoom: 14,
      center: new google.maps.LatLng(41.143, -73.341),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        position: google.maps.ControlPosition.BOTTOM_CENTER
      },
      panControl: false,
      panControlOptions: {
        position: google.maps.ControlPosition.TOP_RIGHT
      },
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.LARGE,
        position: google.maps.ControlPosition.TOP_RIGHT
      },
      scaleControl: false,
      scaleControlOptions: {
        position: google.maps.ControlPosition.TOP_LEFT
      },
      streetViewControl: true,
      streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    carregarLocais = function(url) {
      return j.getJSON(url).success(function(dados) {
        var i, info, l, len, results;
        console.log('dados', dados);
        info = null;
        results = [];
        for (i = 0, len = dados.length; i < len; i++) {
          l = dados[i];
          results.push((function() {
            var icone, local, marcador;
            local = l;
            console.log('local', local);
            icone = asset("frontend/img/icon/" + local.icone + ".png");
            marcador = new google.maps.Marker({
              position: new google.maps.LatLng(local.lat, local.lon),
              map: map,
              category: icone,
              icon: icone,
              title: local.nome
            });
            return marcador.addListener('click', function() {
              console.log('info', info);
              if (info != null) {
                if (typeof info.close === "function") {
                  info.close();
                }
              }
              local;
              info = new google.maps.InfoWindow({
                content: "<div class='local_mapa'>\n  <h4>" + local.nome + "</h4>\n\n  <div class='descricao'>\n    " + local.descricao + "\n  </div>\n</div>"
              });
              return info.open(map, marcador);
            });
          })());
        }
        return results;
      });
    };
    return carregarLocais(urls.locais.teste);
  });

}).call(this);

//# sourceMappingURL=app.js.map
