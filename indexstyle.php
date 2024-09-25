<style type="text/css">

body{

	background-color: #5a5a5a;
}	


/* The side navigation menu 
.sidebar {
  margin: 0;
  padding: 0;
  width: 10%;
  background-color: #bbbbbb;
  position: fixed;
  height: 100%;
  overflow: auto;
  top: 12%;
  border-radius: 10px;
box-shadow: 7px 10px 12px -1px rgba(255,255,255,0.75);
-webkit-box-shadow: 7px 10px 12px -1px rgba(255,255,255,0.75);
-moz-box-shadow: 7px 10px 12px -1px rgba(255,255,255,0.75);
}

/* Sidebar links 
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Active/current link 
.sidebar a.active {
  background-color: #7e0c22;
  color: white;
}

/* Links on mouse-over 
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property 
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar 
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally 
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}*/



<---------------------------------------------

/*.head{

	position: fixed;
	margin-top: auto;

}

.nav{

	position: fixed;
	background-color: #bbbbbb;
	height: 10%;
	width: 99%;
	border-radius: 20px;
	display: flex;
	font-size: 30px;
box-shadow: 1px 22px 5px -16px rgba(140,137,137,0.75);
-webkit-box-shadow: 1px 22px 5px -16px rgba(140,137,137,0.75);
-moz-box-shadow: 1px 22px 5px -16px rgba(140,137,137,0.75);
}

.nav .navfont{

	position: relative;
	top: 15%;
	left: 1%;
	font-size: 40px;
	color: #1f1f1f;
}

.nav .icons{

	position: relative;
	left: 68%;
	top: 30%;
	font-size: 130%;
	color: #3a0510;
}

.nav .icons1{

	position: relative;
	left: 70%;
	top: 30%;
	font-size: 130%;
	color: #3a0510;
}

.tab{

	position: absolute;
	left: 40%;
	margin-right: auto;
	top: 50%;
}*/


*{

	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Segue UI', Tahoma, Geneva, Verdan sans-serif;
}


.loader {

position: relative;
  width: 300px;
  height: 20px;
  box-shadow: 0 3px 0 #fff;
  background: linear-gradient(#fff 0 0) 50%/2px 100% no-repeat;
  display: grid;
  top: 200;
  left: 40%;
  transition: opacity 0.75s, visibility	0.75s;
}

.loader:before,
.loader:after{
  content: "";
  grid-area: 1/1;
  background: radial-gradient(circle closest-side, var(--c,#fff) 92%,#0000 ) 0 0/calc(100%/4) 100%;
  clip-path: inset(0 50% 0 0);
  animation: l3 1s infinite linear;
}
.loader:after{
  --c: red; 
  clip-path: inset(0 0 0 50%);
}

.loader--hidden{

	opacity: 0;
	visibility: hidden;
}


@keyframes l3 {
    100% {background-position: calc(100%/3) 0}
}

.user-img{


	border-radius: 100%;

}

.sidebar{

	position: fixed;
	top: 10;
	left: 0;
	min-height: 100vh;
	width: 250px;
	background-color: #660000;
	padding: 1rem ;
	transition: all 0.5s ease;
	border-radius: 20px;
	margin-left: 0.5rem;
	box-shadow: 7px 10px 5px -3px rgba(0,0,0,0.75);
-webkit-box-shadow: 7px 10px 5px -3px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 10px 5px -3px rgba(0,0,0,0.75);

}

.sidebar.active ~ .main-content{

	left: 110px;
	width: calc(100% - 110px);
	box-shadow: -10px -8px 5px -6px rgba(0,0,0,0.49);
-webkit-box-shadow: -10px -8px 5px -6px rgba(0,0,0,0.49);
-moz-box-shadow: -10px -8px 5px -6px rgba(0,0,0,0.49);
}

.sidebar.active{

	position: fixed;
	top: 10;
	left: 0;
	min-height: 100vh;
	width: 50px;
	background-color: #660000;
	padding: 1rem ;
	transition: all 0.2s ease;
	border-radius: 20px;
	margin-left: 0.5rem;
	box-shadow: 7px 10px 5px -3px rgba(0,0,0,0.75);
-webkit-box-shadow: 7px 10px 5px -3px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 10px 5px -3px rgba(0,0,0,0.75);
}

.sidebar.active #btn{

	position: absolute;
	color: #ffdf00;
	top: 1.5rem;
	left: 80%;
	font-size: 2.0rem;
	line-height: 50px;
	transform: translateX(-50%);
	cursor: pointer;

}

.sidebar #btn{
	position: absolute;
	color: #ffdf00;
	font-size: 2.0rem;
	line-height: 50px;
	transform: translateX(-50%);
	cursor: pointer;
	top: 0.8rem;
	left: 93%;
}



.sidebar .top .logo{
	color: #fff;
	font-weight: bolder;
	display: flex;
	height: 42px;
	width: 100%;
	align-items: center;
	pointer-events: none;
	opacity: 1;
	font-size: 1.5rem;
}

.sidebar.active .top .logo{
	opacity: 0;
		color: #fff;
	font-weight: bolder;
	display: flex;
	height: 40px;
	width: 100%;
	align-items: center;
	pointer-events: none;
	font-size: 1.5rem;
}

.sidebar.active .top .logo img{



}

.sidebar ul li{

	position: relative;
	list-style-type: none;
	height: 50px;
	width: 100%;
	margin: 0.8rem auto;
	line-height: 70px;
}

.sidebar ul li a{
	position: absolute;
	color: #fff;
	display: flex;
	align-items: flex-start;
	text-decoration: none;
	border-radius: 0.8rem;
	font-size: 1.2rem;
	
}

.sidebar.active ul li a:hover{

	background-color: #ffdf00;
	width: 200%;
	height: 100%;
	color: #660000;
	box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;
-webkit-box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;
-moz-box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;

}

.sidebar ul li a:hover{
	background-color: #fff;
	height: 100%;
	color: #262626;
	width: 100%;
	padding: 0 0.1rem 0.1rem;
	box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;
-webkit-box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;
-moz-box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;

	
}

.sidebar ul li a i{

	position: relative;
	align-items: flex-start;
	left: 0;
	border-radius: 12px;
	line-height: 50px;
	opacity: 1;
	min-width: 50px;
	top: 10;
	}

	.sidebar a.active{

		background-color: #ffdf00;
  	color: #660000;
  	width: 100%;
  	
  	box-shadow: -2px 3px 0px 0px rgba(0,0,0,0.75) inset;
-webkit-box-shadow: -2px 3px 0px 0px rgba(0,0,0,0.75) inset;
-moz-box-shadow: -2px 3px 0px 0px rgba(0,0,0,0.75) inset;


	}

	.sidebar .logbutton{

		position: relative;
	align-items: flex-start;
	top: 400;
	left: 0;
	border-radius: 14px;
	line-height: 50px;
	opacity: 1;
	min-width: 100%;
	background-color: #ffdf00;
	color: #660000;
		font-size: 20px;
		font-weight: bold;
	
	}

	.sidebar.active .logbutton{

		opacity: 0;
	}

	.sidebar .logbutton:hover{

		color: #262626;
		background-color: #fff;
		font-size: 20px;
		font-weight: bold;
		box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;
-webkit-box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;
-moz-box-shadow: -10px 9px 5px -6px rgba(0,0,0,0.49) inset;
	}


.sidebar .nav-item{
	opacity: 1;
}

.sidebar.active .nav-item{

opacity: 0;
}

.main-content{

position: relative;
min-height: 100vh;
top: 0;
left: 320px;
background-color: #eee;
transition: all 0.5 ease;
width: calc(100% - 320px);
padding: 1rem;
border-radius: 40px;
box-shadow: -10px -8px 5px -6px rgba(0,0,0,0.49);
-webkit-box-shadow: -10px -8px 5px -6px rgba(0,0,0,0.49);
-moz-box-shadow: -10px -8px 5px -6px rgba(0,0,0,0.49);
}

.container h1{

	position: relative;
	top: 0;
	font-weight: bold;
	font-size: 40px;
}

.tab{

	position: absolute;
	margin-top: 10%;
	margin-left: 30%;
	margin-right: auto;
}
</style>