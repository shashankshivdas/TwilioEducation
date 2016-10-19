<?php
$number=$_POST['5512295527'];
$Body=$_POST['Body'];
    header("content-type: text/xml");
if($_REQUEST['Body']=='Start'||$_REQUEST['Body']=='start'||$_REQUEST['Body']=='Restart'||$_REQUEST['Body']=='restart')
	{       $message1="Please select one of the following options using a number or the subject name\n"; 
		$message2="1. Purchase\n";
		$message3="2. Repair\n";
		
	  
         $message="$message1$message2$message3";	
	}


if($_REQUEST['Body']=='1'||$_REQUEST['Body']=='Purchase'||$_REQUEST['Body']=='purchase')
	{        
		$message1="Please select one of the following options:\n";
		$message2=" Text MO for Monitor\n";
		$message3="Text P for Projector\n";
		$message4=" Text M for Mobile Phone\n";
		$message5=" Text C for CPU"\n;
		$message6=" Text W for Whole Computer\n";

	    
         $message="$message1$message2$message3$message4$message5$message6";	
	}
if($_REQUEST['Body']=='MO'||$_REQUEST['Body']=='mo')
	{        
	$message1="Our Technician John would visit you in the next 24 hours with all the brochures and the best prices for the Monitors\n\n";

	  $message="$message1";	
	}
if($_REQUEST['Body']=='P'||$_REQUEST['Body']=='p')
	{        
	$message1="Our Technician Mark would visit you in the next 24 hours with all the brochures and the best prices for the Projectors\n\n";

	  $message="$message1";
	}
if($_REQUEST['Body']=='M'||$_REQUEST['Body']=='m')
	{        
	$message1="Our Technician Jim would visit you in the next 24 hours with all the brochures and the best prices for the Mobile Phones\n\n";

	  $message="$message1";
	}
if($_REQUEST['Body']=='C'||$_REQUEST['Body']=='c')
	{        
	$message1="Our Technician Mike would visit you in the next 24 hours with all the brochures and the best prices for the CPUs\n\n";

	  $message="$message1";
	}
if($_REQUEST['Body']=='W'||$_REQUEST['Body']=='w')
	{        
	$message1="Our Technician Luke would visit you in the next 24 hours with all the brochures and the best prices for the Computers\n\n";

	  $message="$message1";
	}
if($_REQUEST['Body']=='1'||$_REQUEST['Body']=='Repair'||$_REQUEST['Body']=='repair')
	{        
		$message1="Please select one of the following options:\n";
		$message2=" Text MO for Monitor\n";
		$message3="Text P for Projector\n";
		$message4=" Text M for Mobile Phone";
		$message5=" Text C for CPU";
		$message6=" Text W for Whole Computer";

	    
         $message="$message1$message2$message3$message4$message5$message6";	
	}
if($_REQUEST['Body']=='MO'||$_REQUEST['Body']=='mo')
	{        
	$message1="Our Technician John would visit you in the next 48 hours to check for the issue with the Monitors\n\n";

	  $message="$message1";	
	}
if($_REQUEST['Body']=='P'||$_REQUEST['Body']=='p')
	{        
	$message1="Our Technician Mark would visit you in the next 48 hours to check for the issue with the Projectors\n\n";

	  $message="$message1";
	}
if($_REQUEST['Body']=='M'||$_REQUEST['Body']=='m')
	{        
	$message1="Our Technician Jim would visit you in the next 48 hours to check for the issue with the Mobile Phones\n\n";

	  $message="$message1";
	}
if($_REQUEST['Body']=='C'||$_REQUEST['Body']=='c')
	{        
	$message1="Our Technician Mike would visit you in the next 48 hours to check for the issue with the CPUs\n\n";

	  $message="$message1";
	}
if($_REQUEST['Body']=='W'||$_REQUEST['Body']=='w')
	{        
	$message1="Our Technician Luke would visit you in the next 48 hours to check for the issue with the Monitors Computers\n\n";

	  $message="$message1";
	}


<Response>
    <Message>
Hello  <?php echo $number?>.
<?php echo $message?> 
<?php echo"\nPlease type Start to redo the procedure";?>	    

</Message>
</Response>
