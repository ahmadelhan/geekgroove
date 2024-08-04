var options = {
    series: [{
        name: 'Days progressed',
        data: [11, 32, 45, 32, 34, 52, 41]
    }],
    chart: {
        height: 300,
        type: 'area'
    },
    colors: ['#8a8a8a'], 
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        colors: ['#0d0d0d']
    },
    xaxis: {
        categories: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
    },
    yaxis: {
        title: {
            text: 'Points'
        }
        
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();