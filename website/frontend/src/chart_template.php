<?php

// $chartName='irrChart';
// $title='Solar Irradiance';
// $source='Source: Kudela Weather Station';
// $units='W/m^2';
// $quantity='Light';



require_once 'Connection.php';
$conn=new Connection();
$db = $conn->db_connect();
if($db == null){ //check connection was successful
    return False;
}

$filename="../private/weather_config.ini";
$config=parse_ini_file($filename);

$table=$config['table'];
$value_name=$config['value_name'];
$device_date_name=$config['device_date_name'];
$sensor_id_name=$config['sensor_id_name'];

$sth = $db->prepare("SELECT  $value_name,extract(epoch from $device_date_name) FROM $table  WHERE   $device_date_name >= NOW() - '1 day'::INTERVAL AND $sensor_id_name = $sensor_id;");
$sth->execute();

while ($row = $sth->fetch()) {
    $data[] = "[" . ($row[1] * 1000) . "," . $row[0] . "]";
}
$sth=null;
$db=null;
?>
<script>
Highcharts.chart(<?php echo $chartName; ?>, {
    rangeSelector: {
            selected: 1
        },
    chart: { renderTo: 'graph' },
    xAxis: { type: 'datetime' },
    title: {
        text: '<?php echo $title; ?>' 
    },


    yAxis: {
        title: {
            text: '<?php echo $units; ?>' 
        }
    },
  


    series: [{
    	showInLegend: false, 
        name: '<?php echo $quantity; ?>' ,
        data: [<?php if(isset ( $data)){echo join($data, ',');}; ?>],
	type: 'spline'
    }]

});
</script>
