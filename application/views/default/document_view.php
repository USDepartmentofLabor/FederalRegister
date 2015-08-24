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
				$start_yr = "1994";
				$end_yr = date("Y");
				$years = range($start_yr, $end_yr);
				
				foreach ($years as $year)
				{
					echo "<strong>{$year}</strong><br><br>";
					foreach ($document['results'] as $string)
					{
						//$public_date = new DateTime($string['publication_date']);
						//$public_date->format("Y");
						
						$public_date = DateTime::createFromFormat("Y-m-d", $string['publication_date']);
						$public_date->format("Y");
						
						//echo $public_date->format("Y")."<br><br>";
						if ($public_date->format("Y") == $year)
						{
							echo $public_date."<br>";
							echo "<ul>";
							echo "<li>{$string['publication_date']} - <strong>{$string['type']}</strong> - <a href=\"{$string['pdf_url']}\">{$string['title']}</a></li>";
							echo "</ul>";
						}

						//echo $string['description']."<br/><br/>";
					
						//$agency_names = array_map("unserialize", array_unique(array_map("serialize", $agency_names)));
						$agencies = $string["agencies"];
						//echo $agencies["agencies"];
						foreach ($string["agencies"] as $agency)
						{
							if (!empty($agency['publication_date']))
							{
								echo "<ul>";
								echo "<li><a href=\"{$string['pdf_url']}\">{$agency['publication_date']} - {$string['type']} - {$string['short_name']}</a></li>";
													echo "</ul>";
							}		
						}		
					}
				}

				?>
			</div>	
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 