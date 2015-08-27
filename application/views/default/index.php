         <!--Start First Row Content -->
         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $subtitle; ?></h2>
		<div class="large-12 columns">
			<?php echo anchor($this->uri->segment(1), "Index", "title='Index'"); echo br(2);?>
			<h3><?php echo $browse_doc; ?></h3>
		
			<div class="module">
				<ul class="bulleted-list">
				    <li>Type</li>
				    <ul>
				    	<li><?php echo anchor("index/doc_by_agency/PRORULE", "Proposed Rules", "title='Proposed Rules'"); ?></li>
				    	<li><?php echo anchor("index/doc_by_agency/RULE", "Final Rules", "title='Final Rules'"); ?></li>
				    	<li><?php echo anchor("index/doc_by_agency/NOTICE", "Notices", "title='Notices'"); ?></li>
				    	<li><?php echo anchor("index/doc_by_agency/PRESDOCU", "Presidential Document", "title='Presidential Document'"); ?></li>
				    </ul>
				    <li><?php echo anchor("index/agency", "Agency", "title='Agency'"); ?></li>
				    <li><?php echo anchor("index/document_by_date", "Date", "title='Date'"); ?></li>
				</ul>
			</div>	
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 
