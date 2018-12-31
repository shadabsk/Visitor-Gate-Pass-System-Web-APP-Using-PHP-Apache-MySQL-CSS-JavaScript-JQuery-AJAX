function change_dropdown()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","select_staff2.php?name="+document.getElementById("deptdd").value,false);
	xmlhttp.send(null);
	document.getElementById("facname").innerHTML=xmlhttp.responseText;
}