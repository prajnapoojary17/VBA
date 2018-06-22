/* $(function () {
    new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
});

function getChartJs(type) {
    var config = null;

config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [225, 50, 100, 40],
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: [
                    "Pink",
                    "Amber",
                    "Cyan",
                    "Light Green"
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
	return config;
} */


Chart.types.Doughnut.extend({
	name: "Tran1Chart",
	showTooltip: function() {
		this.chart.ctx.save();
		Chart.types.Doughnut.prototype.showTooltip.apply(this, arguments);
		this.chart.ctx.restore();
	},
	draw: function() {
		Chart.types.Doughnut.prototype.draw.apply(this, arguments);

		var width = this.chart.width,
			height = this.chart.height;

		var fontSize = (height / 300).toFixed(2);
		this.chart.ctx.font = fontSize + "em Verdana";
		this.chart.ctx.textBaseline = "middle";

		var text = "Submitted",
			text1 = "20/07/2017",
			textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
			textY = height / 2.2;

		this.chart.ctx.fillText(text, textX, textY);
		this.chart.ctx.fillText(text1, textX, textY+20);				
		
		//ctx.fillText(data[0].value + "%", width/2 - 20, width/2, 200);
	}
});

Chart.types.Doughnut.extend({
	name: "Tran2Chart",
	showTooltip: function() {
		this.chart.ctx.save();
		Chart.types.Doughnut.prototype.showTooltip.apply(this, arguments);
		this.chart.ctx.restore();
	},
	draw: function() {
		Chart.types.Doughnut.prototype.draw.apply(this, arguments);

		var width = this.chart.width,
			height = this.chart.height;

		var fontSize = (height / 300).toFixed(2);
		this.chart.ctx.font = fontSize + "em Verdana";
		this.chart.ctx.textBaseline = "middle";

		var text = "Last date of filing",
			text1 = "20/09/2017",
			textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
			textY = height / 2.2;

		this.chart.ctx.fillText(text, textX, textY);
		this.chart.ctx.fillText(text1, textX, textY+20);
	}
});

Chart.types.Doughnut.extend({
	name: "Tran3Chart",
	showTooltip: function() {
		this.chart.ctx.save();
		Chart.types.Doughnut.prototype.showTooltip.apply(this, arguments);
		this.chart.ctx.restore();
	},
	draw: function() {
		Chart.types.Doughnut.prototype.draw.apply(this, arguments);

		var width = this.chart.width,
			height = this.chart.height;

		var fontSize = (height / 300).toFixed(2);
		this.chart.ctx.font = fontSize + "em Verdana";
		this.chart.ctx.textBaseline = "middle";

		var text = "Last date of filing",
			text1 = "20/09/2017",
			textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
			textY = height / 2.2;

		this.chart.ctx.fillText(text, textX, textY);
		this.chart.ctx.fillText(text1, textX, textY+20);
	}
});

Chart.types.Doughnut.extend({
	name: "Tran4Chart",
	showTooltip: function() {
		this.chart.ctx.save();
		Chart.types.Doughnut.prototype.showTooltip.apply(this, arguments);
		this.chart.ctx.restore();
	},
	draw: function() {
		Chart.types.Doughnut.prototype.draw.apply(this, arguments);

		var width = this.chart.width,
			height = this.chart.height;

		var fontSize = (height / 300).toFixed(2);
		this.chart.ctx.font = fontSize + "em Verdana";
		this.chart.ctx.textBaseline = "middle";

		var text = "Last date of filing",
			text1 = "20/09/2017",
			textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
			textY = height / 2.2;

		this.chart.ctx.fillText(text, textX, textY);
		this.chart.ctx.fillText(text1, textX, textY+20);
		
	}
});

var tran1 = [{
	value: 60,
	color: "#4CAF50"
}];

var tran2 = [{
	value: 40,
	color: "#DDDDDD"
},{
	value: 30,
	color: "#ff9600"
}];

var tran3 = [{
	value: 20,
	label: "Pending ",
	color: "#DDDDDD"
},{
	value: 80,
	color: "#ff9600"
}];

var tran4 = [{
	value: 40,
	color: "#DDDDDD"
},{
	value: 60,
	color: "#ff9600"
}];

/*var DoughnutTextInsideChart = new Chart($('#chartTran1')[0].getContext('2d')).Tran1Chart(tran1, {
	responsive: true
});*/
var DoughnutTextInsideChart = new Chart($('#chartTran2')[0].getContext('2d')).Tran2Chart(tran2, {
	responsive: true
});
var DoughnutTextInsideChart = new Chart($('#chartTran3')[0].getContext('2d')).Tran3Chart(tran3, {
	responsive: true
});
var DoughnutTextInsideChart = new Chart($('#chartTran4')[0].getContext('2d')).Tran4Chart(tran4, {
	responsive: true
});