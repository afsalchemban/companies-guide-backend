"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[810],{4810:function(t,e,s){s.r(e),s.d(e,{default:function(){return y}});var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"mb-20"},[s("AppBanner"),s("div",{staticClass:"container mt-20 mx-auto"},[s("DirectoryForm"),s("div",{staticClass:"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-6 gap-3 sm:gap-3 md:gap-7"},t._l(t.companies,(function(t){return s("DirectoryCompany",{key:t.id,staticClass:"mb-7",attrs:{company:t}})})),1)],1)],1)},r=[],i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("div",{staticClass:"shadow-lg hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark"},[a("img",{staticClass:"w-full Cimg cursor-pointer",attrs:{src:s(9719),alt:"Sunset in the mountains"}}),a("div",{staticClass:"px-3 sm:px-4 py-3 sm:py-6 leading-none"},[a("div",{staticClass:"font-general-semibold leading-normal text-sm sm:text-md md:text-base lg:text-lg xl:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-2"},[t._v(" "+t._s(t.company.name)+" ")]),a("div",{staticClass:"text-xs sm:text-sm md:text-md lg:text-base xl:text-lg"},[a("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(9193)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(t.company.phone_number)+" ")])]),a("div",{staticClass:"flex justify-start items-center text-left mb-2 mr-0 sm:mr-1"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(1661)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(t.company.email)+" ")])]),t._m(0),t._m(1)])]),t._m(2)])])},n=[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(1983)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" https://www.echo-marine.net ")])])},function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(186)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" Dubai ")])])},function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"px-3 sm:px-6 pt-2 sm:pt-4 pb-1 sm:pb-2 bg-gray-200 text-sm font-semibold text-gray-700 cursor-pointer text-center sm:text-center"},[s("span",{staticClass:"inline-block bg-gray-200 txt-mobile text-sm font-semibold text-gray-700"},[t._v("Shipping Services")])])}],m={props:["company"]},l=m,c=s(1001),o=(0,c.Z)(l,i,n,!1,null,null,null),x=o.exports,d=s(4780),g=s(9583),p={name:"directory",data:function(){return{companies:[]}},components:{DirectoryCompany:x,DirectoryForm:d.Z,AppBanner:g.Z},methods:{get_directory:function(t){var e=this;try{this.$store.dispatch("GETCOMPANY",t).then((function(t){console.log(t.data.data),e.companies=t.data.data}))}catch(s){console.log(s.message)}}},mounted:function(){this.get_directory(3)}},u=p,f=(0,c.Z)(u,a,r,!1,null,null,null),y=f.exports},186:function(t,e,s){t.exports=s.p+"img/location.30755832.svg"},1661:function(t,e,s){t.exports=s.p+"img/mail.ed29927b.svg"},9193:function(t,e,s){t.exports=s.p+"img/phone.373fa903.svg"},1983:function(t,e,s){t.exports=s.p+"img/web.01431371.svg"}}]);
//# sourceMappingURL=810-legacy.7b1a555d.js.map