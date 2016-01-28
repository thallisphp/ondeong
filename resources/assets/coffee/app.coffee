jQuery (j) ->
  mapOptions =
    zoom: 14
    center: new google.maps.LatLng 41.143, -73.341
    mapTypeId: google.maps.MapTypeId.ROADMAP

    mapTypeControl: false
    mapTypeControlOptions:
      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
      position: google.maps.ControlPosition.BOTTOM_CENTER

    panControl: false
    panControlOptions:
      position: google.maps.ControlPosition.TOP_RIGHT

    zoomControl: true
    zoomControlOptions:
      style: google.maps.ZoomControlStyle.LARGE
      position: google.maps.ControlPosition.TOP_RIGHT

    scaleControl: false
    scaleControlOptions:
      position: google.maps.ControlPosition.TOP_LEFT

    streetViewControl: true
    streetViewControlOptions:
      position: google.maps.ControlPosition.LEFT_BOTTOM

  # ---------------------------------------------------------------- #

  map = new google.maps.Map document.getElementById("map_canvas"), mapOptions

  # ---------------------------------------------------------------- #

  carregarLocais = (url) ->
    j.getJSON url
    .success (dados) ->
      console.log 'dados', dados

      info = null

      for l in dados
        do ->
          local = l
          console.log 'local', local

          icone = asset "frontend/img/icon/#{local.icone}.png"

          marcador = new google.maps.Marker
            position: new google.maps.LatLng local.lat, local.lon
            map: map
            category: icone
            icon: icone
            title: local.nome

          marcador.addListener 'click', ->
            console.log 'info', info
            info?.close?()

            local

            info = new google.maps.InfoWindow
              content: """
              <div class='local_mapa'>
                <h4>#{local.nome}</h4>

                <div class='descricao'>
                  #{local.descricao}
                </div>
              </div>
              """

            info.open map, marcador

  # ---------------------------------------------------------------- #

  carregarLocais urls.locais.teste

# ---------------------------------------------------------------- #
