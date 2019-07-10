


<!DOCTYPE html>
<html>
	<head>
    <title>ChartJS - Line</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Line Graph</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://cdnjs.com/libraries/Chart.js"></script>
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	</head>
	
	<body>
	<nav class="navbar navbar-inverse" style="font-family: trebuchet ms,helvetica,sans-serif;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="mainpage2.php">Homewerk</a>
            </div>

            <ul class="nav navbar-nav navbar-right">

				<li><a class="navbar-brand" href="result.php">Result</a></li>
                <li>
                    <a href="" class="navbar-brand" name="signout" >Sign Out</a>
                    <form name="signoutform" action="signout.php" method="GET" hidden></form>
                </li>
            </ul>
        </div>
    </nav>
		<div class="box">
		<form name="add" action = "data.php" method="post">
		Status: <select name="status">
			<option value = "choose1"> Choose One </option>
			<option value = "diploma"> Diploma </option>
			<option value = "degree"> Degree </option>
			</select>	
		Choose your sem: <select name = "semester">
			<option value = "choose1"> Choose One </option>
			<option value = "sem1"> Sem 1 </option>
			<option value = "sem2"> Sem 2 </option>
			<option value = "sem3"> Sem 3 </option>
			<option value = "sem4"> Sem 4 </option>
			<option value = "sem5"> Sem 5 </option>
			<option value = "sem6"> Sem 6 </option>
			<option value = "sem7"> Sem 7 </option>
			<option value = "sem8"> Sem 8 </option>
			<option value = "sem9"> Sem 9 </option>
			</select>	   
		<br/>
		<input type = "text" name = "result">
		<input id="add" type = "submit" value="insert" onClick="window.location.reload();"> 

	</form>

	</div>
	
	
		<div class="chart-container">
			<div class="chartjs-size-monitor"></div>
			<canvas id="line-chartcanvas" width="400" height="400"></canvas>
		</div>
		
		
		<!-- javascript -->
		<script src="js/jquery.min.js"></script> 
		<script src="js/Chart.min.js"></script>
		<script src="line.js"></script>
	</body>	
</html>

<script>
	$('[name="add"]').submit(function(e)
    {
        $.Event(e).preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'JSON',
        }).done(function(data)
        {        

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
        
        })
    });
</script>