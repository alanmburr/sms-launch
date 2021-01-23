chrome.browserAction.onClicked.addListener(function(tab)
{	
	var RedirectURL = "https://wackyblackie.github.io/sms-launch/index.html";
	chrome.tabs.create({url: RedirectURL});	
});