"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[358],{5358:function(t,e,a){a.r(e),a.d(e,{default:function(){return $}});var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"container mx-auto"},[a("CouncilHeader",{on:{check:function(e){return t.checkBanner(e)}}}),t.checked?a("router-view"):a("div",{staticClass:"flex justify-center items-center mt-64"},[a("Spinner",{attrs:{name:"line-scale",color:"#82a3e0"}})],1)],1)},s=[],n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return t.banner?a("div",{staticClass:"relative"},[a("img",{staticClass:"shadow-sm w-full rounded-lg council-banner",attrs:{src:t.banner,alt:"profile_image"}}),t.councilId==t.$route.query.id?a("UpdateBanner",{staticClass:"updateBanner",on:{banner:function(e){return t.getBanner(e)}}}):t._e(),t.councilId==t.$route.query.id?a("UpdateLogo",{staticClass:"updatelogo",on:{logo:function(e){return t.getLogo(e)}}}):t._e(),a("div",{staticClass:"mx-4 card2 card2-body blur2 shadow-blur mt-n3"},[a("div",{staticClass:"row2 gx-4"},[a("div",{staticClass:"grid grid-cols-2 lg:grid-cols-2"},[a("div",{staticClass:"avatar avatar-xl relative mx-auto"},[a("img",{staticClass:"shadow-sm w-full rounded-lg",attrs:{src:t.logo,alt:"profile_image"}})]),a("div",{staticClass:"my-auto"},[a("div",{staticClass:"h-full"},[a("h5",{staticClass:"mb-1 font-weight-bold text-dark font-general-medium txt-mobile sm:text-sm md:text-md"},[t._v(" "+t._s(t.$route.query.name)+" ")])])])]),a("div",{staticClass:"mx-auto mt-3 my-sm-auto ms-sm-auto me-sm-0"},[a("div",{staticClass:"nav-wrapper relative end-0"},[a("ul",{staticClass:"p-1 bg-transparent nav nav-pills nav-fill grid grid-cols-3 lg:grid-cols-3 sm:gap-0 md:gap-0 lg:gap-3",attrs:{role:"tablist"}},[a("li",{staticClass:"nav-item"},[a("router-link",{staticClass:"px-0 py-1 mb-0 nav-link active hover:text-indigo-600",attrs:{"data-bs-toggle":"tab",to:{path:"/council/",query:{name:t.$route.query.name,id:t.$route.query.id}},role:"tab","aria-selected":"true"}},[a("span",{staticClass:"ms-1 font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg"},[t._v("Our Companies")])])],1),a("li",{staticClass:"nav-item"},[a("router-link",{staticClass:"px-0 py-1 mb-0 nav-link active hover:text-indigo-600",attrs:{"data-bs-toggle":"tab",to:{path:"/council/our-members",query:{name:t.$route.query.name,id:t.$route.query.id}},role:"tab","aria-selected":"true"}},[a("span",{staticClass:"ms-1 font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg"},[t._v("Our Members")])])],1),a("li",{staticClass:"nav-item"},[a("router-link",{staticClass:"px-0 py-1 mb-0 nav-link hover:text-indigo-600",attrs:{"data-bs-toggle":"tab",to:{path:"/council/events",query:{name:t.$route.query.name,id:t.$route.query.id}},role:"tab","aria-selected":"false"}},[a("span",{staticClass:"ms-1 font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg"},[t._v("Events")])])],1),a("li",{staticClass:"nav-item"},[a("router-link",{staticClass:"px-0 py-1 mb-0 nav-link hover:text-indigo-600",attrs:{"data-bs-toggle":"tab",to:{path:"/council/media",query:{name:t.$route.query.name,id:t.$route.query.id}},role:"tab","aria-selected":"false"}},[a("span",{staticClass:"ms-1 font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg"},[t._v("Media")])])],1),a("li",{staticClass:"nav-item"},[a("router-link",{staticClass:"px-0 py-1 mb-0 nav-link hover:text-indigo-600",attrs:{"data-bs-toggle":"tab",to:{path:"/council/contact-us",query:{name:t.$route.query.name,id:t.$route.query.id}},role:"tab","aria-selected":"false"}},[a("span",{staticClass:"ms-1 font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg"},[t._v("Contact Us")])])],1),a("li",{staticClass:"nav-item"},[a("router-link",{staticClass:"px-0 py-1 mb-0 nav-link hover:text-indigo-600",attrs:{"data-bs-toggle":"tab",to:{path:"/council/about-us",query:{name:t.$route.query.name,id:t.$route.query.id}},role:"tab","aria-selected":"false"}},[a("span",{staticClass:"ms-1 font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg"},[t._v("About Us")])])],1),t.councilId==t.$route.query.id?a("li",{staticClass:"nav-item"},[a("router-link",{staticClass:"px-0 py-1 mb-0 nav-link hover:text-indigo-600",attrs:{"data-bs-toggle":"tab",to:{path:"/council/settings",query:{name:t.$route.query.name,id:t.$route.query.id}},role:"tab","aria-selected":"false"}},[a("span",{staticClass:"ms-1 font-general-medium block text-left txt-mobile sm:text-sm md:text-md lg:text-base xl:text-lg"},[t._v("Settings")])])],1):t._e()])])])])])],1):t._e()},o=[],l=a(3019),r=(a(8309),a(5450)),c=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("div",{staticClass:"uploadWrap"},[a("div",[t.isCropped?a("div",{staticClass:"img-container"},[a("div",{staticClass:"img-holder"},[t.isCropped?a("div",[a("Cropper",{attrs:{src:t.img,"stencil-size":{width:800,height:100},"stencil-props":{handlers:{},movable:!1,resizable:!1,minAspectRatio:4,maxAspectRatio:.5},"image-restriction":"stencil"},on:{change:t.change}}),a("div",{staticClass:"save-image flex justify-between"},[a("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:t.saveImage}},[t._v(" Save ")]),a("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:t.CancelCrop}},[t._v(" Cancel ")])])],1):t._e(),t.before_crop?a("div",{staticClass:"mb-3"},[a("div",{staticClass:"img-selected-wrapper"},t._l(t.InitialArray,(function(e,i){return a("div",{key:i,staticClass:"selected-images"},[a("img",{attrs:{src:e}}),a("span",{staticClass:"material-icons removeIco",on:{click:function(e){return t.delete_image(i)}}},[t._v("X")])])})),0)]):t._e()])]):t._e(),a("div",{staticClass:"uploader-box"},[t.ShowChooseFile?a("div",{on:{click:t.chooseFile}},[a("div",{staticClass:"upload",attrs:{role:"button"}},[a("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file"},on:{change:function(e){return t.chooseImage(e)}}}),a("svg",{staticClass:"h-6 w-6",attrs:{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor","stroke-width":"2"}},[a("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"}}),a("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M15 13a3 3 0 11-6 0 3 3 0 016 0z"}})])])]):t._e()])])])])},u=[],d=(a(1539),a(8783),a(3948),a(285),a(1637),a(561),a(6867)),m=a(6931),g={data:function(){return{before_crop:!0,isCropped:!1,ShowChooseFile:!0,IsDisabledUpload:!1,files:[],InitialArray:[],RealArray:[],temp:"",banner:null,updatedBanner:null,mapMarkers:{}}},components:{Cropper:d.fl},methods:{getimgbanner:function(){this.$emit("banner",this.updatedBanner)},chooseFile:function(){this.$refs.file.click()},CancelCrop:function(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},saveImage:function(){this.update_banner(this.$route.query.id),this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},update_banner:function(t){var e=this,a=new FormData;a.append("file",this.banner),m.Z.post("/council/change_cover_image/"+t,a,{headers:{"Content-Type":"multipart/form-data"}}).then((function(t){console.log(t.data),e.updatedBanner=t.data.cover_image_path,localStorage.setItem("banner",t.data.cover_image_path),e.getimgbanner()})).catch((function(t){console.log(t.message)}))},change:function(t){var e=this,a=t.canvas;a.toBlob((function(t){e.blobUrl=URL.createObjectURL(t),e.banner=new File([t],"image",{lastModified:(new Date).getTime(),type:t.type},"image/jpeg",.3)}))},chooseImage:function(t){var e=t.target.files[0];this.banner=e,this.img=URL.createObjectURL(e);var a=new FileReader,i=this;a.readAsDataURL(t.target.files[0]),a.onload=function(t){console.log(i.isCropped);var e=new Image;e.src=t.target.result,e.onload=function(){var t=this.height,e=this.width;return t<210||e<410?(this.showAlert(),!1):(i.ShowChooseFile=!1,i.isCropped=!0,!0)}}},delete_image:function(t){this.InitialArray.splice(t,1),this.RealArray.splice(t,1),console.log(this.InitialArray),console.log(this.RealArray)}}},p=g,h=a(3736),b=(0,h.Z)(p,c,u,!1,null,null,null),v=b.exports,f=a(4665),x={name:"council-header",data:function(){return{logo:null,banner:null}},components:{UpdateLogo:r.Z,UpdateBanner:v},computed:(0,l.Z)({currentRouteName:function(){return this.$route.name}},(0,f.rn)({councilId:function(t){return t.auth.council_id}})),methods:{check_banner:function(){this.$emit("check",this.banner)},getLogo:function(t){this.logo=t},getBanner:function(t){this.banner=t},get_council:function(t){var e=this;m.Z.get("/public/council/"+t).then((function(t){console.log(t.data),e.logo=t.data.logo_image_path,e.banner=t.data.cover_image_path,e.check_banner()})).catch((function(t){console.log(t)}))}},created:function(){this.get_council(this.$route.query.id)}},C=x,y=(0,h.Z)(C,n,o,!1,null,null,null),_=y.exports,k={name:"Projects",data:function(){return{checked:null}},components:{CouncilHeader:_},methods:{checkBanner:function(t){console.log(),this.checked=t}},created:function(){this.checkBanner()}},w=k,q=(0,h.Z)(w,i,s,!1,null,null,null),$=q.exports}}]);
//# sourceMappingURL=358-legacy.4c004a8b.js.map