System.register(["../apps/settings/index-legacy.14a49b0f.js","./motion-legacy.bd505853.js"],(function(t,e){"use strict";var i,n,o,f,s,u,r,h,c,l;return{setters:[function(t){i=t.d,n=t.S,o=t.v,f=t.ar,s=t.z,u=t.y,r=t.b3,h=t._,c=t.as},function(t){l=t.M}],execute:function(){t("R",i({compatConfig:{MODE:3},name:"ResizeObserver",props:{disabled:Boolean,onResize:Function},emits:["resize"],setup:function(t,e){var i=e.slots,a=n({width:0,height:0,offsetHeight:0,offsetWidth:0}),d=null,g=null,v=function(){g&&(g.disconnect(),g=null)},p=function(e){var i=t.onResize,n=e[0].target,o=n.getBoundingClientRect(),f=o.width,s=o.height,u=n.offsetWidth,r=n.offsetHeight,c=Math.floor(f),l=Math.floor(s);if(a.width!==c||a.height!==l||a.offsetWidth!==u||a.offsetHeight!==r){var d={width:c,height:l,offsetWidth:u,offsetHeight:r};h(a,d),i&&Promise.resolve().then((function(){i(h(h({},d),{offsetWidth:u,offsetHeight:r}),n)}))}},b=c(),m=function(){if(t.disabled)v();else{var e=r(b);e!==d&&(v(),d=e),!g&&e&&(g=new l(p)).observe(e)}};return o((function(){m()})),f((function(){m()})),s((function(){v()})),u((function(){return t.disabled}),(function(){m()}),{flush:"post"}),function(){var t;return null===(t=i.default)||void 0===t?void 0:t.call(i)[0]}}}))}}}));
