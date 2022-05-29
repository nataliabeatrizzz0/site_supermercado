<h1> Upload de Nota Fiscal </h1>
<form action="enviar-upload.php" enctype="multipart/form-data" method="POST">
	<div class="form-group">
			<br><label>Selecionar Arquivo</label><br><br>
			<input type="file" name="arquivo" accept="jpg|jpeg|png|bmp|gif|tiff">
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
	<div class="row">
			<div class="col-12">
				<?php
					include("config.php");

					$sql = "SELECT * FROM arquivos";
					$res = $conn->query($sql) or die($conn->error);

					while($row = $res->fetch_object() ){
						print "<img src='uploads/".$row->url."'>";
					}
				?>
			</div>
		</div>
</form>
	
