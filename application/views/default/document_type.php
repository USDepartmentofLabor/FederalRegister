<?php //echo "<pre><code style=\"white-space:pre; white-space:pre-wrap; word-break:break-all; word-wrap:break-word;\">".$agency_list."</code></pre>" ?>         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $browse_agency; ?></h2>
		<div class="large-12 columns">
			<div class="module">
				<?php
				echo "<h3><strong>{$document['description']}</strong></h3>";
				
				//$agency_list['results'] = array_map("unserialize", array_unique(array_map("serialize", $agency_list['results'])));
				foreach ($document['results'] as $string)
				{
					foreach ($string['agencies'] as $agency)
					{
						if (!isset($agency['parent_id']) == "271" || !isset($agency['id']) == "271")
						{
							//$short_name = $string['agency_names'];
							foreach ($string['agency_names'] as $agency_name)
							{
								//echo $agency_name;
								if ($agency_name != "Labor Department")
								{
									echo anchor("{$string['pdf_url']}", "{$agency_name}", "title=".$agency_name."") . " (Doc No. - {$string['document_number']}) " ."<br/><br/>";
								}
								
							}
							//echo $string['description']."<br/><br/>";
						}
					}
				}
				?>
			</div>	
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 