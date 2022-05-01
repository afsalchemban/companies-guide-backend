"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[64],{64:function(t,e,a){a.r(e),a.d(e,{default:function(){return m}});var r=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"w-full mt-20 mb-20"},[a("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl shadow-xl text-left m-auto"},[a("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-3xl mb-2"},[t._v(" Login. ")]),a("div",[a("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[t._v("Username / Email")]),a("input",{directives:[{name:"model",rawName:"v-model",value:t.email,expression:"email"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"name",name:"name",type:"text",required:"",placeholder:"Your Username/Email","aria-label":"Name"},domProps:{value:t.email},on:{input:function(e){e.target.composing||(t.email=e.target.value)}}})]),a("div",{staticClass:"py-5"},[a("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"email"}},[t._v("Password")]),a("input",{directives:[{name:"model",rawName:"v-model",value:t.password,expression:"password"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light bg-ternary-light dark:bg-ternary-dark rounded-md shadow-sm text-sm sm:text-md",attrs:{id:"email",name:"email",type:"password",required:"",placeholder:"Your Password","aria-label":"Email"},domProps:{value:t.password},on:{input:function(e){e.target.composing||(t.password=e.target.value)}}})]),a("div",[a("button",{staticClass:"px-4 w-full py-2.5 text-white text-sm sm:text-md tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{title:"Login",type:"button","aria-label":"Send Message"},on:{click:function(e){return t.login()}}},[t._v(" Login ")])])])])},s=[],i=a(4665),d={data(){return{email:null,password:null}},computed:{currentRouteName(){return this.$route.name},...(0,i.rn)({access:t=>t.auth.accesstoken,name:t=>t.auth.name})},methods:{login(){this.$store.dispatch("LOGIN",{email:this.email,password:this.password}).then((t=>{console.log(t.data),this.$router.push({name:"Settings"})})).catch((t=>{this.error=t.message}))}}},l=d,o=a(1001),n=(0,o.Z)(l,r,s,!1,null,"038b230d",null),m=n.exports}}]);
//# sourceMappingURL=64.fc32e527.js.map