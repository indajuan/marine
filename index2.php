<head>
  <!-- Plotly.js -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>
  
  <div id="myDiv" style="width: 480px; height: 400px;"><!-- Plotly chart will be drawn inside this DIV --></div>
  <script>
    var tA1 = {
  x: [3, 50, 100, 150, 200], 
  y: [16, 15.5 , 15, 14, 13.5], 
  type: 'scatter',
  name: 'A1',
  marker: {color: '#1f77b4'}
};

var tS1 = {
  x: [3, 50, 100, 150, 200], 
  y: [15.5, 15 , 15, 13, 12.5], 
  type: 'scatter',
  name:  'S1',
  marker: {color: '#1f77b4'}
};

var phA1 = {
  x: [3, 50, 100, 150, 200], 
  y: [6, 5.9 , 5.9, 5.8, 5.5], 
  type: 'scatter',
  name:  'A1',
  marker: {color: '#ff7f0e'}
};

var phS1 = {
  x: [3, 50, 100, 150, 200], 
  y: [6.5, 6.3 , 6.4, 6.4, 6.3], 
  type: 'scatter',
  name:  'S1',
  marker: {color: '#ff7f0e'}
};


var data = [tA1, tS1, phA1, phS1];

var layout = {
  width: 700,
  xaxis: {
    domain: [0, 201],
    zeroline: false,
    title: 'Depth',},
   yaxis: {
      title: 'Temperature',
      titlefont: {color: '#1f77b4'},
      tickfont: {color: '#1f77b4'},
      zeroline: false},

    yaxis3: {
      title: 'pH',
      overlaying: 'y',
      side: 'right',
      anchor: 'x',
      range: [0,14],
      titlefont: {color: '#ff7f0e'},
      tickfont: {color: '#ff7f0e'},
      zeroline: false},
    showlegend: true,
  legend: {
    x: 1.2,
    y: 1
  }
};

Plotly.newPlot('myDiv', data,layout);

  </script>
</body>
