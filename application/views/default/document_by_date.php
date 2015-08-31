<?php //echo "<pre><code style=\"white-space:pre; white-space:pre-wrap; word-break:break-all; word-wrap:break-word;\">".$agency_list."</code></pre>" ?>         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $doc_by_date; ?></h2>
		<div class="large-12 columns">
		<?php echo anchor($this->uri->segment(1), "Index", "title='Index'"); echo br(2);?>
			<div class="module">
				<?php
			
					$start_yr = "1994";
					$end_yr = date("Y");
					$years = range($end_yr, $start_yr);
					
					foreach ($years as $year)
					{
						$useragent = $_SERVER['HTTP_USER_AGENT'];
						$rest_server = REST_SERVER;
						$get_url = "https://{$rest_server}/articles.json?conditions%5Bagencies%5D%5B%5D=labor-department&conditions%5Bagencies%5D%5B%5D=labor-statistics-bureau&conditions%5Bpublication_date%5D%5Byear%5D={$year}&fields%5B%5D=agencies&fields%5B%5D=agency_names&fields%5B%5D=pdf_url&fields%5B%5D=publication_date&fields%5B%5D=raw_text_url&fields%5B%5D=title&fields%5B%5D=type&order=newest&page=2";
						
						$ch = curl_init();
						curl_setopt_array($ch, array(
						CURLOPT_RETURNTRANSFER => TRUE,
						CURLOPT_URL => $get_url,
						CURLOPT_USERAGENT => $useragent,
						CURLOPT_RETURNTRANSFER => TRUE,
						CURLOPT_SSL_VERIFYHOST => FALSE,
						CURLOPT_SSL_VERIFYPEER => TRUE // set to TRUE on QA and Prod
						));
						
						$response = curl_exec($ch);
			
						$json = array();
						$json = json_decode($response, TRUE);
						
						echo "<strong>$year</strong>" . br(2);

						foreach ($json['results'] as $string)
						{
							
							$dte  = $string['publication_date'];
							$dt   = new DateTime();
							$published_date = $dt->createFromFormat('Y-m-d', $dte);
			
							foreach ($string['agencies'] as $agency)
							{
								if ($agency['raw_name'] != "DEPARTMENT OF LABOR")
								{
									echo "<ul>";
									echo "<li><strong>{$published_date->format("m/d/Y")}</strong> - <strong>{$string['type']}</strong> - <strong>{$agency['raw_name']}</strong> - <a href=\"{$string['pdf_url']}\">{$string['title']}</a> [<a href=\"{$string['pdf_url']}\" target=\"_tops\"><strong>PDF</strong></a>] [<a href=\"{$string['raw_text_url']}\" target=\"_tops\"><strong>Text</strong></a>]</li>";
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