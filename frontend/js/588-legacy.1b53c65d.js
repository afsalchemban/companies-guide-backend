"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[588],{8061:function(t,e,s){s.d(e,{Z:function(){return d}});var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"uploadWrap"},[s("div",[t.isCropped?s("div",{staticClass:"img-container"},[s("div",{staticClass:"img-holder"},[t.isCropped?s("div",[s("Cropper",{attrs:{src:t.img,"stencil-size":{width:300,height:300},"stencil-props":{handlers:{},movable:!1,resizable:!1,aspectRatio:1},"image-restriction":"stencil"},on:{change:t.change}}),s("div",{staticClass:"save-image flex justify-between"},[s("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:function(e){return t.saveImage()}}},[t._v(" Save ")]),s("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:t.CancelCrop}},[t._v(" Cancel ")])])],1):t._e(),t.before_crop?s("div",{staticClass:"mb-3"},[s("div",{staticClass:"img-selected-wrapper"},t._l(t.InitialArray,(function(e,i){return s("div",{key:i,staticClass:"selected-images"},[s("img",{attrs:{src:e}}),s("span",{staticClass:"material-icons removeIco",on:{click:function(e){return t.delete_image(i)}}},[t._v("X")])])})),0)]):t._e()])]):t._e(),s("div",{staticClass:"uploader-box"},[t.ShowChooseFile?s("div",{on:{click:t.chooseFile}},[s("div",{staticClass:"upload",attrs:{role:"button"}},[s("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file"},on:{change:function(e){return t.chooseImage(e)}}}),s("svg",{staticClass:"h-6 w-6",attrs:{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor","stroke-width":"2"}},[s("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"}}),s("path",{attrs:{"stroke-linecap":"round","stroke-linejoin":"round",d:"M15 13a3 3 0 11-6 0 3 3 0 016 0z"}})])])]):t._e()])])])])},a=[],o=(s(1539),s(8783),s(3948),s(285),s(1637),s(561),s(6867)),r=s(6931),n={data:function(){return{before_crop:!0,isCropped:!1,ShowChooseFile:!0,IsDisabledUpload:!1,files:[],InitialArray:[],RealArray:[],temp:"",logo:null,updatedLogo:null,mapMarkers:{}}},components:{Cropper:o.fl},methods:{getimglogo:function(){this.$emit("logo",this.updatedLogo)},chooseFile:function(){this.$refs.file.click()},CancelCrop:function(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},saveImage:function(){this.update_logo(this.$route.query.id),this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},update_logo:function(t){var e=this,s=new FormData;s.append("file",this.logo),r.Z.post("/council/change_council_logo/"+t,s,{headers:{"Content-Type":"multipart/form-data"}}).then((function(t){console.log(t.data),e.updatedLogo=t.data.data.logo.thumbnail_image,localStorage.setItem("logo",t.data.logo_image_path),e.getimglogo()})).catch((function(t){console.log(t.message)}))},change:function(t){var e=this,s=t.canvas;s.toBlob((function(t){e.blobUrl=URL.createObjectURL(t),e.logo=new File([t],"image",{lastModified:(new Date).getTime(),type:t.type},"image/jpeg",.3)}))},chooseImage:function(t){var e=t.target.files[0];this.logo=e,this.img=URL.createObjectURL(e);var s=new FileReader,i=this;s.readAsDataURL(t.target.files[0]),s.onload=function(t){console.log(i.isCropped);var e=new Image;e.src=t.target.result,e.onload=function(){var t=this.height,e=this.width;return t<210||e<210?(alert("Please choose file which has minimum height of 210 and width of 210"),!1):(i.ShowChooseFile=!1,i.isCropped=!0,!0)}}},delete_image:function(t){this.InitialArray.splice(t,1),this.RealArray.splice(t,1),console.log(this.InitialArray),console.log(this.RealArray)}}},l=n,c=s(3736),m=(0,c.Z)(l,i,a,!1,null,null,null),d=m.exports},588:function(t,e,s){s.r(e),s.d(e,{default:function(){return v}});var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"mb-20"},[s("AppBanner"),s("div",{staticClass:"container mt-20 mx-auto"},[s("DirectoryForm"),t.companies?s("div",{staticClass:"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-6 gap-3 sm:gap-3 md:gap-7"},t._l(t.companies,(function(t){return s("DirectoryCompany",{key:t.id,staticClass:"mb-7",attrs:{company:t}})})),1):s("div",{staticClass:"flex justify-center items-center mt-64"},[s("Spinner",{attrs:{name:"line-scale",color:"#82a3e0"}})],1),t.companies?s("div",{staticClass:"flex justify-center items-center"},[0==t.companies.length?s("h5",{staticClass:"mb-1 text-dark"},[t._v(" No Companies ")]):t._e()]):t._e()],1)],1)},a=[],o=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("div",{staticClass:"shadow-lg relative hover:shadow-xl cursor-pointer ml-2 mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark"},[i("img",{staticClass:"w-full Cimg cursor-pointer",attrs:{src:s(9719),alt:"Sunset in the mountains"}}),i("UpdateLogo"),i("div",{staticClass:"px-3 sm:px-4 py-3 sm:py-6 leading-none"},[i("div",{staticClass:"font-general-semibold leading-normal text-sm sm:text-md md:text-base lg:text-lg xl:text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-2"},[t._v(" "+t._s(t.company.name)+" ")]),i("div",{staticClass:"text-xs sm:text-sm md:text-md lg:text-base xl:text-lg"},[i("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[i("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(9193)}}),i("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(t.company.phone_number)+" ")])]),i("div",{staticClass:"flex justify-start items-center text-left mb-2 mr-0 sm:mr-1"},[i("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(1661)}}),i("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" "+t._s(t.company.email)+" ")])]),t._m(0),t._m(1)])]),t._m(2)],1)])},r=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[i("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(1983)}}),i("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" https://www.echo-marine.net ")])])},function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"flex justify-start items-center mr-0 sm:mr-1 text-left mb-2"},[i("img",{staticClass:"text-gray-500 icon-size mr-1 sm:mr-2",attrs:{src:s(186)}}),i("p",{staticClass:"font-general-medium txt-mobile text-xs md:text-md lg:text-base xl:text-lg text-ternary-dark dark:text-ternary-light"},[t._v(" Dubai ")])])},function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"px-3 sm:px-6 pt-2 sm:pt-4 pb-1 sm:pb-2 bg-gray-200 text-sm font-semibold text-gray-700 cursor-pointer text-center sm:text-center"},[s("span",{staticClass:"inline-block bg-gray-200 txt-mobile text-sm font-semibold text-gray-700"},[t._v("Shipping Services")])])}],n=s(8061),l={props:["company"],components:{UpdateLogo:n.Z}},c=l,m=s(3736),d=(0,m.Z)(c,o,r,!1,null,null,null),g=d.exports,p=s(4015),u=s(36),h={name:"directory",data:function(){return{companies:[]}},components:{DirectoryCompany:g,DirectoryForm:p.Z,AppBanner:u.Z},methods:{get_directory:function(t){var e=this;try{this.$store.dispatch("GETCOMPANY",t).then((function(t){console.log(t.data.data),e.companies=t.data.data}))}catch(s){console.log(s.message)}}},mounted:function(){this.get_directory(3)}},f=h,x=(0,m.Z)(f,i,a,!1,null,null,null),v=x.exports},186:function(t,e,s){t.exports=s.p+"img/location.30755832.svg"},1661:function(t,e,s){t.exports=s.p+"img/mail.ed29927b.svg"},9193:function(t,e,s){t.exports=s.p+"img/phone.373fa903.svg"},1983:function(t,e,s){t.exports=s.p+"img/web.01431371.svg"}}]);
//# sourceMappingURL=588-legacy.1b53c65d.js.map