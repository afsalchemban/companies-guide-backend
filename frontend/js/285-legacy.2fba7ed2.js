"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[285],{6285:function(t,e,i){i.r(e),i.d(e,{default:function(){return K}});var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"container mx-auto mt-5 sm:mt-10 sm:mt-20 mb-16"},[i("ProjectHeader",{attrs:{singleProjectHeader:t.singleProjectHeader}}),i("Swiper"),i("ProjectInfo",{attrs:{projectInfo:t.projectInfo}}),i("ProjectRelatedProjects",{attrs:{relatedProject:t.relatedProject}})],1)},a=[],r=(i(4916),i(5306),i(775)),n=i.n(r),o=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("div",{staticClass:"flex items-center"},[i("div",{staticClass:"w-7 h-7 sm:w-14 sm:h-14 rounded-lg sm:rounded-xl flex items-center justify-center Clogo cursor-pointer shadow-lg font-general-medium text-left text-md sm:text-3xl font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7 mr-2 sm:mr-5"},[t._v(" R ")]),i("p",{staticClass:"font-general-medium text-left xl-text-4xl lg:text-3xl md:text-xl sm:text-md font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7"},[t._v(" "+t._s(t.singleProjectHeader.singleProjectTitle)+" ")]),t._m(0)]),i("div",{staticClass:"flex"},[i("div",{staticClass:"flex items-center mr-10"},[i("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"clock"}}),i("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v(t._s(t.singleProjectHeader.singleProjectDate))])]),i("div",{staticClass:"flex items-center"},[i("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"tag"}}),i("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v(t._s(t.singleProjectHeader.singleProjectTag))])]),i("div",{staticClass:"ml-10 flex items-center",attrs:{role:"button"}},[i("router-link",{staticClass:"flex items-center",attrs:{to:"/settings"}},[i("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"settings"}}),i("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v("Settings")])])],1),i("div",{staticClass:"flex items-center ml-10 chat-box rounded-xl",on:{click:function(e){return t.openChat()}}},[i("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"message-circle"}}),i("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v("Chat")])])]),i("Chat",{ref:"open"})],1)},l=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"verified mt-9 sm:mt-16 ml-1 sm:ml-3"},[i("span",[t._v("✔")])])}],c=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("beautiful-chat",{attrs:{participants:t.participants,titleImageUrl:t.titleImageUrl,onMessageWasSent:t.onMessageWasSent,messageList:t.messageList,newMessagesCount:t.newMessagesCount,isOpen:t.isChatOpen,close:t.closeChat,icons:t.icons,open:t.openChat,showEmoji:!0,showFile:!0,showEdition:!0,showDeletion:!0,showTypingIndicator:t.showTypingIndicator,showLauncher:!1,showCloseButton:!0,colors:t.colors,alwaysScrollToBottom:t.alwaysScrollToBottom,disableUserListToggle:!1,messageStyling:t.messageStyling},on:{onType:t.handleOnType,edit:t.editMessage}})],1)},u=[];function m(t,e){(null==e||e>t.length)&&(e=t.length);for(var i=0,s=new Array(e);i<e;i++)s[i]=t[i];return s}function d(t){if(Array.isArray(t))return m(t)}i(2526),i(1817),i(1539),i(2165),i(8783),i(3948),i(1038);function p(t){if("undefined"!==typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}i(7042),i(8309),i(7601);function g(t,e){if(t){if("string"===typeof t)return m(t,e);var i=Object.prototype.toString.call(t).slice(8,-1);return"Object"===i&&t.constructor&&(i=t.constructor.name),"Map"===i||"Set"===i?Array.from(t):"Arguments"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i)?m(t,e):void 0}}i(1703);function f(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}function x(t){return d(t)||p(t)||g(t)||f()}i(2222),i(9826);var h={name:"chat",data:function(){return{participants:[{id:"user1",name:"Matteo",imageUrl:"https://avatars3.githubusercontent.com/u/1915989?s=230&v=4"},{id:"user2",name:"Support",imageUrl:"https://avatars3.githubusercontent.com/u/37018832?s=200&v=4"}],titleImageUrl:"https://a.slack-edge.com/66f9/img/avatars-teams/ava_0001-34.png",messageList:[{type:"text",author:"me",data:{text:"Say yes!"}},{type:"text",author:"user1",data:{text:"No."}},{type:"text",author:"user2",data:{text:"Wow."}}],newMessagesCount:0,isChatOpen:!1,showTypingIndicator:"",colors:{header:{bg:"#6366f1",text:"#ffffff"},launcher:{bg:"#6366f1"},messageList:{bg:"#ffffff"},sentMessage:{bg:"#6366f1",text:"#ffffff"},receivedMessage:{bg:"#eaeaea",text:"#222222"},userInput:{bg:"#f4f7f9",text:"#565867"}},alwaysScrollToBottom:!1,messageStyling:!0}},methods:{sendMessage:function(t){t.length>0&&(this.newMessagesCount=this.isChatOpen?this.newMessagesCount:this.newMessagesCount+1,this.onMessageWasSent({author:"support",type:"text",data:{text:t}}))},onMessageWasSent:function(t){this.messageList=[].concat(x(this.messageList),[t])},openChat:function(){this.isChatOpen=!0,this.newMessagesCount=0},closeChat:function(){this.isChatOpen=!1},handleScrollToTop:function(){},handleOnType:function(){console.log("Emit typing event")},editMessage:function(t){var e=this.messageList.find((function(e){return e.id===t.id}));e.isEdited=!0,e.data.text=t.data.text}}},b=h,y=i(3736),v=(0,y.Z)(b,c,u,!1,null,null,null),C=v.exports,j={props:["singleProjectHeader"],data:function(){return{open:!1}},components:{Chat:C},methods:{openChat:function(){this.$refs.open.openChat()}}},k=j,_=(0,y.Z)(k,o,l,!1,null,null,null),w=_.exports,I=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"container"},[i("div",{staticClass:"active flex justify-start mt-7"},[i("img",{staticClass:"rounded-xl cursor-pointer shadow-lg",attrs:{src:t.selected,alt:"Real Estate"}})]),i("div",{staticClass:"thum-img flex justify-start"},t._l(t.projectImages,(function(e){return i("img",{key:e.id,staticClass:"rounded-xl cursor-pointer shadow-lg",class:{active:e.img==t.selected},attrs:{src:e.img,alt:e.title},on:{click:function(i){return t.choose(e.img)}}})})),0)])},P=[],S={name:"swiper",data:function(){return{selected:i(3687),projectImages:[{id:1,title:"Real Estate",img:i(3687)},{id:2,title:"Real Estate",img:i(7532)},{id:3,title:"Real Estate",img:i(2225)}]}},methods:{choose:function(t){this.selected=t}}},q=S,E=(0,y.Z)(q,I,P,!1,null,null,null),T=E.exports,L=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"block sm:flex gap-0 sm:gap-10 mt-14"},[i("div",{staticClass:"w-full sm:w-1/3 text-left"},[i("div",{staticClass:"mb-7"},[i("p",{staticClass:"font-general-medium text-base sm:text-2xl text-secondary-dark dark:text-secondary-light mb-2"},[t._v(" "+t._s(t.projectInfo.clientHeading)+" ")]),i("ul",{staticClass:"leading-loose"},t._l(t.projectInfo.companyInfos,(function(e){return i("li",{key:e,staticClass:"font-general-regular text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[i("span",[t._v(t._s(e.title)+": ")]),i("a",{class:"Website"==e.title||"Phone"==e.title?"hover:underline cursor-pointer":"",attrs:{href:"#","aria-label":"Project Website and Phone"}},[t._v(t._s(e.details))])])})),0)]),i("div",{staticClass:"mb-7"},[i("p",{staticClass:"font-general-medium text-base sm:text-2xl text-ternary-dark dark:text-ternary-light mb-2"},[t._v(" "+t._s(t.projectInfo.objectivesHeading)+" ")]),i("p",{staticClass:"font-general-regular text-xs sm:text-lg text-primary-dark dark:text-ternary-light"},[t._v(" "+t._s(t.projectInfo.objectivesDetails)+" ")])]),i("div",[i("p",{staticClass:"font-general-medium text-base sm:text-2xl text-ternary-dark dark:text-ternary-light mb-2"},[t._v(" "+t._s(t.projectInfo.socialSharingsHeading)+" ")]),i("div",{staticClass:"flex items-center gap-3 mt-5"},t._l(t.projectInfo.socialSharings,(function(t){return i("a",{key:t.id,staticClass:"bg-ternary-light dark:bg-ternary-dark text-gray-400 hover:text-primary-dark dark:hover:text-primary-light p-2 rounded-lg shadow-sm duration-500",attrs:{href:t.url,target:"__blank","aria-label":"Share Project"}},[i("i",{staticClass:"w-4 lg:w-5 h-4 lg:h-5",attrs:{"data-feather":t.icon}})])})),0)])]),i("div",{staticClass:"w-full sm:w-2/3 text-left mt-10 sm:mt-0"},[i("p",{staticClass:"font-general-medium text-primary-dark dark:text-primary-light text-base sm:text-2xl font-bold mb-7"},[t._v(" "+t._s(t.projectInfo.projectDetailsHeading)+" ")]),t._l(t.projectInfo.projectDetails,(function(e){return i("p",{key:e.id,staticClass:"font-general-regular mb-5 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(e.details)+" ")])}))],2)])},M=[],H={props:["projectInfo"],mounted:function(){n().replace()},updated:function(){n().replace()}},R=H,A=(0,y.Z)(R,L,M,!1,null,null,null),U=A.exports,D=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"mt-10 pt-10 sm:pt-14 sm:mt-20 border-t-2 border-primary-light dark:border-secondary-dark"},[i("p",{staticClass:"font-general-regular text-primary-dark dark:text-primary-light text-base sm:text-2xl font-bold mb-10 sm:mb-14 text-left"},[t._v(" "+t._s(t.relatedProject.relatedProjectsHeading)+" ")]),i("div",{staticClass:"grid grid-cols-3 sm:grid-cols-4 gap-10"},t._l(t.relatedProject.relatedProjects,(function(t){return i("div",{key:t.id},[i("img",{staticClass:"rounded-xl cursor-pointer",attrs:{src:t.img,alt:t.title}})])})),0)])},O=[],W={props:["relatedProject"]},$=W,N=(0,y.Z)($,D,O,!1,null,null,null),Z=N.exports,B={name:"Projects",components:{ProjectHeader:w,Swiper:T,ProjectInfo:U,ProjectRelatedProjects:Z},data:function(){return{singleProjectHeader:{singleProjectTitle:"Real Estate company",singleProjectDate:"Jul 26, 2021",singleProjectTag:"Real Estate"},projectImages:[{id:1,title:"Real Estate",img:i(3687)},{id:2,title:"Real Estate",img:i(7532)},{id:3,title:"Real Estate",img:i(2225)}],projectInfo:{clientHeading:"About Company",companyInfos:[{id:1,title:"Name",details:"Company Ltd"},{id:2,title:"Services",details:"Real Estate"},{id:3,title:"Website",details:"https://company.com"},{id:4,title:"Phone",details:"555 8888 888"}],objectivesHeading:"Categories",objectivesDetails:"Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, natus! Quibusdam enim quod in esse, mollitia molestias incidunt quas ipsa accusamus veniam.",technologies:[{title:"Tools & Technologies",techs:["HTML","CSS","JavaScript","Vue.js","TailwindCSS","AdobeXD"]}],projectDetailsHeading:"Challenge",projectDetails:[{id:1,details:"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil vel illum asperiores dignissimos cumque quibusdam et fugiat voluptatem nobis suscipit explicabo, eaque consequatur nesciunt, fugit eligendi corporis laudantium adipisci soluta? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt totam dolorum, ducimus obcaecati, voluptas facilis molestias nobis ut quam natus similique inventore excepturi optio ipsa deleniti fugit illo. Unde, amet! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illo necessitatibus perspiciatis! Aperiam perferendis labore temporibus, eos culpa corporis recusandae quas, fuga voluptatibus nesciunt odit libero tenetur neque consequatur ea."},{id:2,details:"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil vel illum asperiores dignissimos cumque quibusdam et fugiat voluptatem nobis suscipit explicabo, eaque consequatur nesciunt, fugit eligendi corporis laudantium adipisci soluta?"},{id:3,details:"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil vel illum asperiores dignissimos cumque quibusdam et fugiat voluptatem nobis suscipit explicabo, eaque consequatur nesciunt, fugit eligendi corporis laudantium adipisci soluta?"},{id:4,details:"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil vel illum asperiores dignissimos cumque quibusdam et fugiat voluptatem nobis suscipit explicabo, eaque consequatur nesciunt, fugit eligendi corporis laudantium adipisci soluta? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt totam dolorum, ducimus obcaecati, voluptas facilis molestias nobis ut quam natus similique inventore excepturi optio ipsa deleniti fugit illo. Unde, amet! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illo necessitatibus perspiciatis! Aperiam perferendis labore temporibus, eos culpa corporis recusandae quas, fuga voluptatibus nesciunt odit libero tenetur neque consequatur ea."}],socialSharingsHeading:"Follow Us",socialSharings:[{id:1,name:"Twitter",icon:"twitter",url:""},{id:2,name:"Instagram",icon:"instagram",url:""},{id:3,name:"Facebook",icon:"facebook",url:""},{id:4,name:"LinkedIn",icon:"linkedin",url:""},{id:5,name:"Youtube",icon:"youtube",url:""}]},relatedProject:{relatedProjectsHeading:"Related Companies",relatedProjects:[{id:1,title:"Mobile UI",img:i(3087)},{id:2,title:"Web Application",img:i(597)},{id:3,title:"UI Design",img:i(9952)},{id:4,title:"Kabul Mobile App UI",img:i(4398)}]}}},mounted:function(){n().replace()},updated:function(){n().replace()},methods:{}},F=B,J=(0,y.Z)(F,s,a,!1,null,"1c421be3",null),K=J.exports},3087:function(t,e,i){t.exports=i.p+"img/mobile-project-1.8b4f9e2f.jpg"},4398:function(t,e,i){t.exports=i.p+"img/mobile-project-2.9bd76372.jpg"},9952:function(t,e,i){t.exports=i.p+"img/ui-project-2.afd87ce7.jpg"},597:function(t,e,i){t.exports=i.p+"img/web-project-1.d1debdf5.jpg"}}]);
//# sourceMappingURL=285-legacy.2fba7ed2.js.map