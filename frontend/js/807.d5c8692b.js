"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[807],{5067:function(e,t,r){r.d(t,{Z:function(){return c}});var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",[r("div",{staticClass:"uploadWrap bg-white rounded"},[r("div",{staticClass:"w-100 px-5 py-1 border rounded-md shadow-sm text-sm"},[r("div",[e.isCropped?r("div",[r("Cropper",{attrs:{src:e.img},on:{change:e.change}}),r("div",{staticClass:"save-image flex justify-between px-3"},[r("button",{staticClass:"text-sm text-gray-900 hover:text-white tracking-wider border-2 border-green-500 bg-white hover:bg-green-500 focus:ring-1 focus:ring-green-600 rounded-lg duration-500 flex justify-center items-center",on:{click:e.saveImage}},[e._v(" Save ")]),r("button",{staticClass:"text-sm text-gray-900 hover:text-white tracking-wider border-2 border-red-500 bg-white hover:bg-red-500 focus:ring-1 focus:ring-red-600 rounded-lg duration-500 flex justify-center items-center",on:{click:e.CancelCrop}},[e._v(" Cancel ")])])],1):e._e(),e.before_crop&&!e.isCropped?r("div",[r("div",{staticClass:"img-selected-wrapper"},[r("div",{staticClass:"selected-images"},[r("img",{attrs:{src:e.blobUrl}}),r("span",{staticClass:"material-icons removeIco",on:{click:function(t){return e.delete_image()}}},[e._v("X")])])])]):e._e()]),r("div",{staticClass:"uploader-box mt-3"},[e.ShowChooseFile?r("div",{on:{click:e.chooseFile}},[r("div",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{role:"button"}},[r("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file"},on:{change:function(t){return e.chooseImage(t)}}}),e._v(" Upload ")])]):e._e()])])])])},s=[],i=r(6867),o={data(){return{before_crop:!1,isCropped:!1,ShowChooseFile:!0,IsDisabledUpload:!1,files:[],temp:"",mapMarkers:{},file:null,blobUrl:null}},components:{Cropper:i.fl},methods:{getimgsrc(){this.$emit("src",this.file)},chooseFile(){this.$refs.file.click()},CancelCrop(){this.before_crop=!1,this.isCropped=!1,this.ShowChooseFile=!0,this.blobUrl=null},saveImage(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0,this.getimgsrc()},change({canvas:e}){e.toBlob((e=>{this.blobUrl=URL.createObjectURL(e),this.file=new File([e],"image",{lastModified:(new Date).getTime(),type:e.type})}))},chooseImage(e){const t=e.target.files[0];this.file=t,this.img=URL.createObjectURL(t);var r=new FileReader,a=this;r.readAsDataURL(e.target.files[0]),r.onload=function(e){console.log(a.isCropped);var t=new Image;t.src=e.target.result,t.onload=function(){var e=this.height,t=this.width;return e<210||t<210?(alert("Please choose file which has minimum height of 210 and width of 210"),!1):(a.ShowChooseFile=!1,a.isCropped=!0,!0)}}},delete_image(){this.file=null,this.blobUrl=null,this.before_crop=!1,this.isCropped=!1,this.ShowChooseFile=!0,this.IsDisabledUpload=!1}}},n=o,d=r(3736),l=(0,d.Z)(n,a,s,!1,null,null,null),c=l.exports},8807:function(e,t,r){r.r(t),r.d(t,{default:function(){return p}});var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"w-full mt-20 mb-20"},[r("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl shadow-xl text-left m-auto"},[e._m(0),r("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-3xl mb-2"},[e._v(" Add Product. ")]),r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Category")]),r("v-select",{staticClass:"dropdown",attrs:{options:e.categories,reduce:function(e){return e.id},label:"name",placeholder:"Categories",taggable:"","push-tags":""},on:{search:function(t){return e.getCategories(t)},"option:selected":function(t){return e.getParentCategories(t.id)}},model:{value:e.selected_category,callback:function(t){e.selected_category=t},expression:"selected_category"}})],1),r("p",{staticClass:"text-xs text-indigo-500"},[e._v(e._s(e.parents.join(" > ")))]),r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Product Infomation")]),r("p",{staticClass:"px-4 py-2.5 text-center text-sm sm:text-base tracking-wider text-indigo-500 hover:text-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500"},[e._v(" Upload Product Image ")]),r("UploadImg",{on:{src:function(t){return e.getProductImg(t)}}})],1),r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Name")]),r("input",{directives:[{name:"model",rawName:"v-model",value:e.name,expression:"name"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Name"},domProps:{value:e.name},on:{input:function(t){t.target.composing||(e.name=t.target.value)}}})]),r("div",[r("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"about"}},[e._v("Description")]),r("textarea",{directives:[{name:"model",rawName:"v-model",value:e.description,expression:"description"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{required:"",placeholder:"About Company"},domProps:{value:e.description},on:{input:function(t){t.target.composing||(e.description=t.target.value)}}})]),r("div",{staticClass:"flex justify-between items-center mt-2"},[r("button",{staticClass:"px-4 py-2 text-sm sm:text-base text-gray-900 tracking-wider border-2 border-indigo-500 bg-white hover:text-white hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{type:"button"},on:{click:function(t){return e.add_product()}}},[e._v(" Save ")]),r("button",{staticClass:"px-4 mb-2 py-2 text-sm sm:text-base text-gray-900 hover:text-white tracking-wider border-2 border-green-500 bg-white hover:bg-green-500 focus:ring-1 focus:ring-green-600 rounded-lg duration-500",attrs:{type:"button"}},[e._v(" Add ")])])])])},s=[function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"flex items-center justify-center"},[r("div",{staticClass:"w-4 h-4 sm:w-7 sm:h-7 rounded-lg flex items-center justify-center Clogo cursor-pointer shadow-lg font-general-medium text-left text-md sm:text-xl font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7 mr-2 sm:mr-2"},[e._v(" R ")]),r("p",{staticClass:"font-general-medium text-left xl-text-xl lg:text-xl md:text-xl sm:text-md font-bold text-primary-dark dark:text-primary-light mt-14 sm:mt-20 mb-7"},[e._v(" Real State Company ")])])}],i=r(5067),o=r(768),n=r.n(o),d=r(6931),l={name:"add-category",data(){return{errors:{},isCropped:!1,selected_category:"",name:"",description:"",productImg:"",followUs:[{url:""}],categories:[],parents:[]}},components:{UploadImg:i.Z,VSelect:n()},methods:{getProductImg(e){this.productImg=e},addField(e,t){t.push({value:""})},removeField(e,t){t.splice(e,1)},add_product(){let e=new FormData;e.append("category_id",this.selected_category),e.append("name",this.name),e.append("description",this.description),e.append("image",this.productImg),d.Z.post("/company/add_product/",e,{headers:{"Content-Type":"multipart/form-data"}}).then((e=>{console.log(e.data),this.$router.push({path:"/projects/single-project"})})).catch((e=>{this.errors=e.response.data.errors}))},getCategories(e){d.Z.get("/data/search_categories/"+e).then((e=>{console.log(e.data),this.categories=[],e.data.companies.forEach((e=>{this.categories.push(e)}))})).catch((e=>{console.log(e.message)}))},getParentCategories(e){d.Z.get("/data/parent_categories/"+e).then((e=>{console.log(e.data),this.parents=[],this.orderParents(e.data.data)})).catch((e=>{console.log(e.message)}))},orderParents(e){this.parents.unshift(e.name),null!=e.parent&&this.orderParents(e.parent)}}},c=l,m=r(3736),g=(0,m.Z)(c,a,s,!1,null,null,null),p=g.exports}}]);
//# sourceMappingURL=807.d5c8692b.js.map