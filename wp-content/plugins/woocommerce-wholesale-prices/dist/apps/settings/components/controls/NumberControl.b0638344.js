import{d as V,t as g,r as i,o as c,c as f,a as v,b as _,u as t,p as k,i as y}from"../../index.7e5fa022.js";import"../../../../common/settings-store.2e02aea6.js";/* empty css                                                                                      */import"../../../../common/DnDDataTableControl.vue_vue_type_style_index_0_scoped_1e9aff06_lang.20d3a2f9.js";/* empty css                                                                                                 */import{_ as B}from"../../../../common/LabelControl.vue_vue_type_script_setup_true_lang.17d7dea1.js";/* empty css                                                                                        */import{A as D}from"../../../../common/index.0c111eb2.js";import"../../../../common/index.d7c7b51e.js";import"../../../../common/motion.0613b233.js";import"../../../../common/DownOutlined.bfa465e3.js";import"../../../../common/isMobile.358fd6c2.js";import"../../../../common/warning.ed311ba9.js";import"../../../../common/KeyCode.5c67594e.js";import"../../../../common/FormItemContext.35071f2d.js";import"../../../../common/createContext.d5228530.js";import"../../../../common/statusUtils.d389f965.js";import"../../../../common/index.cce61528.js";import"../../../../common/compact-item.42ee0b0f.js";const H={class:"wwp-row-handle"},A={class:"wwp-left-content"},I={class:"wwp-right-content"},L=["innerHTML"],Z=V({__name:"NumberControl",props:{params:{type:Object,required:!0}},emits:["input","fieldData"],setup(h,{emit:s}){var n,p,l;const b=h,{params:w}=g(b),e=w.value,a=i((n=e.default)!=null?n:""),x=i((p=e.step)!=null?p:1),C=i((l=e.disabled)!=null?l:!1),o=i([]);a.value!==""&&(o.value[e.id]=a.value,s("fieldData",o.value));const r=()=>{o.value[e.id]=a,s("fieldData",o.value)};return(M,m)=>{var d,u;return c(),f("div",H,[v("div",A,[_(t(B),{params:t(e)},null,8,["params"])]),v("div",I,[_(t(D),{id:t(e).id,value:a.value,"onUpdate:value":m[0]||(m[0]=N=>a.value=N),name:t(e).id,placeholder:t(e).placeholder,min:t(e).min,max:t(e).max,step:x.value,disabled:C.value,onInput:r,onChange:r},null,8,["id","value","name","placeholder","min","max","step","disabled"]),t(e).description!=="undefined"?(c(),f("p",{key:0,innerHTML:t(k)((u=(d=t(e))==null?void 0:d.description)!=null?u:"")},null,8,L)):y("",!0)])])}}});export{Z as default};
