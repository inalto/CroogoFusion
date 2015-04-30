<h1><?php echo __('Schedule Demo'); ?></h1>

<?php


echo $this->CroogoFusion->schedule(
		'schedule',
		array(),
		array(
			'jscript' => '',
			'jsobject' => '{
			width: "100%",
		    height: "525px",
		 currentDate: new Date(2014,4,5)   
			}'
	
		//"currentDate" => "new Date(2014,4,5)",
/*		"appointmentSettings"=> array(

//		"dataSource"=> "dManager",
		"id"=> "Id",
		"subject"=> "Subject",
		"startTime"=> "StartTime",
		"endTime"=> "EndTime",
		"description"=> "Description",
		"allDay"=> "AllDay",
		"recurrence"=> "Recurrence",
		"recurrenceRule"=> "RecurrenceRule"
		) */
		)
		);
	?>
	<pre>
		echo $this->CroogoFusion->schedule(
		'numeric',
		array(),
		array(
		"width"=> "100%",
		"height" => "525px",
		"currentDate" => "new Date(2014,4,5)",
		"appointmentSettings"=> array(

		"dataSource"=> "dManager",
		"id"=> "Id",
		"subject"=> "Subject",
		"startTime"=> "StartTime",
		"endTime"=> "EndTime",
		"description"=> "Description",
		"allDay"=> "AllDay",
		"recurrence"=> "Recurrence",
		"recurrenceRule"=> "RecurrenceRule"
		)
		)
		);
	</pre>


	<?php


	?>
