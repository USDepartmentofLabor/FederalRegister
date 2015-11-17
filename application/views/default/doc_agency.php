<?php //echo "<pre><code style=\"white-space:pre; white-space:pre-wrap; word-break:break-all; word-wrap:break-word;\">".$agency_list."</code></pre>" ?>         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $browse_agency ." - ". $doc_type; ?></h2>
		<div class="large-12 columns">
		<?php echo anchor($this->uri->segment(1), "Index", "title='Index'"); echo br(2);?>
			<div class="module">
				<?php
				// validate document type
				if ($doc_type == "Notice")
				{
					$rule_type = "NOTICE";
				}
				if ($doc_type == "Proposed Rule")
				{
					$rule_type = "PRORULE";
				}
				if ($doc_type == "Final Rule")
				{
					$rule_type = "RULE";
				}
				if ($doc_type == "Presidential Document")
				{
					$rule_type = "PRESDOCU";
				}
				//echo "<h3><strong>{$browse_agency}</strong></h3>";
				
				//$agency_list['results'] = array_map("unserialize", array_unique(array_map("serialize", $agency_list['results'])));
				foreach ($agency_list as $string)
				{
					if ($string['parent_id'] == "271")
					{
						$short_name = $string['short_name'];
						// Data owner will be informed of agency misspelling. 
						if($short_name == 'LMSO'){
						  $short_name = 'OLMS';
						}						
						echo anchor("index/document_type/{$string['id']}/{$rule_type}", "{$short_name}", "title=".$short_name."")."<br/><br/>";
						//echo $string['description']."<br/><br/>";
					}
				}
				?>
			</div>	
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 