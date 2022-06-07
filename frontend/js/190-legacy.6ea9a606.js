"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[190],{5190:function(t,e,i){i.r(e),i.d(e,{default:function(){return v}});var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"mt-5"},[i("div",{staticClass:"mb-4 card2"},[t._m(0),i("div",{staticClass:"p-3 card2-body"},[t.council_companies?i("div",{staticClass:"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-6 gap-3 sm:gap-3 md:gap-7"},t._l(t.council_companies,(function(e,s){return i("div",{key:s,staticClass:"mb-4 mb-xl-0"},[i("div",{staticClass:"card2 card-blog card-plain"},[i("div",{staticClass:"relative"},[i("a",{staticClass:"shadow-xl block rounded-xl"},[i("img",{staticClass:"shadow img-fluid rounded-xl",attrs:{src:t.cc_logo?t.cc_logo:e.logo.desktop_image,alt:"img-blur-shadow"}})]),t.councilId==t.$route.query.id?i("div",{staticClass:"action"},[i("div",{staticClass:"action-icon",attrs:{role:"button"},on:{click:function(i){return t.selectItem(e.id)}}},[i("svg",{staticClass:"h-6 w-6",attrs:{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor","stroke-width":"2"}},[i("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"}})])]),i("div",{staticClass:"options shadow-xl rounded-xl hidden",class:{show:e.id===t.activeItem&&t.isshow}},[i("ul",{staticClass:"list-group"},[i("li",{staticClass:"pt-0 text-sm border-0 list-group-item ps-0 text-dark mb-2"},[i("router-link",{attrs:{to:{path:"/council/settings/edit-company",query:{id:t.$route.query.id,name:t.$route.query.name,company_id:e.id,company_name:e.business_name}}}},[t._v("Edit")])],1),i("li",{staticClass:"pt-0 text-sm border-0 list-group-item ps-0 text-dark"},[i("router-link",{attrs:{to:""}},[t._v("Delete")])],1)])])]):t._e(),t.councilId==t.$route.query.id?i("UpdateCCLogo",{staticClass:"update_clogo",attrs:{company_id:e.id},on:{cclogo:function(e){return t.getLogo(e)}}}):t._e()],1),i("div",{staticClass:"px-1 pb-0 card2-body"},[i("ul",{staticClass:"list-group p-3"},[i("li",{staticClass:"pt-0 border-0 list-group-item ps-0 text-dark mb-2"},[i("h4",{staticClass:"text-dark text-xl"},[i("strong",[t._v(t._s(e.business_name))])])]),i("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[i("strong",{},[t._v("Mobile:")]),t._v("   "+t._s(e.phone_number)+" ")]),i("li",{staticClass:"text-sm border-0 list-group-item ps-0 text-dark mb-2"},[i("strong",{staticClass:"text-dark"},[t._v("Email:")]),t._v("   "+t._s(e.email)+" ")])])])])])})),0):i("div",{staticClass:"flex justify-center items-center mt-64"},[i("Spinner",{attrs:{name:"line-scale",color:"#82a3e0"}})],1),t.council_companies?i("div",{staticClass:"flex justify-center items-center"},[0==t.council_companies.length?i("h5",{staticClass:"mb-1 text-dark"},[t._v(" No Companies ")]):t._e()]):t._e()])])])},o=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"p-5 pb-0 card-header"},[i("h6",{staticClass:"mb-1 text-dark"},[t._v("Companies")])])}],a=i(3019),n=(i(8309),i(6931)),c=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("div",{staticClass:"uploadWrap"},[i("div",[t.isCropped?i("div",{staticClass:"img-container"},[i("div",{staticClass:"img-holder"},[t.isCropped?i("div",[i("Cropper",{attrs:{src:t.img,"stencil-size":{width:386,height:247},"stencil-props":{handlers:{},movable:!1,resizable:!1,minAspectRatio:1.46,maxAspectRatio:1.46},"image-restriction":"stencil"},on:{change:t.change}}),i("div",{staticClass:"save-image flex justify-between"},[i("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:function(e){return t.saveImage()}}},[t._v(" Save ")]),i("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:t.CancelCrop}},[t._v(" Cancel ")])])],1):t._e(),t.before_crop?i("div",{staticClass:"mb-3"},[i("div",{staticClass:"img-selected-wrapper"},t._l(t.InitialArray,(function(e,s){return i("div",{key:s,staticClass:"selected-images"},[i("img",{attrs:{src:e}}),i("span",{staticClass:"material-icons removeIco",on:{click:function(e){return t.delete_image(s)}}},[t._v("X")])])})),0)]):t._e()])]):t._e(),i("div",{staticClass:"uploader-box"},[t.ShowChooseFile?i("div",{on:{click:t.chooseFile}},[i("div",{staticClass:"upload_cclogo",attrs:{role:"button"}},[i("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file"},on:{change:function(e){return t.chooseImage(e)}}}),i("svg",{staticClass:"h-6 w-4",attrs:{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor","stroke-width":"2"}},[i("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"}}),i("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M15 13a3 3 0 11-6 0 3 3 0 016 0z"}})])])]):t._e()])])])])},l=[],r=(i(9653),i(1539),i(8783),i(3948),i(285),i(1637),i(561),i(6867)),d={data:function(){return{before_crop:!0,isCropped:!1,ShowChooseFile:!0,IsDisabledUpload:!1,files:[],InitialArray:[],RealArray:[],temp:"",cclogo:null,updatedLogo:null,mapMarkers:{}}},props:{company_id:Number},components:{Cropper:r.fl},methods:{getimglogo:function(){this.$emit("cclogo",this.updatedLogo)},chooseFile:function(){this.$refs.file.click()},CancelCrop:function(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},saveImage:function(){this.update_cclogo(this.$route.query.id,this.company_id),this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},update_cclogo:function(t,e){var i=this,s=new FormData;s.append("file",this.cclogo),n.Z.post("/council/change_company_logo/"+t+"/"+e,s,{headers:{"Content-Type":"multipart/form-data"}}).then((function(t){console.log(t.data),i.updatedLogo=t.data.data.logo.thumbnail_image,i.getimglogo()})).catch((function(t){console.log(t.message)}))},change:function(t){var e=this,i=t.canvas;i.toBlob((function(t){e.blobUrl=URL.createObjectURL(t),e.cclogo=new File([t],"image",{lastModified:(new Date).getTime(),type:t.type},"image/jpeg",.3)}))},chooseImage:function(t){var e=t.target.files[0];this.logo=e,this.img=URL.createObjectURL(e);var i=new FileReader,s=this;i.readAsDataURL(t.target.files[0]),i.onload=function(t){console.log(s.isCropped);var e=new Image;e.src=t.target.result,e.onload=function(){var t=this.height,e=this.width;return t<210||e<210?(alert("Please choose file which has minimum height of 210 and width of 210"),!1):(s.ShowChooseFile=!1,s.isCropped=!0,!0)}}},delete_image:function(t){this.InitialArray.splice(t,1),this.RealArray.splice(t,1),console.log(this.InitialArray),console.log(this.RealArray)}}},u=d,p=i(3736),g=(0,p.Z)(u,c,l,!1,null,null,null),m=g.exports,h=i(4665),f={name:"our-companies",data:function(){return{council_companies:null,activeItem:null,isshow:!1,cc_logo:null}},components:{UpdateCCLogo:m},computed:(0,a.Z)({currentRouteName:function(){return this.$route.name}},(0,h.rn)({councilId:function(t){return t.auth.council_id}})),methods:{getLogo:function(t){this.cc_logo=t},selectItem:function(t){this.activeItem=t,this.isshow=!this.isshow},get_council_companies:function(t){var e=this;n.Z.get("public/council_company/"+t).then((function(t){console.log(t.data),e.council_companies=t.data.data})).catch((function(t){console.log(t)}))}},created:function(){this.get_council_companies(this.$route.query.id)}},C=f,_=(0,p.Z)(C,s,o,!1,null,null,null),v=_.exports}}]);
//# sourceMappingURL=190-legacy.6ea9a606.js.map