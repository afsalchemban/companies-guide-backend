(function(){"use strict";var t={550:function(t,e,n){n.d(e,{Z:function(){return c}});var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("button",[t._v(t._s(t.title))])},o=[],a={props:["title"],data:function(){return{}}},i=a,s=n(1001),l=(0,s.Z)(i,r,o,!1,null,"11405d52",null),c=l.exports},8336:function(t,e,n){n.d(e,{Z:function(){return b}});var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"flex flex-col sm:justify-between items-center text-center sm:flex-row"},[n("BannerSlider")],1)])},o=[],a=(n(4916),n(5306),n(775)),i=n.n(a),s=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("hooper",[r("slide",{staticClass:"relative"},[r("img",{attrs:{src:n(7082),alt:""}}),r("div",{staticClass:"text-center leading-8 company-txt"},[r("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" Azizi Real Estate Company ")]),r("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),r("slide",{staticClass:"relative"},[r("img",{attrs:{src:n(519),alt:""}}),r("div",{staticClass:"text-center leading-8 company-txt"},[r("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" ATA Real Estate Company ")]),r("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),r("slide",{staticClass:"relative"},[r("img",{attrs:{src:n(2730),alt:""}}),r("div",{staticClass:"text-center leading-8 company-txt"},[r("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" Food Company ")]),r("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),r("slide",{staticClass:"relative"},[r("img",{attrs:{src:n(9719),alt:""}}),r("div",{staticClass:"text-center leading-8 company-txt"},[r("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" SER Real Estate Company ")]),r("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),r("slide",{staticClass:"relative"},[r("img",{attrs:{src:n(9719),alt:""}}),r("div",{staticClass:"text-center leading-8 company-txt"},[r("h1",{staticClass:"font-general-semibold text-xl md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" Real Foodstuff Company ")]),r("p",{staticClass:"font-general-medium mt-3 text-sm sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),r("slide",{staticClass:"relative text-center"},[r("img",{attrs:{src:n(2478),alt:""}}),r("div",{staticClass:"text-center leading-8 company-txt"},[r("h1",{staticClass:"font-general-semibold text-lg md:text-3xl xl:text-4xl text-center sm:text-left text-primary-light uppercase"},[t._v(" CRC Contracting Company ")]),r("p",{staticClass:"font-general-medium mt-3 text-xs sm:text-xl xl:text-xl text-center sm:text-left leading-none text-gray-200"},[t._v(" All You Want To Know About Our Companies is Here ")])])]),r("hooper-pagination",{attrs:{slot:"hooper-addons"},slot:"hooper-addons"})],1)},l=[],c=n(5681),m={components:{Hooper:c.dB,Slide:c.Mi,HooperPagination:c.tl}},u=m,d=n(1001),p=(0,d.Z)(u,s,l,!1,null,null,null),f=p.exports,g={name:"Home",components:{BannerSlider:f},created:function(){this.theme=localStorage.getItem("theme")||"light"},mounted:function(){i().replace(),this.theme=localStorage.getItem("theme")||"light"},updated:function(){i().replace()},methods:{}},h=g,x=(0,d.Z)(h,r,o,!1,null,"65a9b901",null),b=x.exports},8208:function(t,e,n){n(6992),n(8674),n(9601),n(7727),n(4916),n(5306);var r=n(8935),o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"pt-0.5",class:t.appTheme},[n("AppHeader"),n("transition",{attrs:{name:"fade",mode:"out-in"}},[n("router-view",{attrs:{theme:t.appTheme}})],1),n("back-to-top",{staticClass:"shadow-lg",attrs:{visibleoffset:"500",right:"30px",bottom:"20px"}},[n("i",{attrs:{"data-feather":"chevron-up"}})])],1)},a=[],i=n(775),s=n.n(i),l=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("nav",{staticClass:"sm:container sm:mx-auto",attrs:{id:"nav"}},[r("div",{staticClass:"z-10 max-w-screen-lg xl:max-w-screen-xl block sm:flex sm:justify-between sm:items-center my-3 sm:my-6"},[r("div",{staticClass:"flex justify-between items-center px-4 sm:px-0"},[r("div",[r("router-link",{attrs:{to:"/"}},["light"===t.theme?r("img",{staticClass:"w-7 md:w-16",attrs:{src:n(8814),alt:"Dark Logo"}}):r("img",{staticClass:"w-7 md:w-16",attrs:{src:n(8814),alt:"Light Logo"}})])],1),r("div",{staticClass:"flex"},[r("theme-switcher",{staticClass:"block sm:hidden bg-ternary-light dark:bg-ternary-dark hover:bg-hover-light dark:hover:bg-hover-dark hover:shadow-sm px-2 py-2.5 rounded-lg",attrs:{theme:t.theme},on:{themeChanged:t.updateTheme}}),r("div",{staticClass:"sm:hidden"},[r("button",{staticClass:"focus:outline-none",attrs:{type:"button","aria-label":"Hamburger Menu"},on:{click:function(e){t.isOpen=!t.isOpen}}},[r("svg",{staticClass:"h-7 w-7 fill-current text-secondary-dark dark:text-ternary-light pl-2",attrs:{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"}},[t.isOpen?r("path",{attrs:{"fill-rule":"evenodd",d:"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z","clip-rule":"evenodd"}}):t._e(),t.isOpen?t._e():r("path",{attrs:{"fill-rule":"evenodd",d:"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"}})])])])],1)]),r("AppHeaderLinks",{attrs:{showModal:t.showModal,isOpen:t.isOpen},on:{closeit:function(e){return t.closeMenu2(e)}}}),r("div",{staticClass:"hidden sm:flex justify-between items-center md:flex-row"},[t.access?r("a",{staticClass:"font-general-medium block text-left sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button"},on:{click:function(e){return t.logout()}}},[t._v("Logout")]):r("router-link",{staticClass:"font-general-medium block text-left sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{to:"/login"}},[t._v("Login")]),t.access?r("router-link",{attrs:{to:{path:"/council",query:{name:t.name,id:t.userId}}}},[r("img",{staticClass:"rounded-full cursor-pointer h-3/4 w-3/4 shadow-lg",attrs:{alt:"",src:t.userImg}})]):t._e()],1)],1)])},c=[],m=n(3019),u=(n(8309),function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("a",{attrs:{href:"#","aria-label":"Theme Switcher"},on:{click:function(e){return e.preventDefault(),t.toggleTheme.apply(null,arguments)}}},["light"===t.theme?n("i",{staticClass:"theme-icon text-liText-ternary-dark hover:text-gray-400 dark:text-liText-ternary-light dark:hover:text-liBorder-primary-light w-5",attrs:{"data-feather":"moon"}}):n("i",{staticClass:"theme-icon text-gray-200 hover:text-gray-50 w-5",attrs:{"data-feather":"sun"}})])}),d=[],p={props:{theme:{type:String,required:!0}},methods:{toggleTheme:function(){var t="light"===this.theme?"dark":"light";localStorage.setItem("theme",t),this.$emit("themeChanged",t),this.$router.go()}}},f=p,g=n(1001),h=(0,g.Z)(f,u,d,!1,null,null,null),x=h.exports,b=function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.closeit?n("div",{staticClass:"m-0 sm:flex p-5 sm:p-0 justify-center items-center shadow-lg sm:shadow-none",class:t.isOpen?"block":"hidden"},[n("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 pt-3 sm:pt-2",attrs:{role:"button",exact:"","aria-label":"Projects"},on:{click:function(e){return t.closeMenu("/")}}},[t._v("Home")]),n("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button","aria-label":"Projects"},on:{click:function(e){return t.closeMenu("/councils")}}},[t._v("BCN")]),n("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button","aria-label":"Projects"},on:{click:function(e){return t.closeMenu("/directory")}}},[t._v("Directory")]),n("a",{staticClass:"font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button","aria-label":"Contact"},on:{click:function(e){return t.closeMenu("/contact")}}},[t._v("Contact")]),n("a",{staticClass:"font-general-medium block sm:hidden block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg font-medium text-primary-dark dark:text-ternary-light hover:text-indigo-600 dark:hover:text-indigo-300 sm:mx-4 mb-2 sm:py-2 border-t-2 pt-3 sm:pt-2 sm:border-t-0 border-primary-light dark:border-secondary-dark",attrs:{role:"button"},on:{click:function(e){return t.closeMenu("/login")}}},[t._v("Login")])]):t._e()},y=[],v={data:function(){return{closeit:!0}},props:["showModal","isOpen"],methods:{closeMenu:function(t){this.$emit("closeit",!1),this.$router.push(t)}}},C=v,k=(0,g.Z)(C,b,y,!1,null,"e9464e1a",null),_=k.exports,w=n(4665),S={components:{ThemeSwitcher:x,AppHeaderLinks:_},data:function(){return{isOpen:!1,theme:"",modal:!1}},computed:(0,m.Z)({currentRouteName:function(){return this.$route.name}},(0,w.rn)({access:function(t){return t.auth.accesstoken},name:function(t){return t.auth.name},userImg:function(t){return t.auth.user_img},userId:function(t){return t.auth.council_id}})),created:function(){this.theme=localStorage.getItem("theme")||"light"},mounted:function(){s().replace(),this.theme=localStorage.getItem("theme")||"light"},methods:{closeMenu2:function(t){console.log(t),this.isOpen=t},logout:function(){var t=this;try{this.$store.dispatch("LOGOUT").then((function(e){t.$router.push({name:"Login"})}))}catch(e){console.log(e)}},updateTheme:function(t){this.theme=t},showModal:function(){this.modal?(document.getElementsByTagName("html")[0].classList.remove("overflow-y-hidden"),this.modal=!1):(document.getElementsByTagName("html")[0].classList.add("overflow-y-hidden"),this.modal=!0)}},updated:function(){s().replace()}},j=S,P=(0,g.Z)(j,l,c,!1,null,"0626cc15",null),T=P.exports,I={components:{AppHeader:T},data:function(){return{appTheme:localStorage.getItem("theme")}},mounted:function(){s().replace()},updated:function(){s().replace()}},E=I,O=(0,g.Z)(E,o,a,!1,null,null,null),A=O.exports,M=(n(1539),n(8783),n(3948),n(9826),n(7042),n(1249),n(1038),n(4747),n(7941),n(2809)),N=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"mx-auto mb-20"},[n("AppBanner",{staticClass:"mb-5 sm:mb-8"}),n("ProjectsGrid"),n("div",{staticClass:"mt-5 sm:mt-20 flex justify-center"},[n("router-link",{staticClass:"font-general-medium flex items-center px-2 sm:px-6 py-1 sm:py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white txt-mobile2 text-xs sm:text-xl duration-300",attrs:{to:"/projects","aria-label":"More Projects"}},[n("Button",{attrs:{title:"Show More"}})],1)],1)],1)},Z=[],B=n(8336),L=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("section",{staticClass:"container mx-auto"},t._l(t.companies,(function(e,r){return n("div",{key:r,staticClass:"pt-5 sm:pt-14"},[n("div",{staticClass:"text-center"},[n("p",{staticClass:"font-general-semibold text-base sm:text-4xl font-semibold mb-0 sm:mb-2 text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(e)+" ")])]),t._m(0,!0),n("CompanySlider")],1)})),0)},H=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"mt-3 sm:mb-0 mb-5 sm:mt-10"},[n("h3",{staticClass:"font-general-regular sm:mb-0 mb-4 text-center text-secondary-dark dark:text-ternary-light text-xs sm:text-xl font-normal"},[t._v(" click to see details ")])])}],$=(n(7327),n(6699),n(2023),n(4603),n(8450),n(8386),n(9714),n(4723),function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("hooper",{attrs:{infiniteScroll:!0,settings:t.settings}},t._l(t.fullCompanies,(function(e){return n("slide",{key:e.id},[n("router-link",{staticClass:"rounded-xl shadow-lg hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark",attrs:{to:"/projects/single-project","aria-label":"Single Project"}},[n("div",{staticClass:"bg-red-100 relative rounded-t-xl"},[n("img",{staticClass:"rounded-t-xl border-none",attrs:{src:e.logo.desktop_image,alt:e.name}})]),n("div",{staticClass:"text-center px-1 sm:px-4 py-1 sm:py-6 leading-none"},[n("p",{staticClass:"font-general-semibold txt-mobile leading-normal text-sm sm:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-0 sm:mb-2"},[t._v(" "+t._s(e.name)+" ")]),n("span",{staticClass:"font-general-medium txt-mobile2 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(t._s(e.email))])])])],1)})),1)}),U=[],G=(n(2222),[{id:1,title:"Contracting Company",category:"Contracting",img:n(3687)},{id:2,title:"Real Estate company",category:"Real Estate",img:n(2225)},{id:3,title:"Mana Al-Sabti Food Company",category:"Food",img:n(7532)}]),D=G,R=n(5681),Y={props:["singleProjectHeader"],data:function(){return{projects:D,companies:null,fullCompanies:[],prifileCompanies:[],selectedCategory:"",searchProject:"",settings:{itemsToShow:2,breakpoints:{400:{itemsToShow:1},600:{itemsToShow:2},1e3:{itemsToShow:3,pagination:"fraction"}}}}},components:{Slide:R.Mi,Hooper:R.dB},computed:{filteredProjects:function(){return this.selectedCategory?this.filterProjectsByCategory():this.searchProject?this.filterProjectsBySearch():this.projects}},methods:{filterProjectsByCategory:function(){var t=this;return this.projects.filter((function(e){var n=e.category.charAt(0).toUpperCase()+e.category.slice(1);return console.log(n),n.includes(t.selectedCategory)}))},filterProjectsBySearch:function(){var t=new RegExp(this.searchProject,"i");return this.projects.filter((function(e){return e.title.match(t)}))},get_company_full:function(t){var e=this;try{this.$store.dispatch("GETCOMPANY",t).then((function(t){console.log(t.data.data),e.fullCompanies=[],t.data.data.forEach((function(t){e.fullCompanies.push(t)}))}))}catch(n){console.log(n.message)}},get_company_profile:function(t){var e=this;try{this.$store.dispatch("GETCOMPANY",t).then((function(t){console.log(t.data.data),e.profileCompanies=[],e.fullCompanies=[],t.data.data.forEach((function(t){e.profileCompanies.push(t),e.fullCompanies.push(t)}))}))}catch(n){console.log(n.message)}}},created:function(){this.get_company_profile(2),this.get_company_full(1),this.companies=this.fullCompanies.concat(this.profileCompanies),console.log(this.companies)}},F=Y,q=(0,g.Z)(F,$,U,!1,null,"367fc6d4",null),z=q.exports,K={components:{CompanySlider:z},props:["singleProjectHeader"],data:function(){return{projects:D,companies:["Contracting","Real Estate","Food","Foodstuff","Nuts and Fruits","Cars"],selectedCategory:"",searchProject:""}},computed:{filteredProjects:function(){return this.selectedCategory?this.filterProjectsByCategory():this.searchProject?this.filterProjectsBySearch():this.projects}},methods:{filterProjectsByCategory:function(){var t=this;return this.projects.filter((function(e){var n=e.category.charAt(0).toUpperCase()+e.category.slice(1);return console.log(n),n.includes(t.selectedCategory)}))},filterProjectsBySearch:function(){var t=new RegExp(this.searchProject,"i");return this.projects.filter((function(e){return e.title.match(t)}))}},mounted:function(){s().replace()}},W=K,J=(0,g.Z)(W,L,H,!1,null,"0851eb4c",null),Q=J.exports,V=n(550),X={name:"Home",components:{AppBanner:B.Z,ProjectsGrid:Q,Button:V.Z}},tt=X,et=(0,g.Z)(tt,N,Z,!1,null,"51596221",null),nt=et.exports;function rt(t,e,n){localStorage.getItem("access_token")?n():n({name:"Login"})}r["default"].use(M.Z);var ot=new M.Z({routes:[{path:"/",name:"Home",component:nt,meta:{title:"Company Guide - Home"}},{path:"/councils/",name:"Councils",component:function(){return n.e(144).then(n.bind(n,5144))},meta:{title:"Guide - Councils"}},{path:"/council/",name:"Council",component:function(){return Promise.all([n.e(867),n.e(795)]).then(n.bind(n,3795))},children:[{path:"companies",component:function(){return Promise.all([n.e(867),n.e(521)]).then(n.bind(n,3521))}},{path:"our-members",component:function(){return Promise.all([n.e(867),n.e(107)]).then(n.bind(n,3107))}},{path:"events",component:function(){return n.e(610).then(n.bind(n,7610))}},{path:"media",component:function(){return n.e(259).then(n.bind(n,9259))}},{path:"contact-us",component:function(){return n.e(769).then(n.bind(n,3769))}},{path:"",component:function(){return n.e(604).then(n.bind(n,604))}},{path:"settings",component:function(){return n.e(48).then(n.bind(n,7048))},beforeEnter:rt,children:[{path:"",component:function(){return n.e(400).then(n.bind(n,400))}},{path:"add-company",component:function(){return Promise.all([n.e(867),n.e(809)]).then(n.bind(n,3809))}},{path:"add-member",component:function(){return Promise.all([n.e(867),n.e(238)]).then(n.bind(n,8238))}},{path:"add-events",component:function(){return Promise.all([n.e(867),n.e(765)]).then(n.bind(n,2765))}},{path:"add-media",component:function(){return Promise.all([n.e(867),n.e(865)]).then(n.bind(n,3867))}},{path:"edit-company",component:function(){return n.e(294).then(n.bind(n,1294))}},{path:"edit-member",component:function(){return n.e(38).then(n.bind(n,6038))}},{path:"edit-media",component:function(){return n.e(687).then(n.bind(n,2687))}},{path:"edit-event",component:function(){return Promise.all([n.e(867),n.e(816)]).then(n.bind(n,2816))}}]}]},{path:"/directory",name:"Directory",component:function(){return n.e(916).then(n.bind(n,3916))},meta:{title:"Guide - Directory"}},{path:"/projects/single-project",name:"Single Project",component:function(){return n.e(980).then(n.bind(n,980))},meta:{title:"Company - Details"}},{path:"/contact",name:"Contact",component:function(){return n.e(285).then(n.bind(n,7285))},meta:{title:"Company - Contact"}},{path:"/login",name:"Login",component:function(){return n.e(917).then(n.bind(n,1917))},meta:{title:"Company - Login"}},{path:"/settings",name:"Settings",component:function(){return Promise.all([n.e(867),n.e(678)]).then(n.bind(n,8678))},meta:{title:"Company - Settings"}}],mode:"history",scrollBehavior:function(t,e,n){return n||{x:0,y:0}}}),at=ot;ot.beforeEach((function(t,e,n){var r=t.matched.slice().reverse().find((function(t){return t.meta&&t.meta.title})),o=t.matched.slice().reverse().find((function(t){return t.meta&&t.meta.metaTags})),a=e.matched.slice().reverse().find((function(t){return t.meta&&t.meta.metaTags}));if(r?document.title=r.meta.title:a&&(document.title=a.meta.title),Array.from(document.querySelectorAll("[data-vue-router-controlled]")).map((function(t){return t.parentNode.removeChild(t)})),!o)return n();o.meta.metaTags.map((function(t){var e=document.createElement("meta");return Object.keys(t).forEach((function(n){e.setAttribute(n,t[n])})),e.setAttribute("data-vue-router-controlled",""),e})).forEach((function(t){return document.head.appendChild(t)})),n()}));n(8862);var it=n(6931),st={state:{accesstoken:JSON.parse(localStorage.getItem("access_token"))||null,council_id:localStorage.getItem("council_id")||null,loggedIn:!1,user_type:localStorage.getItem("user_type")||null,name:localStorage.getItem("name")||null,user_img:localStorage.getItem("user_img")||null},getters:{auth:function(t){return t.loggedIn}},mutations:{retrieveToken:function(t,e){t.accesstoken=e},setUserType:function(t,e){t.user_type=e},setCouncilID:function(t,e){t.council_id=e},setUserToken:function(t){t.loggedIn=!0,console.log(t.loggedIn)},setUserName:function(t,e){t.name=e},setUserImg:function(t,e){t.user_img=e},destroyToken:function(t){t.accesstoken=null},destroyCouncilID:function(t){t.council_id=null},destroyName:function(t){t.name=null},destroyUserImg:function(t){t.user_img=null}},actions:{LOGIN:function(t,e){var n=t.commit;return new Promise((function(t,r){it.Z.post("/login",(0,m.Z)({},e)).then((function(e){if(console.log(e.data),"Success"==e.data.status){console.log(e.data);var o=e.data,a=e.data.token,i=e.data.name,s=e.data.user_type,l=e.data.council_id,c=e.data.profile.thumbnail_image;localStorage.setItem("access_token",JSON.stringify(o)),localStorage.setItem("token",a),localStorage.setItem("name",i),localStorage.setItem("user_type",s),localStorage.setItem("council_id",l),localStorage.setItem("user_img",c),console.log(localStorage.getItem("token")),n("retrieveToken",o),n("setUserToken",a),n("setUserName",i),n("setUserType",s),n("setCouncilID",l),n("setUserImg",c),t(e)}else r(e)})).catch((function(t){r(t)}))}))},LOGOUT:function(t){return new Promise((function(e,n){it.Z.get("/logout").then((function(n){it.Z,localStorage.removeItem("access_token"),localStorage.removeItem("token"),localStorage.removeItem("name"),localStorage.removeItem("council_id"),localStorage.removeItem("user_img"),t.commit("destroyToken"),t.commit("destroyCouncilID"),t.commit("destroyName"),t.commit("destroyUserImg"),e(n)})).catch((function(e){localStorage.removeItem("access_token"),t.commit("destroyToken"),n(e)}))}))}}},lt={state:{accesstoken:JSON.parse(localStorage.getItem("access_token"))||null,loggedIn:!1,companies:"",name:localStorage.getItem("name")||null},getters:{auth:function(t){return t.loggedIn}},mutations:{GET_COMPANY:function(t,e){t.companies=e}},actions:{GETCOMPANY:function(t,e){var n=t.commit;return new Promise((function(t,r){it.Z.get("/public/companies/"+e).then((function(e){n("GET_COMPANY",e.data.data),t(e)})).catch((function(t){r(t)}))}))},GETCOMPANYDirectory:function(t){var e=t.commit;return new Promise((function(t,n){it.Z.post("/public/companies/directory_page").then((function(n){e("GET_COMPANY",n.data.data),t(n)})).catch((function(t){n(t)}))}))}}};r["default"].use(w.ZP);var ct=new w.ZP.Store({namespaced:!0,modules:{auth:st,company:lt},state:{},mutations:{},actions:{},getters:{}}),mt=n(3403),ut=n(2734),dt=n.n(ut),pt=n(768),ft=n.n(pt),gt=n(4576),ht=n.n(gt),xt=n(5831),bt=n.n(xt),yt=n(775);yt.replace(),r["default"].use(mt.Z),r["default"].use(dt()),r["default"].use(ft()),r["default"].use(bt()),r["default"].component("Spinner",ht()),r["default"].config.productionTip=!1,new r["default"]({render:function(t){return t(A)},router:at,store:ct}).$mount("#app");var vt=localStorage.getItem("theme");"dark"===vt&&document.querySelector("body").classList.contains("app-theme")?document.querySelector("body").classList.add("bg-primary-dark"):document.querySelector("body").classList.add("bg-secondary-light")},6931:function(t,e,n){n(1539);var r=n(6166),o=n.n(r),a=localStorage.getItem("token"),i=o().create({baseURL:"https://companies-guide-ca4jc73kxa-uc.a.run.app/api/api/",imgUrl:"https://gold-islands-brake-2-50-5-252.loca.lt"});console.log("config",a),i.interceptors.request,i.interceptors.request.use((function(t){if(!t.headers.Authorization){var e=localStorage.getItem("token");e&&(t.headers.Authorization="Bearer ".concat(e))}return t}),(function(t){return Promise.reject(t)})),e["Z"]=i},3687:function(t,e,n){t.exports=n.p+"img/Contracting.98727b9f.jpg"},7532:function(t,e,n){t.exports=n.p+"img/Food.67d4bda2.jpg"},8814:function(t,e,n){t.exports=n.p+"img/round.532b5af3.jpg"},7082:function(t,e,n){t.exports=n.p+"img/c1.72cfc784.jpg"},519:function(t,e,n){t.exports=n.p+"img/c2.e27d19a1.jpg"},2730:function(t,e,n){t.exports=n.p+"img/c3.4518e1a5.webp"},9719:function(t,e,n){t.exports=n.p+"img/c4.e9854ebc.jpg"},2478:function(t,e,n){t.exports=n.p+"img/c5.92ab119c.jpg"},2225:function(t,e,n){t.exports=n.p+"img/real-estate.e3a76b34.webp"}},e={};function n(r){var o=e[r];if(void 0!==o)return o.exports;var a=e[r]={id:r,loaded:!1,exports:{}};return t[r].call(a.exports,a,a.exports,n),a.loaded=!0,a.exports}n.m=t,function(){var t=[];n.O=function(e,r,o,a){if(!r){var i=1/0;for(m=0;m<t.length;m++){r=t[m][0],o=t[m][1],a=t[m][2];for(var s=!0,l=0;l<r.length;l++)(!1&a||i>=a)&&Object.keys(n.O).every((function(t){return n.O[t](r[l])}))?r.splice(l--,1):(s=!1,a<i&&(i=a));if(s){t.splice(m--,1);var c=o();void 0!==c&&(e=c)}}return e}a=a||0;for(var m=t.length;m>0&&t[m-1][2]>a;m--)t[m]=t[m-1];t[m]=[r,o,a]}}(),function(){n.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return n.d(e,{a:e}),e}}(),function(){n.d=function(t,e){for(var r in e)n.o(e,r)&&!n.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})}}(),function(){n.f={},n.e=function(t){return Promise.all(Object.keys(n.f).reduce((function(e,r){return n.f[r](t,e),e}),[]))}}(),function(){n.u=function(t){return"js/"+t+"-legacy."+{38:"a61556c3",48:"c76ad7d0",107:"09a3714b",144:"46837c1f",238:"8f8df14f",259:"906ddd57",285:"e85870a2",294:"a78864e1",400:"bc43b4b9",521:"88ed4562",604:"9c74402c",610:"87a3fc85",678:"f60d19c7",687:"cd3f1fed",765:"ef51f212",769:"0a5834d9",795:"a019af7f",809:"4afc7694",816:"14322b20",865:"686dafad",867:"f8abcf40",916:"c547886e",917:"9d3cf796",980:"c31cacde"}[t]+".js"}}(),function(){n.miniCssF=function(t){return"css/"+t+"."+{38:"9e22a65e",48:"bd4efdb8",107:"ea2c7783",144:"07ced5ea",238:"452663c2",259:"07ced5ea",294:"9e22a65e",521:"cbec9789",604:"debadd6d",610:"8a1573e8",678:"a90e5a36",765:"999adde2",795:"a8760166",809:"23a696e9",816:"999adde2",865:"999adde2",916:"9b513063",980:"cc9fe986"}[t]+".css"}}(),function(){n.g=function(){if("object"===typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"===typeof window)return window}}()}(),function(){n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)}}(),function(){var t={},e="company-guide:";n.l=function(r,o,a,i){if(t[r])t[r].push(o);else{var s,l;if(void 0!==a)for(var c=document.getElementsByTagName("script"),m=0;m<c.length;m++){var u=c[m];if(u.getAttribute("src")==r||u.getAttribute("data-webpack")==e+a){s=u;break}}s||(l=!0,s=document.createElement("script"),s.charset="utf-8",s.timeout=120,n.nc&&s.setAttribute("nonce",n.nc),s.setAttribute("data-webpack",e+a),s.src=r),t[r]=[o];var d=function(e,n){s.onerror=s.onload=null,clearTimeout(p);var o=t[r];if(delete t[r],s.parentNode&&s.parentNode.removeChild(s),o&&o.forEach((function(t){return t(n)})),e)return e(n)},p=setTimeout(d.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=d.bind(null,s.onerror),s.onload=d.bind(null,s.onload),l&&document.head.appendChild(s)}}}(),function(){n.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})}}(),function(){n.nmd=function(t){return t.paths=[],t.children||(t.children=[]),t}}(),function(){n.p="/"}(),function(){var t=function(t,e,n,r){var o=document.createElement("link");o.rel="stylesheet",o.type="text/css";var a=function(a){if(o.onerror=o.onload=null,"load"===a.type)n();else{var i=a&&("load"===a.type?"missing":a.type),s=a&&a.target&&a.target.href||e,l=new Error("Loading CSS chunk "+t+" failed.\n("+s+")");l.code="CSS_CHUNK_LOAD_FAILED",l.type=i,l.request=s,o.parentNode.removeChild(o),r(l)}};return o.onerror=o.onload=a,o.href=e,document.head.appendChild(o),o},e=function(t,e){for(var n=document.getElementsByTagName("link"),r=0;r<n.length;r++){var o=n[r],a=o.getAttribute("data-href")||o.getAttribute("href");if("stylesheet"===o.rel&&(a===t||a===e))return o}var i=document.getElementsByTagName("style");for(r=0;r<i.length;r++){o=i[r],a=o.getAttribute("data-href");if(a===t||a===e)return o}},r=function(r){return new Promise((function(o,a){var i=n.miniCssF(r),s=n.p+i;if(e(i,s))return o();t(r,s,o,a)}))},o={143:0};n.f.miniCss=function(t,e){var n={38:1,48:1,107:1,144:1,238:1,259:1,294:1,521:1,604:1,610:1,678:1,765:1,795:1,809:1,816:1,865:1,916:1,980:1};o[t]?e.push(o[t]):0!==o[t]&&n[t]&&e.push(o[t]=r(t).then((function(){o[t]=0}),(function(e){throw delete o[t],e})))}}(),function(){var t={143:0};n.f.j=function(e,r){var o=n.o(t,e)?t[e]:void 0;if(0!==o)if(o)r.push(o[2]);else{var a=new Promise((function(n,r){o=t[e]=[n,r]}));r.push(o[2]=a);var i=n.p+n.u(e),s=new Error,l=function(r){if(n.o(t,e)&&(o=t[e],0!==o&&(t[e]=void 0),o)){var a=r&&("load"===r.type?"missing":r.type),i=r&&r.target&&r.target.src;s.message="Loading chunk "+e+" failed.\n("+a+": "+i+")",s.name="ChunkLoadError",s.type=a,s.request=i,o[1](s)}};n.l(i,l,"chunk-"+e,e)}},n.O.j=function(e){return 0===t[e]};var e=function(e,r){var o,a,i=r[0],s=r[1],l=r[2],c=0;if(i.some((function(e){return 0!==t[e]}))){for(o in s)n.o(s,o)&&(n.m[o]=s[o]);if(l)var m=l(n)}for(e&&e(r);c<i.length;c++)a=i[c],n.o(t,a)&&t[a]&&t[a][0](),t[a]=0;return n.O(m)},r=self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[];r.forEach(e.bind(null,0)),r.push=e.bind(null,r.push.bind(r))}();var r=n.O(void 0,[998],(function(){return n(8208)}));r=n.O(r)})();
//# sourceMappingURL=app-legacy.9f6c8bd7.js.map