<?php 
include_once('template/header.php'); 
session_start();
?>
   <div class="row">
      <div class="col-md-12">
    <div class="flex-center">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="sendform">
            <div class="form-group hid">
                <label for="surname">Фамилия*</label>
                <input type="text" name="surname" id="surname">
            </div>
            <div class="form-group hid">
                <label for="name">Имя*</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="surname">Email*</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="chb">
                <input type="checkbox" name="cb1" id="chbox">
                <label for="chbox" id="chbox">Регистрация</label>
            </div>
            <div class="form-group hid">
                <label for="sex">Ваш пол</label>
                <select name="sex" id="sex">
                   <option value="">Выберите...</option>
                   <option value="Мужчина">Мужчина</option>
                   <option value="Женщина">Женщина</option>          
               </select>
           </div>
           <div class="form-group hid">
               <label for="bdate">День рождения</label>
               <input type="date" name="bdate" id="bdate">
           </div>
           <p>* - обязательные для заполнения поля</p>
           <input type="submit" name="login" value="Войти" id="reg">
       </form>
   </div>
</div>
</div>



<?php include_once('template/footer.php'); ?>