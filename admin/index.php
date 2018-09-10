<?php 
/**................................................................
 * ................................................................
 */


include 'header.php';
?>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">


<!--
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Hora</h4>
                </div>
                <div class="panel-body float-right">
                    <script type="text/javascript" src="http://www.webestools.com/page/js/flashobject.js"></script>
<div id="clock_2261" style="display:inline-block;">
	<a href="http://get.adobe.com/flashplayer/">Necesita instalar el Flash plugin</a> - <a href="http://www.webestools.com/">http://www.webestools.com/</a>
</div>
<script type="text/javascript">
	var flashvars_2261 = {};
	var params_2261 = {
		quality: "high",
		wmode: "transparent",
		bgcolor: "#ffffff",
		allowScriptAccess: "always",
	};
	var attributes_2261 = {};
	flashObject("http://flash.webestools.com/horloges/horloge12.swf", "clock_2261", "150", "150", "8", false, flashvars_2261, params_2261, attributes_2261);
</script>
                </div>
            </div>
            <div class="clearfix"> </div>
	  </div>
-->	  
		  <!----Calender
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender 
		
<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',
	
	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
-------->
</div>
	
       </div>
       <div class="clearfix"> </div>
    </div>
    
		<div class="clearfix"> </div>
	    </div>
	<?php include 'footer.php';?>