<div class="container footer_logo">
		<p class="left"> <a href="http://www.berkeley.edu/index.html"><img class="footer_logo" src="http://caldining.berkeley.edu/images/_frontpage/icon/berkeley_pacific2.png"  /></a>
        </p><p class="allrights">Cal Catering & UC Regents © 2013. All rights reserved.</p>
		
		<p class="right"> <a href="#"><img class="footer_logo2" src="http://caldining.berkeley.edu/images/_frontpage/icon/twitter_pacific.png"  /></a>
  <a href="#"><img class="footer_logo2" src="http://caldining.berkeley.edu/images/_frontpage/icon/facebook_pacific.png"  /></a>
</p>
</div>


</div>
</div>
</div>
</div>
<div class="bottom_menu">
	<div class="container">
	<ul class="mobile_menu">
        <li><a href="http://test-catering.housing.berkeley.edu/book_event.html">book an event</a></li>
        <li><a href="http://test-catering.housing.berkeley.edu/getting_here/ckc.html">getting here</a></li>
        <li><a href="http://test-catering.housing.berkeley.edu/contact.html">contact</a></li>
    </ul>
    </div>
</div>
<div class="news_letter_bottom">
	<div class="container">
    	<p> sign up now for our newsletter</p>
        <p><input class="email_input" placeholder="Email Address"/><button id="sumbit" class="btn">sign up</button>
    </div>
</div>
<div class="mobile_bottom">
	<div class="container">
    	<p>Cal Catering & UC Regents © 2013. All rights reserved.</p>
    </div>
</div>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

<script src="http://test-catering.housing.berkeley.edu/js/jquery.js"></script>
<script src="http://test-catering.housing.berkeley.edu/js/bootstrap.js"></script>
<script type="text/javascript" src="http://test-catering.housing.berkeley.edu/js/jquery.fancybox.pack.js"></script>
<script>
  $(document).ready(function () {
    $(".search").mouseout(function(){
        $(".search_field").hide();
    }).mouseover(function(){
        $(".search_field").show();
    });
});
</script>
<script>
 $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>

<script>
 $('.icon-ok').tooltip()
</script>

<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
head.appendChild(script);
var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://berkeley.us2.list-manage.com/subscribe/post-json?u=0ceafbe959e1d6d718a73af74&id=01a4f5f9e3&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
<script>
   $('.carousel').carousel({
  interval: 50000
})  

</script>
<script>
   $('.carousel2').carousel({
  interval: 10000
})  

</script>

<script>
$(document).ready(function() {
	$(".fancy1").fancybox({
		openEffect	: 'elastic',
    	closeEffect	: 'elastic',
          helpers: {
              title : {
                  type : 'inside'
              }
          }
      });
});
</script>

<!-- Le javascript for mobile page -->
<script type="text/javascript">
// When ready...
window.addEventListener("load",function() {
  // Set a timeout...
  setTimeout(function(){
    // Hide the address bar!
    window.scrollTo(0, 1);
  }, 0);
});
</script>


<script type="text/javascript" src="http://test-catering.housing.berkeley.edu/js/snap.js"></script> 

<script type="text/javascript">
 var snapper = new Snap({
 	element: document.getElementById('content'),
	maxPosition: 150,
    minPosition: -150
 });
</script> 



<script type="text/javascript" src="http://test-catering.housing.berkeley.edu/js/demo.js"></script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27180289-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
         

