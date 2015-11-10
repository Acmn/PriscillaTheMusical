/*!
 * jQuery Cookie Plugin v1.3.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as anonymous module.
		define(['jquery'], factory);
	} else {
		// Browser globals.
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function raw(s) {
		return s;
	}

	function decoded(s) {
		return decodeURIComponent(s.replace(pluses, ' '));
	}

	function converted(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}
		try {
			return config.json ? JSON.parse(s) : s;
		} catch(er) {}
	}

	var config = $.cookie = function (key, value, options) {

		// write
		if (value !== undefined) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}

			value = config.json ? JSON.stringify(value) : String(value);

			return (document.cookie = [
				config.raw ? key : encodeURIComponent(key),
				'=',
				config.raw ? value : encodeURIComponent(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// read
		var decode = config.raw ? raw : decoded;
		var cookies = document.cookie.split('; ');
		var result = key ? undefined : {};
		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = decode(parts.join('='));

			if (key && key === name) {
				result = converted(cookie);
				break;
			}

			if (!key) {
				result[name] = converted(cookie);
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) !== undefined) {
			// Must not alter options, thus extending a fresh object...
			$.cookie(key, '', $.extend({}, options, { expires: -1 }));
			return true;
		}
		return false;
	};

}));

 
 
 
 
 
 
  /*******************
  
  UTM - CFC System
  
  ******************/

jQuery(document).ready(function( $ ) {

  // ALL OUR VARIABLES
  
  var showCode = 'XX_';

  
  if(document.getElementById("ticketsPage")) {
    checkforUtm();
    checkforCookie();
  }

  /* 
   *  Check for the UTM
   *
   *  if it exists, store it in a cookie called utm. 
   *  The cookie lasts for 1 week.
   */

  function checkforUtm() {
      var source = null;
          source = getParameterByName('utm_source');

      if(source != null) {
        url = window.location;
        $.cookie('utm', url, { expires: 7, path: '/' });
      }
  };
  
  
  /* 
   *  Check for the UTM Cookie
   *
   *  if the Cookie exists we will do some things with it.
   *  Including call the updateTicketLinks function
   */
   
   function checkforCookie() {
     var utmCookie = null;
         utmCookie = $.cookie('utm');
         if(utmCookie != null) {
          var source = new RegExp('[\?&]utm_source=([^&#]*)').exec(utmCookie);
          source = source[1];
          
          var campaign = new RegExp('[\?&]utm_campaign=([^&#]*)').exec(utmCookie);
          campaign = campaign[1];
          
          updateTicketsLinks(source, campaign);
          
          
      };
   };
   
   
   /*
    * Get Ticket links and run through them 
    */

    function updateTicketsLinks(source, campaign) {
      $('a.ticket-button').each(function(){
      
        var newUTM = 'utm_source='+source+'&utm_medium=acmn&utm_campaign='+campaign;
        baseUrl = this.href;
        
        if(baseUrl.indexOf("?") > -1) {
                
            if(baseUrl.indexOf("ticketmaster") > -1) {
              url = baseUrl.split(showCode);
              url = url[0];
              /* ticketmaster */
              
              url = url+showCode+source+'_'+campaign;
            
            } else {
              
              /* Not Ticketmaster */
            
              if(baseUrl.indexOf("?utm") > -1) {
                
                var url = baseUrl.split("?");
                url = url[0];
                url = url + '?' + newUTM;
                
              } else {
                
                var url = baseUrl.split("&utm_source");
                url = url[0];
                url = url + '&' + newUTM;
              };
              
            };
            
          } else {
  
          var url = baseUrl.split("?");
          url = url[0];
          url = url + '?' + newUTM;
                
        };
        
        $(this).attr('href',url);
        
      });
    };
   
    
  /*
   * Helper Function - to get the parameter from the URL 
   */
  
  function getParameterByName(name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
      return null;
    } else {
      return results[1] || 0;
    }	
  };

	
});