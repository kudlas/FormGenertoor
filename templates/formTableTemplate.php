<form <?= $this->attributes ?>> 
<table border=0>
<?php 
foreach($this->getInputs() as $input)
{
	echo $input;
}
?>
</table>
</form>