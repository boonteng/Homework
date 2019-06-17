<html>
<head>
  <meta charset="UTF-8">
  <title>To Be Done</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
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
  width: 1150px;
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
.card a {
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
.card a:hover{
    text-decoration: none;
}
p{
font-size: 18px;
}
</style>
</head>
<body>
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
  <p>Math
    <span class="time">*2
      <sub>days left</sub>
    </span>   
    <ul>
      <li><i class="fa fa-times" aria-hidden="true"></i>Exercise 1</li>
      <li><i class="fa fa-times" aria-hidden="true"></i>Exercise 2</li>
      <li><i class="fa fa-times" aria-hidden="true"></i>Exercise 3</li>
    </ul>
 </p>
</div>
<div class="option">
<p>Science
    <span class="time">*3
      <sub>days left</sub>
    </span>   
    <ul>
      <li><i class="fa fa-times" aria-hidden="true"></i>Exercise 3</li>
    </ul>
 </p>
</div>
<div class="option">
<p>English
    <span class="time">*5
      <sub>days left</sub>
    </span>   
    <ul>
      <li><i class="fa fa-times" aria-hidden="true"></i>Exercise 1</li>
      <li><i class="fa fa-times" aria-hidden="true"></i>Exercise 2</li>
      <li><i class="fa fa-times" aria-hidden="true"></i>Exercise 3</li>
    </ul>
 </p>
</div>
			
          </div>
        </div>
        <!-- END Col one -->
      </div>
    </div>
  </div>
</section>
</body>
</html>
