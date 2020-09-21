 var socket = null;
var socketConnected = false;
var token = 'a0c448045fd798a838fd94f6bff0b7b9f67e6cdf';
openSocket(token);
var socketId = '';


var barCount = 60;
var initialDateStr = '17 Sep 2020 00:00 Z';

var ctx = document.getElementById('chart').getContext('2d');
ctx.canvas.width = 1000;
ctx.canvas.height = 250;
var chart;


function openSocket(token)
{  
    console.log(socket);
    if(!socket)
    {   
        console.log('start connect');
        socket = io('https://api-demo.fxcm.com/', {
        query: 'access_token=' + token
        });
        socket.on('connect', function () {


            console.log("connected!");
            console.log('Socket.IO session has been opened: ', socket.id);
            socketId =socket.id;
            update();

        });
        socket.on('error', function (err) {
            console.log('connect err');
        console.log(err);
        });
    }

}
function callapi(offerId,interval)//socketId,token,apiMethod
{  
    console.log("socketId:"+socketId+",token:"+token);
    $.ajax({
            url: 'https://api-demo.fxcm.com/candles/'+offerId+'/'+interval,
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer '+socketId + token);
                        },
                        data: { "num":40 },
                        success: function (data) {
                            
                            console.log(data);
                            var dataformat = [];
                            data['candles'].forEach(function(dataset) {
                                
                                    var row = {};
                                    row["t"] = dataset[0]*1000;
                                    row["o"] = dataset[1]; 
                                    row["c"] = dataset[2];                                   
                                    row["h"] = dataset[3];
                                    row["l"] = dataset[4];
                                    dataformat.push(row);
                            });
                            console.log(dataformat);
                            if (!chart)
                            {
                                chart = new Chart(ctx, {
                                    type: 'candlestick',
                                    data: {
                                        datasets: [{
                                                label: 'musasoft',
                                                data: dataformat
                                            }]
                                    }
                                });
                            }
                            else
                            {
                                chart.data.datasets.forEach(function(dataset) {
                                        dataset.data = dataformat;
                                });
                            }
                            chart.update();
                        },
                        error: function () {
                        }
                    });
}

var update = function() {

        var offerId = $('#offerId').val();
        var interval = $('input[name="interval"]:checked').val();
        callapi(offerId,interval);
};

