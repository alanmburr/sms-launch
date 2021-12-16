browser.browserAction.onClicked.addListener(function (tab) {	
	var openURL = "https://wackyblackie.github.io/sms-launch/google/";
	browser.tabs.create({url: openURL});
});