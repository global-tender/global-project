itBeSlider=function(a){return this.aDisplay=a.display,this.getNextWidth=function(){return this.aDisplay.children().eq(0).outerWidth(!0)/this.aDisplay.outerWidth(!0)*1e4},this.isWork=function(){return Math.round(100/this.getNextWidth())<this.aDisplay.children().length},this.leftSlide=function(){0==this.aDisplay.queue().length&&this.isWork()&&(this.aDisplay.prepend(this.aDisplay.children().last()),this.aDisplay.css("left",-this.getNextWidth()+"%"),this.aDisplay.animate({left:"0"},300))},this.rightSlide=function(){0==this.aDisplay.queue().length&&this.isWork()&&this.aDisplay.animate({left:-this.getNextWidth()+"%"},300,function(){$(this).css("left",""),$(this).append($(this).children().eq(0))})},this.aDisplay.draggable({axis:"x",drag:function(a,b){myChildWdth=$(this).children().eq(0).outerWidth(!0),myMargL=parseInt($(this).css("marginLeft")),myMargR=parseInt($(this).css("marginRight")),myLeft=parseInt($(this).css("left")),myLeft+myMargL<-myChildWdth&&($(this).css("marginLeft",-myLeft+"px"),$(this).append($(this).children().eq(0))),myLeft+myMargL>0&&($(this).css("marginLeft",-myLeft-myChildWdth+"px"),$(this).prepend($(this).children().last()))},stop:function(a,b){myChildWdth=$(this).children().eq(0).outerWidth(!0),myLeft=parseInt($(this).css("left")),marginLeft=parseInt($(this).css("marginLeft")),$(this).css("marginLeft",""),$(this).css("left",myLeft+marginLeft+"px"),myChildWdth/2>-(myLeft+marginLeft)?$(this).animate({left:0},200):$(this).animate({left:-myChildWdth},200,function(){$(this).css("left",""),$(this).append($(this).children().eq(0))})},start:function(a,b){if($(this).stop(),Math.round(100/($(this).children().eq(0).outerWidth(!0)/$(this).outerWidth(!0)*1e4))>=$(this).children().length)return!1}}),a.next&&a.prev&&(a.next.disableSelection(),a.prev.disableSelection(),a.next.bind("click",{sliderObj:this},function(a){a.data.sliderObj.rightSlide()}),a.prev.bind("click",{sliderObj:this},function(a){a.data.sliderObj.leftSlide()}),this.controlIsVisible=function(){this.isWork()?(a.next.show(),a.prev.show()):(a.next.hide(),a.prev.hide())},this.controlIsVisible(),$(window).bind("resize",{sliderObj:this},function(a){a.data.sliderObj.controlIsVisible()})),this},itBeSimpleSlider=function(a){return this.display=a.display,this.period=a.period?a.period:3e3,this.speed=a.speed?a.speed:500,this.hideClass=a.hideClass?a.hideClass:"hidden",console.log("ok"),this.next=function(){return!(this.display.children().length<=1)&&(this.display.append(this.display.children().eq(0)),this.display.children().last().addClass(hideClass),void this.display.children().last().removeClass(hideClass,this.speed))},setInterval(this.next,this.period),this},itBeTimer=function(a){this.toTime=new Date(a.toTime).getTime(),this.toDay=a.toDay,this.toHour=a.toHour,this.toMinute=a.toMinute,this.toSecond=a.toSecond;var b=new Date;b=parseInt(b.getTime()),this.toTime>b&&$.fancybox.open(a.wnd),this.toBe=function(){var a=new Date;a=parseInt(a.getTime());var b=Math.floor((this.toTime-a)/1e3);this.toDay.length>0&&this.toDay.text(Math.floor(b/86400)),this.toHour.length>0&&this.toHour.text(Math.floor(b/3600)%24),this.toMinute.length>0&&this.toMinute.text(Math.floor(b/60)%60),this.toSecond.length>0&&this.toSecond.text(b%60)},this.toBe(),this.toInterval=setInterval(function(){this.toBe()},1e3)},itBeZoom=function(a){a.object&&a.object.hover(function(){$(this).append('<img class="zoooom" src="'+$(this).attr("href")+'">'),$(this).append('<div class="zoooomhover"></div>')},function(){$(this).children(".zoooom").remove(),$(this).children(".zoooomhover").remove()}).mousemove(function(a){mousePercentX=($(this).children(".zoooom").outerWidth()-$(this).outerWidth())*(a.offsetX/$(this).outerWidth()),mousePercentY=($(this).children(".zoooom").outerHeight()-$(this).outerHeight())*(a.offsetY/$(this).outerHeight()),$(this).children(".zoooom").css("marginLeft",-mousePercentX+"px").css("marginTop",-mousePercentY+"px")})};