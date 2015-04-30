<h1><?php echo __('TextBoxes Demo'); ?></h1>

<?php

echo $this->Form->create('Demo');

echo $this->CroogoFusion->textbox(
				'numeric',
<<<<<<< HEAD
				array(),
				array(
					"name"=>"numeric",
					"value"=>35,
=======
				array("value"=>35),
				array(
					"name"=>"numeric",
					
>>>>>>> 25c3f8a020a5a450029ab884b918662eed72bb74
					"minValue"=>0
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'numeric',
<<<<<<< HEAD
				array(),
				array(
					"name"=>"numeric",
					"value"=>35,
=======
				array("value"=>35),
				array(
					"name"=>"numeric",
					
>>>>>>> 25c3f8a020a5a450029ab884b918662eed72bb74
					"minValue"=>0
					)
				);
</pre>
<?php
echo $this->CroogoFusion->textbox(
				'percent',
<<<<<<< HEAD
				array(),
				array(
					"name"=>"percentage",
					"value"=>3,
=======
				array("value"=>3),
				array(
					"name"=>"percentage",
					
>>>>>>> 25c3f8a020a5a450029ab884b918662eed72bb74
					"minValue"=>0
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'percentage',
				array(),
				array(
					"name"=>"percent",
					"value"=>3,
					"minValue"=>0
					)
				);
</pre>
<?php
echo $this->CroogoFusion->textbox(
				'currency',
<<<<<<< HEAD
				array(),
				array(
					"name"=>"currency",
					"value"=>555
=======
				array("value"=>555),
				array(
					"name"=>"currency"
					
>>>>>>> 25c3f8a020a5a450029ab884b918662eed72bb74
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'currency',
				array(),
				array(
					"name"=>"currency",
					"value"=>555
					
					)
				);
</pre>
<?php
echo $this->CroogoFusion->textbox(
				'mask',
				array(),
				array(
					"name"=>"mask",
					"inputMode" => "ej.InputMode.Text",
                    "maskFormat" => "99-999-99999"
					)
				);
?>
<pre>
echo $this->CroogoFusion->textbox(
				'mask',
				array(),
				array(
					"name"=>"mask",
					"inputMode" => "ej.InputMode.Text",
                    "maskFormat" => "99-999-99999"
					)
				);
</pre>

<?php

echo $this->Form->end();

?>
