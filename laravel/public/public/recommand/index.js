define("nowcoder/1.2.348/javascripts/site/recommend/index",["../../lib/jquery","../../lib/underscore","../../core/base","../../util/dom","../../util/browser","../../util/util","../../util/cookie","../../action/contest","../../util/ajax","../../core/siteConfig","../../component/popup","../../core/component","../../util/event","../../component/layer","../../util/dragdrop","../../util/limit"],function(a){function b(){var a=this;a.initTab()}function c(){g.tab({el:e("div.module-box ul.menu li"),change:function(a){var b=e(a.currentTarget),c=b.closest("div.module-box"),d=b.index(),f=c.find("ul.menu li");f.removeClass("selected"),e(f[d]).addClass("selected");var g=c.find(".module-body div.brush-list-box");g.hide(),e(g[d]).show()}})}function d(a){var b=e(a.currentTarget),c=b.hasClass("click-follow"),d=b.attr("data-id");k.mark(b)||h[c?"follow":"unfollow"]({body:{id:d,type:i.type.user},call:function(){c?(b.removeClass("click-follow btn-primary").addClass("click-unfollow btn-default").html('<span class="fui-check"></span>已关注'),b.attr("title","取消关注")):(b.removeClass("click-unfollow btn-default").addClass("click-follow btn-primary").html('<span class="fui-plus"></span>关注TA'),b.attr("title","关注"))},error:function(a){j.alert(a.msg||i.tips.ajaxError)},always:function(){k.pause(b)}})}var e=a("../../lib/jquery");a("../../lib/underscore");var f=a("../../core/base"),g=a("../../util/dom"),h=a("../../action/contest"),i=a("../../core/siteConfig"),j=a("../../component/popup"),k=a("../../util/limit");f.ready({initialize:b,events:{"click a.click-follow":d,"click a.click-unfollow":d},initTab:c})});