(function(){"use strict";var t={1204:function(t,e,r){r.d(e,{Z:function(){return c}});var a=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("button",[t._v(t._s(t.title))])},s=[],o={props:["title"],data:()=>({})},n=o,i=r(3736),l=(0,i.Z)(n,a,s,!1,null,"11405d52",null),c=l.exports},4805:function(t,e,r){r.d(e,{Z:function(){return b}});var a=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{staticClass:"flex flex-col sm:justify-between items-center text-center sm:flex-row"},[r("BannerSlider")],1)])},s=[],o=r(775),n=r.n(o),i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("hooper",[a("slide",{staticClass:"relative"},[a("img",{attrs:{src:r(7082),alt:""}}),a("div",{staticClass:"text-center leading-8 company-txt"},[a("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" Azizi Real Estate Company ")]),a("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),a("slide",{staticClass:"relative"},[a("img",{attrs:{src:r(519),alt:""}}),a("div",{staticClass:"text-center leading-8 company-txt"},[a("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" ATA Real Estate Company ")]),a("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),a("slide",{staticClass:"relative"},[a("img",{attrs:{src:r(2730),alt:""}}),a("div",{staticClass:"text-center leading-8 company-txt"},[a("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" Food Company ")]),a("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),a("slide",{staticClass:"relative"},[a("img",{attrs:{src:r(9719),alt:""}}),a("div",{staticClass:"text-center leading-8 company-txt"},[a("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" SER Real Estate Company ")]),a("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),a("slide",{staticClass:"relative"},[a("img",{attrs:{src:r(9719),alt:""}}),a("div",{staticClass:"text-center leading-8 company-txt"},[a("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" Real Foodstuff Company ")]),a("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),a("slide",{staticClass:"relative text-center"},[a("img",{attrs:{src:r(7007),alt:""}}),a("div",{staticClass:"text-center leading-8 company-txt"},[a("h1",{staticClass:"font-general-semibold text-lg md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" CRC Contracting Company ")]),a("p",{staticClass:"font-general-medium mt-3 text-xs sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),a("hooper-pagination",{attrs:{slot:"hooper-addons"},slot:"hooper-addons"})],1)},l=[],c=r(5681),m={components:{Hooper:c.dB,Slide:c.Mi,HooperPagination:c.tl}},d=m,u=r(3736),p=(0,u.Z)(d,i,l,!1,null,null,null),g=p.exports,h={name:"Home",components:{BannerSlider:g},created(){this.theme=localStorage.getItem("theme")||"light"},mounted(){n().replace(),this.theme=localStorage.getItem("theme")||"light"},updated(){n().replace()},methods:{}},x=h,f=(0,u.Z)(x,a,s,!1,null,"65a9b901",null),b=f.exports},245:function(t,e,r){var a=r(8935),s=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"pt-0.5",class:t.appTheme},[r("AppHeader"),r("transition",{attrs:{name:"fade",mode:"out-in"}},[r("router-view",{attrs:{theme:t.appTheme}})],1),r("back-to-top",{staticClass:"shadow-lg",attrs:{visibleoffset:"500",right:"30px",bottom:"20px"}},[r("i",{attrs:{"data-feather":"chevron-up"}})])],1)},o=[],n=r(775),i=r.n(n),l=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("nav",{staticClass:"sm:container sm:mx-auto",attrs:{id:"nav"}},[a("div",{staticClass:"z-10 max-w-screen-lg xl:max-w-screen-xl block sm:flex sm:justify-between sm:items-center my-3 sm:my-6"},[a("div",{staticClass:"flex justify-between items-center px-4 sm:px-0"},[a("div",[a("router-link",{attrs:{to:"/"}},["light"===t.theme?a("img",{staticClass:"w-7 md:w-16",attrs:{src:r(8814),alt:"Dark Logo"}}):a("img",{staticClass:"w-7 md:w-16",attrs:{src:r(8814),alt:"Light Logo"}})])],1),a("div",{staticClass:"flex"},[a("theme-switcher",{staticClass:"block sm:hidden bg-ternary-light dark:bg-ternary-dark hover:bg-hover-light dark:hover:bg-hover-dark hover:shadow-sm px-2 py-2.5 rounded-lg",attrs:{theme:t.theme},on:{themeChanged:t.updateTheme}}),a("div",{staticClass:"sm:hidden"},[a("button",{staticClass:"focus:outline-none",attrs:{type:"button","aria-label":"Hamburger Menu"},on:{click:function(e){t.isOpen=!t.isOpen}}},[a("svg",{staticClass:"h-7 w-7 fill-current text-secondary-dark dark:text-ternary-light pl-2",attrs:{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"}},[t.isOpen?a("path",{attrs:{"fill-rule":"evenodd",d:"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z","clip-rule":"evenodd"}}):t._e(),t.isOpen?t._e():a("path",{attrs:{"fill-rule":"evenodd",d:"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"}})])])])],1)]),a("AppHeaderLinks",{attrs:{showModal:t.showModal,isOpen:t.isOpen},on:{closeit:function(e){return t.closeMenu2(e)}}}),a("div",{staticClass:"hidden sm:flex justify-between items-center md:flex-row"},[t.access?a("a",{staticClass:"font-general-medium block text-left sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button"},on:{click:function(e){return t.logout()}}},[t._v("Logout")]):a("router-link",{staticClass:"font-general-medium block text-left sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{to:"/login"}},[t._v("Login")]),t.access?a("router-link",{attrs:{to:{path:"/council",query:{name:t.name,id:t.userId}}}},[a("img",{staticClass:"rounded-full cursor-pointer w-7 md:w-16 shadow-lg",attrs:{alt:"",src:t.userImg}})]):t._e()],1)],1)])},c=[],m=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("a",{attrs:{href:"#","aria-label":"Theme Switcher"},on:{click:function(e){return e.preventDefault(),t.toggleTheme.apply(null,arguments)}}},["light"===t.theme?r("i",{staticClass:"theme-icon text-liText-ternary-dark hover:text-gray-400 dark:text-liText-ternary-light dark:hover:text-liBorder-primary-light w-5",attrs:{"data-feather":"moon"}}):r("i",{staticClass:"theme-icon text-gray-200 hover:text-gray-50 w-5",attrs:{"data-feather":"sun"}})])},d=[],u={props:{theme:{type:String,required:!0}},methods:{toggleTheme(){const t="light"===this.theme?"dark":"light";localStorage.setItem("theme",t),this.$emit("themeChanged",t),this.$router.go()}}},p=u,g=r(3736),h=(0,g.Z)(p,m,d,!1,null,null,null),x=h.exports,f=function(){var t=this,e=t.$createElement,r=t._self._c||e;return t.closeit?r("div",{staticClass:"m-0 sm:flex p-5 sm:p-0 justify-center items-center shadow-lg sm:shadow-none",class:t.isOpen?"block":"hidden"},[r("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 pt-3 sm:pt-2",attrs:{role:"button",exact:"","aria-label":"Projects"},on:{click:function(e){return t.closeMenu("/")}}},[t._v("Home")]),r("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button","aria-label":"Projects"},on:{click:function(e){return t.closeMenu("/councils")}}},[t._v("BCN")]),r("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button","aria-label":"Projects"},on:{click:function(e){return t.closeMenu("/directory")}}},[t._v("Directory")]),r("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button","aria-label":"Contact"},on:{click:function(e){return t.closeMenu("/contact")}}},[t._v("Contact")]),r("a",{staticClass:"font-general-medium block sm:hidden block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button"},on:{click:function(e){return t.closeMenu("/login")}}},[t._v("Login")])]):t._e()},b=[],y={data(){return{closeit:!0}},props:["showModal","isOpen"],methods:{closeMenu(t){this.$emit("closeit",!1),this.$router.push(t)}}},v=y,C=(0,g.Z)(v,f,b,!1,null,"e9464e1a",null),k=C.exports,_=r(4665),w={components:{ThemeSwitcher:x,AppHeaderLinks:k},data(){return{isOpen:!1,theme:"",modal:!1}},computed:{currentRouteName(){return this.$route.name},...(0,_.rn)({access:t=>t.auth.accesstoken,name:t=>t.auth.name,userImg:t=>t.auth.user_img,userId:t=>t.auth.council_id})},created(){this.theme=localStorage.getItem("theme")||"light"},mounted(){i().replace(),this.theme=localStorage.getItem("theme")||"light"},methods:{closeMenu2(t){console.log(t),this.isOpen=t},logout(){try{this.$store.dispatch("LOGOUT").then((t=>{this.$router.push({name:"Login"})}))}catch(t){console.log(t)}},updateTheme(t){this.theme=t},showModal(){this.modal?(document.getElementsByTagName("html")[0].classList.remove("overflow-y-hidden"),this.modal=!1):(document.getElementsByTagName("html")[0].classList.add("overflow-y-hidden"),this.modal=!0)}},updated(){i().replace()}},j=w,S=(0,g.Z)(j,l,c,!1,null,"aed1882a",null),P=S.exports,T={components:{AppHeader:P},data:()=>({appTheme:localStorage.getItem("theme")}),mounted(){i().replace()},updated(){i().replace()}},E=T,A=(0,g.Z)(E,s,o,!1,null,null,null),I=A.exports,O=r(2809),B=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"mx-auto mb-20"},[r("AppBanner",{staticClass:"mb-5 sm:mb-8"}),r("ProjectsGrid")],1)},M=[],H=r(4805),$=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("section",{staticClass:"container mx-auto sm:max-w-none"},[r("div",{staticClass:"pt-5 sm:pt-14"},[t._m(0),r("div",{staticClass:"mt-3 sm:mb-0 mb-5 sm:mt-10"},[r("div",{staticClass:"border-b border-primary-light dark:border-secondary-dark pb-3 gap-2"},[r("div",{staticClass:"flex justify-end"},[r("router-link",{staticClass:"flex items-center px-2 py-1 sm:px-4 sm:py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-sm sm:text-md duration-300",attrs:{to:"/councils","aria-label":"see all"}},[r("Button",{staticClass:"text-white text-xs sm:text-md txt-mobile2",attrs:{title:"Show More"}})],1)],1)])]),r("BCSlider")],1),r("div",{staticClass:"pt-5 sm:pt-14"},[t._m(1),r("div",{staticClass:"mt-3 sm:mb-0 mb-5 sm:mt-10"},[r("div",{staticClass:"border-b border-primary-light dark:border-secondary-dark pb-3 gap-2"},[r("div",{staticClass:"flex justify-end"},[r("router-link",{staticClass:"flex items-center px-2 py-1 sm:px-4 sm:py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-sm sm:text-md duration-300",attrs:{to:"/directory","aria-label":"see all"}},[r("Button",{staticClass:"text-white text-xs sm:text-md txt-mobile2",attrs:{title:"Show More"}})],1)],1)])]),r("CompanySlider")],1),r("div",{staticClass:"pt-5 sm:pt-14"},[t._m(2),r("div",{staticClass:"mt-3 sm:mb-0 mb-5 sm:mt-10"},[r("div",{staticClass:"border-b border-primary-light dark:border-secondary-dark pb-3 gap-2"},[r("div",{staticClass:"flex justify-end"},[r("router-link",{staticClass:"flex items-center px-2 py-1 sm:px-4 sm:py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-sm sm:text-md duration-300",attrs:{to:"/directory","aria-label":"see all"}},[r("Button",{staticClass:"text-white text-xs sm:text-md txt-mobile2",attrs:{title:"Show More"}})],1)],1)])]),r("DirectorySlider")],1),r("div",{staticClass:"pt-5 sm:pt-14"},[t._m(3),r("div",{staticClass:"mt-3 sm:mb-0 mb-5 sm:mt-10"},[r("div",{staticClass:"border-b border-primary-light dark:border-secondary-dark pb-3 gap-2"},[r("div",{staticClass:"flex justify-end"},[r("router-link",{staticClass:"flex items-center px-2 py-1 sm:px-4 sm:py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-sm sm:text-md duration-300",attrs:{to:"/directory","aria-label":"see all"}},[r("Button",{staticClass:"text-white text-xs sm:text-md txt-mobile2",attrs:{title:"Show More"}})],1)],1)])]),r("EventsSlider")],1),r("div",{staticClass:"pt-5 sm:pt-14"},[t._m(4),r("div",{staticClass:"mt-3 sm:mb-0 mb-5 sm:mt-10"},[r("div",{staticClass:"border-b border-primary-light dark:border-secondary-dark pb-3 gap-2"},[r("div",{staticClass:"flex justify-end"},[r("router-link",{staticClass:"flex items-center px-2 py-1 sm:px-4 sm:py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-sm sm:text-md duration-300",attrs:{to:"/directory","aria-label":"see all"}},[r("Button",{staticClass:"text-white text-xs sm:text-md txt-mobile2",attrs:{title:"Show More"}})],1)],1)])]),r("MediaSlider")],1)])},Z=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"text-center"},[r("p",{staticClass:"font-general-semibold text-base md:text-2xl font-semibold mb-0 sm:mb-2 text-ternary-dark dark:text-ternary-light"},[t._v(" Business Councils ")])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"text-center"},[r("p",{staticClass:"font-general-semibold text-base md:text-2xl font-semibold mb-0 sm:mb-2 text-ternary-dark dark:text-ternary-light"},[t._v(" Companies ")])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"text-center"},[r("p",{staticClass:"font-general-semibold text-base md:text-2xl font-semibold mb-0 sm:mb-2 text-ternary-dark dark:text-ternary-light"},[t._v(" Directory ")])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"text-center"},[r("p",{staticClass:"font-general-semibold text-base md:text-2xl font-semibold mb-0 sm:mb-2 text-ternary-dark dark:text-ternary-light"},[t._v(" Events ")])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"text-center"},[r("p",{staticClass:"font-general-semibold text-base md:text-2xl font-semibold mb-0 sm:mb-2 text-ternary-dark dark:text-ternary-light"},[t._v(" Media ")])])}],N=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("hooper",{attrs:{infiniteScroll:!0,settings:t.settings}},t._l(t.companies,(function(e){return r("slide",{key:e.id},[r("router-link",{staticClass:"rounded-xl shadow-lg hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark",attrs:{to:"/projects/single-project","aria-label":"Single Project"}},[r("div",{staticClass:"bg-red-100 relative rounded-t-xl"},[r("img",{staticClass:"rounded-t-xl border-none",attrs:{src:e.logo.desktop_image,alt:e.name}})]),r("div",{staticClass:"text-center px-1 sm:px-4 py-1 sm:py-6 leading-none"},[r("p",{staticClass:"font-general-semibold txt-mobile leading-normal text-sm sm:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-0 sm:mb-2"},[t._v(" "+t._s(e.name)+" ")]),r("span",{staticClass:"font-general-medium txt-mobile2 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(t._s(e.email))])])])],1)})),1)},L=[];const U=[{id:1,title:"Contracting Company",category:"Contracting",img:r(3687)},{id:2,title:"Real Estate company",category:"Real Estate",img:r(2225)},{id:3,title:"Mana Al-Sabti Food Company",category:"Food",img:r(7532)}];var D=U,G=r(5681),Y={props:["singleProjectHeader"],data(){return{projects:D,companies:null,selectedCategory:"",searchProject:"",settings:{itemsToShow:1,breakpoints:{600:{itemsToShow:2},1e3:{itemsToShow:3,pagination:"fraction"}}}}},components:{Slide:G.Mi,Hooper:G.dB},computed:{filteredProjects(){return this.selectedCategory?this.filterProjectsByCategory():this.searchProject?this.filterProjectsBySearch():this.projects}},methods:{filterProjectsByCategory(){return this.projects.filter((t=>{let e=t.category.charAt(0).toUpperCase()+t.category.slice(1);return console.log(e),e.includes(this.selectedCategory)}))},filterProjectsBySearch(){let t=new RegExp(this.searchProject,"i");return this.projects.filter((e=>e.title.match(t)))},get_company_full(t){try{this.$store.dispatch("GETCOMPANY",t).then((t=>{console.log(t.data.data),this.companies=[],t.data.data.forEach((t=>{this.companies.push(t)}))}))}catch(e){console.log(e.message)}}},created(){this.get_company_full([1,2])}},R=Y,q=(0,g.Z)(R,N,L,!1,null,"2ecbe523",null),z=q.exports,F=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("hooper",{attrs:{infiniteScroll:!0,settings:t.settings}},t._l(t.companies,(function(e){return r("slide",{key:e.id},[r("router-link",{staticClass:"rounded-xl shadow-lg hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark",attrs:{to:"/projects/single-project","aria-label":"Single Project"}},[r("div",{staticClass:"bg-red-100 relative rounded-t-xl"},[r("img",{staticClass:"rounded-t-xl border-none",attrs:{src:e.logo.desktop_image,alt:e.name}})]),r("div",{staticClass:"text-center px-1 sm:px-4 py-1 sm:py-6 leading-none"},[r("p",{staticClass:"font-general-semibold txt-mobile leading-normal text-sm sm:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-0 sm:mb-2"},[t._v(" "+t._s(e.council_name)+" ")]),r("span",{staticClass:"font-general-medium txt-mobile2 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(t._s(e.email))])])])],1)})),1)},K=[],W=r(6931),J={props:["singleProjectHeader"],data(){return{projects:D,companies:null,selectedCategory:"",searchProject:"",settings:{itemsToShow:1,breakpoints:{600:{itemsToShow:2},1e3:{itemsToShow:3,pagination:"fraction"}}}}},components:{Slide:G.Mi,Hooper:G.dB},methods:{get_councils(){W.Z.get("public/councils").then((t=>{console.log(t.data),this.companies=t.data.data})).catch((t=>{console.log(t)}))}},created(){this.get_councils()}},Q=J,V=(0,g.Z)(Q,F,K,!1,null,"62c54494",null),X=V.exports,tt=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("hooper",{attrs:{infiniteScroll:!0,settings:t.settings}},t._l(t.companies,(function(e){return r("slide",{key:e.id},[r("router-link",{staticClass:"rounded-xl shadow-lg hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark",attrs:{to:"/projects/single-project","aria-label":"Single Project"}},[r("div",{staticClass:"bg-red-100 relative rounded-t-xl"},[r("img",{staticClass:"rounded-t-xl border-none",attrs:{src:e.logo.desktop_image,alt:e.name}})]),r("div",{staticClass:"text-center px-1 sm:px-4 py-1 sm:py-6 leading-none"},[r("p",{staticClass:"font-general-semibold txt-mobile leading-normal text-sm sm:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-0 sm:mb-2"},[t._v(" "+t._s(e.name)+" ")]),r("span",{staticClass:"font-general-medium txt-mobile2 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(t._s(e.email))])])])],1)})),1)},et=[],rt={props:["singleProjectHeader"],data(){return{projects:D,companies:null,selectedCategory:"",searchProject:"",settings:{itemsToShow:1,breakpoints:{600:{itemsToShow:2},1e3:{itemsToShow:3,pagination:"fraction"}}}}},components:{Slide:G.Mi,Hooper:G.dB},methods:{get_directory(){try{this.$store.dispatch("GETCOMPANYDirectory").then((t=>{this.companies=t.data.data}))}catch(t){console.log(t.message)}}},created(){this.get_directory()}},at=rt,st=(0,g.Z)(at,tt,et,!1,null,"9fbf0e56",null),ot=st.exports,nt=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("hooper",{attrs:{infiniteScroll:!0,settings:t.settings}},t._l(t.companies,(function(e){return r("slide",{key:e.id},[r("router-link",{staticClass:"rounded-xl shadow-lg hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark",attrs:{to:"/projects/single-project","aria-label":"Single Project"}},[r("div",{staticClass:"bg-red-100 relative rounded-t-xl"},[r("img",{staticClass:"rounded-t-xl border-none",attrs:{src:e.logo.desktop_image,alt:e.name}})]),r("div",{staticClass:"text-center px-1 sm:px-4 py-1 sm:py-6 leading-none"},[r("p",{staticClass:"font-general-semibold txt-mobile leading-normal text-sm sm:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-0 sm:mb-2"},[t._v(" "+t._s(e.name)+" ")]),r("span",{staticClass:"font-general-medium txt-mobile2 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(t._s(e.email))])])])],1)})),1)},it=[],lt={props:["singleProjectHeader"],data(){return{projects:D,companies:null,selectedCategory:"",searchProject:"",settings:{itemsToShow:1,breakpoints:{600:{itemsToShow:2},1e3:{itemsToShow:3,pagination:"fraction"}}}}},components:{Slide:G.Mi,Hooper:G.dB},computed:{filteredProjects(){return this.selectedCategory?this.filterProjectsByCategory():this.searchProject?this.filterProjectsBySearch():this.projects}},methods:{filterProjectsByCategory(){return this.projects.filter((t=>{let e=t.category.charAt(0).toUpperCase()+t.category.slice(1);return console.log(e),e.includes(this.selectedCategory)}))},filterProjectsBySearch(){let t=new RegExp(this.searchProject,"i");return this.projects.filter((e=>e.title.match(t)))},get_company_full(t){try{this.$store.dispatch("GETCOMPANY",t).then((t=>{console.log(t.data.data),this.companies=[],t.data.data.forEach((t=>{this.companies.push(t)}))}))}catch(e){console.log(e.message)}}},created(){this.get_company_full([1,2])}},ct=lt,mt=(0,g.Z)(ct,nt,it,!1,null,"714768ad",null),dt=mt.exports,ut=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("hooper",{attrs:{infiniteScroll:!0,settings:t.settings}},t._l(t.companies,(function(e){return r("slide",{key:e.id},[r("router-link",{staticClass:"rounded-xl shadow-lg hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark",attrs:{to:"/projects/single-project","aria-label":"Single Project"}},[r("div",{staticClass:"bg-red-100 relative rounded-t-xl"},[r("img",{staticClass:"rounded-t-xl border-none",attrs:{src:e.logo.desktop_image,alt:e.name}})]),r("div",{staticClass:"text-center px-1 sm:px-4 py-1 sm:py-6 leading-none"},[r("p",{staticClass:"font-general-semibold txt-mobile leading-normal text-sm sm:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-0 sm:mb-2"},[t._v(" "+t._s(e.name)+" ")]),r("span",{staticClass:"font-general-medium txt-mobile2 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(t._s(e.email))])])])],1)})),1)},pt=[],gt={props:["singleProjectHeader"],data(){return{projects:D,companies:null,selectedCategory:"",searchProject:"",settings:{itemsToShow:1,breakpoints:{600:{itemsToShow:2},1e3:{itemsToShow:3,pagination:"fraction"}}}}},components:{Slide:G.Mi,Hooper:G.dB},computed:{filteredProjects(){return this.selectedCategory?this.filterProjectsByCategory():this.searchProject?this.filterProjectsBySearch():this.projects}},methods:{filterProjectsByCategory(){return this.projects.filter((t=>{let e=t.category.charAt(0).toUpperCase()+t.category.slice(1);return console.log(e),e.includes(this.selectedCategory)}))},filterProjectsBySearch(){let t=new RegExp(this.searchProject,"i");return this.projects.filter((e=>e.title.match(t)))},get_company_full(t){try{this.$store.dispatch("GETCOMPANY",t).then((t=>{console.log(t.data.data),this.companies=[],t.data.data.forEach((t=>{this.companies.push(t)}))}))}catch(e){console.log(e.message)}}},created(){this.get_company_full([1,2])}},ht=gt,xt=(0,g.Z)(ht,ut,pt,!1,null,"62ac169c",null),ft=xt.exports,bt=r(1204),yt={components:{Button:bt.Z,CompanySlider:z,BCSlider:X,DirectorySlider:ot,EventsSlider:dt,MediaSlider:ft},props:["singleProjectHeader"],data:()=>({projects:D,selectedCategory:"",searchProject:""}),computed:{filteredProjects(){return this.selectedCategory?this.filterProjectsByCategory():this.searchProject?this.filterProjectsBySearch():this.projects}},methods:{filterProjectsByCategory(){return this.projects.filter((t=>{let e=t.category.charAt(0).toUpperCase()+t.category.slice(1);return console.log(e),e.includes(this.selectedCategory)}))},filterProjectsBySearch(){let t=new RegExp(this.searchProject,"i");return this.projects.filter((e=>e.title.match(t)))}},mounted(){i().replace()}},vt=yt,Ct=(0,g.Z)(vt,$,Z,!1,null,"c6a19ecc",null),kt=Ct.exports,_t={name:"Home",components:{AppBanner:H.Z,ProjectsGrid:kt}},wt=_t,jt=(0,g.Z)(wt,B,M,!1,null,"be9828cc",null),St=jt.exports;function Pt(t,e,r){localStorage.getItem("access_token")?r():r({name:"Login"})}a["default"].use(O.Z);const Tt=new O.Z({routes:[{path:"/",name:"Home",component:St,meta:{title:"Company Guide - Home"}},{path:"/councils/",name:"Councils",component:()=>r.e(378).then(r.bind(r,8378)),meta:{title:"Guide - Councils"}},{path:"/council/",name:"Council",component:()=>Promise.all([r.e(867),r.e(137)]).then(r.bind(r,5137)),children:[{path:"companies",component:()=>Promise.all([r.e(867),r.e(252)]).then(r.bind(r,252))},{path:"our-members",component:()=>Promise.all([r.e(867),r.e(497)]).then(r.bind(r,7497))},{path:"events",component:()=>r.e(685).then(r.bind(r,3685))},{path:"media",component:()=>r.e(608).then(r.bind(r,4608))},{path:"contact-us",component:()=>r.e(927).then(r.bind(r,927))},{path:"",component:()=>r.e(175).then(r.bind(r,1175))},{path:"settings",component:()=>r.e(251).then(r.bind(r,4251)),beforeEnter:Pt,children:[{path:"",component:()=>r.e(97).then(r.bind(r,6097))},{path:"add-company",component:()=>Promise.all([r.e(867),r.e(486)]).then(r.bind(r,2486))},{path:"add-member",component:()=>Promise.all([r.e(867),r.e(940)]).then(r.bind(r,5940))},{path:"add-events",component:()=>Promise.all([r.e(867),r.e(355)]).then(r.bind(r,5960))},{path:"add-media",component:()=>Promise.all([r.e(867),r.e(401)]).then(r.bind(r,8401))},{path:"edit-company",component:()=>r.e(274).then(r.bind(r,2274))},{path:"edit-member",component:()=>r.e(267).then(r.bind(r,267))},{path:"edit-media",component:()=>r.e(368).then(r.bind(r,368))},{path:"edit-event",component:()=>Promise.all([r.e(867),r.e(50)]).then(r.bind(r,5050))}]}]},{path:"/directory",name:"Directory",component:()=>r.e(206).then(r.bind(r,3206)),meta:{title:"Guide - Directory"}},{path:"/projects/single-project",name:"Single Project",component:()=>r.e(99).then(r.bind(r,3099)),meta:{title:"Company - Details"}},{path:"/contact",name:"Contact",component:()=>r.e(813).then(r.bind(r,8813)),meta:{title:"Company - Contact"}},{path:"/login",name:"Login",component:()=>r.e(770).then(r.bind(r,5770)),meta:{title:"Company - Login"}},{path:"/settings",name:"Settings",component:()=>Promise.all([r.e(867),r.e(65)]).then(r.bind(r,4065)),meta:{title:"Company - Settings"}}],mode:"history",scrollBehavior(t,e,r){return r||{x:0,y:0}}});var Et=Tt;Tt.beforeEach(((t,e,r)=>{const a=t.matched.slice().reverse().find((t=>t.meta&&t.meta.title)),s=t.matched.slice().reverse().find((t=>t.meta&&t.meta.metaTags)),o=e.matched.slice().reverse().find((t=>t.meta&&t.meta.metaTags));if(a?document.title=a.meta.title:o&&(document.title=o.meta.title),Array.from(document.querySelectorAll("[data-vue-router-controlled]")).map((t=>t.parentNode.removeChild(t))),!s)return r();s.meta.metaTags.map((t=>{const e=document.createElement("meta");return Object.keys(t).forEach((r=>{e.setAttribute(r,t[r])})),e.setAttribute("data-vue-router-controlled",""),e})).forEach((t=>document.head.appendChild(t))),r()}));var At={state:{accesstoken:JSON.parse(localStorage.getItem("access_token"))||null,council_id:localStorage.getItem("council_id")||null,loggedIn:!1,user_type:localStorage.getItem("user_type")||null,name:localStorage.getItem("name")||null,user_img:localStorage.getItem("user_img")||null},getters:{auth(t){return t.loggedIn}},mutations:{retrieveToken(t,e){t.accesstoken=e},setUserType(t,e){t.user_type=e},setCouncilID(t,e){t.council_id=e},setUserToken(t){t.loggedIn=!0,console.log(t.loggedIn)},setUserName(t,e){t.name=e},setUserImg(t,e){t.user_img=e},destroyToken(t){t.accesstoken=null},destroyCouncilID(t){t.council_id=null},destroyName(t){t.name=null},destroyUserImg(t){t.user_img=null}},actions:{LOGIN({commit:t},e){return new Promise(((r,a)=>{W.Z.post("/login",{...e}).then((e=>{if(console.log(e.data),"Success"==e.data.status){console.log(e.data);const a=e.data,s=e.data.token,o=e.data.name,n=e.data.user_type,i=e.data.council_id,l=e.data.profile.thumbnail_image;localStorage.setItem("access_token",JSON.stringify(a)),localStorage.setItem("token",s),localStorage.setItem("name",o),localStorage.setItem("user_type",n),localStorage.setItem("council_id",i),localStorage.setItem("user_img",l),console.log(localStorage.getItem("token")),t("retrieveToken",a),t("setUserToken",s),t("setUserName",o),t("setUserType",n),t("setCouncilID",i),t("setUserImg",l),r(e)}else a(e)})).catch((t=>{a(t)}))}))},LOGOUT(t){return new Promise(((e,r)=>{W.Z.get("/logout").then((r=>{W.Z,localStorage.removeItem("access_token"),localStorage.removeItem("token"),localStorage.removeItem("name"),localStorage.removeItem("council_id"),localStorage.removeItem("user_img"),t.commit("destroyToken"),t.commit("destroyCouncilID"),t.commit("destroyName"),t.commit("destroyUserImg"),e(r)})).catch((e=>{localStorage.removeItem("access_token"),t.commit("destroyToken"),r(e)}))}))}}},It={state:{accesstoken:JSON.parse(localStorage.getItem("access_token"))||null,loggedIn:!1,companies:"",name:localStorage.getItem("name")||null},getters:{auth(t){return t.loggedIn}},mutations:{GET_COMPANY(t,e){t.companies=e}},actions:{GETCOMPANY({commit:t},e){return new Promise(((r,a)=>{W.Z.get("/public/companies/"+e).then((e=>{t("GET_COMPANY",e.data.data),r(e)})).catch((t=>{a(t)}))}))},GETCOMPANYDirectory({commit:t}){return new Promise(((e,r)=>{W.Z.post("/public/companies/directory_page").then((r=>{t("GET_COMPANY",r.data.data),e(r)})).catch((t=>{r(t)}))}))}}};a["default"].use(_.ZP);var Ot=new _.ZP.Store({namespaced:!0,modules:{auth:At,company:It},state:{},mutations:{},actions:{},getters:{}}),Bt=r(8792),Mt=r(2734),Ht=r.n(Mt),$t=r(768),Zt=r.n($t),Nt=r(4576),Lt=r.n(Nt),Ut=r(5831),Dt=r.n(Ut);const Gt=r(775);Gt.replace(),a["default"].use(Bt.Z),a["default"].use(Ht()),a["default"].use(Zt()),a["default"].use(Dt()),a["default"].component("Spinner",Lt()),a["default"].config.productionTip=!1,new a["default"]({render:t=>t(I),router:Et,store:Ot}).$mount("#app");const Yt=localStorage.getItem("theme");"dark"===Yt&&document.querySelector("body").classList.contains("app-theme")?document.querySelector("body").classList.add("bg-primary-dark"):document.querySelector("body").classList.add("bg-secondary-light")},6931:function(t,e,r){var a=r(6166),s=r.n(a);const o=localStorage.getItem("token"),n=s().create({baseURL:"https://companies-guide-ca4jc73kxa-uc.a.run.app/api/api/",imgUrl:"https://gold-islands-brake-2-50-5-252.loca.lt"});console.log("config",o),n.interceptors.request,n.interceptors.request.use((t=>{if(!t.headers.Authorization){const e=localStorage.getItem("token");e&&(t.headers.Authorization=`Bearer ${e}`)}return t}),(t=>Promise.reject(t))),e["Z"]=n},3687:function(t,e,r){t.exports=r.p+"img/Contracting.98727b9f.jpg"},7532:function(t,e,r){t.exports=r.p+"img/Food.67d4bda2.jpg"},8814:function(t,e,r){t.exports=r.p+"img/round.532b5af3.jpg"},7082:function(t,e,r){t.exports=r.p+"img/c1.72cfc784.jpg"},519:function(t,e,r){t.exports=r.p+"img/c2.e27d19a1.jpg"},2730:function(t,e,r){t.exports=r.p+"img/c3.4518e1a5.webp"},9719:function(t,e,r){t.exports=r.p+"img/c4.e9854ebc.jpg"},7007:function(t,e,r){t.exports=r.p+"img/c5.92ab119c.jpg"},2225:function(t,e,r){t.exports=r.p+"img/real-estate.e3a76b34.webp"}},e={};function r(a){var s=e[a];if(void 0!==s)return s.exports;var o=e[a]={exports:{}};return t[a].call(o.exports,o,o.exports,r),o.exports}r.m=t,function(){var t=[];r.O=function(e,a,s,o){if(!a){var n=1/0;for(m=0;m<t.length;m++){a=t[m][0],s=t[m][1],o=t[m][2];for(var i=!0,l=0;l<a.length;l++)(!1&o||n>=o)&&Object.keys(r.O).every((function(t){return r.O[t](a[l])}))?a.splice(l--,1):(i=!1,o<n&&(n=o));if(i){t.splice(m--,1);var c=s();void 0!==c&&(e=c)}}return e}o=o||0;for(var m=t.length;m>0&&t[m-1][2]>o;m--)t[m]=t[m-1];t[m]=[a,s,o]}}(),function(){r.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return r.d(e,{a:e}),e}}(),function(){r.d=function(t,e){for(var a in e)r.o(e,a)&&!r.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:e[a]})}}(),function(){r.f={},r.e=function(t){return Promise.all(Object.keys(r.f).reduce((function(e,a){return r.f[a](t,e),e}),[]))}}(),function(){r.u=function(t){return"js/"+t+"."+{50:"d6b1c53d",65:"41e77df9",97:"6e22fd24",99:"a2f4bd53",137:"e65b10d4",175:"a1c0aa73",206:"c6656097",251:"4141d394",252:"b37affa2",267:"fdc57486",274:"beda3427",355:"7ffbbdc0",368:"e668d8fe",378:"d1f7336d",401:"508adb17",486:"8fb16020",497:"874a27b0",608:"3a215f1e",685:"7fdc3dad",770:"73f6fd42",813:"7a9b1828",867:"6766f9b7",927:"f47d019d",940:"7f2181fb"}[t]+".js"}}(),function(){r.miniCssF=function(t){return"css/"+t+"."+{50:"999adde2",65:"a90e5a36",99:"cc9fe986",137:"f12066d0",175:"debadd6d",206:"bc5bd73d",251:"bd4efdb8",252:"cbec9789",267:"6c18580f",274:"6c18580f",355:"999adde2",378:"8a1573e8",401:"999adde2",486:"23a696e9",497:"ea2c7783",608:"8a1573e8",685:"8a1573e8",940:"452663c2"}[t]+".css"}}(),function(){r.g=function(){if("object"===typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"===typeof window)return window}}()}(),function(){r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)}}(),function(){var t={},e="company-guide:";r.l=function(a,s,o,n){if(t[a])t[a].push(s);else{var i,l;if(void 0!==o)for(var c=document.getElementsByTagName("script"),m=0;m<c.length;m++){var d=c[m];if(d.getAttribute("src")==a||d.getAttribute("data-webpack")==e+o){i=d;break}}i||(l=!0,i=document.createElement("script"),i.charset="utf-8",i.timeout=120,r.nc&&i.setAttribute("nonce",r.nc),i.setAttribute("data-webpack",e+o),i.src=a),t[a]=[s];var u=function(e,r){i.onerror=i.onload=null,clearTimeout(p);var s=t[a];if(delete t[a],i.parentNode&&i.parentNode.removeChild(i),s&&s.forEach((function(t){return t(r)})),e)return e(r)},p=setTimeout(u.bind(null,void 0,{type:"timeout",target:i}),12e4);i.onerror=u.bind(null,i.onerror),i.onload=u.bind(null,i.onload),l&&document.head.appendChild(i)}}}(),function(){r.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})}}(),function(){r.p="/"}(),function(){var t=function(t,e,r,a){var s=document.createElement("link");s.rel="stylesheet",s.type="text/css";var o=function(o){if(s.onerror=s.onload=null,"load"===o.type)r();else{var n=o&&("load"===o.type?"missing":o.type),i=o&&o.target&&o.target.href||e,l=new Error("Loading CSS chunk "+t+" failed.\n("+i+")");l.code="CSS_CHUNK_LOAD_FAILED",l.type=n,l.request=i,s.parentNode.removeChild(s),a(l)}};return s.onerror=s.onload=o,s.href=e,document.head.appendChild(s),s},e=function(t,e){for(var r=document.getElementsByTagName("link"),a=0;a<r.length;a++){var s=r[a],o=s.getAttribute("data-href")||s.getAttribute("href");if("stylesheet"===s.rel&&(o===t||o===e))return s}var n=document.getElementsByTagName("style");for(a=0;a<n.length;a++){s=n[a],o=s.getAttribute("data-href");if(o===t||o===e)return s}},a=function(a){return new Promise((function(s,o){var n=r.miniCssF(a),i=r.p+n;if(e(n,i))return s();t(a,i,s,o)}))},s={143:0};r.f.miniCss=function(t,e){var r={50:1,65:1,99:1,137:1,175:1,206:1,251:1,252:1,267:1,274:1,355:1,378:1,401:1,486:1,497:1,608:1,685:1,940:1};s[t]?e.push(s[t]):0!==s[t]&&r[t]&&e.push(s[t]=a(t).then((function(){s[t]=0}),(function(e){throw delete s[t],e})))}}(),function(){var t={143:0};r.f.j=function(e,a){var s=r.o(t,e)?t[e]:void 0;if(0!==s)if(s)a.push(s[2]);else{var o=new Promise((function(r,a){s=t[e]=[r,a]}));a.push(s[2]=o);var n=r.p+r.u(e),i=new Error,l=function(a){if(r.o(t,e)&&(s=t[e],0!==s&&(t[e]=void 0),s)){var o=a&&("load"===a.type?"missing":a.type),n=a&&a.target&&a.target.src;i.message="Loading chunk "+e+" failed.\n("+o+": "+n+")",i.name="ChunkLoadError",i.type=o,i.request=n,s[1](i)}};r.l(n,l,"chunk-"+e,e)}},r.O.j=function(e){return 0===t[e]};var e=function(e,a){var s,o,n=a[0],i=a[1],l=a[2],c=0;if(n.some((function(e){return 0!==t[e]}))){for(s in i)r.o(i,s)&&(r.m[s]=i[s]);if(l)var m=l(r)}for(e&&e(a);c<n.length;c++)o=n[c],r.o(t,o)&&t[o]&&t[o][0](),t[o]=0;return r.O(m)},a=self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[];a.forEach(e.bind(null,0)),a.push=e.bind(null,a.push.bind(a))}();var a=r.O(void 0,[998],(function(){return r(245)}));a=r.O(a)})();
//# sourceMappingURL=app.658d7b12.js.map