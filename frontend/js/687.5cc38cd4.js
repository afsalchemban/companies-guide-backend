"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[687],{2687:function(t,e,i){i.r(e),i.d(e,{default:function(){return u}});var r=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"container mb-5"},[i("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-2xl mb-8"},[t._v(" Edit Media ")]),i("input",{directives:[{name:"model",rawName:"v-model",value:t.title,expression:"title"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Title"},domProps:{value:t.title},on:{input:function(e){e.target.composing||(t.title=e.target.value)}}}),i("input",{directives:[{name:"model",rawName:"v-model",value:t.description,expression:"description"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Description"},domProps:{value:t.description},on:{input:function(e){e.target.composing||(t.description=e.target.value)}}}),i("div",[i("button",{staticClass:"px-4 py-2.5 w-full mt-6 text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{type:"button","aria-label":"Signup"},on:{click:function(e){return t.edit_media(t.$route.query.id,t.$route.query.media_id)}}},[t._v(" Save ")])])])},a=[],d=i(6931),o={name:"add-media",data(){return{title:null,description:null}},methods:{getimg(t){this.file=t},get_media(t){d.Z.get("/public/council_media_details/"+t).then((t=>{console.log(t.data),this.title=t.data.title,this.description=t.data.description})).catch((t=>{console.log(t.message)}))},edit_media(t,e){d.Z.put("/council/update_media/"+t+"/"+e,{title:this.title,description:this.description}).then((t=>{console.log(t.data),this.$router.push({path:"/council/media",query:{name:this.$route.query.name,id:this.$route.query.id}})})).catch((t=>{console.log(t.message)}))}},created(){this.get_media(this.$route.query.media_id)}},n=o,s=i(1001),l=(0,s.Z)(n,r,a,!1,null,null,null),u=l.exports}}]);
//# sourceMappingURL=687.5cc38cd4.js.map