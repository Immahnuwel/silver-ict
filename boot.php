<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="boot.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">

<marquee style="color: purple; font-family: fantasy;">...welcome to crystal-tech where condusive services are rendered... </marquee>


<div class="row" style="border-top: black 2px solid">

	<div class="col-md-4">
		<div class="card">
		<div class="card-body" style="padding:24.5px;box-shadow: 0px 0px 11px 5px black ">
		<h4 style="color: red;">CRYSTAL-TECH ICT INSTITUTE <span class="fa fa-desktop" style="color: black"></span></h4>
		<p style="color: black;"><span class="fa fa-envelope" style="color: orange"></span> Email: immahnuwellegend@gmail.com</p>
		
		</div>
	</div>

</div>
<div class="col-md-4">
	<div class="card">
		<div class="card-body">
	<img src="p1.jpg" height="100px" width="100%; " style="margin: auto; border-radius: 35%">
	</div>
</div>
</div>


<div class="col-md-4" id="ttt">
	<div class="card">
		<div class="card-body" style="padding:24.5px;box-shadow: 0px 0px 11px 5px black ">
	<h4>HEAD OFFICE</h4>
	<UL>
		<li> <span class="fa fa-map-marker" style="color: orange;"></span>  Phase iv, Waterboard Road, Kubwa.

		<li><span class="fa fa-phone" style="color: orange;"></span> Tel:09056433212, 08045457734</li>

	</UL>
	</div>
</div>
</div>



	
</div>

<div class="row">
	<div class="col-md-12">
		<h1 style="font-size: 40px;color: black;padding-top:40px;">WE'RE ARE KNOWN FOR: <span class="txt-type" style="color: white;text-shadow: 0px 0px 10px black;" data-wait="3000" data-words='["PROGRAMMING GURUS WW","WEB DESIGN","NETWORKING","IT TRAINING","JAVA EXPERTS"]'></span> </h1>

		
	</div>
	
</div>

<script type="text/javascript">
	const Typewriter = function(txtElement,words,wait =3000){
    this.txtElement =txtElement;
    this.words =words;
    this.txt ='';
    this.wordIndex =0;
    this.wait =parseInt(wait,10);
    this.type();
    this.isDeleting =false;

}
 //type Method 
 Typewriter.prototype.type = function(){

    //current index of word
    const current = this.wordIndex % this.words.length;
//get full text of current word
const fullTxt = this.words[current];
//checking if deleted
if(this.isDeleting){

    this.txt = fullTxt.substring(0,this.txt.length -1)
}else{
 this.txt = fullTxt.substring(0,this.txt.length + 1)
}

//insert txt into element

this.txtElement.innerHTML = `<span class ="txt"> ${this.txt} </span>`;

// initial type speed

let typeSpeed = 300;

if(this.isDeleting){
    typeSpeed /= 2

}

//if word is complete 
if(!this.isDeleting && this.txt == fullTxt){
   //make a pulse at the end
     typeSpeed = this.wait;

     //set delete to true

     this.isDeleting =true;

}else if(this.isDeleting && this.txt == ''){
    this.isDeleting = false;
    this.wordIndex++;

    //pulse before start typing

    typeSpeed = 500;

    


}


    setTimeout(()=>this.type(), typeSpeed)
 }


//Init on DOM Load
document.addEventListener('DOMContentLoaded',init);

//Init App

function init(){
    const txtElement = document.querySelector('.txt-type');

    const words =JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');

    //Init Typewriter
    new Typewriter(txtElement,words,wait);
}

</script>



<div class="row" id="hhh" style="margin-top: 20px ">
	<div class="col-md-12" >
		<ul>
			<li style="color: red; font-size: 20px">HOME</li>
			<a href="regstud.php"><li style="padding-top: 8px">REGISTER</li></a>
			<a href="logstud.php"><li style="padding-top: 8px">LOGIN</li></a>
			<a href=""><li style="padding-top: 8px">ABOUT-US</li></a>
			<a href="logteach.php"><li style="padding-top: 8px">ADMIN</li></a>

		</ul>

		
	</div>
	
</div>

<div class="row" id="jjj">
	<div class="col-md-12">
		<span class="fa fa-desktop" style="color: orange;float: right; font-size: 50PX;margin-right: 260px;margin-top: 12px"></span>
		<h1>CRYSTAL-TECH ICT INSTITUTE </h1>
		
	</div>
	
</div>
<div class="clearfix"></div>
<div class="row" >
	<div class="col-md-12">
		<section id="slideshow" style="height: 340px; padding-top: 5px; min-width: 100%;">
			
			<div class="entire-content">
				<div class="content-carrousel">
					<figure class="shadow"> <img src="p1.jpg" /></figure>
					<figure class="shadow"> <img src="p2.jpg" /></figure>
					<figure class="shadow"> <img src="p3.jpg" /></figure>
					<figure class="shadow"> <img src="p4.jpg" /></figure>
					<figure class="shadow"> <img src="p.jpg" /></figure>
					<figure class="shadow"> <img src="p6.jpg" /></figure>
					<figure class="shadow"> <img src="p7.jpg" /></figure>
					<figure class="shadow"> <img src="p8.jpg" /></figure>
					<figure class="shadow"> <img src="p.jpg" /></figure>
					<figure class="shadow"> <img src="p5.jpg" /></figure>

				</div>
				</div>

		</section>
		</div>
		
	</div>
	

<div class="row" style="width: 100%; margin: auto;">
	<div class="col-md-4 bg-primary p-2">
		
	</div>
	
	<div class="col-md-4 bg-warning p-2">
		
	</div>

	<div class="col-md-4 bg-danger p-2">
		
	</div>
</div>


<div class="row">


	<div class="col-md-4" style="margin-top: 6px;">
		<div class="card">
			<div class="card-head">
				<h3 style="text-align: center;padding-top: 13px">SERVICES</h3>
						
		    </div>
		
		    <div class="card-body">
		    	<div class="list-group">
		    	<ul>
					<li class="list-group-item" style="margin: 3px;"> Sales and supply of switches, routers<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span> etc... </li>

					<li class="list-group-item" style="margin: 3px;">Setting up WLAN/LAN for<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span> Organization, Schools, Instiutes etc...</li>

					<li class="list-group-item" style="margin: 3px;">Providing security against hackers.<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>

					<li class="list-group-item" style="margin: 3px;">Development of responsive sites.<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>

					<li class="list-group-item" style="margin: 3px;">Mangement of domain and hosting of<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span> sites.</li>

					<li class="list-group-item" style="margin: 3px;">Training of staffs and students on<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span> modern ICT security</li>
				</ul>
		    	</div>
		    </div>


	    </div>
	</div>


<div class="col-md-4" style="margin-top: 5px">
	<div class="card">
		<div class="card-head">
			<h3 style="text-align: center;padding-top: 13px">COURSES</h3>
			
		</div>

		<div class="card-body">
			<div class="list-group">

				<ul>
					<li class="list-group-item" style="margin: 3px">CCNA (Cisco certification).<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>
					<li class="list-group-item" style="margin: 3px">CCNA on security (Cisco certification)<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>
					<li class="list-group-item" style="margin: 3px">Web Programming (html,css,php,query etc...)<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>
					<li class="list-group-item" style="margin: 3px">MSCA(Microsoft certification)<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>
					<li class="list-group-item" style="margin: 3px">MiTOkiT Set and firewall<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>
					<li class="list-group-item" style="margin: 3px">CCNP (Cisco certification)<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span></li>
					<li class="list-group-item" style="margin: 3px">Python programming with flash/<span class="fa fa-chevron-circle-right" style="color: orange;float: right;"></span> Django</li>
				</ul>
				
			</div>
			
		</div>
		
	</div>
	
</div>



<div class="col-md-4">


	<table style="margin-top: 5px;">
		<tr style="border:black 1px solid; background: linear-gradient(to right,teal,magenta)" class="bg-info">
			<td style="padding: 18px;font-size: 30px;font-style: italic;font-family: fantasy;color: white;">Service</td>
			<td style="padding: 18px;border-left: black 1px solid;font-size: 30px;font-style: italic;font-family: fantasy;color: white;">Setup</td>
		</tr>




		<tr style="border:black 1px solid">

		<td style="padding: 18px">Cisco Firewalls</td>
		<td style="padding: 18px;border-left: black 1px solid">Highest security SHA-152 with no security breach</td>

		</tr>

		<tr style="border:black 1px solid" class="bg-info">

			<td style="padding: 18px">MiTroKiT</td>
			<td style="padding: 18px;border-left: black 1px solid"">Configuration setup with the experts</td>

		</tr>

		<tr style="border:black 1px solid">

			<td style="padding: 18px">Microsoft Server 2012 R</td>
			<td style="padding: 18px;border-left: black 1px solid"">Domain Network with encrypted Network</td>

		</tr>

		<tr style="border:black 1px solid" class="bg-info">
			<td style="padding: 18px">NETWORK AP</td>
			<td style="padding: 18px;border-left: black 1px solid"">Highest Security SHA-152 with no security breach</td>
		</tr>
		<tr style="border:black 1px solid">
			<td style="padding: 18px">Web Developer</td>
			<td style="padding: 18px;border-left: black 1px solid"">Our site are responsive and secure with password harsh</td>
		</tr>
	</table>
	
</div>


</div>
	

<div class="row" style="margin-top: 9px">

<div class="col-md-3">

	<div class="card">
		<div class="card-head" style="background-color: blue;box-shadow: 0px 15px 10px 0px black;">
			<img src="p3.jpg " height="100px" width="100%" style="border-radius: 40px;">
			
		</div>
		

		<div class="card-body">

			<h5>Mr Immanuelz</h5>
			<h1>VISION</h1>
			<p>Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it.
 
</p>
		</div>


	</div>
	
</div>


<div class="col-md-3">
	<div class="card">
		<div class="card-head bg-primary" style="box-shadow: 0px 15px 10px 0px black;">
			<img src="p4.jpg" height="100px" width="50%" style="border-radius: 30px; margin-left:65px;">
			
		</div>
		<div class="card-body">
			<p> 
 Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. in your document, click it and a button for in your document, click it and a button for in your document
 
</p>
			
		</div>
	
	</div>
	
</div>


<div class="col-md-3 ">


	<div class="borderimg">
	
	<P>Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for in your document, click it and a button for in your document, click it and a button for in your document, click it and a button for in your document, click it and a button for in your document, click it and a button for  in your document, 

 </P>

		</div>
</div>


<div class="col-md-3">
	<div class="card">
		<div class="card-head">

			<marquee direction="up">
			<h2 style="background-color: black; color: blue; background: linear-gradient(to right,teal,cyan)">OUR LECTURE DAYS!!!</h2>
			
		</div>
		
	</div>


	<table border="1px" width="100%;" style="text-align:center;p">
		<tr>
			<th>DAYS</th>
			<th>COURSES</th>
		</tr>
		<tr style="background-color: black; color: white; border-top: 3px solid red;">
			<td>Monday</td>
			<td>CCNA</td>
		</tr>
		<tr>
			<td></td>
			<td>Python</td>
		</tr>
		<tr>
			<td></td>
			<td>Free Coding</td>
		</tr>
		<tr style="background-color: black; color: white; border-top: 3px solid red;">
			<td>Tuesday</td>
			<td>JAVA</td>
		</tr>
		<tr>
			<td></td>
			<td>Networking</td>
		</tr>
		<tr>
			<td></td>
			<td>Setting Network</td>
		</tr>
		<tr style="background-color: black; color: white; border-top: 3px solid red;">
			<td>Wednesday</td>
			<td>Laravel</td>
		</tr>
		<tr>
			<td></td>
			<td>PHP</td>
		</tr>
		<tr>
			<td></td>
			<td>Codeing Hours</td>
		</tr>
		<tr style="background-color: black; color: white; border-top: 3px solid red;">
			<td>Thursday</td>
			<td>Javacript</td>
		</tr>
		<tr>
			<td></td>
			<td>AJAX</td>
		</tr>
		<tr>
			<td></td>
			<td>Coding hours</td>
		</tr>
		<tr  style="background-color: black; color: white; border-top: 3px solid red;">
			<td>Friday</td>
			<td>Microsoft Server</td>
		</tr>
		<tr>
			<td></td>
			<td>Network A+</td>
		</tr>
		<tr>
			<td></td>
			<td>Coding hours</td>
		</tr>
	</table>
	
</marquee>

</div>
	
</div>

</div>




</div>











<div class="row">

<div class="col-md-12 p-3" style="background-color: darkblue; margin-top: 7px; color: white">

	<button style="margin-left: 570px;margin-bottom: 30px;background-color: blue;color: white;font-family: fantasy;">CONTACT US</button>
	<footer style="text-align: center;font-family: fantasy;">Designed by Crystal-tech &copy 2019</footer>


	<div style="text-align: center; margin-top: 10px; background-color: white;color: blue">

	<a href=""><span class="fa fa-facebook" style="font-size: 35px;padding: 20px;"></span></a>  <a href=""><span class="fa fa-whatsapp" style="font-size: 35px;padding: 20px; color: green;"></span></a>  <a href=""><span class="fa fa-instagram" style="font-size: 35px;padding: 20px; color: red;"></span></a> <a href=""><span class="fa fa-twitter" style="font-size: 35px;padding: 20px;"></span></a>
	</div>

</div>









</div>
</body>
</html>