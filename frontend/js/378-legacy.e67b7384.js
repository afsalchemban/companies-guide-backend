"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[378],{8378:function(t,s,i){i.r(s),i.d(s,{default:function(){return C}});var c=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",[i("council-list")],1)},a=[],l=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"mt-10 container"},[t.councils?i("div",{staticClass:"mb-4"},[t._m(0),i("div",{staticClass:"p-3 card2-body"},[i("div",{staticClass:"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-6 gap-3 sm:gap-3 md:gap-7"},t._l(t.councils,(function(s,c){return i("div",{key:c,staticClass:"mb-4 mb-xl-0"},[i("div",{staticClass:"card2 card-blog card-plain"},[i("div",{staticClass:"relative"},[i("router-link",{staticClass:"shadow-xl block rounded-xl",attrs:{to:{path:"/council",query:{name:s.council_name,id:s.id}}}},[i("img",{staticClass:"shadow w-full img-fluid rounded-xl",attrs:{src:s.logo.desktop_image,alt:"img-blur-shadow"}})])],1),i("div",{staticClass:"px-1 pb-0 card2-body"},[i("ul",{staticClass:"list-group p-3"},[i("li",{staticClass:"pt-0 text-sm border-0 list-group-item ps-0 text-dark mb-2"},[i("strong",{staticClass:"text-dark text-xl"},[t._v(t._s(s.council_name))])]),i("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[i("strong",{staticClass:"text-dark"},[t._v("Email:")]),t._v("   "+t._s(s.email)+" ")])])])])])})),0)])]):i("div",{staticClass:"flex justify-center items-center mt-64"},[i("Spinner",{attrs:{name:"line-scale",color:"#82a3e0"}})],1),t.council_companies?i("div",{staticClass:"flex justify-center items-center"},[0==t.council_companies.length?i("h5",{staticClass:"mb-1 text-dark"},[t._v(" No Councils ")]):t._e()]):t._e()])},e=[function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"p-5 pb-0 card-header text-center"},[i("h5",{staticClass:"mb-1 text-dark"},[t._v("Business Councils")])])}],n=i(6931),o={name:"council-list",data:function(){return{councils:null}},methods:{get_councils:function(){var t=this;n.Z.get("public/councils").then((function(s){console.log(s.data),t.councils=s.data.data})).catch((function(t){console.log(t)}))}},created:function(){this.get_councils()}},r=o,u=i(3736),d=(0,u.Z)(r,l,e,!1,null,null,null),m=d.exports,p={name:"councils",components:{CouncilList:m}},g=p,_=(0,u.Z)(g,c,a,!1,null,"9d61d2fc",null),C=_.exports}}]);
//# sourceMappingURL=378-legacy.e67b7384.js.map