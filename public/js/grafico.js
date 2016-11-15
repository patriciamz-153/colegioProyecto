$('#linea').highcharts({
    chart: {
        type: 'line',  // tipo de gráfica
        borderWidth: 0 // ancho del borde de la gráfica
    },
    title: {
        text: 'Tráfico mensual de lo principales motores de búsqueda', // título
        x: -20 
    },
    subtitle: {
        text: 'Año 2013', // subtítulo
        x: -20
    },
    xAxis: {
        categories: ['P1', 'P2', 'P3', 'P4', 'P5', 'P6',
            'P7', 'P8', 'P9', 'PQ10'] // categorías
    },
    yAxis: {
        title: {
            text: 'Tráfico (millones)' // nombre del eje de Y
        },
        plotLines: [{
            color: '#808080'
        }]
    },
    tooltip: {
        valueSuffix: ' Millones' // el sufijo de la información presente en el "tooltip"
    },
    legend: { // configuración de la leyenda
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom',
        borderWidth: 1
    },
    series: [{ // configuración de las series
        name: 'Google.com',
        data: [50, 55, 49, 66, 78, 87, 94, 99, 95, 90, 100, 96]
    }, {
        name: 'Yahoo.com',
        data: [35, 40, 41, 39, 52, 48, 55, 57, 60, 48, 53, 47]
    }, {
        name: 'Bing.com',
        data: [23, 25, 32, 31, 39, 44, 38, 42, 51, 43, 52, 55]
    }]
});