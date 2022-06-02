"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[600],{5600:function(t,e,s){s.r(e),s.d(e,{default:function(){return H}});var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"container mx-auto mt-5 sm:mt-10 sm:mt-20 mb-16"},[s("ProjectHeader",{attrs:{singleProjectHeader:t.singleProjectHeader}}),s("Swiper"),s("ProjectInfo",{attrs:{projectInfo:t.projectInfo,categoryInfo:t.categoryInfo}})],1)},i=[],r=s(775),o=s.n(r),l=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"flex items-center"},[s("div",{staticClass:"w-7 h-7 sm:w-14 sm:h-14 rounded-lg sm:rounded-xl flex items-center justify-center Clogo cursor-pointer shadow-lg font-general-medium text-left text-md sm:text-3xl font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7 mr-2 sm:mr-5"},[t._v(" R ")]),s("p",{staticClass:"font-general-medium text-left xl-text-4xl lg:text-3xl md:text-xl sm:text-md font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7"},[t._v(" "+t._s(t.singleProjectHeader.singleProjectTitle)+" ")]),t._m(0)]),s("div",{staticClass:"flex"},[s("div",{staticClass:"flex items-center mr-10"},[s("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"clock"}}),s("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v(t._s(t.singleProjectHeader.singleProjectDate))])]),s("div",{staticClass:"flex items-center"},[s("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"tag"}}),s("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v(t._s(t.singleProjectHeader.singleProjectTag))])]),s("div",{staticClass:"ml-10 flex items-center",attrs:{role:"button"}},[s("router-link",{staticClass:"flex items-center",attrs:{to:"/settings"}},[s("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"settings"}}),s("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v("Settings")])])],1),s("div",{staticClass:"flex items-center ml-10 chat-box rounded-xl",on:{click:function(e){return t.openChat()}}},[s("i",{staticClass:"w-4 h-4 text-ternary-dark dark:text-ternary-light",attrs:{"data-feather":"message-circle"}}),s("span",{staticClass:"font-general-medium ml-1 sm:ml-2 text-xs sm:text-md txt-mobile2 leading-none text-primary-dark dark:text-primary-light"},[t._v("Chat")])])]),s("Chat",{ref:"open"})],1)},n=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"verified mt-9 sm:mt-16 ml-1 sm:ml-3"},[s("span",[t._v("✔")])])}],c=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("beautiful-chat",{attrs:{participants:t.participants,titleImageUrl:t.titleImageUrl,onMessageWasSent:t.onMessageWasSent,messageList:t.messageList,newMessagesCount:t.newMessagesCount,isOpen:t.isChatOpen,close:t.closeChat,icons:t.icons,open:t.openChat,showEmoji:!0,showFile:!0,showEdition:!0,showDeletion:!0,showTypingIndicator:t.showTypingIndicator,showLauncher:!1,showCloseButton:!0,colors:t.colors,alwaysScrollToBottom:t.alwaysScrollToBottom,disableUserListToggle:!1,messageStyling:t.messageStyling},on:{onType:t.handleOnType,edit:t.editMessage}})],1)},m=[],d={name:"chat",data(){return{participants:[{id:"user1",name:"Matteo",imageUrl:"https://avatars3.githubusercontent.com/u/1915989?s=230&v=4"},{id:"user2",name:"Support",imageUrl:"https://avatars3.githubusercontent.com/u/37018832?s=200&v=4"},{id:"user2",name:"eslam",imageUrl:"https://avatars3.githubusercontent.com/u/37018832?s=200&v=4"}],titleImageUrl:"https://a.slack-edge.com/66f9/img/avatars-teams/ava_0001-34.png",messageList:[{type:"text",author:"me",data:{text:"Say yes!"}},{type:"text",author:"user1",data:{text:"No."}},{type:"text",author:"user2",data:{text:"Wow."}}],newMessagesCount:0,isChatOpen:!1,showTypingIndicator:"",colors:{header:{bg:"#6366f1",text:"#ffffff"},launcher:{bg:"#6366f1"},messageList:{bg:"#ffffff"},sentMessage:{bg:"#6366f1",text:"#ffffff"},receivedMessage:{bg:"#eaeaea",text:"#222222"},userInput:{bg:"#f4f7f9",text:"#565867"}},alwaysScrollToBottom:!1,messageStyling:!0}},methods:{sendMessage(t){t.length>0&&(this.newMessagesCount=this.isChatOpen?this.newMessagesCount:this.newMessagesCount+1,this.onMessageWasSent({author:"support",type:"text",data:{text:t}}))},onMessageWasSent(t){this.messageList=[...this.messageList,t]},openChat(){this.isChatOpen=!0,this.newMessagesCount=0},closeChat(){this.isChatOpen=!1},handleScrollToTop(){},handleOnType(){console.log("Emit typing event")},editMessage(t){const e=this.messageList.find((e=>e.id===t.id));e.isEdited=!0,e.data.text=t.data.text}}},u=d,p=s(3736),g=(0,p.Z)(u,c,m,!1,null,null,null),h=g.exports,f={props:["singleProjectHeader"],data(){return{open:!1}},components:{Chat:h},methods:{openChat(){this.$refs.open.openChat()}}},x=f,b=(0,p.Z)(x,l,n,!1,null,null,null),y=b.exports,C=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"container"},[s("div",{staticClass:"active flex justify-start mt-7"},[s("img",{staticClass:"rounded-xl cursor-pointer shadow-lg",attrs:{src:t.selected,alt:"Real Estate"}})]),s("div",{staticClass:"thum-img flex justify-start"},t._l(t.projectImages,(function(e){return s("img",{key:e.id,staticClass:"rounded-xl cursor-pointer shadow-lg",class:{active:e.img==t.selected},attrs:{src:e.img,alt:e.title},on:{click:function(s){return t.choose(e.img)}}})})),0)])},v=[],j={name:"swiper",data(){return{selected:"http://holrmagazine.com/wp-content/uploads/2022/05/folksgrowth.com-real-estate-business.jpg",projectImages:[{id:1,title:"Real Estate",img:"https://blog.hubspot.com/hubfs/Sales_Blog/real-estate-business-compressor.jpg"},{id:2,title:"Real Estate",img:"https://c3c5e8m9.stackpathcdn.com/sites/g/files/aatuss191/files/2018-10/Edelman_Website_Real_Estate_Image_0.jpg"},{id:3,title:"Real Estate",img:"http://holrmagazine.com/wp-content/uploads/2022/05/folksgrowth.com-real-estate-business.jpg"}]}},methods:{choose(t){this.selected=t}}},k=j,_=(0,p.Z)(k,C,v,!1,null,null,null),w=_.exports,E=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"block sm:flex gap-0 sm:gap-10 mt-14"},[s("div",{staticClass:"w-full sm:w-1/3 text-left"},[s("div",{staticClass:"mb-7"},[s("p",{staticClass:"font-general-medium text-base sm:text-2xl text-secondary-dark dark:text-secondary-light mb-2"},[t._v(" "+t._s(t.projectInfo.clientHeading)+" ")]),s("ul",{staticClass:"leading-loose"},t._l(t.projectInfo.companyInfos,(function(e){return s("li",{key:e,staticClass:"font-general-regular text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[s("span",[t._v(t._s(e.title)+": ")]),s("a",{class:"Website"==e.title||"Phone"==e.title?"hover:underline cursor-pointer":"",attrs:{href:"#","aria-label":"Project Website and Phone"}},[t._v(t._s(e.details))])])})),0)]),s("div",[s("p",{staticClass:"font-general-medium text-base sm:text-2xl text-ternary-dark dark:text-ternary-light mb-2"},[t._v(" "+t._s(t.projectInfo.socialSharingsHeading)+" ")]),s("div",{staticClass:"flex items-center gap-3 mt-5"},t._l(t.projectInfo.socialSharings,(function(t){return s("a",{key:t.id,staticClass:"bg-ternary-light dark:bg-ternary-dark text-gray-400 hover:text-primary-dark dark:hover:text-primary-light p-2 rounded-lg shadow-sm duration-500",attrs:{href:t.url,target:"__blank","aria-label":"Share Project"}},[s("i",{staticClass:"w-4 lg:w-5 h-4 lg:h-5",attrs:{"data-feather":t.icon}})])})),0)])]),s("div",{staticClass:"w-full sm:w-2/3 text-left mt-10 sm:mt-0"},[s("p",{staticClass:"font-general-medium text-primary-dark dark:text-primary-light text-base sm:text-2xl font-bold mb-7"},[t._v(" "+t._s(t.projectInfo.projectDetailsHeading)+" ")]),t._l(t.projectInfo.projectDetails,(function(e){return s("p",{key:e.id,staticClass:"font-general-regular mb-5 text-xs sm:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(e.details)+" ")])})),s("div",{staticClass:"mb-7"},[s("p",{staticClass:"font-general-medium text-primary-dark dark:text-primary-light text-base sm:text-2xl font-bold mb-7"},[t._v(" "+t._s(t.projectInfo.objectivesHeading)+" ")]),s("p",{staticClass:"font-general-regular text-primary-dark dark:text-primary-light text-base sm:text-xl font-bold mb-4 pb-2 text-left border-b"},[t._v(" "+t._s(t.categoryInfo.categoryHeading)+" ")]),s("div",{staticClass:"grid grid-cols-3 sm:grid-cols-4 gap-10"},t._l(t.categoryInfo.categoryProducts,(function(e){return s("div",{key:e.id},[s("img",{staticClass:"rounded-xl cursor-pointer",attrs:{src:e.img,alt:e.title}}),s("h5",{staticClass:"font-general-regular text-primary-dark dark:text-primary-light text-sm font-bold my-1 text-left"},[t._v(" "+t._s(e.title)+" ")]),s("p",{staticClass:"text-sm"},[t._v(t._s(e.desc))])])})),0)])],2)])},I=[],q={props:["projectInfo","categoryInfo"],mounted(){o().replace()},updated(){o().replace()}},A=q,L=(0,p.Z)(A,E,I,!1,null,null,null),P=L.exports,M={name:"Projects",components:{ProjectHeader:y,Swiper:w,ProjectInfo:P},data:()=>({singleProjectHeader:{singleProjectTitle:"Real Estate company",singleProjectDate:"Jul 26, 2021",singleProjectTag:"Real Estate"},projectImages:[{id:1,title:"Real Estate",img:"https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.hubspot.com%2Fsales%2Freal-estate-business&psig=AOvVaw2VvE66rwutLGEOWEuEDE26&ust=1654239321584000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCKi-1--XjvgCFQAAAAAdAAAAABAO"},{id:2,title:"Real Estate",img:"https://c3c5e8m9.stackpathcdn.com/sites/g/files/aatuss191/files/2018-10/Edelman_Website_Real_Estate_Image_0.jpg"},{id:3,title:"Real Estate",img:"http://holrmagazine.com/wp-content/uploads/2022/05/folksgrowth.com-real-estate-business.jpg"}],projectInfo:{clientHeading:"About Company",companyInfos:[{id:1,title:"Name",details:"Company Ltd"},{id:2,title:"Services",details:"Real Estate"},{id:3,title:"Website",details:"https://company.com"},{id:4,title:"Phone",details:"555 8888 888"}],objectivesHeading:"Categories",objectivesDetails:"Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, natus! Quibusdam enim quod in esse, mollitia molestias incidunt quas ipsa accusamus veniam.",projectDetailsHeading:"About Us",projectDetails:[{id:1,details:"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil vel illum asperiores dignissimos cumque quibusdam et fugiat voluptatem nobis suscipit explicabo, eaque consequatur nesciunt, fugit eligendi corporis laudantium adipisci soluta? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt totam dolorum, ducimus obcaecati, voluptas facilis molestias nobis ut quam natus similique inventore excepturi optio ipsa deleniti fugit illo. Unde, amet! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illo necessitatibus perspiciatis! Aperiam perferendis labore temporibus, eos culpa corporis recusandae quas, fuga voluptatibus nesciunt odit libero tenetur neque consequatur ea."},{id:2,details:"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil vel illum asperiores dignissimos cumque quibusdam et fugiat voluptatem nobis suscipit explicabo, eaque consequatur nesciunt, fugit eligendi corporis laudantium adipisci soluta?"}],socialSharingsHeading:"Follow Us",socialSharings:[{id:1,name:"Twitter",icon:"twitter",url:""},{id:2,name:"Instagram",icon:"instagram",url:""},{id:3,name:"Facebook",icon:"facebook",url:""},{id:4,name:"LinkedIn",icon:"linkedin",url:""},{id:5,name:"Youtube",icon:"youtube",url:""}]},categoryInfo:{categoryHeading:"Real Estate",categoryProducts:[{id:1,title:"Modernly Designed Real Estate Surrounded by Nature in Alanya",desc:"Lorem ipsum dolor, sit amet consectetur",img:"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQGJuGT6cIvDI7VJAbuddMJkSijQq6vpLpm57dUeUKLMrq974BmN542rjCOSEJ_YYoP5ABVZjDdUOXtiPeJWQOWog8pLq6UG_ZEtfkK1abA&usqp=CAE"},{id:2,title:"Real Estate in a Comprehensive Housing Project in North Cyprus",desc:"Lorem ipsum dolor, sit amet consectetur",img:"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQGBTelIkoJR23dDqbJcaKt9GT1-qxEorTQxGTtX4qxiN1TYVUdcEq4mJ7p9uZypW8CFO1CIaeEuCMiZzjdm5EKNoEsxW6UMgxZXC5cZ0E&usqp=CAE"},{id:3,title:"Fully Furnished Real Estate in Belek Kadriya",desc:"Lorem ipsum dolor, sit amet consectetur",img:"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSfCjKYW3BVKXG20R9ep2mAFvvzTAphO-MYWvbQ7Q8JmMnHc9e4LAJZL_l25jMNU8w_mHf5GV6ji0Q3JuNdM-su-cqvtr8tSqJ8fik7qsGX&usqp=CAE"},{id:4,title:"Antalya Luxury Real Estate with Rich Complex Features",desc:"Lorem ipsum dolor, sit amet consectetur",img:"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQu6xJpYOuq1tvwWi8k28T70UACOK-gyQHojmeIYgLaVMBVWdRrQqC-XsLup6qmYlOADlmmsUkqykLtvb7d-mEpHB65uLmYC0RJcEKqLTmv&usqp=CAE"}]},relatedProject:{relatedProjectsHeading:"Related Companies",relatedProjects:[{id:1,title:"Mobile UI",img:s(3087)},{id:2,title:"Web Application",img:s(597)},{id:3,title:"UI Design",img:s(9952)},{id:4,title:"Kabul Mobile App UI",img:s(4398)}]}}),mounted(){o().replace()},updated(){o().replace()},methods:{}},S=M,T=(0,p.Z)(S,a,i,!1,null,"1e17dc6a",null),H=T.exports},3087:function(t,e,s){t.exports=s.p+"img/mobile-project-1.8b4f9e2f.jpg"},4398:function(t,e,s){t.exports=s.p+"img/mobile-project-2.9bd76372.jpg"},9952:function(t,e,s){t.exports=s.p+"img/ui-project-2.afd87ce7.jpg"},597:function(t,e,s){t.exports=s.p+"img/web-project-1.d1debdf5.jpg"}}]);
//# sourceMappingURL=600.08edc83f.js.map