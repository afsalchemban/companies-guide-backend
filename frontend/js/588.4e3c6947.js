"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[588],{588:function(t,e,s){s.r(e),s.d(e,{default:function(){return b}});var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"mb-20"},[s("AppBanner"),s("div",{staticClass:"container mt-20 mx-auto"},[s("DirectoryForm"),t.companies?s("div",{staticClass:"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-6 gap-3 sm:gap-3 md:gap-7"},t._l(t.companies,(function(t){return s("DirectoryCompany",{key:t.id,staticClass:"mb-7",attrs:{company:t}})})),1):s("div",{staticClass:"flex justify-center items-center mt-64"},[s("Spinner",{attrs:{name:"line-scale",color:"#82a3e0"}})],1),t.companies?s("div",{staticClass:"flex justify-center items-center"},[0==t.companies.length?s("h5",{staticClass:"mb-1 text-dark"},[t._v(" No Companies ")]):t._e()]):t._e()],1)],1)},r=[],i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("div",{staticClass:"shadow-lg relative hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark"},[a("img",{staticClass:"w-full Cimg cursor-pointer",attrs:{src:s(9719),alt:"Sunset in the mountains"}}),a("UpdateLogo"),a("div",{staticClass:"px-3 sm:px-4 py-3 sm:py-6 leading-none"},[a("div",{staticClass:"font-general-semibold leading-normal text-sm sm:text-md md:text-base lg:text-lg xl:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-2"},[t._v(" "+t._s(t.company.name)+" ")]),a("div",{staticClass:"text-xs sm:text-sm md:text-md lg:text-base xl:text-lg"},[a("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(9193)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(t.company.phone_number)+" ")])]),a("div",{staticClass:"flex justify-start items-center text-left mb-2 mr-0 sm:mr-1"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(1661)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(t.company.email)+" ")])]),t._m(0),t._m(1)])]),t._m(2)],1)])},n=[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(1983)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" https://www.echo-marine.net ")])])},function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[a("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(186)}}),a("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" Dubai ")])])},function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"px-3 sm:px-6 pt-2 sm:pt-4 pb-1 sm:pb-2 bg-gray-200 text-sm font-semibold text-gray-700 cursor-pointer text-center sm:text-center"},[s("span",{staticClass:"inline-block bg-gray-200 txt-mobile text-sm font-semibold text-gray-700"},[t._v("Shipping Services")])])}],m=s(5450),l={props:["company"],components:{UpdateLogo:m.Z}},c=l,o=s(3736),x=(0,o.Z)(c,i,n,!1,null,null,null),d=x.exports,g=s(4015),p=s(210),u={name:"directory",data(){return{companies:[]}},components:{DirectoryCompany:d,DirectoryForm:g.Z,AppBanner:p.Z},methods:{get_directory(t){try{this.$store.dispatch("GETCOMPANY",t).then((t=>{console.log(t.data.data),this.companies=t.data.data}))}catch(e){console.log(e.message)}}},mounted(){this.get_directory(3)}},f=u,y=(0,o.Z)(f,a,r,!1,null,null,null),b=y.exports},186:function(t,e,s){t.exports=s.p+"img/location.30755832.svg"},1661:function(t,e,s){t.exports=s.p+"img/mail.ed29927b.svg"},9193:function(t,e,s){t.exports=s.p+"img/phone.373fa903.svg"},1983:function(t,e,s){t.exports=s.p+"img/web.01431371.svg"}}]);
//# sourceMappingURL=588.4e3c6947.js.map