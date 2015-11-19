define("nowcoder/1.2.348/javascripts/component/avatarDialog",["../lib/jquery","../core/base","../lib/underscore","../core/component","../util/util","../util/cookie","../util/event","../action/profile","../util/ajax","../core/siteConfig","./popup","./layer","../util/dragdrop","../util/browser"],function(a,b,c){function d(a){var b=new p(a),c=new n({title:"修改头像",content:b.html(),width:390,listeners:{close:function(){try{a.close&&a.close(),b.fire("close")}catch(c){k.out(c)}},destroy:function(){b.fire("destroy"),b.scaleDrag=null,b.dragdrop=null,b.info=null}}});return b.popup=c,l.setEvents(),b}function e(a){var b=this;b.info={scale:0,dialog:{width:300,height:300},avatar:{width:0,height:0},center:{left:0,top:0},position:{left:0,top:0},bar:{left:0,width:0}},p.superClass.initialize.call(b,a)}function f(){var a=this,b=a.info;if(a.avatarLoaded){var c=b.avatar.width,d=b.avatar.height,e=b.dialog.width,f=b.dialog.height,g={},h={},i=d/f>c/e?"width":"height";"width"===i?(g.width=e,g.height=g.width*d/c):(g.height=f,g.width=g.height*c/d),h.width=2*g.width,h.height=2*g.height,b.min=g,b.max=h,b.position.left=(b.dialog.width-g.width)/2,b.position.top=(b.dialog.height-g.height)/2,b.center.left=a.getCenter(b.position.left,g.width),b.center.top=a.getCenter(b.position.top,g.height)}}function g(){var a=this;if(a.avatarLoaded){var b=a.info,c=1+b.scale,d=b.min.width*c,e=b.min.height*c,f=b.dialog.width/2-b.center.left*d,g=b.dialog.height/2-b.center.top*e;f+d<b.dialog.width&&(f=b.dialog.width-d,b.center.left=a.getCenter(f,d)),f>0&&(f=0,b.center.left=a.getCenter(f,d)),g+e<b.dialog.height&&(g=b.dialog.height-e,b.center.top=a.getCenter(g,e)),g>0&&(g=0,b.center.top=a.getCenter(g,e)),a.avatarEl.css({left:f,top:g,width:d,height:e}),b.position.left=f,b.position.top=g}}function h(a,b){var c=this;if(c.avatarLoaded){var d=c.info;return(d.dialog.width/2-a)/b}}function i(){var a=this,b=a.info;return{scale:(1+b.scale)*b.min.width/b.avatar.width,x:-b.position.left,y:-b.position.top,width:b.dialog.width,height:b.dialog.height}}var j=a("../lib/jquery"),k=a("../core/base"),l=a("../core/component");a("../util/util");var m=a("../action/profile"),n=a("./popup"),o=a("../util/dragdrop"),p=c.exports=k.createClass("component.AvatarDialog");k.mix(p,l,{xtype:"avatardialog",_template:['<div class="change-pop clearfix">','<div class="avarta-box">','<div style="position:relative;width:100%;height:100%;overflow:hidden" class="avatar-container">头像加载中</div>',"</div>",'<div class="mini-big clearfix">','<span class="mini-ico"></span>','<div id="avatarDialogSlider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">','<div class="ui-slider-segment" style="margin-left: 25%;"></div>','<div class="ui-slider-segment" style="margin-left: 25%;"></div>','<div class="ui-slider-segment" style="margin-left: 25%;"></div>','<div class="ui-slider-segment"></div>','<div class="ui-slider-segment"></div>','<div class="ui-slider-segment"></div>','<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" id="avatarDialogBar" style="width: 0;"></div>','<a class="ui-slider-handle ui-state-default ui-corner-all" id="avatarDialogDrag" href="javascript:void(0);" style="left: 0;"></a>',"</div>",'<span class="big-ico"></span>',"</div>",'<div class="submit-btnbox">','<a class="btn btn-default cancle-btn" href="javascript:void(0);">取消</a>','<a class="btn btn-primary confirm-btn" href="javascript:void(0);">保存</a>',"</div>","</div>"].join(""),listeners:[{name:"render",type:"custom",handler:function(){var a=this,b=a.info,c=a.rawConfig,d=a.getEl(),e=d.find("div.avatar-container"),f=document.createElement("IMG");a.dragEl=d.find("#avatarDialogDrag"),a.barEl=d.find("#avatarDialogBar"),b.bar.width=d.find("#avatarDialogSlider").width(),f.onload=function(){a.avatarLoaded=!0,b.avatar.width=this.width,b.avatar.height=this.height,a.fixInfo(),a.fixPosition(),e.html("").append(f),a.fire("setScale"),a.fire("setDrag")},f.onerror=function(){alert("头像加载出错，请重试"),a.popup.close()},f.src=c.src,a.avatarEl=f=j(f).css({position:"absolute",left:0,top:0})}},{name:"click a.cancle-btn",type:"bind",handler:function(){var a=this;a.popup.close()}},{name:"click a.confirm-btn",type:"bind",handler:function(){var a=this,b=a.rawConfig;if(!a.avatarLoaded)return alert("请等待头像加载完成"),void 0;if(!a.avatarSaving){a.avatarSaving=!0;var c=a.getResult();c.source=b.src,k.out(c),m.saveHead({body:c,call:function(c){b.call&&b.call(c),a.popup.close()},error:function(){alert("头像保存失败"),a.avatarSaving=!1}})}}},{name:"setScale",type:"custom",handler:function(){var a=this,b=a.info;if(a.avatarLoaded&&!a.setScaled){a.setScaled=!0;var c=a.getEl();c.find("#avatarDialogDrag"),c.find("#avatarDialogBar"),a.scaleDrag=new o({drag:a.dragEl,listeners:[{name:"drag",handler:function(){var c=this._left=b.bar.left+this._moveX-this._downX;c>b.bar.width?c=b.bar.width:0>=c&&(c=0),a.dragEl.css({left:c}),a.barEl.width(c),b.scale=c/b.bar.width,a.fixPosition()}},{name:"drop",handler:function(){b.bar.left=this._left}}]})}}},{name:"setDrag",type:"custom",handler:function(){var a=this,b=a.info;if(a.avatarLoaded&&!a.setDraged){a.setDraged=!0;var c=a.avatarEl;a.dragdrop=new o({drag:c,listeners:[{name:"start",handler:function(){var a=1+b.scale;this._avatarWidth=b.min.width*a,this._avatarHeight=b.min.height*a}},{name:"drag",handler:function(){var a=this._avatarWidth,d=this._avatarHeight,e=b.position.left+this._moveX-this._downX,f=b.position.top+this._moveY-this._downY;e+a<b.dialog.width&&(e=b.dialog.width-a),e>0&&(e=0),f+d<b.dialog.height&&(f=b.dialog.height-d),f>0&&(f=0),c.css({left:e,top:f}),this._avatarLeft=e,this._avatarTop=f}},{name:"drop",handler:function(){b.position.left=this._avatarLeft,b.position.top=this._avatarTop,b.center.left=a.getCenter(this._avatarLeft,this._avatarWidth),b.center.top=a.getCenter(this._avatarTop,this._avatarHeight)}}]})}}}],show:d},{initialize:e,fixInfo:f,fixPosition:g,getCenter:h,getResult:i})});
