require([
'jquery', 
'mage/storage', 
'mage/url'
], function($, storage, url) {
'use strict';
    $(document).ready(function() {
        url.setBaseUrl(BASE_URL);
        var apiUrl = url.build('clarity/index/clarityId');
        storage.get(apiUrl).done(function(response) {
            var clarityId = response.clarityId || ''; // Default or dynamic ID
            if (clarityId) {
                (function(c,l,a,r,i,t,y){
                    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
                })(window, document, "clarity", "script", clarityId);
            }
        }).fail(function() {
            console.error('Failed to fetch clarity ID.');
        });
    });
});
