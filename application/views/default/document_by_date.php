<?php //echo "<pre><code style=\"white-space:pre; white-space:pre-wrap; word-break:break-all; word-wrap:break-word;\">".$agency_list."</code></pre>" ?>         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $doc_by_date; ?></h2>
		<div class="large-12 columns">
		<?php echo anchor($this->uri->segment(1), "Index", "title='Index'"); echo br(2);?>
			<div class="module">
				<?php
				//echo "<h3><strong>".$document['description']."</strong></h3>";
				echo $year;
				echo $list_doc;
/* 				foreach ($year_range['results'] as $string)
				{
					$dte  = $string['publication_date'];
					$dt   = new DateTime();
					$published_date = $dt->createFromFormat('Y-m-d', $dte);
					
					echo $published_date->format('Y') . br(2);
				}
				
	 */			
				
/* 				$start_yr = "1994";
				$end_yr = date("Y");
				$years = range($end_yr, $start_yr);
				
				foreach ($years as $key => $year)
				{
					echo "<strong>" . anchor("index/get_document_year/{$year}", "{$year}", "title='{$year}'"). "</strong><br><br>";
					
					foreach ($document['results'] as $string)
					{
						$dte  = $string['publication_date'];
						$dt   = new DateTime();
						$published_date = $dt->createFromFormat('Y-m-d', $dte);
						
						//$public_date = new DateTime($string['publication_date']);
						//$public_date->format("Y");
						
						//echo $public_date."<br><br>"; exit;
						if ($published_date->format('Y') == $year)
						{
							echo $published_date->format('Y') . br(2);
							//echo "<ul>";
							//echo "<li>{$string['publication_date']} - <strong>{$string['type']}</strong> - <a href=\"{$string['pdf_url']}\">{$string['title']}</a></li>";
							//echo "</ul>";
						}	
					}
				}
 */
				?>
			</div>
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 