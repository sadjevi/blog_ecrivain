<div class="pagination">
	<?php

	if(isset($_GET['sheet']) && $_GET['sheet'] > 0) 
			{
		 		$currentsheet = $_GET['sheet'];
		     	if($currentsheet > $sheetnbr) 
			    {
			          $currentsheet = $sheetnbr;
			    }
			}
			else 
			{
			     $currentsheet = 1;    
			}

	echo 'page : ';

	for ($sheet = 1 ; $sheet <= $sheetnbr ; $sheet++)
	{
		
		(isset($_GET['sheet'])) ? $page = $_GET['sheet'] : $page = 1; 

		if(isset($_GET['sheet'])) {
			$page = $_GET['sheet'] ;
		} else {
			$page = 1;
		};

		if($sheet == $currentsheet)
		{
			echo '[ ' . $page . '] ';
		}
		
		else
		{
		   echo '<a href="index.php?sheet=' . $sheet . '">' . $sheet . '</a> ';
		}
		
	}

	?>
</div>