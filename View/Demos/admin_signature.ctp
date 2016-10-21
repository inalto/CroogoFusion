<h1><?php echo __('Signature Demo'); ?></h1>

<?php
echo $this->CroogoFusion->signature(
				'signature',
				array(),
				array('jsobject'=>'{ height: "400px", isResponsive: true, strokeWidth: 3 }')
				);
?>
<pre>
echo $this->CroogoFusion->signature(
				'signature',
				array(),
				array('jsobject'=>'{ height: "400px", isResponsive: true, strokeWidth: 3 }')
				);
</pre>

<?php

echo $this->Form->end();

?>
