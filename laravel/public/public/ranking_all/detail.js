define("nowcoder/1.2.348/javascripts/site/ranking/detail",["../../lib/jquery","../../core/base","../../lib/underscore","../../util/dom","../../util/browser","../../util/util","../../util/cookie","../../action/contest","../../util/ajax","../../core/siteConfig","../../util/limit","../../component/popup","../../core/component","../../util/event","../../component/layer","../../util/dragdrop"],function(a){function b(){}function c(a){if(window.isLogin){var b=d(a.currentTarget),c=+b.attr("data-count")||0,e=b.attr("data-id");if(e&&"0"!==e&&!g.mark(b)){var j="fans"===window.board,k=b.hasClass("js-focus");f[k?"follow":"unfollow"]({body:{id:e,type:i.type.user},call:function(){j&&(c+=k?1:-1,b.attr("data-count",c),b.closest("tr").find("td.js-follow-count").html(c)),k?b.removeClass("js-focus btn-primary").addClass("js-unfocus btn-default").html("已关注"):b.removeClass("js-unfocus btn-default").addClass("js-focus btn-primary").html("关注")},error:function(a){h.alert(a.msg)},always:function(){g.pause(b)}})}}}var d=a("../../lib/jquery"),e=a("../../core/base");a("../../util/dom");var f=a("../../action/contest"),g=a("../../util/limit"),h=a("../../component/popup"),i=a("../../core/siteConfig");e.ready({initialize:b,events:{"click a.js-unfocus":c,"click a.js-focus":c}})});
