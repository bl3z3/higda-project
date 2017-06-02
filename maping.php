<!DOCTYPE html>
<html>
<head>
  <title>HIGDA-PROJECT</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.css" type="text/css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <script src="js/jquery.jvectormap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.js"></script>
  <script src="js/africa-map.js"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <h1><center>Health Informatics Governance and Data Analytics</center></h1>
    </div>
    <div class="row">
      <div class="col-sm-2">
<div class="btn-group-vertical">
          <button type="button" class="btn btn-primary"><a href="index.php">Home</a></button>
         <button type="button" class="btn btn-primary"><a href="index.php">Data Elements</a></button>
          <button type="button" class="btn btn-primary"><a href="organizations.php">Orgnization Units</a></button>
          <button type="button" class="btn btn-primary"><a href="immunization.php">Analytics</a></button>
          <button type="button" class="btn btn-primary"><a href="maping.php">Maping</a></button>
        </div>
      </div>
      <div class="col-sm-8">
        <div id="africa-map" class="col-sm-10" style="height: 400px; width: 100%"></div>
      </div>
      <div class="col-sm-2">
        <ul>
          <li>Green - Good</li>
          <li>Orange - Alert</li>
          <li>Yellow - Danger</li>
        </ul>
      </div>
    </div>
  <script>
    $(function(){

      var year2017 = 
        [
          {
            latLng: [-1.95, 30.05], //Rwanda
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [-8.833333333, 13.216667], //Angola
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [12.1, 15.033333], //Chad
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [0.383333333, 9.45], //Gabon
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [-1.283333333, 36.816667], //Kenya
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [2.066666667, 45.333333 ], //Somalia
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [6.3, -10.8], //Liberia
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [8.483333333, -13.233333], //Sierra Leone
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [13.45, -16.566667], //Gambia
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [14.73333333, -17.633333], //Senegal
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [-26.31666667, 31.133333], //Swaziland
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [-18.91666667, 47.516667], //Madagascar
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [36.8, 10.183333], //Tunisia
            style: {r: 8, fill: 'green'}
          },
          {
            latLng: [36.75, 3.05], //Algeria
            style: {r: 8, fill: 'green'}
          },
        ];

        //Elections in 2018 and Beyond
        var year2018 = 
        [
          {
            latLng: [-4.316666667, 15.3], //DRC
            style: {r: 6, fill: 'yellow'}
          },
          {
            latLng: [12.65, -8], //Mali
            style: {r: 6, fill: 'yellow'}
          },
          {
            latLng: [6.116666667, 1.216667], //Togo
            style: {r: 6, fill: 'yellow'}
          },
        ];

        //Elections in 2019 and beyond.
        var electionsLater = 
        [
          {
            latLng: [-3.366666667, 29.35], //Burundi
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [15.33333333, 38.933333], //Eritrea
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [9.033333333, 38.7], //Ethiopia
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [6.4833333332, 616667], //Benin
            name: 'most likely March 2021',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [14.91666667, -23.516667], //Cape verde
            name: 'most likely 2021',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [5.55, -0.216667], //Ghana
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [9.083333333, 7.533333], //Nigeria
            name: 'most likely February 2019',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [-25.7, 28.216667], //South Africa
            name: 'general elections 2019',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [-13.96666667, 33.783333], //Malawi
            name: '2019',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [-17.81666667, 31.033333], //Zimbabwe
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [-25.95, 32.583333], //Mozambique
            name: '2019',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [-22.56666667, 17.083333], //Namibia
            name: '2019',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [-24.63333333, 25.9], //Botswana
            name: '2019',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [-29.31666667, 27.483333], //Lesotho
            name: '2020',
            style: {r: 5, fill: 'orange'}
          },
          {
            latLng: [32.88333333, 13.166667], //Libye
            name: 'no elections planned',
            style: {r: 5, fill: 'orange'}
          },
        ];
      $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null){
           return null;
        }
        else{
           return results[1] || 0;
        }
      }

      function setMarker(year) {
        if ($.urlParam('year') == 2017)
          return year2017;
        else if ($.urlParam('year') == 2018)
          return year2018;
        else if ($.urlParam('year') == 2019)
          return electionsLater;

        return year2018.concat(year2017.concat(electionsLater));
      }

      var marker = setMarker(2017);

      var map = new jvm.Map({
        container: $('#africa-map'),
        map: 'africa_mill',
        backgroundColor : ['#50CC82'],
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        markerStyle: {
          initial: {
            fill: '#000',
            stroke: '#383f47'
          }
        },
        backgroundColor: '#383f47',
        markers : marker
    });
  });
  </script>
</body>
</html>