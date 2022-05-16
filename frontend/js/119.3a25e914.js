"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[119],{8119:function(e,t,a){a.r(t),a.d(t,{default:function(){return p}});var i=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"w-full mt-20 mb-20"},[a("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl shadow-xl text-left m-auto"},[e._m(0),a("div",[a("label",{staticClass:"block my-3 text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Add Logo")]),a("UploadImg",{on:{src:function(t){return e.getimg(t)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:e.name,expression:"name"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Name"},domProps:{value:e.name},on:{input:function(t){t.target.composing||(e.name=t.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:e.designation,expression:"designation"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"designation"},domProps:{value:e.designation},on:{input:function(t){t.target.composing||(e.designation=t.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:e.mobile,expression:"mobile"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"tel",required:"",placeholder:"Phone"},domProps:{value:e.mobile},on:{input:function(t){t.target.composing||(e.mobile=t.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"email",required:"",placeholder:"Email"},domProps:{value:e.email},on:{input:function(t){t.target.composing||(e.email=t.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:e.dob,expression:"dob"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"date",required:"",placeholder:"Birth Date"},domProps:{value:e.dob},on:{input:function(t){t.target.composing||(e.dob=t.target.value)}}}),a("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.countries,reduce:function(e){return e.id},placeholder:"Nationality",label:"name",taggable:"","push-tags":""},model:{value:e.nationality,callback:function(t){e.nationality=t},expression:"nationality"}}),a("v-select",{staticClass:"dropdown my-2 text-sm",attrs:{options:e.options.countries,reduce:function(e){return e.id},placeholder:"Country",label:"name",taggable:"","push-tags":""},on:{"option:selected":e.get_city},model:{value:e.country,callback:function(t){e.country=t},expression:"country"}}),a("v-select",{staticClass:"dropdown my-2 text-sm",attrs:{options:e.options.cities,label:"name",reduce:function(e){return e.id},placeholder:"City",taggable:"","push-tags":""},on:{"option:selected":e.get_area},model:{value:e.city,callback:function(t){e.city=t},expression:"city"}}),a("v-select",{staticClass:"dropdown my-2 text-sm",attrs:{options:e.options.areas,label:"name",reduce:function(e){return e.id},placeholder:"Area",taggable:"","push-tags":""},model:{value:e.area,callback:function(t){e.area=t},expression:"area"}})],1),a("div",[a("button",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{title:"Add",type:"button","aria-label":"Signup"},on:{click:function(t){return e.add_council_member(e.$route.query.id)}}},[e._v(" Add ")])])])])},o=[function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"flex items-center justify-center"},[a("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-2xl mb-8"},[e._v(" Add Member ")])])}],s=a(6931),r=a(5415),n=a(768),l=a.n(n),d={name:"Settings",data(){return{options:{activities:[],countries:[],cities:[],areas:[],legal_status:[],issued_by:[]},name:null,dob:"Birth Date",nationality:null,email:null,website:null,mobile:null,designation:null,profile_image:null,country:null,city:null,area:null}},components:{vSelect:l(),UploadImg:r.Z},methods:{getimg(e){this.profile_image=e},add_council_member(e){s.Z.post("council/council_member/"+e,{name:this.name,dob:this.dob,nationality:this.nationality,email:this.email,mobile:this.mobile,designation:this.designation,profile_image:this.profile_image,country_id:this.country,city_id:this.city,area_id:this.area}).then((e=>{console.log(e.data),this.$router.push({path:"/council/our-members",query:{id:this.$route.query.id,name:this.$route.query.name}})})).catch((e=>{console.log(e.message)}))},get_country(){s.Z.get("/data/countries/").then((e=>{e.data.countries.forEach((e=>{this.options.countries.push(e)}))})).catch((e=>{console.log(e.message)}))},get_city(){s.Z.get("/data/cities/"+this.country).then((e=>{this.options.cities=[],console.log(e.data),e.data.cities.length>0?(e.data.cities.forEach((e=>{this.options.cities.push(e)})),this.city="Select City"):this.city="Not Found"})).catch((e=>{console.log(e.data)}))},get_area(){s.Z.get("/data/areas/"+this.city).then((e=>{this.options.areas=[],console.log(e.data),e.data.areas.length>0?(e.data.areas.forEach((e=>{this.options.areas.push(e)})),this.area="Select Area"):this.area="Not Found"})).catch((e=>{console.log(e.data)}))}},created(){this.get_country()}},c=d,m=a(3736),u=(0,m.Z)(c,i,o,!1,null,null,null),p=u.exports},5415:function(e,t,a){a.d(t,{Z:function(){return c}});var i=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("div",{staticClass:"uploadWrap bg-white rounded"},[a("div",{staticClass:"w-100 px-5 py-1 border rounded-md shadow-sm text-sm"},[a("div",[e.isCropped?a("div",[a("Cropper",{attrs:{src:e.img},on:{change:e.change}}),a("div",{staticClass:"save-image d-flex justify-content-between px-3"},[a("button",{staticClass:"text-sm btn btn-sm btn-success d-flex align-content-center",on:{click:e.saveImage}},[e._v(" Save ")]),a("button",{staticClass:"text-sm btn btn-sm btn-danger d-flex align-content-center",on:{click:e.CancelCrop}},[e._v(" Cancel ")])])],1):e._e(),e.before_crop&&!e.isCropped?a("div",[a("div",{staticClass:"img-selected-wrapper"},[a("div",{staticClass:"selected-images"},[a("img",{attrs:{src:e.blobUrl}}),a("span",{staticClass:"material-icons removeIco",on:{click:function(t){return e.delete_image()}}},[e._v("X")])])])]):e._e()]),a("div",{staticClass:"uploader-box"},[e.ShowChooseFile?a("div",{on:{click:e.chooseFile}},[a("div",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{role:"button"}},[a("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file"},on:{change:function(t){return e.chooseImage(t)}}}),e._v(" Upload ")])]):e._e()])])])])},o=[],s=a(6867),r={data(){return{before_crop:!1,isCropped:!1,ShowChooseFile:!0,IsDisabledUpload:!1,files:[],temp:"",mapMarkers:{},file:null,blobUrl:null}},components:{Cropper:s.fl},methods:{getimgsrc(){this.$emit("src",this.file)},chooseFile(){this.$refs.file.click()},CancelCrop(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0},saveImage(){this.before_crop=!0,this.isCropped=!1,this.ShowChooseFile=!0,this.getimgsrc()},change({canvas:e}){e.toBlob((e=>{this.blobUrl=URL.createObjectURL(e),this.file=new File([e],"image",{lastModified:(new Date).getTime(),type:e.type})}))},chooseImage(e){const t=e.target.files[0];this.file=t,this.img=URL.createObjectURL(t);var a=new FileReader,i=this;a.readAsDataURL(e.target.files[0]),a.onload=function(e){console.log(i.isCropped);var t=new Image;t.src=e.target.result,t.onload=function(){var e=this.height,t=this.width;return e<210||t<210?(alert("Please choose file which has minimum height of 210 and width of 210"),!1):(i.ShowChooseFile=!1,i.isCropped=!0,!0)}}},delete_image(){this.file=null,this.blobUrl=null,this.before_crop=!1,this.isCropped=!1,this.ShowChooseFile=!0,this.IsDisabledUpload=!1}}},n=r,l=a(3736),d=(0,l.Z)(n,i,o,!1,null,null,null),c=d.exports}}]);
//# sourceMappingURL=119.3a25e914.js.map