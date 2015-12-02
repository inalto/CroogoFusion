<h1><?php echo __('Schedule Demo'); ?></h1>

<?php


echo $this->CroogoFusion->schedule(
		'schedule',
		array(),
		array(
			'jscript' => 'var dManager = ej.DataManager(window.Default).executeLocal(ej.Query().take(10));',
			'jsobject' => '{
                width: "100%",
                height: "525px",
				currentDate:new Date(2014,4,5),
                appointmentSettings: {
                    dataSource: dManager,
                    id: "Id",
                    subject: "Subject",
                    startTime: "StartTime",
                    endTime: "EndTime",
					description:"Description",
                    allDay: "AllDay",
                    recurrence: "Recurrence",
                    recurrenceRule: "RecurrenceRule"
                } 
            }'
		)
		);
	?>
	<pre>
echo $this->CroogoFusion->schedule(
		'schedule',
		array(),
		array(
			'jscript' => 'var dManager = ej.DataManager(window.Default).executeLocal(ej.Query().take(10));',
			'jsobject' => '{
                width: "100%",
                height: "525px",
				currentDate:new Date(2014,4,5),
                appointmentSettings: {
                    dataSource: dManager,
                    id: "Id",
                    subject: "Subject",
                    startTime: "StartTime",
                    endTime: "EndTime",
					description:"Description",
                    allDay: "AllDay",
                    recurrence: "Recurrence",
                    recurrenceRule: "RecurrenceRule"
                } 
            }'
		)
		);
	</pre>


	<?php


	?>
