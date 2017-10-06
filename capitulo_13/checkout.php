<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=devive-width">
	</head>
	<body>
		<h1>Ótima escolha!</h1>
		<p>Obrigado por comprar na Mirror Fashion!
		Preencha seus dados para efetivar a compra.</p>
		<h2>Sua compra</h2>
		<div class="panel-body">
			<img src="img/produtos/<?php $_POST["id"]; ?>-<?php $_POST["cor"]; ?>.png" class="img-thumbnail img-responsive">
			<dl>
				<dt>Produto:</dt>
				<dd><?php echo $_POST['nome']; ?></dd>
				<dt>Cor:</dt>
				<dd><?php echo $_POST['cor']; ?></dd>
				<dt>Tamanho:</dt>
				<dd><?php echo $_POST['tamanho']; ?></dd>
				<dt>Preço:</dt>
				<dd id="preco"><?php echo $_POST['preco']; ?></dd>
			</dl>
		</div>
		<div class="form-group">
			<label for="qt">Quantidade</label>
			<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
		</div>
		<div class="form-group">
			<label for="total">Total</label>
			<output for="qt valor" id="total" class="form-control">
				<?php echo $_POST["preco"]; ?>
			</output>
		</div>
		<script src="js/converteMoeda.js"></script>
		<script src="js/testaConversao.js"></script>
		<script src="js/total.js"></script>
	</body>
</html>