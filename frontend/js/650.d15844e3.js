"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[650],{650:function(t,s,a){a.r(s),a.d(s,{default:function(){return C}});var i=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",[a("council-list")],1)},l=[],c=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"mt-10 container"},[t.councils?a("div",{staticClass:"mb-4"},[t._m(0),a("div",{staticClass:"p-3 card2-body"},[a("div",{staticClass:"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-6 gap-3 sm:gap-3 md:gap-7"},t._l(t.councils,(function(s,i){return a("div",{key:i,staticClass:"mb-4 mb-xl-0"},[a("div",{staticClass:"card2 card-blog card-plain"},[a("div",{staticClass:"relative"},[a("router-link",{staticClass:"shadow-xl block rounded-xl",attrs:{to:{path:"/council",query:{name:s.council_name,id:s.id}}}},[a("img",{staticClass:"shadow w-full img-fluid rounded-xl",attrs:{src:s.logo.desktop_image,alt:"img-blur-shadow"}})])],1),a("div",{staticClass:"px-1 pb-0 card2-body"},[a("ul",{staticClass:"list-group"},[a("li",{staticClass:"pt-0 text-sm border-0 list-group-item ps-0 text-dark mb-2"},[a("strong",{staticClass:"text-dark text-xl"},[t._v(t._s(s.council_name))])]),a("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[a("strong",{staticClass:"text-dark"},[t._v("Email:")]),t._v("   "+t._s(s.email)+" ")])])])])])})),0)])]):a("div",{staticClass:"flex justify-center items-center mt-64"},[a("Spinner",{attrs:{name:"line-scale",color:"#82a3e0"}})],1),t.council_companies?a("div",{staticClass:"flex justify-center items-center"},[0==t.council_companies.length?a("h5",{staticClass:"mb-1 text-dark"},[t._v(" No Councils ")]):t._e()]):t._e()])},e=[function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"p-5 pb-0 card-header text-center"},[a("h5",{staticClass:"mb-1 text-dark"},[t._v("Business Councils")])])}],n=a(6931),r={name:"council-list",data(){return{councils:null}},methods:{get_councils(){n.Z.get("public/councils").then((t=>{console.log(t.data),this.councils=t.data.data})).catch((t=>{console.log(t)}))}},created(){this.get_councils()}},o=r,u=a(3736),d=(0,u.Z)(o,c,e,!1,null,null,null),m=d.exports,p={name:"councils",components:{CouncilList:m}},g=p,_=(0,u.Z)(g,i,l,!1,null,"9d61d2fc",null),C=_.exports}}]);
//# sourceMappingURL=650.d15844e3.js.map