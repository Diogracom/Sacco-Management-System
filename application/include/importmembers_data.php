
<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="importmem.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						Import CSV/Excel file
						<div class="control-group">
							<br>
							<br>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						<br>
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		
	</div>
