$(document).ready(function()
{
	document.getElementById('textEditor').contentWindow.document.designMode="on";
	document.getElementById('textEditor').contentWindow.document.close();
	var edit = document.getElementById("textEditor").contentWindow;
	edit.focus();
	$("#bold").click(function()
	{
		if($(this).hasClass("selected"))
		{
			$(this).removeClass("selected");
		}
		else
		{
			$(this).addClass("selected");
		}
		boldIt();
	});
	$("#italic").click(function()
	{
		if($(this).hasClass("selected"))
		{
			$(this).removeClass("selected");
		}else
		{
			$(this).addClass("selected");
		}
		ItalicIt();
	});
	$("#fonts").on('change',function()
	{
		changeFont($("#fonts").val());
	});
	$("#link").click(function()
	{
		var urlp=prompt("Add link:","http://");
		url(urlp);
	}); 
	$("#stext").click(function()
	{
		$("#text").hide();
		$("#textEditor").show();
		$("#controls").show()
	});
	$("#shtml").on('click',function()
	{
		$("#text").css("display","block");
	});
});
function boldIt()
{
	var edit = document.getElementById("textEditor").contentWindow;
	edit.focus();
	edit.document.execCommand("bold", false, "");
	edit.focus();
}
function ItalicIt()
{
	var edit = document.getElementById("textEditor").contentWindow;
	edit.focus();
	edit.document.execCommand("italic", false, "");
	edit.focus();
}
function changeFont(font)
{
	var edit = document.getElementById("textEditor").contentWindow;
	edit.focus();
	edit.document.execCommand("FontName", false, font);
	edit.focus();
}
function url(url)
{
	var edit = document.getElementById("textEditor").contentWindow;
	edit.focus();
	edit.document.execCommand("Createlink", false, url);
	edit.focus();
}

setInterval(function()
{
	var gyt=$("#textEditor").contents().find("body").html().match(/@/g);
	if($("#textEditor").contents().find("body").html().match(/@/g)>=0)
	{}
	else
	{
		$("#text").val($("#textEditor").contents().find("body").html());
	}
		$("#text").val($("#textEditor").contents().find("body").html());
},1000);

function getCodeHTML()
{
	var iframeDoc = document.getElementById('textEditor').contentWindow.document.body.innerHTML;
	
	/* Send data to other php file to insert data to database */
	try
	{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer Browsers
		try
		{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			try
			{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e)
			{
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function()
	{
		if(ajaxRequest.readyState==4 && ajaxRequest.status==200)
		{
			alert(ajaxRequest.responseText);
		}
	}
	ajaxRequest.open("POST","display.php", true);
	ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	ajaxRequest.send("data="+iframeDoc);
	return false;
}