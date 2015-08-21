<?php //echo "<pre><code style=\"white-space:pre; white-space:pre-wrap; word-break:break-all; word-wrap:break-word;\">".$agency_list."</code></pre>" ?>         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $browse_agency; ?></h2>
		<div class="large-12 columns">
			<div class="module">
				<?php
				echo "<h3><strong>".$document['description']."</strong></h3>";
				
				//$agency_list['results'] = array_map("unserialize", array_unique(array_map("serialize", $agency_list['results'])));
				foreach ($document['results'] as $string)
				{				
					echo "<strong>{$string['type']}</strong><br/><br/>";
					echo $string['title']."<br/><br/>";
					//echo $string['description']."<br/><br/>";
					 
					//$agency_names = array_map("unserialize", array_unique(array_map("serialize", $agency_names)));
					$agencies = $string["agencies"];
					//echo $agencies["agencies"];
					foreach ($agencies as $agency)
					{
						if (!empty($agency['pdf_url']))
						{
							echo $agency['pdf_url']."<br><br>";
						}
					
					}
					
				}
				?>
			</div>	
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 