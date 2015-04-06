/*
 *  Document   : compCharts.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Charts page
 */

var CompCharts2 = function() {

    return {
        init: function(obj) {
            
            /*
             * Flot Jquery plugin is used for charts
             *
             * For more examples or getting extra plugins you can check http://www.flotcharts.org/
             * Plugins included in this template: pie, resize, stack, time
             */

             console.log("obj");
             console.log(obj);
            // Get the elements where we will attach the charts
            var chartClassic = $('#chart-classic');
            $.ajax({
                type: "GET",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                url: '/stockResult/GetPriceOf/',
                data: { stock_id: obj},
                error: function () {
                    alert("An error occurred.");
                },
                success: function (data) {
                    // Classic Chart
                        var minx = data.reduce(function(min, obj) {
                            return obj.time < min ? obj.time : min;
                        }, Infinity);
                        var maxx = data.reduce(function(max, obj) {
                            return obj.time > max ? obj.time : max;
                        }, 0);
                        var miny = data.reduce(function(min, obj) {
                            return obj.price < min ? obj.price : min;
                        }, Infinity);
                        var maxy = data.reduce(function(max, obj) {
                            return obj.price > max ? obj.price : max;
                        }, 0);
                        var data1=[];



                        console.log(obj.price);
                        console.log(maxy);
                        // maxy=maxy+0.01;
                        console.log(maxy);
                        // data.forEach(function(obj) { data1.push([obj.time,obj.price,"BUY: "+obj.BUY+" HOLD: "+obj.HOLD+" SELL: "+obj.SELL]); });
                        data.forEach(function(obj) { data1.push([obj.time,obj.price,0,obj.BUY,obj.HOLD,obj.SELL]); });
                        console.log(data1);
                        var options = {
                            lines: {
                                show: true
                            },
                            points: {
                                show: true
                            },
                            xaxis: {
                                tickDecimals: 0,
                                tickSize: 1
                            }
                        };
                        var options2 = {
                            lines: {
                                show: true
                            },
                            points: {
                                show: true
                            },
                            colors: ['#3498db', '#333333'],
                            legend: {show: true, position: 'nw', margin: [15, 10]},
                            grid: {borderWidth: 0, hoverable: true, clickable: true},
                            yaxis: {
                                ticks: 4, 
                                tickColor: '#eeeeee',
                                // axisLabel: "Stock Price in Baht",
                                // axisLabelUseCanvas: true,
                                // axisLabelFontSizePixels: 12,
                                // axisLabelFontFamily: 'Verdana, Arial',
                                // axisLabelPadding: 5,
                                min: miny-miny*0.01,
                                max: parseFloat(maxy)+(parseFloat(maxy)*0.01)
                               
                            },
                            xaxis: {mode: "time", 
                                timeformat:"%d %b %y",
                                tickSize: [5, 'day'],
                                // tickColor: '#ffffff',
                                // axisLabel: "Date",
                                min: minx,
                                max: maxx
                            }
                        };

                        var data2=[
                            {
                                label: 'Price',
                                data: data1,
                                color: "#FF0000",
                                // points: { fillColor: "#FF0000", show: true },
                                // lines: { show: true }
                                lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.25}, {opacity: 0.25}]}},
                                points: {show: true, radius: 6}
                            }
                        ];
                        $.plot(chartClassic,data2, options2);

                    // Creating and attaching a tooltip to the classic chart
                    var previousPoint = null, ttlabel = null;
                    chartClassic.bind('plothover', function(event, pos, item) {

                        if (item) {
                            // console.log(item);
                            if (previousPoint !== item.dataIndex) {
                                previousPoint = item.dataIndex;

                                $('#chart-tooltip').remove();
                                var x = item.datapoint[0], y = item.datapoint[1];
                                var buy = item.series.data[item.dataIndex][3];
                                var hold = item.series.data[item.dataIndex][4];
                                var sell = item.series.data[item.dataIndex][5];
                                var date =new Date(x);
                                if (item.seriesIndex === 1) {
                                    ttlabel = '----<strong>' + y + '</strong> Baht BUY: '+buy+' HOLD: '+hold+' SELL: '+sell;
                                } else {
                                    ttlabel = 'Date: '+date.getDate()+"/"+(date.getMonth()+1)+' Price: ' + y + ' Baht<br> BUY: '+buy+' HOLD: '+hold+' SELL: '+sell;
                                }

                                $('<div id="chart-tooltip" class="chart-tooltip">' + ttlabel + '</div>')
                                    .css({top: item.pageY - 45, left: item.pageX + 5}).appendTo("body").show();
                            }
                        }
                        else {
                            $('#chart-tooltip').remove();
                            previousPoint = null;
                        }
                    });
                }

            });
        }
    };
}();