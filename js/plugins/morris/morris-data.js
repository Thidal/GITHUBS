// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2015-10-10',
            Fiets: 10,
            Lopen: null
        }, {
            period: '2015-10-12',
            Fiets: 5,
            Lopen: 5
        }, {
            period: '2015-10-13',
            Fiets: 10,
            Lopen: 10
        }, {
            period: '2015-10-15',
            Fiets: null,
            Lopen: 20
        }, {
            period: '2015-10-19',
            Fiets: 5,
            Lopen: 5
        }, {
            period: '2015-10-20',
            Fiets: 10,
            Lopen: 5
        }, {
            period: '2015-10-21',
            Fiets: 10,
            Lopen: 5
        }, {
            period: '2015-10-23',
            Fiets: 20,
            Lopen: null
        }, {
            period: '2015-10-24',
            Fiets: null,
            Lopen: 20
        }, {
            period: '2015-10-27',
            Fiets: 10,
            Lopen: 10
        }],
        xkey: 'period',
        ykeys: ['Fiets', 'Lopen'],
        labels: ['Fiets', 'Lopen'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
    
     Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            period: '2015-10-10',
            Kcal: 90,
            
        }, {
            period: '2015-10-12',
            Kcal: 60,
            
        }, {
            period: '2015-10-13',
            Kcal: 120,
            
        }, {
            period: '2015-10-15',
            Kcal: 95,
            
        }, {
            period: '2015-10-19',
            Kcal: 60,
            
        }, {
            period: '2015-10-20',
            Kcal: 100,
            
        }, {
            period: '2015-10-21',
            Kcal: 100,
            
        }, {
            period: '2015-10-23',
            Kcal: 180,
            
        }, {
            period: '2015-10-24',
            Kcal: 95,
            
        }, {
            period: '2015-10-27',
            Kcal: 120,
            
        }],
        xkey: 'period',
        ykeys: ['Kcal'],
        labels: ['Kcal'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    
    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Uren Sauna",
            value: 34
        }, {
            label: "Uren Zonnebank",
            value: 20
        }],
        resize: true
    });

    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            d: '2015-10-01',
            uren: 1
        }, {
            d: '2015-10-02',
            uren: 2
        }, {
            d: '2015-10-03',
            uren: 3
        }, {
            d: '2015-10-04',
            uren: 2
        }, {
            d: '2015-10-05',
            uren: 4
        }, {
            d: '2015-10-06',
            uren: 1
        }, {
            d: '2015-10-07',
            uren: 3
        }, {
            d: '2015-10-08',
            uren: 1
        }, {
            d: '2015-10-09',
            uren: 4
        }, {
            d: '2015-10-10',
            uren: 2
        }, {
            d: '2015-10-11',
            uren: 2
        }, {
            d: '2015-10-12',
            uren: 4
        }, {
            d: '2015-10-13',
            uren: 1
        }, {
            d: '2015-10-14',
            uren: 2
        }, {
            d: '2015-10-15',
            uren: 3
        }, {
            d: '2015-10-16',
            uren: 2
        }, {
            d: '2015-10-17',
            uren: 1
        }, {
            d: '2015-10-18',
            uren: 2
        }, {
            d: '2015-10-19',
            uren: 3
        }, {
            d: '2015-10-20',
            uren: 4
        }, {
            d: '2015-10-21',
            uren: 2
        }, {
            d: '2015-10-22',
            uren: 1
        }, {
            d: '2015-10-23',
            uren: 1
        }, {
            d: '2015-10-24',
            uren: 3
        }, {
            d: '2015-10-25',
            uren: 2
        }, {
            d: '2015-10-26',
            uren: 3
        }, {
            d: '2015-10-27',
            uren: 3
        }, {
            d: '2015-10-28',
            uren: 2
        }, {
            d: '2015-10-29',
            uren: 2
        }, {
            d: '2015-10-30',
            uren: 1
        }, {
            d: '2015-10-31',
            uren: 1
        }, ],
        // The name of the data record attribute that contains x-urens.
        xkey: 'd',
        // A list of names of data record attributes that contain y-urens.
        ykeys: ['uren'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['uren'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            device: 'Rug',
            uren: 100
        }, {
            device: 'Benen',
            uren: 200
        }, {
            device: 'Armen',
            uren: 200
        }, {
            device: 'Borst',
            uren: 100
        }, {
            device: 'Buik',
            uren: 200
        }],
        xkey: 'device',
        ykeys: ['uren'],
        labels: ['uren'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });


});
