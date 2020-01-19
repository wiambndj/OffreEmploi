@extends('layouts.app')
@section('content')


</head>
    
<div class="page-container">
           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>

<div class="row">
<form action="{{ route('chartbar') }}" method="GET">
        
                {{ csrf_field() }}

          <div class="form-group">
        <select name=annee>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
          </div>
          <div class="form-group"> 
          <input type="submit" class=" btn btn-primary rounded-pill" value="Envoyer">
          </div>
        </form>



<figure class="highcharts-figure">
    <div id="container"></div>
</figure>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
     <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
     <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
     <script src="https://code.highcharts.com/stock/highstock.js"></script>
<script type="text/javascript">
        var offre = {{ json_encode($offres,JSON_NUMERIC_CHECK) }};

    Highcharts.chart('container', {

chart: {
    type: 'column'
},

title: {
    text: 'Offres chart'
},

subtitle: {
    text: '2020'
},

legend: {
    align: 'right',
    verticalAlign: 'middle',
    layout: 'vertical'
},

xAxis: {
    categories: ['Jan', 'Fev', 'Mar','Avr', 'Mai', 'Juin','Jui', 'Aout', 'Sep','Oct', 'Nov', 'Dec'],
    labels: {
        x: -10
    }
},

yAxis: {
    title: {
        text: 'Number of New Offres'
    }
},

series: [{
    name: 'Full time',
    data: offre
}, {
    name: 'Part time',
    data: offre
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                align: 'center',
                verticalAlign: 'bottom',
                layout: 'horizontal'
            },
            yAxis: {
                labels: {
                    align: 'left',
                    x: 0,
                    y: -5
                },
                title: {
                    text: null
                }
            },
            subtitle: {
                text: null
            },
            credits: {
                enabled: false
            }
        }
    }]
}
});

</script>

</div></div></div></div> 
     @endsection


