
var req = Create();

function ge(id)
{
    return document.getElementById(id);
}

function Create()
{
    if(navigator.appName == "Microsoft Internet Explorer")
    {
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else
    {
        req = new XMLHttpRequest();
    }
return req;
}

function Request(query)
{
    req.open('post', '/ob.php' , true );
    req.onreadystatechange = Refresh;
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");
    req.send(query);
}

function Refresh()
{
    var a = req.readyState;

    if( a == 4 )
    {
        var b = req.responseText;
        document.getElementById('ajax').innerHTML = b;
    }
    else
    {
        document.getElementById('ajax').innerHTML = '<br><center>Отправка</center>';

    }
}
/////Собераем все элементы формы которые будем отправлять
function Pusk()
{
    var query;
    var znak = $('input[name=optionRadio]:checked').val();

if (znak == "plus") {
    	var plus = encodeURIComponent(ge('plus').value);
} else if (znak == "minus") {
      var minus = encodeURIComponent(ge('minus').value);
} else if (znak == "multiply") {
      var multiply = encodeURIComponent(ge('multiply').value);
} else {
  var degree = encodeURIComponent(ge('degree').value);
}

	var numberOne = encodeURIComponent(ge('numberOne').value);
	var numberTwo = encodeURIComponent(ge('numberTwo').value);

    query = 'numberOne='+numberOne+'&numberTwo='+numberTwo+'&minus='+minus+'&plus='+plus+'&multiply='+multiply+'&degree='+degree;
    Request(query);
}
