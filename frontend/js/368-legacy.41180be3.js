"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[368],{368:function(t,e,i){i.r(e),i.d(e,{default:function(){return u}});var r=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"container mb-5"},[i("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-2xl mb-8"},[t._v(" Edit Media ")]),i("input",{directives:[{name:"model",rawName:"v-model",value:t.title,expression:"title"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Title"},domProps:{value:t.title},on:{input:function(e){e.target.composing||(t.title=e.target.value)}}}),i("input",{directives:[{name:"model",rawName:"v-model",value:t.description,expression:"description"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Description"},domProps:{value:t.description},on:{input:function(e){e.target.composing||(t.description=e.target.value)}}}),i("div",[i("button",{staticClass:"px-4 py-2.5 w-full mt-6 text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{type:"button","aria-label":"Signup"},on:{click:function(e){return t.edit_media(t.$route.query.id,t.$route.query.media_id)}}},[t._v(" Save ")])])])},a=[],n=(i(2526),i(1817),i(8309),i(6931)),d={name:"add-media",data:function(){return{title:null,description:null}},methods:{getimg:function(t){this.file=t},get_media:function(t){var e=this;n.Z.get("/public/council_media_details/"+t).then((function(t){console.log(t.data),e.title=t.data.title,e.description=t.data.description})).catch((function(t){console.log(t.message)}))},edit_media:function(t,e){var i=this;n.Z.put("/council/update_media/"+t+"/"+e,{title:this.title,description:this.description}).then((function(t){console.log(t.data),i.$router.push({path:"/council/media",query:{name:i.$route.query.name,id:i.$route.query.id}})})).catch((function(t){console.log(t.message)}))}},created:function(){this.get_media(this.$route.query.media_id)}},o=d,s=i(3736),l=(0,s.Z)(o,r,a,!1,null,null,null),u=l.exports}}]);
//# sourceMappingURL=368-legacy.41180be3.js.map