!function(e){var t={};function a(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,a),r.l=!0,r.exports}a.m=e,a.c=t,a.d=function(e,t,n){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)a.d(n,r,function(t){return e[t]}.bind(null,r));return n},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="",a(a.s=21)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t,a){"use strict";a.d(t,"d",(function(){return r})),a.d(t,"a",(function(){return l})),a.d(t,"b",(function(){return c})),a.d(t,"c",(function(){return o}));var n=a(8),r="useful-blocks",l="useful-blocks",c="#f6a068",o=Object(n.applyFilters)("pb-hook.isPro",!1)},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){!function(){e.exports=this.wp.blockEditor}()},function(e,t,a){var n;!function(){"use strict";var a={}.hasOwnProperty;function r(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var l=typeof n;if("string"===l||"number"===l)e.push(n);else if(Array.isArray(n)&&n.length){var c=r.apply(null,n);c&&e.push(c)}else if("object"===l)for(var o in n)a.call(n,o)&&n[o]&&e.push(o)}}return e.join(" ")}e.exports?(r.default=r,e.exports=r):void 0===(n=function(){return r}.apply(t,[]))||(e.exports=n)}()},function(e,t){!function(){e.exports=this.wp.blocks}()},,function(e,t){!function(){e.exports=this.wp.hooks}()},function(e,t,a){"use strict";var n=a(0),r=a(2),l=a(1);t.a=function(e){return Object(n.createElement)(n.Fragment,null,l.c?e.children:Object(n.createElement)("div",{className:"pb-free-noticeBox"},Object(n.createElement)("a",{href:"https://ponhiro.com/useful-blocks/#download-link",target:"_blank",rel:"noreferrer noopener"},Object(r.__)("In the Pro version,",l.d)),e.description||"",Object(n.createElement)("div",{className:"pb-free-ctrlPreview"},e.children)))}},,,,,,,,,,,,function(e,t,a){"use strict";a.r(t);var n=a(0),r=a(2),l=a(6),c=a(4),o=a(1),i=Object(n.createElement)("svg",{viewBox:"0 0 56 56"},Object(n.createElement)("path",{d:"M6.53,50.98c-0.55,0-1-0.45-1-1V6.02c0-0.55,0.45-1,1-1s1,0.45,1,1v43.97C7.53,50.54,7.08,50.98,6.53,50.98z"}),Object(n.createElement)("g",null,Object(n.createElement)("path",{d:"M11.53,11.81v7.13c0,0.55,0.45,1,1,1h10.95c0.55,0,1-0.45,1-1v-7.13c0-0.55-0.45-1-1-1H12.53 C11.97,10.81,11.53,11.26,11.53,11.81z"}),Object(n.createElement)("path",{d:"M11.53,24.44v7.12c0,0.55,0.45,1,1,1h23.95c0.55,0,1-0.45,1-1v-7.12c0-0.55-0.45-1-1-1H12.53 C11.97,23.44,11.53,23.89,11.53,24.44z"}),Object(n.createElement)("path",{d:"M11.53,37.06v7.13c0,0.55,0.45,1,1,1h35.95c0.55,0,1-0.45,1-1v-7.13c0-0.55-0.45-1-1-1H12.53 C11.97,36.06,11.53,36.51,11.53,37.06z"}))),b=a(3),s=a(9),u=function(e){var t=e.colset;return Object(n.createElement)("span",{className:"pb-bar-graph","data-colset":t,"data-bg":"1"},Object(n.createElement)("span",{className:"pb-bar-graph__dl","data-bg":"1"},Object(n.createElement)("span",{className:"pb-bar-graph__item"},Object(n.createElement)("span",{className:"pb-bar-graph__dt"},Object(n.createElement)("span",{className:"pb-bar-graph__fill"})),Object(n.createElement)("span",{className:"pb-bar-graph__dd"})),Object(n.createElement)("span",{className:"pb-bar-graph__item"},Object(n.createElement)("span",{className:"pb-bar-graph__dt"},Object(n.createElement)("span",{className:"pb-bar-graph__fill"})),Object(n.createElement)("span",{className:"pb-bar-graph__dd"}))))},p=function(e){var t=e.attributes,a=e.setAttributes,l=t.colSet,i=t.hideTtl,p=t.ttlData,d=t.bg,m=t.barBg,f=t.valuePos,h=t.labelPos,j={left:Object(r.__)("Left justified",o.d),right:Object(r.__)("Right justified",o.d)},O={top:Object(r.__)("Top",o.d),inner:Object(r.__)("Inner",o.d)},g=Object(n.createElement)(n.Fragment,null,Object(n.createElement)(b.ToggleControl,{label:Object(r.__)("Color the right side of the graph",o.d),checked:m,onChange:function(e){a({barBg:e})}}),Object(n.createElement)(b.BaseControl,null,Object(n.createElement)(b.BaseControl.VisualLabel,null,Object(r.__)("The position of the label on the left",o.d)),Object(n.createElement)(b.ButtonGroup,{className:"pb-btn-group"},Object.keys(O).map((function(e){return Object(n.createElement)(b.Button,{key:"key_".concat(e),isPrimary:e===h,onClick:function(){a({labelPos:e})}},O[e])})))),Object(n.createElement)(b.BaseControl,null,Object(n.createElement)(b.BaseControl.VisualLabel,null,Object(r.__)("The position of the label on the right",o.d)),Object(n.createElement)(b.ButtonGroup,{className:"pb-btn-group"},Object.keys(j).map((function(e){return Object(n.createElement)(b.Button,{key:"key_".concat(e),isPrimary:e===f,onClick:function(){a({valuePos:e})}},j[e])})))));return Object(n.createElement)(n.Fragment,null,Object(n.createElement)(c.InspectorControls,null,Object(n.createElement)(b.PanelBody,{title:Object(r.__)("Color set",o.d),initialOpen:!0},Object(n.createElement)(b.BaseControl,null,Object(n.createElement)(b.ButtonGroup,{className:"pb-panel--colorSet -bar-graph"},["y","p","g","b","1"].map((function(e){var t=l===e,r="pb-iconbox-colset-"+e;return Object(n.createElement)("div",{className:"__btnBox",key:"key_style_".concat(e)},Object(n.createElement)("button",{type:"button",id:r,className:"__btn",onClick:function(){a({colSet:e})}}),Object(n.createElement)("label",{htmlFor:r,className:"__label","data-selected":t||null},Object(n.createElement)(u,{colset:e})))}))))),Object(n.createElement)(b.PanelBody,{title:Object(r.__)("Title settings",o.d),initialOpen:!0},Object(n.createElement)(b.ToggleControl,{label:Object(r.__)("Don't show",o.d),checked:i,onChange:function(e){a({hideTtl:e})}}),Object(n.createElement)(b.ToggleControl,{label:Object(r.__)("Add a border below",o.d),checked:"border"===p,onChange:function(e){a(e?{ttlData:"border"}:{ttlData:"normal"})}})),Object(n.createElement)(b.PanelBody,{title:Object(r.__)("Graph settings",o.d),initialOpen:!0},Object(n.createElement)(b.ToggleControl,{label:Object(r.__)("Add background color",o.d),checked:d,onChange:function(e){a({bg:e})}}),Object(n.createElement)(s.a,{description:Object(r.__)("you can make more detailed settings.",o.d)},g))))},d=a(5),m=a.n(d),f="pb-bar-graph";Object(l.registerBlockType)("ponhiro-blocks/bar-graph",{title:Object(r.__)("Bar Graph",o.d),icon:{foreground:o.b,src:i},keywords:["ponhiro","bar","graph"],category:o.a,supports:{className:!1},attributes:{colSet:{type:"string",default:"1"},title:{type:"array",source:"children",selector:".pb-bar-graph__title"},hideTtl:{type:"boolean",default:!1},ttlData:{type:"string",default:"border"},bg:{type:"boolean",default:!0},barBg:{type:"boolean",default:!0},valuePos:{type:"string",default:"right"},labelPos:{type:"string",default:"top"}},edit:function(e){var t=e.className,a=e.attributes,l=e.setAttributes,i=a.colSet,b=a.title,s=a.bg,u=a.barBg,d=a.valuePos,h=a.labelPos,j=a.hideTtl,O=a.ttlData,g=m()(f,t);return Object(n.createElement)(n.Fragment,null,Object(n.createElement)(p,e),Object(n.createElement)("div",{className:g,"data-colset":i,"data-bg":s?"1":null},!j&&Object(n.createElement)(c.RichText,{tagName:"div",className:"".concat(f,"__title -").concat(O),placeholder:Object(r.__)("Text…",o.d),value:b,onChange:function(e){return l({title:e})}}),Object(n.createElement)("div",{className:"".concat(f,"__dl"),"data-bg":u?"1":null,"data-label":h,"data-value":d},Object(n.createElement)(c.InnerBlocks,{allowedBlocks:["ponhiro-blocks/bar-graph-item"],templateLock:!1,template:[["ponhiro-blocks/bar-graph-item",{},[]],["ponhiro-blocks/bar-graph-item",{isThin:!0,ratio:40},[]],["ponhiro-blocks/bar-graph-item",{isThin:!0,ratio:30},[]]]}))))},save:function(e){var t=e.attributes,a=t.colSet,r=t.title,l=t.bg,o=t.barBg,i=t.hideTtl,b=t.ttlData,s=t.labelPos,u=t.valuePos;return Object(n.createElement)("div",{className:f,"data-colset":a,"data-bg":l?"1":null},!i&&Object(n.createElement)(c.RichText.Content,{tagName:"div",className:"".concat(f,"__title -").concat(b),"data-ttl":b,value:r}),Object(n.createElement)("dl",{className:"".concat(f,"__dl"),"data-bg":o?"1":null,"data-label":s,"data-value":u},Object(n.createElement)(c.InnerBlocks.Content,null)))}})}]);