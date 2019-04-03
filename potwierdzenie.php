<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Potwierdzenie wysłania e-mail.</title>
<style>
*
{
	margin:0;
	padding:0;
}
html, body
{
	height:100%;
	width:100%;
}
body
{
	background-image:url(Backgroundy/HDconfirmed.jpg);
	background-size:cover;
	background-repeat:no-repeat;
	background-position:center center;
	position:fixed;
	height: 100%;	
}
.contener
{	
	/*position*/
	width:80%;
	position: absolute;
  	top: 50%;
  	left: 50%;
  	transform: translate(-50%, -50%);
	
	background-color:#000;
	border-radius:25px;
	opacity:0.8;
	color:#FFF;
	font-size:24px;
	padding-top: 30px;
  	padding-bottom: 30px;
	text-align:center;
}
</style>
</head>

<body>

<div class="contener">
<p>Wiadmość została wysłana, po <span>10</span> sekundach zostaniesz automatycznie przeniesiony na stronę główną.</p>
</div>

<script>
$(document).ready(function(e) {
    var count = 10;
	var counter = setInterval(timer,1000);
	function timer()
	{
		count -=1;
		if(count==0)
		{
			window.location.href = 'http://www.tomaszblaszczyk.com'
		}	
		$("span").html(count);
	}
});
</script>
</body>

</html>