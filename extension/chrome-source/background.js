chrome.browserAction.onClicked.addListener(function (tab) {	
	var openURL = "https://wackyblackie.github.io/sms-launch/google/";
	chrome.tabs.create({url: openURL});
});