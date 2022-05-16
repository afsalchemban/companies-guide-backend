"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[267],{267:function(t,e,a){a.r(e),a.d(e,{default:function(){return m}});var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"w-full mt-20 mb-20"},[a("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl shadow-xl text-left m-auto"},[t._m(0),a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:t.name,expression:"name"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Name"},domProps:{value:t.name},on:{input:function(e){e.target.composing||(t.name=e.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:t.designation,expression:"designation"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"designation"},domProps:{value:t.designation},on:{input:function(e){e.target.composing||(t.designation=e.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:t.mobile,expression:"mobile"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"tel",required:"",placeholder:"Phone"},domProps:{value:t.mobile},on:{input:function(e){e.target.composing||(t.mobile=e.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:t.email,expression:"email"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"email",required:"",placeholder:"Email"},domProps:{value:t.email},on:{input:function(e){e.target.composing||(t.email=e.target.value)}}}),a("input",{directives:[{name:"model",rawName:"v-model",value:t.dob,expression:"dob"}],staticClass:"w-full my-2 px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"date",required:"",placeholder:"Birth Date"},domProps:{value:t.dob},on:{input:function(e){e.target.composing||(t.dob=e.target.value)}}}),a("v-select",{staticClass:"dropdown my-2",attrs:{options:t.options.countries,reduce:function(t){return t.id},placeholder:"Nationality",label:"name",taggable:"","push-tags":""},model:{value:t.nationality,callback:function(e){t.nationality=e},expression:"nationality"}}),a("v-select",{staticClass:"dropdown my-2 text-sm",attrs:{options:t.options.countries,reduce:function(t){return t.id},placeholder:"Country",label:"name",taggable:"","push-tags":""},on:{"option:selected":t.get_city},model:{value:t.country,callback:function(e){t.country=e},expression:"country"}}),a("v-select",{staticClass:"dropdown my-2 text-sm",attrs:{options:t.options.cities,label:"name",reduce:function(t){return t.id},placeholder:"City",taggable:"","push-tags":""},on:{"option:selected":t.get_area},model:{value:t.city,callback:function(e){t.city=e},expression:"city"}}),a("v-select",{staticClass:"dropdown my-2 text-sm",attrs:{options:t.options.areas,label:"name",reduce:function(t){return t.id},placeholder:"Area",taggable:"","push-tags":""},model:{value:t.area,callback:function(e){t.area=e},expression:"area"}})],1),a("div",[a("button",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{title:"Add",type:"button","aria-label":"Signup"},on:{click:function(e){return t.edit_council_member(t.$route.query.id,t.$route.query.member_id)}}},[t._v(" Save ")])])])])},o=[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"flex items-center justify-center"},[a("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-2xl mb-8"},[t._v(" Edit Member ")])])}],n=(a(7327),a(1539),a(4916),a(3123),a(6699),a(2023),a(8309),a(4747),a(6931)),r=a(768),s=a.n(r),d={name:"Settings",isCropped:!1,data:function(){return{options:{activities:[],countries:[],cities:[],areas:[],legal_status:[],issued_by:[]},name:null,dob:"Birth Date",nationality:null,email:null,website:null,mobile:null,designation:null,country:null,city:null,area:null,country_id:null,city_id:null,area_id:null}},components:{vSelect:s()},computed:{filteroptions:function(){var t=this;return this.options.activities.filter((function(e){return t.selected_activities.toLowerCase().split(" ").every((function(t){return e.toLowerCase().includes(t)}))}))}},methods:{getimg:function(t){this.company_council_logo=t},get_council_member:function(t){var e=this;n.Z.get("public/council_member_details/"+t).then((function(t){console.log(t.data),e.name=t.data.name,e.dob=t.data.dob,e.nationality=t.data.nationality,e.email=t.data.email,e.mobile=t.data.mobile,e.designation=t.data.designation,e.country=t.data.country.name,e.city=t.data.city.name,e.area=t.data.area.name,e.country_id=t.data.country.id,e.city_id=t.data.city.id,e.area_id=t.data.area.id})).catch((function(t){console.log(t)}))},edit_council_member:function(t,e){var a=this;try{n.Z.put("council/council_member/"+t+"/"+e,{name:this.name,dob:this.dob,nationality:this.nationality,email:this.email,mobile:this.mobile,designation:this.designation,country_id:this.country_id,city_id:this.city_id,area_id:this.area_id}).then((function(t){console.log(t.data),a.$router.push({path:"/council/our-members",query:{id:a.$route.query.id,name:a.$route.query.name}})}))}catch(i){console.log(i.message)}},get_country:function(){var t=this;n.Z.get("/data/countries/").then((function(e){e.data.countries.forEach((function(e){t.options.countries.push(e)}))})).catch((function(t){console.log(t.message)}))},get_city:function(){var t=this;n.Z.get("/data/cities/"+this.country).then((function(e){t.options.cities=[],console.log(e.data),e.data.cities.length>0?(e.data.cities.forEach((function(e){t.options.cities.push(e)})),t.city="Select City"):t.city="Not Found"})).catch((function(t){console.log(t.data)}))},get_area:function(){var t=this;n.Z.get("/data/areas/"+this.city).then((function(e){t.options.areas=[],console.log(e.data),e.data.areas.length>0?(e.data.areas.forEach((function(e){t.options.areas.push(e)})),t.area="Select Area"):t.area="Not Found"})).catch((function(t){console.log(t.data)}))}},created:function(){this.get_council_member(this.$route.query.member_id),this.get_country(),this.$store.state.hideConfigButton=!0,this.$store.state.showNavbar=!1,this.$store.state.showSidenav=!1,this.$store.state.showFooter=!1}},l=d,c=a(3736),u=(0,c.Z)(l,i,o,!1,null,null,null),m=u.exports}}]);
//# sourceMappingURL=267-legacy.39d8a079.js.map