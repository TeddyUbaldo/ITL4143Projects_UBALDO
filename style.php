<style type="text/css">
	
body{

	background-color: #d7d7d7;
	min-height: 100vh;
	scroll-behavior: smooth;
}

/* HTML: <div class="loader"></div> */
.loader {

position: relative;
  width: 300px;
  height: 20px;
  box-shadow: 0 3px 0 #fff;
  background: linear-gradient(#fff 0 0) 50%/2px 100% no-repeat;
  display: grid;
  top: 10%;
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

/*.picbox{

	position: absolute;
	max-width: 400px;
	width: 100%;
	height: auto;
	filter: drop-shadow(4px 6px);
	top:15%;
	left:70%;
}

 .p1{

 	position: absolute;
	font-size: 50px;
	font-family: serif;
	font-weight: bold;
	color: #fff;
	filter: drop-shadow(3px 3px #000000);
	top: 45%;
	left: 70%;



}

.p2{

	position: absolute;
	font-size: 30px;
	font-family: serif;
	font-weight: bold;
	color: #ffdf00;
	filter: drop-shadow(2px 2px #000000);
	top: 56%;
	left: 72%;
}


.log-cont{

background-color: red;
position: absolute;
height: 50%;
width: 30%;
top: 15%;
left: 20%;
}*/


 


section{

	position: absolute;
	display: flex;
	width: 50%;
	height: 50%;
	top: 15%;
	left: 25%;
	transition: opacity 0s, visibility 0s;
}

section .herm{

	position: relative;
	width: 50%;
	height: 50;
	
}



section .herm img{

	position: absolute;
	min-width: 200px;
	min-height: 400px;
	top: 0;
	left: 0;
	width: 480px;
	height: 500px;
	object-fit: cover;
	border-radius: 14px;
	box-shadow: -7px -5px 5px 0px rgba(102,102,102,0.75);
-webkit-box-shadow: -7px -5px 5px 0px rgba(102,102,102,0.75);
-moz-box-shadow: -7px -5px 5px 0px rgba(102,102,102,0.75);
	z-index: 1;
}


section .log-cont{

	background-color: #5f0808;
	position: relative;
	width: 50%;
	height: 500;
	border-radius: 12px;
	z-index: 0;
	box-shadow: 7px -5px 5px 0px rgba(79,75,75,0.75);
-webkit-box-shadow: 7px -5px 5px 0px rgba(79,75,75,0.75);
-moz-box-shadow: 7px -5px 5px 0px rgba(79,75,75,0.75);
}


section	.log-cont img{

	position: relative;
	filter: drop-shadow(2px 3px #000);
	top: 30;
	left: 35%;
	background-color: #fff;
	border-radius: 50%;
	border: 1px solid #fff;


}


section .log-cont .p1{

	position: relative;
	font-size: 20px;
	color: #fff;
	filter: drop-shadow(2px 2px #000000);
	top: 30;
	left:35%;
  font-family: "Acme", sans-serif;
  font-weight: 400;
  font-style: normal;


}

section .log-cont .p2{

	position: relative;
	font-size: 30px;
	color: #ffdf00;
	filter: drop-shadow(2px 2px #000000);
	top: 10;
	left: 20%;
	font-family: "Acme", sans-serif;
  font-weight: 400;
  font-style: normal;
}

section	.log-cont .inputbox input{

	position: relative;
	width: 80%;
	height: 40px;
	line-height: 40px;
	color: #000;
	left: 10%;
	top: 20;
	border-radius: 14px;
	text-align: center;
	font-weight: bold;

}

section	.log-cont .inputbox1 input{

	position: relative;
	width: 80%;
	height: 40px;
	line-height: 40px;
	color: #000;
	left: 10%;
	top: 25;
	border-radius: 14px;
	text-align: center;
	font-weight: bold;
}

section	.log-cont .logbutton {


	position: relative;
	width: 50%;
	height: 40px;
	line-height: 40px;
	color: ;
	left: 25%;
	top: 50;
	border-radius: 14px;
	text-align: center;
	background-color: #ffdf00;
	font-size: 15px;
	font-family: "Acme", sans-serif;
  	font-weight: 400;
 	 font-style: normal;

}

	section	.log-cont .logbutton:hover{

		background-color: #fff;
		color: #5f0808;
	}

/*linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(210,19,29,0.48783263305322133) 100%, rgba(0,212,255,1) 100%);*/

	
	.foot .about{

		position: absolute;
		top: 90%;
		width: 99.5%;
		height: 10%;
		background-color: #808080;
		border-radius: 14px;
box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.75);
	}

	.foot .about a{

		text-decoration: none;
		font-size: 20px;
		font-family: "Acme", sans-serif;
  	font-weight: 400;
 	 font-style: normal;
 	 color: #fff;
 	 text-align: center;
 		margin-right: 5%; 	 
 		position: relative;
 		left: 28%;
 		top: 30;


	}

	.foot .about a:hover{

		text-decoration: underline;
		color: #fff;
		transition: all ease 0.2s;
	}


</style>