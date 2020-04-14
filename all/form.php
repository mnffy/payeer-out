<?


if ( $_POST['enter'] ) {


require_once('cpayeer.php');
$accountNumber = 'P101xxxx';
$apiId = '99xxxxxxx';
$apiKey = 'cWV2xxxxxx';
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$initOutput = $payeer->initOutput(array(
		'ps' => $_POST['operator'],
		'curIn' => 'RUB',
		'sumOut' => 10,
		'curOut' => 'RUB',
		'param_ACCOUNT_NUMBER' => $_POST['phone'],
	));

	if ($initOutput)
	{
		$historyId = $payeer->output();
		if ($historyId > 0)
		{
			echo "Выплата успешна";
		}
		else
		{
			echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
		}
	}
	else
	{
		echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
	}
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}	

}


?>