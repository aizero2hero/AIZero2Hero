!function(){"use strict";var e={n:function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(t,{a:t}),t},d:function(n,t){for(var o in t)e.o(t,o)&&!e.o(n,o)&&Object.defineProperty(n,o,{enumerable:!0,get:t[o]})},o:function(e,n){return Object.prototype.hasOwnProperty.call(e,n)}},n=window.jQuery,t=e.n(n),o=window.wp.compose;const{ajaxurl:i,VPAdminVariables:r}=window,c=t()("body");c.on("focus",'[name="vp_list_shortcode"], [name="vp_filter_shortcode"], [name="vp_sort_shortcode"]',(function(){this.select()})),c.on("click",".vp-onclick-selection",(function(){window.getSelection().selectAllChildren(this)})),c.on("copy cut",".vp-onclick-selection",(e=>{const n=window.getSelection().toString().replace(/[\n\r]+/g,"");e.originalEvent.clipboardData.setData("text/plain",n),e.originalEvent.preventDefault()}));const l=t()("#vp_format_video"),a=t()("#post-format-video");let u=null;function s(e){null!==u&&u===e||(u=e,l[e?"show":"hide"]())}l.length&&a.length&&(s(a.is(":checked")),c.on("change","[name=post_format]",(()=>{s(a.is(":checked"))})));let p=null,d=function(e){p=t().ajax({url:i,method:"POST",dataType:"json",data:{action:"vp_find_oembed",q:e.val(),nonce:r.nonce},complete(n){const t=n.responseJSON;t&&void 0!==t.html&&e.next(".vp-oembed-preview").html(t.html)}})};var f,h,m,v;d=(0,o.debounce)(300,(f=d,h=[],m=null,v=function(){for(var e=arguments.length,n=new Array(e),t=0;t<e;t++)n[t]=arguments[t];h=n,m||(m=requestAnimationFrame((function(){m=null,f.apply(void 0,h)})))},v.cancel=function(){m&&(cancelAnimationFrame(m),m=null)},v)),c.on("change input",'.vp-input[name="_vp_format_video_url"]',(function(){null!==p&&p.abort();const e=t()(this);e.next(".vp-oembed-preview").html(""),d(e)})),c.on("change","input[name='vp_general[register_portfolio_post_type]']",(function(){t()(this).is(":checked")||confirm("Are you sure you want to turn off the Portfolio custom post type and related taxonomies? Make sure you don't use this post type on your site, otherwise you might see errors on the frontend.")||t()(this).prop("checked",!0)}))}();