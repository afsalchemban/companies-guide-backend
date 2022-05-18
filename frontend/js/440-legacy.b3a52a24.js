"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[440],{6440:function(t,e,s){s.r(e),s.d(e,{default:function(){return b}});var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"mt-5"},[s("div",{staticClass:"mb-4 card2"},[t._m(0),s("div",{staticClass:"p-3 card2-body"},[t.members?s("div",{staticClass:"grid sm:grid-cols-1 xs:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-7"},t._l(t.members,(function(e,i){return s("div",{key:i,staticClass:"mb-4 mb-xl-0"},[s("div",{staticClass:"card2 card-blog card-plain"},[s("div",{staticClass:"relative"},[s("a",{staticClass:"shadow-xl block rounded-xl"},[s("img",{staticClass:"shadow img-fluid rounded-xl mx-auto",attrs:{src:t.cm_logo?t.cm_logo:e.profile.desktop_image,alt:"img-blur-shadow"}})]),t.councilId==t.$route.query.id?s("div",{staticClass:"action"},[s("div",{staticClass:"action-icon",attrs:{role:"button"},on:{click:function(s){return t.selectItem(e.id)}}},[s("svg",{staticClass:"h-6 w-6",attrs:{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor","stroke-width":"2"}},[s("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"}})])]),s("div",{staticClass:"options shadow-xl rounded-xl hidden",class:{show:e.id===t.activeItem&&t.isshow}},[s("ul",{staticClass:"list-group"},[s("li",{staticClass:"pt-0 text-sm border-0 list-group-item ps-0 text-dark mb-2"},[s("router-link",{attrs:{to:{path:"/council/settings/edit-member",query:{id:t.$route.query.id,name:t.$route.query.name,member_id:e.id,member_name:e.name}}}},[t._v("Edit")])],1),s("li",{staticClass:"pt-0 text-sm border-0 list-group-item ps-0 text-dark"},[s("router-link",{attrs:{to:""}},[t._v("Delete")])],1)])])]):t._e(),t.councilId==t.$route.query.id?s("UpdateCMLogo",{attrs:{member_id:e.id},on:{cmlogo:function(e){return t.getLogo(e)}}}):t._e()],1),s("div",{staticClass:"px-1 pb-0 card2-body"},[s("ul",{staticClass:"list-group"},[s("li",{staticClass:"pt-0 text-sm border-0 list-group-item ps-0 text-dark mb-2"},[s("strong",{staticClass:"text-dark"},[t._v(t._s(e.name))])]),s("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[s("strong",{},[t._v("Position:")]),t._v("   "+t._s(e.designation)+" ")]),s("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[s("strong",{},[t._v("Mobile:")]),t._v("   "+t._s(e.mobile)+" ")]),s("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[s("strong",{staticClass:"text-dark"},[t._v("Email:")]),t._v("   "+t._s(e.email)+" ")]),t._m(1,!0)])])])])})),0):s("div",{staticClass:"flex justify-center items-center mt-64"},[s("Spinner",{attrs:{name:"line-scale",color:"#82a3e0"}})],1),t.members?s("div",{staticClass:"flex justify-center items-center"},[0==t.members.length?s("h5",{staticClass:"mb-1 text-dark"},[t._v("No Members")]):t._e()]):t._e()])])])},o=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"p-5 pb-0 card-header"},[s("h5",{staticClass:"mb-1 text-dark"},[t._v("Our Members")]),s("p",{staticClass:"text-sm text-dark"},[t._v("Activity name")])])},function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[s("strong",{staticClass:"text-dark"},[t._v("Companies:")]),t._v("   SmartID,BusinessID,Gold Star ")])}],a=s(3019),r=(s(8309),s(6931)),n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"uploadWrap"},[s("div",[t.isCropped?s("div",{staticClass:"img-container"},[s("div",{staticClass:"img-holder"},[t.isCropped?s("div",[s("Cropper",{attrs:{src:t.img},on:{change:t.change}}),s("div",{staticClass:"save-image flex justify-between"},[s("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:function(e){return t.saveImage()}}},[t._v(" Save ")]),s("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:t.CancelCrop}},[t._v(" Cancel ")])])],1):t._e(),t.before_crop?s("div",{staticClass:"mb-3"},[s("div",{staticClass:"img-selected-wrapper"},t._l(t.InitialArray,(function(e,i){return s("div",{key:i,staticClass:"selected-images"},[s("img",{attrs:{src:e}}),s("span",{staticClass:"material-icons removeIco",on:{click:function(e){return t.delete_image(i)}}},[t._v("X")])])})),0)]):t._e()])]):t._e(),s("div",{staticClass:"uploader-box"},[t.ShowChooseFile?s("div",{on:{click:t.chooseFile}},[s("div",{staticClass:"upload_cmlogo",attrs:{role:"button"}},[s("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file"},on:{change:function(e){return t.chooseImage(e)}}}),s("svg",{staticClass:"h-6 w-4",attrs:{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor","stroke-width":"2"}},[s("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"}}),s("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M15 13a3 3 0 11-6 0 3 3 0 016 0z"}})])])]):t._e()])])])])},l=[],c=(s(1539),s(8783),s(3948),s(285),s(1637),s(561),s(6867)),d={data:function(){return{before_crop:!0,isCropped:!1,ShowChooseFile:!0,IsDisabledUpload:!1,files:[],InitialArray:[],RealArray:[],temp:"",cmlogo:null,updatedLogo:null,mapMarkers:{}}},props:{member_id:String},components:{Cropper:c.fl},methods:{getimglogo:function(){this.$emit("cmlogo",this.updatedLogo)},chooseFile:function(){this.$refs.file.click()},CancelCrop:function(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},saveImage:function(){this.update_cm_logo(this.$route.query.id,this.member_id),this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},update_cm_logo:function(t,e){var s=this,i=new FormData;i.append("file",this.cmlogo),r.Z.post("/council/change_member_image/"+t+"/"+e,i,{headers:{"Content-Type":"multipart/form-data"}}).then((function(t){console.log(t.data),s.updatedLogo=t.data.profile_image,s.getimglogo()})).catch((function(t){console.log(t.message)}))},change:function(t){var e=this,s=t.canvas;s.toBlob((function(t){e.blobUrl=URL.createObjectURL(t),e.cmlogo=new File([t],"image",{lastModified:(new Date).getTime(),type:t.type},"image/jpeg",.3)}))},chooseImage:function(t){var e=t.target.files[0];this.logo=e,this.img=URL.createObjectURL(e);var s=new FileReader,i=this;s.readAsDataURL(t.target.files[0]),s.onload=function(t){console.log(i.isCropped);var e=new Image;e.src=t.target.result,e.onload=function(){var t=this.height,e=this.width;return t<210||e<210?(alert("Please choose file which has minimum height of 210 and width of 210"),!1):(i.ShowChooseFile=!1,i.isCropped=!0,!0)}}},delete_image:function(t){this.InitialArray.splice(t,1),this.RealArray.splice(t,1),console.log(this.InitialArray),console.log(this.RealArray)}}},m=d,u=s(3736),g=(0,u.Z)(m,n,l,!1,null,null,null),h=g.exports,p=s(4665),f={name:"our-members",data:function(){return{members:null,activeItem:null,isshow:!1,cm_logo:null}},components:{UpdateCMLogo:h},computed:(0,a.Z)({currentRouteName:function(){return this.$route.name}},(0,p.rn)({councilId:function(t){return t.auth.council_id}})),methods:{getLogo:function(t){this.cm_logo=t},selectItem:function(t){this.activeItem=t,this.isshow=!this.isshow},get_council_members:function(t){var e=this;r.Z.get("public/council_member/"+t).then((function(t){console.log(t.data),e.members=t.data.data})).catch((function(t){console.log(t)}))}},created:function(){this.get_council_members(this.$route.query.id)}},v=f,_=(0,u.Z)(v,i,o,!1,null,null,null),b=_.exports}}]);
//# sourceMappingURL=440-legacy.b3a52a24.js.map