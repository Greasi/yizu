define("nowcoder/1.2.348/javascripts/site/profile/wrongset",["../../lib/jquery","../../lib/underscore","../../core/base","../../util/util","../../util/cookie","../../component/checkbox","../../core/component","../../util/event"],function(a){function b(){var a=this;a.wrongTestEl=g("#jsWrongTestForm");var b="1"===j.getParam("onlyWrong");b&&g("label.checkbox").addClass("checked"),this.initChb(b),a.initTags()}function c(a){var b=k.transform(g(".action-toggle-type"),{change:function(){var a=this.isChecked(),b="1"===j.getParam("onlyWrong");a&&b||!a&&!b||(window.location.href=j.addParam({onlyWrong:this.isChecked()?"1":"0"}))}});b.checked(a)}function d(a){var b=g(a.currentTarget),c=b.closest("div.with-fold");c[c.hasClass("open")?"removeClass":"addClass"]("open")}function e(a){var b=g(a.currentTarget);b[b.hasClass("selected")?"removeClass":"addClass"]("selected");var c=g("#jsTagsFold").closest("div.with-fold").find("a.tag-label.selected"),d=h.map(c,function(a){return g(a).attr("data-id")}),e=j.addParam({tags:d.join(",")});window.location.href=e}function f(){var a=this,b=(j.getParam("tags")||"").split(",");if(b=h.without(b,""),0!==b.length){var c=[];h.forEach(b,function(a){var b=g("a.tag-label[data-id="+a+"]");b.addClass("selected"),b.length>0&&c.push(a)});var d=a.wrongTestEl.attr("action");d=j.addParam({tags:c.join(",")},d),a.wrongTestEl.attr("action",d)}}var g=a("../../lib/jquery"),h=a("../../lib/underscore"),i=a("../../core/base"),j=a("../../util/util"),k=a("../../component/checkbox");i.ready({initialize:b,events:{"click a.tag-label":e},binds:{"click #jsTagsFold":d},initChb:c,initTags:f})});
