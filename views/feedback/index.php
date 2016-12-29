<?php 
include_once('template/header.php'); 
session_start();
?>

<div class="row">
	<div class="col-md-12">
		<div class="flex-center">
			<form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="message">
			<div class="form-group">
                <label for="name">Имя*</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="surname">Email*</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="message">Ваше сообщение*</label>
                <textarea name="message" id="message"></textarea>
            </div>
            <p>* - обязательные для заполнения поля</p>
            <input type="submit" name="sendFeedback" value="Отправить">
			</form>
		</div>
	</div>
</div>

<?php include_once('template/footer.php'); ?>