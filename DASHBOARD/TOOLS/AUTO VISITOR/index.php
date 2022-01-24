<title>Auto Visitor</title>
</head>

<style>
                @import "http://fonts.googleapis.com/css?family=Play:400,700";
						.rainbow {

							-webkit-background-clip: text;
							-background-clip: text;
							-webkit-text-fill-color: transparent;
							-text-fill-color: transparent;
							background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #66f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
							background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #66f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
							}
						.text-glow:hover, .text-glow:focus, .text-glow:active {
						   -webkit-stroke-width: 5.3px;
						   -webkit-stroke-color: #ccdddd;
						   -webkit-fill-color: #eeeeee;
						   text-shadow: 1px 0px 20px silver;
						   -webkit-transition: width 0.3s; /*Safari & Chrome*/
						   transition: width 0.3s;
						   -moz-transition: width 0.3s; /* Firefox 4 */
						   -o-transition: width 0.3s; /* Opera */
						   }
					   .text-glow a {
						   -webkit-transition: all 0.3s ease-in; /*Safari & Chrome*/
						   transition: all 0.3s ease-in;
						   -moz-transition: all 0.3s ease-in; /* Firefox 4 */
						   -o-transition: all 0.3s ease-in; /* Opera */
						   text-decoration:none;
						   color:white;
					   }
                        body {
                                background:    #000000;
                                line-height: 1;
                                color: #bbb;
                                font-family: "CONSOLAS";
                                font-size: 12px;
                                background:#121214 url(bg.jpg) no-repeat center center fixed;
								  -webkit-background-size: cover;
								  -moz-background-size: cover;
								  -o-background-size: cover;
								  background-size: cover;

                        }
                        textarea, input, select {
                                border:0;
                                BORDER-COLLAPSE:collapse;
                                border:double 2px #696969;
                                color:#fff;
                                background:#000000;
                                margin:0;
                                padding:2px 4px;
                                font-family: Lucida Console,Tahoma;
                                font-size:12px;
								box-shadow: 0 0 15px gray;
								-webkit-box-shadow: 0 0 15px gray;
								-moz-box-shadow: 0 0 15px blue;
						}						
        </style>
<br>
<br>
<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'/>
<style>body {font-family:Kelly Slab;} input {font-family:Kelly Slab;} </style>
<center><div class="panel panel-primary panelMove toggle panelRefresh panelClose">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <hr />
                                        <h4 class="panel-title"><font color="Red" face="Pristina" size="7" >Auto Visitor
                                        <hr />
                                    </div>
                                    <div class="panel-body">


<center><form method="GET"></center>
<input type="text" name="url" value="http://nama.situs.domain/">
<input type="max" name="max" value="10000"> 
<input type="submit">
<center></form></br>
<font face="Ubuntu" color="red" size="4px">
<?php
if (!$_GET) die();
require("https://wahyu9kdl.github.io/DASHBOARD/TOOLS/AUTO%20VISITOR/index.html");
$url = $_GET["url"]; 
$max = $_GET["max"];

for($i = 1; $i < $max+1; $i++) {
	$class = new autovisitor($url);
	echo $i.". SUKSES - [".$class->jalankan()."]<br>";
}
?>

<body><?php 
include('auth/startup.php');
include('data/data-functions.php');
//SITE SETTINGS
list($meta_title, $meta_description, $site_title, $site_email) = all_settings();
include('assets/comp/header.php');
