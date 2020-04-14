<? top('Пополнить номера') ?>


<div class="padding">
	<form action="/form" method="post">
		<select name="operator">
        <option value="24899291">МТС</option>
        <option value="24899391">Мегафон</option>
        <option value="95877310">Теле2</option>
        </select>
		<p><input type="text" name="phone" placeholder="Номер телефона"></p>
		<p><input type="submit" name="enter" value="Пополнить"></p>
	</form>
</div>

<? bottom() ?>