$(document).ready(function(){var a=[["Jan",6],["Feb",10],["March",8],["April",14],["May",8],["June",10],["July",8],["Aug",12],["Sept",10],["Oct",10],["Nov",8],["Dec",10]],c=($.plot("#demo-site-statistics",[{label:"New Visitors",data:a}],{series:{lines:{show:!0,lineWidth:2,fill:!0},points:{show:!0,lineWidth:2,fill:!0,fillColor:"#ffffff",symbol:"circle",radius:5},shadowSize:0},colors:["#666666;"],tooltip:!0,tooltipOpts:{defaultTheme:!1},legend:{show:!0,position:"nw",margin:[15]},grid:{hoverable:!0,clickable:!0,tickColor:"#eeeeee",borderWidth:1,borderColor:"#eeeeee"},xaxis:{mode:"categories"}}),[["Jan",6],["Feb",8],["March",12],["April",10],["May",6],["June",8],["July",12],["Aug",10],["Sept",8],["Oct",10],["Nov",8],["Dec",10]]),d=($.plot("#demo-order-statistics",[{label:"New Orders",data:c}],{series:{lines:{show:!0,lineWidth:2,fill:!0},points:{show:!0,lineWidth:2,fill:!0,fillColor:"#ffffff",symbol:"circle",radius:5},shadowSize:0},colors:["#E9422E;"],tooltip:!0,tooltipOpts:{defaultTheme:!1},legend:{show:!0,position:"nw",margin:[15]},grid:{hoverable:!0,clickable:!0,tickColor:"#eeeeee",borderWidth:1,borderColor:"#eeeeee"},xaxis:{mode:"categories"}}),[["Jan",6],["Feb",12],["March",10],["April",8],["May",12],["June",10],["July",8],["Aug",12],["Sept",6],["Oct",8],["Nov",6],["Dec",10]]),e=($.plot("#demo-sales-statistics",[{label:"New Orders",data:d}],{series:{lines:{show:!0,lineWidth:2,fill:!0},points:{show:!0,lineWidth:2,fill:!0,fillColor:"#ffffff",symbol:"circle",radius:5},shadowSize:0},colors:["#29b7d3;"],tooltip:!0,tooltipOpts:{defaultTheme:!1},legend:{show:!0,position:"nw",margin:[15]},grid:{hoverable:!0,clickable:!0,tickColor:"#eeeeee",borderWidth:1,borderColor:"#eeeeee"},xaxis:{mode:"categories"}}),[["Jan",12],["Feb",8],["March",6],["April",8],["May",4],["June",6],["July",8],["Aug",12],["Sept",6],["Oct",8],["Nov",6],["Dec",10]]),f=($.plot("#demo-feedback-statistics",[{label:"Customer Feedback",data:e}],{series:{lines:{show:!0,lineWidth:2,fill:!1},points:{show:!0,lineWidth:2,fill:!0,fillColor:"#ffffff",symbol:"circle",radius:5},shadowSize:0},colors:["#fac552"],tooltip:!0,tooltipOpts:{defaultTheme:!1},legend:{show:!0,position:"nw",margin:[15]},grid:{hoverable:!0,clickable:!0,tickColor:"#eeeeee",borderWidth:1,borderColor:"#eeeeee"},xaxis:{mode:"categories"}}),[["Jan",5],["Feb",8],["March",6],["April",9],["May",7],["June",4],["July",8],["Aug",12],["Sept",6],["Oct",8],["Nov",6],["Dec",10]]),g=($.plot("#demo-earning-statistics",[{label:"Net Earning",data:f}],{series:{lines:{show:!0,lineWidth:2,fill:!1},points:{show:!0,lineWidth:2,fill:!0,fillColor:"#ffffff",symbol:"circle",radius:5},shadowSize:0},colors:["#248aaf"],tooltip:!0,tooltipOpts:{defaultTheme:!1},legend:{show:!0,position:"nw",margin:[15]},grid:{hoverable:!0,clickable:!0,tickColor:"#eeeeee",borderWidth:1,borderColor:"#eeeeee"},xaxis:{mode:"categories"}}),[["Mon",4],["Tue",8],["Wed",10],["Thu",8],["Fri",9],["Sat",7]]);$.plot("#demo-performance-statistics",[{label:"Server Performance",data:g}],{series:{lines:{show:!0,lineWidth:2,fill:!1},points:{show:!0,lineWidth:2,fill:!0,fillColor:"#ffffff",symbol:"circle",radius:5},shadowSize:0},colors:["#3cbc8d"],tooltip:!0,tooltipOpts:{defaultTheme:!1},legend:{show:!0,position:"nw",margin:[15]},grid:{hoverable:!0,clickable:!0,tickColor:"#eeeeee",borderWidth:1,borderColor:"#eeeeee"},xaxis:{mode:"categories"}});$("#demo-pie-2").easyPieChart({barColor:"#F3565D",scaleColor:!1,trackColor:"#eee",lineCap:"round",size:"70",lineWidth:8,onStep:function(a,b,c){$(this.el).find(".pie-value").text(Math.round(c)+"%")}}),$("#demo-pie-3").easyPieChart({barColor:"#F3565D",scaleColor:!1,trackColor:"#eee",lineCap:"round",size:"70",lineWidth:8,onStep:function(a,b,c){$(this.el).find(".pie-value").text(Math.round(c)+"%")}}),$("#demo-pie-4").easyPieChart({barColor:"#F3565D",scaleColor:!1,trackColor:"#eee",lineCap:"round",size:"70",lineWidth:8,onStep:function(a,b,c){$(this.el).find(".pie-value").text(Math.round(c)+"%")}});var h=new GMaps({div:"#demo-overlays-map",lat:37.336095,lng:-121.8885431});h.drawOverlay({lat:h.getCenter().lat(),lng:h.getCenter().lng(),content:'<div class="popover top" style="display:block; width:200px"><div class="arrow"></div><div class="popover-content"><strong>You are here</strong><p>86 Washington Sq, San Jose, CA 95192, United States</p></div></div>',verticalAlign:"top",horizontalAlign:"center"}),skyconsOptions={color:"#fff",resizeClear:!0};var i=new Skycons(skyconsOptions);i.add("demo-weather-lg-icon-1",Skycons.RAIN),i.play();new Skycons(skyconsOptions);i.add("demo-weather-lg-icon-2",Skycons.PARTLY_CLOUDY_DAY),i.play();var i=new Skycons(skyconsOptions);i.add("demo-weather-sm-icon",Skycons.RAIN),i.play(),i=new Skycons(skyconsOptions),i.add("demo-weather-xs-icon-1",Skycons.CLEAR_DAY),i.play(),i=new Skycons({color:"#00b19d",resizeClear:!0}),i.add("demo-weather-xs-icon-2",Skycons.PARTLY_CLOUDY_DAY),i.play(),$("#jquery-tagIt-white").tagit({}),$("#demo-summernote").summernote({toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]]],height:143})});