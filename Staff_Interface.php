<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       @import url('htpps://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
display: flex;
justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #0e1538;
}
.container{
display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.container a{
position: relative;
  width: 160px;
  height: 60px;
  display: inline-block;
  background: #fff;
  margin: 20px;
}
.container a:before,
.container a:after
{
content:'';
  position: absolute;
  inset: 0;
  transition: 0.5s;
  background: #f00
}
.container a:nth-child(1):before,
.container a:nth-child(1):after
{
 background: linear-gradient(45deg, #FF6B00, #0e1538, #FFE604)
}
.container a:nth-child(2):before,
.container a:nth-child(2):after
{
  background: linear-gradient(45deg, #FFE604, #0e1538, #FF6B00);
}
.container a:hover:before
{
  inset: -3px;  
}
.container a:hover:after
{
  inset: -3px;  
  filter: blur(10px);
}
.container a span{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: inline-block;
  background: #0e1538;
  z-index: 10;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.2em;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #fff;
  border: 1px solid #040a29;
  overflow: hidden;
}
.container a span::before{
content:'';
  position: absolute;
  top: 0;
  left: -50%;
  width: 100%;
  height: 100%;
  background: rgba(255,255,255,0.075);
    transform: skew(25deg)
}
    </style>
</head>
<body>
<div class="container">
    <a href="#">
      <span>Button</span>
    </a>
    <a href="#">
      <span>Button</span>
    </a>
    
  </div>
</body>
</html>