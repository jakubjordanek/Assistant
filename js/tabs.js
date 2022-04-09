function openTab (event, tabName)
{
	var tabContent = document.getElementsByClassName("tab-content");
	for (var i = 0; i < tabContent.length; i++)
	{
		tabContent[i].style.display = "none";
	}
	
	var tabLinks = document.getElementsByClassName("tab-links");
	for (var i = 0; i < tabLinks.length; i++)
	{
		tabLinks[i].className = tabLinks[i].className.replace(" active", "");
	}
	
	document.getElementById(tabName).style.display = "block";
	event.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();