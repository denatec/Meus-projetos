const ctx = document.getElementById('#lineChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['jan', 'fev', 'mar', 'abr', 'may', 'jun','aug','sep','oct','nov','dez'],
      datasets: [{
        label: 'Earning in $',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }],
      backgroundcolor:[
        'rgb(85,85,85,1)'
      ],
      bordercolor:[
        'rgb(41,155,99)'
      ]
    },
    
   
    options: {
     Responsive:true
    }
  });