function filterKeyPress(field, e)
{
	var value = field.value;
	var char = e.charCode?e.charCode: e.keyCode;
	if(
		(char>31 && char<45) ||
		(char>45 && char<48) ||
		(char>57 && char<65) ||
		(char>99 && char<65) ||
		char==126 ||
		char>127
	)
	{
		alert (char);
		return false;
	}
	
	if (value.length<1)
	{
		if(char>47 && char <58)
			return false;
		else
		{
			//alert(char);
		}
	}
}

function validateLogin()
{
	var nicknameField = document.getElementById('nick');
	var loginForm = document.getElementById('login');

	if (nicknameField.value.length<1)
	{
		alert("Please enter your screen name.");
		nicknameField.focus();
		return false;
	}
	else
	{
		loginForm.target='irc';
	
		window.open
		(
			'espernet',
			'irc',
			'width=640, height=480, scrollbars=0, status=1, toolbar=0, location=0, menubar=0, directories=0, resizable=1'
		);
		return true;
	}
}
