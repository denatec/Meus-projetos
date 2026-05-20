var ctx = document.getElementById('#doughnut');
var chart=  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Academic', 'Non-academic', 'Adiministration', 'others'],
      datasets: [{
        label: 'Employees',
        data: [42, 12, 8, 6],
        borderWidth: 1
      }],
      backgroundcolor:[
        'rgba(41,155,99,1)',
        'rgba(54,162,235,1)',
        'rgba(255,206,86,1)',
        'rgba(41,155,99,1)'

      ],
      bordercolor:[
        'rgba(41,155,99,1)',
        'rgba(54,162,235,1)',
        'rgba(255,206,86,1)',
        'rgba(41,155,99,1)'
      ]
    },
    hoveroffset:4,
    options: {
     Responsive:true
    }
  });