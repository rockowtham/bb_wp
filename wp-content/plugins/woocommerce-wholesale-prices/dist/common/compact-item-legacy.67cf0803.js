!function(){function t(n){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(n)}function n(t,n){return function(t){if(Array.isArray(t))return t}(t)||function(t,n){var e=null==t?null:"undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(null!=e){var r,o,c,i,a=[],l=!0,u=!1;try{if(c=(e=e.call(t)).next,0===n){if(Object(e)!==e)return;l=!1}else for(;!(l=(r=c.call(e)).done)&&(a.push(r.value),a.length!==n);l=!0);}catch(t){u=!0,o=t}finally{try{if(!l&&null!=e.return&&(i=e.return(),Object(i)!==i))return}finally{if(u)throw o}}return a}}(t,n)||function(t,n){if(!t)return;if("string"==typeof t)return e(t,n);var r=Object.prototype.toString.call(t).slice(8,-1);"Object"===r&&t.constructor&&(r=t.constructor.name);if("Map"===r||"Set"===r)return Array.from(t);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return e(t,n)}(t,n)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function e(t,n){(null==n||n>t.length)&&(n=t.length);for(var e=0,r=new Array(n);e<n;e++)r[e]=t[e];return r}function r(n,e,r){return(e=function(n){var e=function(n,e){if("object"!==t(n)||null===n)return n;var r=n[Symbol.toPrimitive];if(void 0!==r){var o=r.call(n,e||"default");if("object"!==t(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===e?String:Number)(n)}(n,"string");return"symbol"===t(e)?e:String(e)}(e))in n?Object.defineProperty(n,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):n[e]=r,n}System.register(["../apps/settings/index-legacy.14a49b0f.js","./createContext-legacy.fb1b2385.js","./motion-legacy.bd505853.js"],(function(t,e){"use strict";var o,c,i,a,l,u,s,f,m,v,d,p,y,b,g,S,h,I,j,x,z;return{setters:[function(t){o=t.G,c=t.J,i=t.A,a=t.d,l=t.L,u=t.aB,s=t.b,f=t.D,m=t.P,v=t.ak,d=t.ac,p=t._},function(t){y=t.c},function(t){b=t.f,g=t.h,S=t.j,h=t.k,I=t.l,j=t.m,x=t.n,z=t.o}],execute:function(){t("g",(function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{focus:!0},e=t.componentCls,o="".concat(e,"-compact");return r({},o,p(p({},function(t,n,e){var o,c=e.focusElCls,i=e.focus,a=e.borderElCls,l=a?"> *":"",u=["hover",i?"focus":null,"active"].filter(Boolean).map((function(t){return"&:".concat(t," ").concat(l)})).join(",");return r(o={},"&-item:not(".concat(n,"-last-item)"),{marginInlineEnd:-t.lineWidth}),r(o,"&-item",p(p(r({},u,{zIndex:2}),c?r({},"&".concat(c),{zIndex:2}):{}),r({},"&[disabled] ".concat(l),{zIndex:0}))),o}(t,o,n)),function(t,n,e){var o,c=e.borderElCls,i=c?"> ".concat(c):"";return r(o={},"&-item:not(".concat(n,"-first-item):not(").concat(n,"-last-item) ").concat(i),{borderRadius:0}),r(o,"&-item:not(".concat(n,"-last-item)").concat(n,"-first-item"),r({},"& ".concat(i,", &").concat(t,"-sm ").concat(i,", &").concat(t,"-lg ").concat(i),{borderStartEndRadius:0,borderEndEndRadius:0})),r(o,"&-item:not(".concat(n,"-first-item)").concat(n,"-last-item"),r({},"& ".concat(i,", &").concat(t,"-sm ").concat(i,", &").concat(t,"-lg ").concat(i),{borderStartStartRadius:0,borderEndStartRadius:0})),o}(e,o,n)))}));var e=function(t){return r({},t.componentCls,{display:"inline-flex","&-block":{display:"flex",width:"100%"},"&-vertical":{flexDirection:"column"}})},C=function(t){var n=t.componentCls;return r({},n,r({display:"inline-flex","&-rtl":{direction:"rtl"},"&-vertical":{flexDirection:"column"},"&-align":{flexDirection:"column","&-center":{alignItems:"center"},"&-start":{alignItems:"flex-start"},"&-end":{alignItems:"flex-end"},"&-baseline":{alignItems:"baseline"}}},"".concat(n,"-space-item"),{"&:empty":{display:"none"}}))},E=o("Space",(function(t){return[C(t),e(t)]})),O=Object.prototype.hasOwnProperty;function w(t){if(null==t)return!0;if(b(t)&&(g(t)||"string"==typeof t||"function"==typeof t.splice||S(t)||h(t)||I(t)))return!t.length;var n=j(t);if("[object Map]"==n||"[object Set]"==n)return!t.size;if(x(t))return!z(t).length;for(var e in t)if(O.call(t,e))return!1;return!0}var A=y(null),D=(t("u",(function(t,n){var e=A.useInject(),o=c((function(){var o;if(!e||w(e))return"";var c=e.compactDirection,a=e.isFirstItem,l=e.isLastItem,u="vertical"===c?"-vertical-":"-";return i((r(o={},"".concat(t.value,"-compact").concat(u,"item"),!0),r(o,"".concat(t.value,"-compact").concat(u,"first-item"),a),r(o,"".concat(t.value,"-compact").concat(u,"last-item"),l),r(o,"".concat(t.value,"-compact").concat(u,"item-rtl"),"rtl"===n.value),o))}));return{compactSize:c((function(){return null==e?void 0:e.compactSize})),compactDirection:c((function(){return null==e?void 0:e.compactDirection})),compactItemClassnames:o}})),t("N",a({name:"NoCompactStyle",setup:function(t,n){var e=n.slots;return A.useProvide(null),function(){var t;return null===(t=e.default)||void 0===t?void 0:t.call(e)}}})),a({name:"CompactItem",props:{compactSize:String,compactDirection:m.oneOf(v("horizontal","vertical")).def("horizontal"),isFirstItem:d(),isLastItem:d()},setup:function(t,n){var e=n.slots;return A.useProvide(t),function(){var t;return null===(t=e.default)||void 0===t?void 0:t.call(e)}}}));a({name:"ASpaceCompact",inheritAttrs:!1,props:{prefixCls:String,size:{type:String},direction:m.oneOf(v("horizontal","vertical")).def("horizontal"),align:m.oneOf(v("start","end","center","baseline")),block:{type:Boolean,default:void 0}},setup:function(t,e){var o=e.attrs,a=e.slots,m=l("space-compact",t),v=m.prefixCls,d=m.direction,p=A.useInject(),y=n(E(v),2),b=y[0],g=y[1],S=c((function(){var n;return i(v.value,g.value,(r(n={},"".concat(v.value,"-rtl"),"rtl"===d.value),r(n,"".concat(v.value,"-block"),t.block),r(n,"".concat(v.value,"-vertical"),"vertical"===t.direction),n))}));return function(){var n,e=u((null===(n=a.default)||void 0===n?void 0:n.call(a))||[]);return 0===e.length?null:b(s("div",f(f({},o),{},{class:[S.value,o.class]}),[e.map((function(n,r){var o,c=n&&n.key||"".concat(v.value,"-item-").concat(r),i=!p||w(p);return s(D,{key:c,compactSize:null!==(o=t.size)&&void 0!==o?o:"middle",compactDirection:t.direction,isFirstItem:0===r&&(i||(null==p?void 0:p.isFirstItem)),isLastItem:r===e.length-1&&(i||(null==p?void 0:p.isLastItem))},{default:function(){return[n]}})}))]))}}})}}}))}();