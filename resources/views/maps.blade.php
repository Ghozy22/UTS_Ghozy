<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAPS</title>

    <link rel="stylesheet" href="Style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    <script src="https://unpkg.com/esri-leaflet@3.0.3/dist/esri-leaflet.js"
    integrity="sha512-kuYkbOFCV/SsxrpmaCRMEFmqU08n6vc+TfAVlIKjR1BPVgt75pmtU9nbQll+4M9PN2tmZSAgD1kGUCKL88CscA=="
    crossorigin=""></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

    #mapid { height: 490px; }
    
    .hid{
        display: none;
        visibility: hidden;
    }

    .c1{
        width: 35%;
        height: 100%;
    }
    .c2{
        width: 35%;
        height: 100%;
    }

    .center{
        margin-top: 10%;
    }

    .tt{
        text-align: center;
        margin-top: -90px;
    }

    </style>
</head>
<body>
   
    <div class="top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    

    <div class="d-flex justify-content-between">
        <div class="c1">
            <img src="img/kiri-picsay.jpeg" width="100%" height="100%">
        </div>
        <div class="center">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header bg-transparent border-secondary"></div>
                <div class="card-body text-secondary">
                  <h5 class="card-title">Universitas</h5>
                  <p class="card-text">
                    Sebuah konsep penting yang membedakan universitas dengan yang lainnya adalah konsep kebebasan akademis
                  </p>
                </div>
                <div class="card-footer bg-transparent border-secondary"></div>
            </div>
            <!-- Button trigger modal -->
            <div class="col text-center">
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">
                    Tekan Saya!
                </button>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Universitas Terbaik</h5>
                   
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Universitas</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Provinsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Universitas Indonesia (UI)</td>
                            <td>Jakarta</td>
                            <td>DKI Jakarta</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Institut Teknologi Bandung (ITB)</td>
                            <td>Bandung</td>
                            <td>Jawa Barat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Universitas Pendidikan Indonesia</td>
                            <td>Bandung</td>
                            <td>Jawa Barat</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="c2">
            <img src="img/kanan-picsay.jpeg" width="100%" height="100%">
        </div>
    </div>

    
    

    <div>
        <img src="img/bot-img.jpg" width="100%" height="100%">
        <h1 class="tt">Universitas Terdekat</h1>
    </div>

    

    <div id="mapid"></div>

    <div class="hid">
        <img  id="img1" src="/img/pol.png"  width="300" height="200">
        <img id="img2" src="/img/unisma.jpg"  width="300" height="200">
        <img id="img3" src="/img/uniga.jpg"  width="300" height="200">
        <img id="img4" src="/img/itn.jpg"  width="300" height="200">
        <img id="img5" src="/img/um.png"  width="300" height="200">
        <img id="img6" src="/img/ub.jpeg"  width="300" height="200">
    </div>
    
    <footer class="text-center text-white fixed-bottom" style="background-color: #000000;">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(17, 16, 16, 0.2);">
          © 2020 Copyright
        </div>
        <!-- Copyright -->
      </footer>
<script>
var mymap = L.map('mapid').setView([-7.9468783,112.6127448], 13.6);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

    var pol = document.getElementById("img1");
    var unisma = document.getElementById("img2");
    var uniga = document.getElementById("img3");
    var itn = document.getElementById("img4");
    var um = document.getElementById("img5");
    var ub = document.getElementById("img6");

	L.marker([-7.9525043,112.6138604]).addTo(mymap)
		.bindPopup(ub);


    L.marker([-7.945963145896909, 112.61542029230347]).addTo(mymap)
		.bindPopup(pol);

    L.marker([-7.961163690024321, 112.61733947314748]).addTo(mymap)
		.bindPopup(um);

    L.marker([-7.9580819422467375, 112.6123416604535]).addTo(mymap)
		.bindPopup(itn);

    L.marker([-7.939954107247412, 112.60254438253608]).addTo(mymap)
		.bindPopup(uniga);

    L.marker([-7.93571377351461, 112.60690590278509]).addTo(mymap)
		.bindPopup(unisma);
    
        L.circle([-7.9494477681879765, 112.61239370226504], 2000, {
		color: '#6EC6F7',
		fillColor: '#79CEFE',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Radius Area");

	var popup = L.popup();
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</body>
</html>