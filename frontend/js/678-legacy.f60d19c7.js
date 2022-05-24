"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[678],{7205:function(t,e,r){r.d(e,{Z:function(){return m}});var a=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{staticClass:"uploadWrap"},[r("div",{staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md"},[r("div",[t.isCropped?r("div",[r("Cropper",{attrs:{src:t.img},on:{change:t.change}}),r("div",{staticClass:"save-image flex justify-between"},[r("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:t.saveImage}},[t._v(" Save ")]),r("button",{staticClass:"text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",on:{click:t.CancelCrop}},[t._v(" Cancel ")])])],1):t._e(),t.before_crop?r("div",{staticClass:"mb-3"},[r("div",{staticClass:"img-selected-wrapper"},t._l(t.InitialArray,(function(e,a){return r("div",{key:a,staticClass:"selected-images"},[r("img",{attrs:{src:e}}),r("span",{staticClass:"material-icons removeIco",on:{click:function(e){return t.delete_image(a)}}},[t._v("X")])])})),0)]):t._e()]),r("div",{staticClass:"uploader-box"},[t.ShowChooseFile?r("div",{on:{click:t.chooseFile}},[r("div",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{role:"button"}},[r("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file"},on:{change:function(e){return t.chooseImage(e)}}}),t._v(" Upload ")])]):t._e()])])])])},i=[],d=(r(1539),r(8783),r(3948),r(285),r(1637),r(561),r(6867)),s={data:function(){return{before_crop:!0,isCropped:!1,ShowChooseFile:!0,IsDisabledUpload:!1,files:[],InitialArray:[],RealArray:[],temp:"",mapMarkers:{},img_file:null}},components:{Cropper:d.fl},methods:{getimgfile:function(){this.$emit("file",this.img_file)},chooseFile:function(){this.$refs.file.click()},CancelCrop:function(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},saveImage:function(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0,this.getimgfile()},change:function(t){var e=this,r=t.canvas;r.toBlob((function(t){e.blobUrl=URL.createObjectURL(t),e.img_file=new File([t],"image",{lastModified:(new Date).getTime(),type:t.type},"image/jpeg",.3)}))},chooseImage:function(t){var e=t.target.files[0];this.img=URL.createObjectURL(e);var r=new FileReader,a=this;r.readAsDataURL(t.target.files[0]),r.onload=function(t){console.log(a.isCropped);var e=new Image;e.src=t.target.result,e.onload=function(){var t=this.height,e=this.width;return t<210||e<210?(alert("Please choose file which has minimum height of 210 and width of 210"),!1):(a.ShowChooseFile=!1,a.isCropped=!0,!0)}}},delete_image:function(t){this.InitialArray.splice(t,1),this.RealArray.splice(t,1),console.log(this.InitialArray),console.log(this.RealArray)},pixelsRestriction:function(t){t.minWidth,t.minHeight,t.maxWidth,t.maxHeight,t.imageWidth,t.imageHeight;return{minWidth:220,minHeight:220,maxWidth:400,maxHeight:400}}}},o=s,l=r(1001),n=(0,l.Z)(o,a,i,!1,null,null,null),m=n.exports},8678:function(t,e,r){r.r(e),r.d(e,{default:function(){return b}});var a=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("Settings")],1)},i=[],d=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"w-full mt-20 mb-20"},[r("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl shadow-xl text-left m-auto"},[t._m(0),r("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-3xl mb-2"},[t._v(" Settings. ")]),r("p",{staticClass:"px-4 py-2.5 text-center text-sm sm:text-base tracking-wider text-indigo-500 hover:text-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500"},[t._v(" Upload Profile Images Maximum (3) ")]),r("UploadImg"),t._m(1),t._m(2),t._m(3),t._m(4),r("div",[r("Button",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{title:"Save",type:"submit","aria-label":"Signup"}})],1)],1)])},s=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"flex items-center justify-center"},[r("div",{staticClass:"w-4 h-4 sm:w-7 sm:h-7 rounded-lg flex items-center justify-center Clogo cursor-pointer shadow-lg font-general-medium text-left text-md sm:text-xl font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7 mr-2 sm:mr-2"},[t._v(" R ")]),r("p",{staticClass:"font-general-medium text-left xl-text-xl lg:text-xl md:text-xl sm:text-md font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7"},[t._v(" Real State Company ")])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[t._v("Company Information")]),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"text",required:"",placeholder:"Name","aria-label":"Name"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"text",required:"",placeholder:"Services","aria-label":"Name"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"text",required:"",placeholder:"Website","aria-label":"Name"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"tel",required:"",placeholder:"Phone","aria-label":"Name"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"email",required:"",placeholder:"Email","aria-label":"Name"}})])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[t._v("Follow Us")]),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"text",required:"",placeholder:"Facebook URL","aria-label":"Name"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"text",required:"",placeholder:"Twitter URL","aria-label":"Name"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"text",required:"",placeholder:"You Tube URL","aria-label":"Name"}})])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"categories"}},[t._v("Categories")]),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"categories",name:"phone",type:"text",required:"",placeholder:"Product 1","aria-label":"Phone"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"categories",name:"phone",type:"text",required:"",placeholder:"Product 2","aria-label":"Phone"}}),r("input",{staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"categories",name:"phone",type:"text",required:"",placeholder:"Product 3","aria-label":"Phone"}})])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"about"}},[t._v("About Company")]),r("textarea",{staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"about",name:"about",required:"",placeholder:"About Company","aria-label":"Email"}})])}],o=r(7205),l=r(550),n={name:"Settings",isCropped:!1,components:{UploadImg:o.Z,Button:l.Z}},m=n,c=r(1001),p=(0,c.Z)(m,d,s,!1,null,null,null),g=p.exports,y={props:["singleProjectHeader"],components:{Settings:g}},u=y,x=(0,c.Z)(u,a,i,!1,null,"3a6355f5",null),b=x.exports}}]);
//# sourceMappingURL=678-legacy.f60d19c7.js.map