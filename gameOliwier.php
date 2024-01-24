<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head> 
<body>
	<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  min-height: 100vh;
  font-family: arial;
  background-color: gray;
  position: relative;
  text-align: center;
}

/* title */Z
header {
  text-align: center;
  font-size: 32px;
  letter-spacing: 10px;
  padding: 20px 10px;
  color: white;
}

/* main table */
.snakeTable {
  width: 210px;
  height: 230px;
  margin: auto;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  flex-wrap: wrap;
  box-shadow: 0 0 1px 2px rgba(0,0,0,0.3);
}
@media only screen and (min-width: 768px) {
  .snakeTable {
    width: 315px;
    height: 345px;
  }
}

/* all boxes in the table */
.box {
  background: white;
  border: solid 1px #16a085;
  width: 10px;
  height: 10px;
}
@media only screen and (min-width: 768px) {
  .box {
    width: 15px;
    height: 15px;
  }
}

.food {
  background: #8e44ad;
}

.snake {
  background: #16a085;
}

/* bar showing status below table */
.status {
  background: white;
  color: #16a085;
  border: solid 1px #16a085;
  width: 210px;
  height: 20px;
}
@media only screen and (min-width: 768px) {
  .status {
    width: 315px;
    height: 30px;
  }
}

.score {
  float: right;
  padding: 0 5px;
  line-height: 20px;
}
@media only screen and (min-width: 768px) {
  .score {
    padding: 0 10px;
    line-height: 30px;
    font-size: 20px;
  }
}

.hidden {
  display: none !important;
}

/* modular window before and after game */
.modul {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.5);
  text-align: center;
}
.start {
  background: rgba(256,256,256,1);
  padding: 60px;
  box-shadow: 0 0 2px 3px rgba(0,0,0,0.3);
  border-radius: 2px;
}
.start span {
  color: #16a085;
  border: 1px solid;
  border-radius: 2px;
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
}
.start span:hover {
  background: #16a085;
  color: white;
}

footer {
    background-color: #f8f9fa;
    text-align: center;
    padding: 20px;
    position: flex;
    width: 100%;
    bottom: 0;
    border: 2px solid black;
}   
</style>
<?php include 'menu.php';?>
<section class="snakeTable"></section>

<!-- modular window before and after games -->
<section class="modul">
  <div class="start">
    <span>Play Snake</span>
  </div>
</section>

<script src='gameOliwier.js'></script>
<?php include 'footer.php';?>
</body>
</html>




