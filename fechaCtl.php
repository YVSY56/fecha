<?php
    include"Fecha.php";
        $con = mysqli_connect("localhost","root","","fecha");
        $sul= mysqli_query($con,"SELECT * from Fecha where id= 1");
        $resul= mysqli_fetch_array($sul);
       
        $fe =  $resul['fechaNacimiento'];
        $fee = $resul[ 'fechActual'];
        $feee = $resul['fechaFin'];
        
        $ano = substr($fe,-10, 4);
        $mes= substr($fe, -5,2);
        $dia= substr($fe, -2, 2);
        $fechafin= $ano+80;


        $fa =substr($fee,-10, 4);
        $fa1 =substr($fee, -5,2);
        $fa2 =substr($fee, -2, 2);

        $ff =substr($feee,-10, 4);
        $ff1 =substr($feee, -5,2);
        $ff2=substr($feee, -2, 2);
        
        $vida = $fa -$ano;
        $muerte = $fechafin- $fa ;


    ?>
    
    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Fecha</title>

</head>
<style type="text/css">
	body{
		font-family: Tahoma;
		text-align: center;
	}
</style>
<body>
	<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>
	<h2>Porcentajes</h2><br><br>
    <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
	<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Stacked bar chart'
    },
    xAxis: {
        categories: ['Vida']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total de vida'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'restantes',
        data: [<?php $muerte ?>]
    }, {
        name: 'Vividos',
        data: [<?php $vida ?>]
    }]
});
		</script>
    


</body>
</html>