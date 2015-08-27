<?php //echo "<pre><code style=\"white-space:pre; white-space:pre-wrap; word-break:break-all; word-wrap:break-word;\">".$agency_list."</code></pre>" ?>         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $browse_agency; ?></h2>
		<div class="large-12 columns">
		<?php echo anchor($this->uri->segment(1), "Index", "title='Index'"); echo br(2);?>
			<div class="module">
				<?php
				echo "<h3><strong>".$document['description']."</strong></h3>";

				$start_yr = "1994";
				$end_yr = date("Y");
				$years = range($end_yr, $start_yr);
				
				foreach ($years as $key => $year)
				{
					echo "<strong>{$year}</strong><br><br>";
					
					foreach ($document['results'] as $string)
					{
						//$public_date = new DateTime($string['publication_date']);
						//$public_date->format("Y");
						
						//$published_date = DateTime::createFromFormat('Y-m-d', $string['publication_date'])->format("Y");
						$dte  = $string['publication_date'];
						$dt   = new DateTime();
						$published_date = $dt->createFromFormat('Y-m-d', $dte);
						
						//echo $public_date."<br><br>"; exit;
						if ($published_date->format('Y') == $year)
						{
							//echo $public_date."<br>";
							echo "<ul>";
							echo "<li>{$string['publication_date']} - <strong>{$string['type']}</strong> - <a href=\"{$string['pdf_url']}\">{$string['title']}</a></li>";
							echo "</ul>";
						}	
					}
				}

				?>
			</div>
			<!-- Show pagination links -->
			<?php
			foreach ($links as $link)
			{
				echo "<li>". $link."</li>";
			}
			?>
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 