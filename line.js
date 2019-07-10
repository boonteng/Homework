
$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/Homework-Second/out.php",
		type : "GET",
		success : function(data){
			console.log(data);
						
			var result = {
				diploma : [],
				degree : []
			};

			var len = data.length;

			for (var i = 0; i < len; i++) {
				if (data[i].status == "diploma") {
					result.diploma.push(data[i].result);
				}
				else if (data[i].status == "degree") {
					result.degree.push(data[i].result);
				}
			};

			
			console.log(result.diploma);
			console.log(result.degree);
			var data = {
				labels : ["sem1", "sem2", "sem3", "sem4", "sem5" , "sem6", "sem7", "sem8", "sem9"],
				datasets : [
					{
						label : "diploma result",
						data : result.diploma,
						backgroundColor : "blue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "degree result",
						data : result.degree,
						backgroundColor : "green",
						borderColor : "lightgreen",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					}
				]
			};
			
			//get canvas
			var ctx = $("#line-chartcanvas");

			var options = {
				responsive: true,
				title : {
					display : true,
					position : "top",
					text : "Line Graph",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom",
					labels: {
						fontColor: "#333",
						fontSize: 16
					}
				}
			};

			var chart = new Chart(ctx, {
				type : 'line',
				data : data,
				options:options 
			});
			
			if (data.status == 'success')
            {
                new Noty({          
                    type: data.status,
                    text: data.message,            
                    timeout: 2000
                }).show();
                
                    setTimeout(function()
                {
                   window.location = "result.php";
                }, 1000);   
            }
            else
            {
                new Noty({          
                    type: data.status,
                    text: data.message,            
                    timeout: 2000
                }).show();
            }

		},
		
	});
	
});
