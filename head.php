<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title>Test Page for the Nginx HTTP Server on Fedora</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">
            /*<![CDATA[*/
	    html{
		//background: linear-gradient(90deg, #B0EADC 20%,#BFD641 80%);
		//background: linear-gradient(-90deg, #fa7c30 40%, rgba(0, 0, 0, 0) 40%), url('https://images.alphacoders.com/596/thumb-1920-596945.jpg');
		//background: -moz-linear-gradient(45deg, rgba(169,228,247,1) 24%, rgba(15,180,231,1) 49%, rgba(15,180,231,1) 97%);
		background:#000000;	

	}
            body {
                color: #BFD641;
                font-size: 0.9em;
                margin: 0;
                padding: 0;
            }
	    input{
		position:relative;
		float:left;
		left:5%;
		clear:both;
		border:2px solid #BFD641;
		background-color:#BFD641;	
	}
	  #dodawanie1{
                position:relative;
                left:-170px;
                top:0.1%;
                margin:1px;
                padding:5px;
                font-size:15px;
                font-style:italic;
                font-family:Arial;
        }
        #dodawanie2{
                position:relative;
                left:-170px;
                top:6px;
                margin:1px;
                padding:5px;
                font-size:15px;
                font-style:italic;
                font-family:Arial;
        }
	#dodawanie3{
		position:relative;
                left:5%;
                font-family:Arial;
                font-style:italic;

	}
	#dodawanieguzik{
		position:relative;
                left:8%;
                border: 5px solid #1C6EA4;;
                border-radius: 40px 40px 40px 40px;
                background-color:#1C6EA4;

	}
	    #okladka1{
		position:relative;
		left:-170px;
		top:0.1%;
		margin:1px;
		padding:5px;
		font-size:15px;
		font-style:italic;
		font-family:Arial;
	}
	#okladka2{
                position:relative;
                left:-170px;
                top:6px;
                margin:1px;
                padding:5px;
                font-size:15px;
		font-style:italic;
		font-family:Arial;
        }
	    h2 {
		position:relative;
		left:6%;
		font-family:Arial;
		font-style:italic;
		font-color:white;

	}
	    #button{
		position:relative;
		left:7%;
		border: 5px solid #BFD641;
		border-radius: 40px 40px 40px 40px;
		background-color:#1C6EA4;		 
	}
		input{
		position:relative;
		background:linear-gradient(21deg,#10abff,#1beabd);
		border-radius:20px 20px 20px 20px;
		border:1px solid #1C6EA4;;
	}

            h1 {
                text-align: center;
                margin: 0;
                padding: 0.6em 2em 0.4em;
                background-color: #000000;
                color: white;
                font-weight: normal;
                font-size: 1.75em;
		border-style:groove;
		border:3px ridge #BFD641;
		border-radius:0px 0px 20px 20px;
		color:#BFD641;
            }
            h1 strong {
                font-weight: bold;
                font-size: 1.5em;
         	}
        </style>
    </head>

    <body>
        <h1><?php echo $title ?></h1>
