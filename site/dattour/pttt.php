<form action="dattour.php?ma_tour=<?=$ma_tour?>" method="POST" role="form">
	<legend>Phương thúc thanh toán</legend>

	<div class="form-group">
		<input checked="" type="radio" name="pttt"> Visa/ Marter Card
	</div>
	<div class="form-group">
		<input type="radio" name="pttt"> Thẻ nội địa
	</div>
	<div class="form-group">
		<input type="radio" name="pttt"> Paypal
	</div>
	<div class="form-group">
		<input type="radio" name="pttt"> Ví điện tử Momo
	</div>
	<button type="submit" class="btn btn-primary" name="final">Thanh toán</button>
</form>