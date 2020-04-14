<? top('Пополнить номера') ?>

<SCRIPT>
var newline=null
function populate(textareaObject){
   if (navigator.appVersion.lastIndexOf('Win') != -1)
      newline="\r\n"
      else newline="\n"
   textareaObject.value="line 1" + newline + "line 2" + newline 
   + "line 3"
}
</SCRIPT>

<div class="padding">
	<form action="/form" method="post">
		<select name="operator">
        <option value="24899291">МТС</option>
        <option value="24899391">Мегафон</option>
        <option value="95877310">Теле2</option>
        </select>
		
<textarea name="phone">+79961946401
+79961946402
+79961946403
</textarea>

	<p><input type="submit" name="enter" value="Пополнить"></p>
	</form>
</div>

<? bottom() ?>
