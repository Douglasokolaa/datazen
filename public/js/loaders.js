$(function(){
    $("#footer").load("footer.html");
    $("#header").load("header.html");

    
    function getMeta(attributeName) {
        var metaTags = document.getElementsByTagName('meta');
        var navTitle = '';
    
        for (var i = 0; i < metaTags.length; i++) {
            if (metaTags[i].getAttribute('name') == attributeName) {
                navTitle = metaTags[i].getAttribute('content');
                return navTitle;
            }
        }
        return '';
    }
    
    function setActiveNavLink () {
        var navDiv = document.getElementById('navbarSupportedContent');
        var linkElements = navDiv.getElementsByTagName('a');
        var pageName = getMeta('navTitle')
    
        for (let i = 0; i < linkElements.length; i++) {
    
            var linkElement = linkElements[i].href.split('/');
            var navPageLink = linkElement[3].split('.')[0];
    
            if (pageName == navPageLink) {
                linkElements[i].className += " active";
                return;
            }            
        }
    }
    
    setTimeout(function () {
        setActiveNavLink();
    }, 2000)

});