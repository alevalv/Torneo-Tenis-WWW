/* ------------------------------------------------------------------------
	Do it when you're ready dawg!
------------------------------------------------------------------------- */

	

tabs = {
  init : function(){
   $('.tabs').each(function(){

    var th=$(this),
     tContent=$('.tab-content',th),
     navA=$('ul.nav a',th)

    tContent.not().hide();
	tab_act=$('ul.nav .selected a').attr('href');
	$(tab_act).show();

    navA.click(function(){
		alert("click");
     var th=$(this),
      tmp=th.attr('href')
     tContent.not($(tmp.slice(tmp.indexOf('#'))).fadeIn(600)).hide()
	 $(th).parent().addClass('selected').siblings().removeClass('selected');
     return false;
    });
   }
   
   $('.tabs-inter').each(function(){
	   var th=$(this),
     tContent=$('.tab-content',th),
     navA=$('ul.nav a',th)

    tContent.not().hide();
	tab_act=$('ul.nav .selected a').attr('href');
	$(tab_act).show();

    navA.click(function(){
		alert("click222");
     var th=$(this),
      tmp=th.attr('href')
     tContent.not($(tmp.slice(tmp.indexOf('#'))).fadeIn(600)).hide()
	 $(th).parent().addClass('selected').siblings().removeClass('selected');
     return false;
    });
   }
	   }
   );

  }
 }
