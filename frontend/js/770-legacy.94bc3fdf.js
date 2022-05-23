"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[770],{5770:function(e,r,a){a.r(r),a.d(r,{default:function(){return u}});var t=function(){var e=this,r=e.$createElement,a=e._self._c||r;return a("div",{staticClass:"w-full mt-20 mb-20"},[a("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl shadow-xl text-left m-auto"},[a("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-3xl mb-2"},[e._v(" Login. ")]),a("div",[a("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Username / Email")]),a("div",[a("p",{staticClass:"mb-2 text-sm text-red-600 dark:text-red-500"},[e._v(" "+e._s(e.errorMessage)+" ")])]),a("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",class:"password"in e.errors||e.failed?"bg-red-50 border border-red-500 text-red-900 placeholder-red-700":"",attrs:{id:"name",name:"name",type:"email",required:"",placeholder:"Your Username/Email","aria-label":"Name"},domProps:{value:e.email},on:{input:function(r){r.target.composing||(e.email=r.target.value)}}})]),a("div",{staticClass:"py-5"},[a("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"email"}},[e._v("Password")]),a("input",{directives:[{name:"model",rawName:"v-model",value:e.password,expression:"password"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",class:"password"in e.errors||e.failed?"bg-red-50 border border-red-500 text-red-900 placeholder-red-700":"",attrs:{id:"email",name:"email",type:"password",required:"",placeholder:"Your Password","aria-label":"Email"},domProps:{value:e.password},on:{input:function(r){r.target.composing||(e.password=r.target.value)}}})]),a("div",[a("button",{staticClass:"px-4 w-full py-2.5 text-white text-sm sm:text-md tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{title:"Login",type:"button","aria-label":"Send Message"},on:{click:function(r){return e.login()}}},[e._v(" Login ")])])])])},s=[],o=a(3019),d=(a(8309),a(4665)),i={data:function(){return{email:null,password:null,errorMessage:null,errors:{},failed:!1}},computed:(0,o.Z)({currentRouteName:function(){return this.$route.name}},(0,d.rn)({access:function(e){return e.auth.accesstoken},name:function(e){return e.auth.name}})),methods:{login:function(){var e=this;this.$store.dispatch("LOGIN",{email:this.email,password:this.password}).then((function(r){console.log(r),e.errorMessage=r.message,e.$router.push({name:"Home"})})).catch((function(r){r.response.data.errors?e.errors=r.response.data.errors:e.failed=!0,e.email||e.password?e.errorMessage=r.response.data.message:e.errorMessage="Email and Password is Requird",console.log(r.response.data.errors)}))}}},l=i,n=a(3736),m=(0,n.Z)(l,t,s,!1,null,"0c7b81a8",null),u=m.exports}}]);
//# sourceMappingURL=770-legacy.94bc3fdf.js.map