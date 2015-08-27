<?php //echo "<pre><code style=\"white-space:pre; white-space:pre-wrap; word-break:break-all; word-wrap:break-word;\">".$agency_list."</code></pre>" ?>         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $doc_by_date; ?></h2>
		<div class="large-12 columns">
		<?php echo anchor($this->uri->segment(1), "Index", "title='Index'"); echo br(2);?>
			<div class="module">
				<?php
				if (isset($document['description']))
				{
					echo "<h3><strong>".$document['description']."</strong></h3>";
				}
				
				
				if (isset($invalid_date))
				{
					echo $invalid_date . br(2);
				}
				
				if (isset($document['results']))
				{
					foreach ($document['results'] as $string)
					{					
						foreach ($string['agencies'] as $agency)
						{
							echo "<strong>" . anchor("", "{$agency['raw_name']}", "title='{$agency['raw_name']}'"). "</strong><br><br>";
							
						}
					}
				}

				?>
			</div>
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 