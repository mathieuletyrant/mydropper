chrome.browserAction.onClicked.addListener(function(tab) {
    chrome.tabs.getSelected(null, function(tab) {
        chrome.tabs.sendRequest(
            tab.id,
            {
                callFunction: "toggleSidebar",
                sideBarContent: document.getElementById('contentToLoad').innerHTML,
            },
            function(response) {
                console.log(response);
            }
        );
        
        
        doInCurrentTab( function(tab){ 
            chrome.tabs.insertCSS(tab.id, {file:'css/styles.css'});
        });

        function doInCurrentTab(tabCallback) {
            chrome.tabs.query(
                { currentWindow: true, active: true },
                function (tabArray) { tabCallback(tabArray[0]); }
            );
        }
    });
});