"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[618],{8618:function(e,t,a){a.r(t),a.d(t,{default:function(){return m}});var r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"w-full"},[a("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl text-left card2 mx-auto"},[a("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-2xl mb-8"},[e._v(" Settings ")]),a("form",{staticClass:"font-general-regular space-y-7 card2-body",attrs:{action:"#"}},[a("div",[a("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Council Info")]),a("input",{directives:[{name:"model",rawName:"v-model",value:e.council_name,expression:"council_name"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Name"},domProps:{value:e.council_name},on:{input:function(t){t.target.composing||(e.council_name=t.target.value)}}})]),a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Email"},domProps:{value:e.email},on:{input:function(t){t.target.composing||(e.email=t.target.value)}}})]),a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:e.phone_number,expression:"phone_number"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"tel",required:"",placeholder:"Phone Number"},domProps:{value:e.phone_number},on:{input:function(t){t.target.composing||(e.phone_number=t.target.value)}}})]),a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:e.landline_number,expression:"landline_number"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"tel",required:"",placeholder:"Landline"},domProps:{value:e.landline_number},on:{input:function(t){t.target.composing||(e.landline_number=t.target.value)}}})]),a("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.countries,reduce:function(e){return e.id},placeholder:"Country",label:"name",taggable:"","push-tags":""},on:{"option:selected":e.get_city},model:{value:e.country,callback:function(t){e.country=t},expression:"country"}}),a("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.cities,label:"name",reduce:function(e){return e.id},placeholder:"City",taggable:"","push-tags":""},on:{"option:selected":e.get_area},model:{value:e.city,callback:function(t){e.city=t},expression:"city"}}),a("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.areas,label:"name",reduce:function(e){return e.id},placeholder:"Area",taggable:"","push-tags":""},model:{value:e.area,callback:function(t){e.area=t},expression:"area"}}),a("div",[a("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Person In Charge")]),a("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_name,expression:"person_in_charge_name"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Name"},domProps:{value:e.person_in_charge_name},on:{input:function(t){t.target.composing||(e.person_in_charge_name=t.target.value)}}})]),a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_designation,expression:"person_in_charge_designation"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Designation"},domProps:{value:e.person_in_charge_designation},on:{input:function(t){t.target.composing||(e.person_in_charge_designation=t.target.value)}}})]),a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_email,expression:"person_in_charge_email"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Email"},domProps:{value:e.person_in_charge_email},on:{input:function(t){t.target.composing||(e.person_in_charge_email=t.target.value)}}})]),a("div",[a("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_mobile,expression:"person_in_charge_mobile"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Mobile"},domProps:{value:e.person_in_charge_mobile},on:{input:function(t){t.target.composing||(e.person_in_charge_mobile=t.target.value)}}})]),a("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.countries,reduce:function(e){return e.id},placeholder:"Nationality",label:"name",taggable:"","push-tags":""},model:{value:e.person_in_charge_country,callback:function(t){e.person_in_charge_country=t},expression:"person_in_charge_country"}}),a("div",[a("button",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{type:"button","aria-label":"Signup"},on:{click:function(t){return e.edit_council(e.$route.query.id)}}},[e._v(" Save ")])])],1)])])},n=[],o=(a(8309),a(1539),a(4747),a(768)),i=a.n(o),s=a(6931),c={data:function(){return{options:{countries:[],cities:[],areas:[]},council_logo:"",council_name:"",email:"",phone_number:"",landline_number:"",country:null,city:null,area:null,country_id:null,city_id:null,area_id:null,person_in_charge_name:"",person_in_charge_designation:"",person_in_charge_email:"",person_in_charge_mobile:"",person_in_charge_country:null}},components:{vSelect:i()},methods:{getimg:function(e){this.council_logo=e},get_council:function(e){var t=this;s.Z.get("public/council/"+e).then((function(e){console.log(e.data),t.council_name=e.data.council_name,t.email=e.data.email,t.landline_number=e.data.landline_number,t.phone_number=e.data.mobile_number,t.country=e.data.country.name,t.city=e.data.city.name,t.area=e.data.area.name,t.country_id=e.data.country.id,t.city_id=e.data.city.id,t.area_id=e.data.area.id,t.person_in_charge_name=e.data.person_in_charge_name,t.person_in_charge_designation=e.data.person_in_charge_designation,t.person_in_charge_email=e.data.person_in_charge_email,t.person_in_charge_mobile=e.data.person_in_charge_mobile,t.person_in_charge_country=e.data.person_in_charge_country})).catch((function(e){console.log(e)}))},edit_council:function(e){var t=this;try{s.Z.put("council/"+e,{council_name:this.council_name,email:this.email,mobile_number:this.phone_number,landline_number:this.landline_number,designation:this.designation,country_id:this.country_id,city_id:this.city_id,area_id:this.area_id,person_in_charge_name:this.person_in_charge_name,person_in_charge_designation:this.person_in_charge_designation,person_in_charge_email:this.person_in_charge_email,person_in_charge_mobile:this.person_in_charge_mobile,person_in_charge_country:this.person_in_charge_country}).then((function(e){console.log(e.data),t.$router.push({path:"/council/",query:{name:t.$route.query.name,id:t.$route.query.id}})}))}catch(a){console.log(a.message)}},get_country:function(){var e=this;s.Z.get("/data/countries/").then((function(t){t.data.countries.forEach((function(t){e.options.countries.push(t)}))})).catch((function(e){console.log(e.message)}))},get_city:function(){var e=this;s.Z.get("/data/cities/"+this.country).then((function(t){e.options.cities=[],console.log(t.data),t.data.cities.length>0?(t.data.cities.forEach((function(t){e.options.cities.push(t)})),e.city="Select City"):e.city="Not Found"})).catch((function(e){console.log(e.data)}))},get_area:function(){var e=this;s.Z.get("/data/areas/"+this.city).then((function(t){e.options.areas=[],console.log(t.data),t.data.areas.length>0?(t.data.areas.forEach((function(t){e.options.areas.push(t)})),e.area="Select Area"):e.area="Not Found"})).catch((function(e){console.log(e.data)}))}},created:function(){this.get_council(this.$route.query.id),this.get_country()}},d=c,l=a(3736),u=(0,l.Z)(d,r,n,!1,null,"6c641f18",null),m=u.exports}}]);
//# sourceMappingURL=618-legacy.51615684.js.map