<html>
<head>
    <meta charset="UTF-8">
    <title>Homework Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <?php
        require"popupbar.php";
        require"connection.php";
        session_start();
        $id = $_SESSION['id'];
        $username=$_SESSION['username'];
        $query_task="SELECT * FROM `task` WHERE `userid`= '$id' AND `status`='doing'";
        $query_process_task=mysqli_query($conn,$query_task);




     	$query_task_due="SELECT * FROM `task` WHERE `userid`= '$id' AND `status`='doing'";
        $query_process_due=mysqli_query($conn,$query_task_due);


        $query_done="SELECT * FROM `task` WHERE `userid`= '$id' AND `status`='done'";
        $query_process_done=mysqli_query($conn,$query_done);








    ?>
  

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300');
    body{
        background:url(background.png);
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif !important;
    }
    section{
        width: 100%;
        height: 100vh;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 140px 0;
    }
    .card{
        position: relative;
        max-width: 300px;
        height: auto;
        background: linear-gradient(-45deg,#fe0847,#feae3f);
        border-radius: 15px;
        margin: 0 auto;
        padding: 40px 20px;
        -webkit-box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
        box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
        -webkit-transition: .5s;
        transition: .5s;
    }
    .card:hover{
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
    .col-sm-4:nth-child(1) .card ,
    .col-sm-4:nth-child(1) .card .title .fa{
        background: linear-gradient(-45deg,#f403d1,#64b5f6);

    }
    .col-sm-4:nth-child(2) .card,
    .col-sm-4:nth-child(2) .card .title .fa{
        background: linear-gradient(-45deg,#ffec61,#f321d7);

    }
    .col-sm-4:nth-child(3) .card,
    .col-sm-4:nth-child(3) .card .title .fa{
        background: linear-gradient(-45deg,#24ff72,#9a4eff);

    }
    .card::before{
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 40%;
        background: rgba(255, 255, 255, .1);
        z-index: 1;
        -webkit-transform: skewY(-5deg) scale(1.5);
                transform: skewY(-5deg) scale(1.5);
    }
    .title .fa{
        color:#fff;
        font-size: 60px;
        width: 100px;
        height: 100px;
        border-radius:  50%;
        text-align: center;
        line-height: 100px;
        -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
        box-shadow: 0 10px 10px rgba(0,0,0,.1) ;

    }
    .title h2 {
        position: relative;
        margin: 20px  0 0;
        padding: 0;
        color: #fff;
         font-weight: bold;
        font-size: 28px;
        z-index: 2;
    }
    .option ul {
        margin: 0;
        padding: 0;
    }
    .option ul li {
        margin: 0 0 10px;
        padding: 0;
        list-style: none;
        color: #fff;
        font-size: 16px;
    }
    .card #addbutton {
        position: relative;
        z-index: 2;
        background: #fff;
        color : black;
        width: 150px;
        height: 40px;
        line-height: 40px;
        border-radius: 40px;
        display: block;
        text-align: center;
        margin: 20px auto 0 ;
        font-size: 16px;
        cursor: pointer;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

    }


   #remove {
       
        position: relative;
        z-index: 2;
        color : black;
       
        text-align: center;
        margin: auto 0 ;
        font-size: 10px;
        cursor: pointer;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
      

    }




    #editbutton {
        position: relative;
        z-index: 2;
        color : black;
        border-radius: 40px;
        display: block;
        text-align: center;
        margin: auto 0 ;
        font-size: 16px;
        cursor: pointer;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

    }

    .card #addbutton:hover{
        text-decoration: none;
        background:#191970;
        color:white;
    }

    p{
        font-size: 18px;
    }
</style>

</head>

<body>
    <nav class="navbar navbar-inverse" style="font-family: trebuchet ms,helvetica,sans-serif;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="mainpage2.php">Homewerk</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a class="navbar-brand">Hello, <?php echo $username ?></a></li>
                <li>
                    <a href="" class="navbar-brand" name="signout" >Sign Out</a>
                    <form name="signoutform" action="signout.php" method="GET" hidden></form>
                </li>
            </ul>
        </div>
    </nav>
    
<section>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="title">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <h2>To Be Done</h2>
                        </div>

                        <div class="option">
                            <?php while ($row=mysqli_fetch_assoc($query_process_task)) {?>
                               		<p>

                               		<form name="removeform" action="deletetask.php" method="post" style="display: inline;" >
                                 	 <span style="color:white;font-size: 16px">  <?php echo $row['tasktitle'];?>    </span>

	                                    <a id="editbutton" style="display:inline-block" href="#detailModal" data-toggle="modal" class="info">
	                                        <span data-tasks='<?php echo json_encode($row) ?>' style="color:black">&#9998</span>
	                                    </a>
    
                             		
	                                    <input name="id" type="text" value="<?php echo $row['id'];?>"/ hidden >
	                                          <a name="complete_btn" id="remove">&#10004</a>
	                                    <a name="remove_btn" id="remove">&#x274C</a>
	                                    <button id="remove" type="submit" hidden>&#x274C</button>
                                    </form>

                                 
                                    </p>
                                    

                            <?php }?>
                            <center><a id="addbutton" style="" type="button" data-toggle="modal" data-target="#myModal">Add Task</a></center>
                        </div>
                    </div>
                </div>

                <!-- END Col one -->
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="title">
                            <i class="fa fa-plane" aria-hidden="true"></i>
                            <h2>Done</h2>
                        </div>
                        
                        <div class="option">
                           

                        	 <?php while ($row=mysqli_fetch_assoc($query_process_done)) {?>
                               		<p>


	                                  <form name="removeform1" action="deletetask.php" method="post" style="display: inline;" >
                                 	 <span style="color:white;font-size: 16px">  <?php echo $row['tasktitle'];?>    </span>

	                                 
	                                    <input name="id" type="text" value="<?php echo $row['id'];?>"/ hidden >
	                                    
	                                    <a name="remove1_btn" id="remove">&#x274C</a>
	                                    <button id="remove1" type="submit" hidden>&#x274C</button>
                                    </form> 

                                 
                                    </p>
                                    

                            <?php }?>







                        </div>

                       
                    </div>
                </div>

                <!-- END Col two -->
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="title">
                            <i class="fa fa-rocket" aria-hidden="true"></i>
                            <h2>Due in 1 week</h2>
                        </div>
                                            
                            <div class="option">


                            <?php while ($row=mysqli_fetch_assoc($query_process_due)) {?>
                               		<p>

                               		<?php 

                               			$today_date = date('Y/m/d');
                               			$td = strtotime($today_date);

                               			
                               			$exp_date = $row['duedate'];             
                               			$exp = strtotime($exp_date);


                               			$diff=$td-$exp;
		
										$x = abs(floor($diff/(60*60*24)));



									

                               		?>


                               		<?php if(($td<$exp) && ($x<=7)): ?>
                                 	

                                 	 <span style="color:white;font-size: 16px">  <?php echo $row['tasktitle'];?>     <span class="glyphicon">&#xe092;</span> <?php echo $x;?> days left </span>
                                 	

                                 	<?php endif; ?>	
	                                                    
                                    </p>
                                    

                            <?php }?>

                          
                        </div>

                     
                    </div>
                </div>
            <!-- END Col three -->
            </div>
        </div>
    </div>
</section>


    



<div class="modal fade" id="detailModal">
              <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Task</h4>
      </div>
      <div class="modal-body">
    





         <form name="edittask" class="form-horizontal" action="edittobedone_task_progress.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2">Task title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tasktitle">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Description:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="taskdescription" >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Due Date:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control" name="duedate" >
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Edit</button>
      
      <input type="text" name="taskid" hidden/>
    </div>
  </div>
</form>
    


    
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
            </div>  

  

    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Task to complete</h4>
      </div>
      <div class="modal-body">
    
    
        <form name="addtask" class="form-horizontal" action="addtaskprocess.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2">Task title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tasktitle" placeholder="Enter Task Title">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Description:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="taskdescription" placeholder="Enter Description">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Due Date:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control" name="duedate" >
    </div>
  </div>


  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Add</button>
      
      <input type="text" name="userid" value="<?php echo $_SESSION['id'] ?>" hidden/>
    </div>
  </div>
</form>
    
    
    
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





<script>


        $('[href="#detailModal"]').click(function()
    {
        var task = $(this).children().attr('data-tasks');        
        task = JSON.parse(task);   

        // alert(task);

        $('[name="tasktitle"]').val(task.tasktitle).end();   
        $('[name="taskdescription"]').val(task.taskdescription).end();

        $('[name="taskid"]').val(task.id).end();



    });


         $('[name="addtask"]').submit(function(e)
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
                   window.location = "mainpage2.php";
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
    
    $('[name="signout"]').click(function(e)
    {
        $.Event(e).preventDefault();
        $(this).siblings('form').submit();
    });
          
    $('[name="signoutform"]').submit(function(e)
    {
        $.Event(e).preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'JSON',
        }).done(function(data)
        {        
    
                new Noty({          
                    type: data.status,
                    text: data.message,            
                    timeout: 2000
                }).show();
                
                    setTimeout(function()
                {
                   window.location = "login.php";
                }, 1000);   
            
        
        
        })
    });



    $('[name="edittask"]').submit(function(e)
    {
        $.Event(e).preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'JSON',
        }).done(function(data)
        {        
    
                new Noty({          
                    type: data.status,
                    text: data.message,            
                    timeout: 2000
                }).show();
                
                        setTimeout(function()
                {
                   window.location = "mainpage2.php";
                }, 1000);   
                   
            
        
        
        })
    });



	  $('[name="complete_btn"]').click(function(e)
    {

    	// var link = $(this).cloest('form').attr('action');     


    	  $('form').attr( 'action', "complete_task.php" );



        $.Event(e).preventDefault();
        $(this).siblings('button').click();
    });

   
    $('[name="remove_btn"]').click(function(e)
    {


        $.Event(e).preventDefault();
        $(this).siblings('button').click();
    });

        $('[name="removeform"]').submit(function(e)
    {
        $.Event(e).preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'JSON',
        }).done(function(data)
        {        
    
                new Noty({          
                    type: data.status,
                    text: data.message,            
                    timeout: 2000
                }).show();
                
                        setTimeout(function()
                {
                   window.location = "mainpage2.php";
                }, 1000);                        
        })
    });
	
	 $('[name="remove1_btn"]').click(function(e)
    {


        $.Event(e).preventDefault();
        $(this).siblings('button').click();
    });

        $('[name="removeform1"]').submit(function(e)
    {
        $.Event(e).preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'JSON',
        }).done(function(data)
        {        
    
                new Noty({          
                    type: data.status,
                    text: data.message,            
                    timeout: 2000
                }).show();
                
                        setTimeout(function()
                {
                   window.location = "mainpage2.php";
                }, 1000);                        
        })
    });

</script>   






</body>
</html>
