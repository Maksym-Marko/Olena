(()=>{"use strict";var e,t={483:()=>{const e=window.wp.blocks,t=JSON.parse('{"u2":"olena/animated-section-horizontal"}'),n=window.wp.element,o=window.wp.i18n,a=window.wp.blockEditor,r=window.wp.components;(0,e.registerBlockType)(t.u2,{edit:function({attributes:e,setAttributes:t}){const l=(0,a.useBlockProps)();return[(0,n.createElement)(a.InspectorControls,{key:"mx-settings"},(0,n.createElement)(r.PanelBody,{title:(0,o.__)("Section Options","olena"),initialOpen:!1},(0,n.createElement)(r.PanelRow,null,(0,n.createElement)(r.RadioControl,{label:(0,o.__)("Start position of animation","olena"),help:(0,o.__)("eg. Center of a element and Top of the screen","olena"),selected:e.start_position,options:[{label:"Center Top",value:"center top"},{label:"Top Top",value:"top top"},{label:"Top 20%",value:"top 20%"},{label:"Top Center",value:"top center"},{label:"Top 70%",value:"top 70%"}],onChange:e=>t({start_position:e})})))),(0,n.createElement)("div",{...l,key:"mx-main-content","data-extras":e.extras,"data-start-position":e.start_position},(0,n.createElement)("div",{className:"mx-animated-horizontal-slider"},(0,n.createElement)(a.InnerBlocks,null)))]},save:function({attributes:e}){const t=a.useBlockProps.save();return(0,n.createElement)("div",{...t,"data-extras":e.extras,"data-start-position":e.start_position},(0,n.createElement)("div",{className:"mx-animated-horizontal-slider"},(0,n.createElement)(a.InnerBlocks.Content,null)))}})}},n={};function o(e){var a=n[e];if(void 0!==a)return a.exports;var r=n[e]={exports:{}};return t[e](r,r.exports,o),r.exports}o.m=t,e=[],o.O=(t,n,a,r)=>{if(!n){var l=1/0;for(c=0;c<e.length;c++){n=e[c][0],a=e[c][1],r=e[c][2];for(var i=!0,s=0;s<n.length;s++)(!1&r||l>=r)&&Object.keys(o.O).every((e=>o.O[e](n[s])))?n.splice(s--,1):(i=!1,r<l&&(l=r));if(i){e.splice(c--,1);var p=a();void 0!==p&&(t=p)}}return t}r=r||0;for(var c=e.length;c>0&&e[c-1][2]>r;c--)e[c]=e[c-1];e[c]=[n,a,r]},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={278:0,436:0};o.O.j=t=>0===e[t];var t=(t,n)=>{var a,r,l=n[0],i=n[1],s=n[2],p=0;if(l.some((t=>0!==e[t]))){for(a in i)o.o(i,a)&&(o.m[a]=i[a]);if(s)var c=s(o)}for(t&&t(n);p<l.length;p++)r=l[p],o.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return o.O(c)},n=self.webpackChunkolena_theme=self.webpackChunkolena_theme||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})();var a=o.O(void 0,[436],(()=>o(483)));a=o.O(a)})();