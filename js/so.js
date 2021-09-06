// JavaScript Document

var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }

    };
	
	if ( isMobile.Android() ) {
		//alert("android");
		//window.location.replace("http://meuforroapp.com/mobile/");
		//window.location.replace("https://play.google.com/store/apps/details?id=appforrozapp.meuforroapp.android");
    }
	else if(isMobile.iOS())
	{
		//alert("ios");
		//window.location.replace("http://forrozapp.com.br/mobile/");
		//window.location.replace("/mobile");
	}
	else if (isMobile.Windows())
	{
		//alert("windows phone");
		//window.location.replace("http://meuforroapp.com/mobile/");		//window.location.replace("http://www.windowsphone.com/pt-pt/store/app/forr%C3%B3zapp-meuforr%C3%B3app-com-br/d603930c-1a2b-4b1a-8873-875fe18cd90d");
	}
	else
	{
		//alert("computadorrr");
	}
