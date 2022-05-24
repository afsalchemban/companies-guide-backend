"use strict";(self["webpackChunkcompany_guide"]=self["webpackChunkcompany_guide"]||[]).push([[97],{6097:function(e,a,t){t.r(a),t.d(a,{default:function(){return m}});var r=function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("div",{staticClass:"w-full"},[t("div",{staticClass:"leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl text-left card2 mx-auto"},[t("p",{staticClass:"font-general-medium text-center text-primary-dark dark:text-primary-light text-lg sm:text-2xl mb-8"},[e._v(" Settings ")]),t("form",{staticClass:"font-general-regular space-y-7 card2-body",attrs:{action:"#"}},[t("div",[t("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Council Info")]),t("input",{directives:[{name:"model",rawName:"v-model",value:e.council_name,expression:"council_name"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Name"},domProps:{value:e.council_name},on:{input:function(a){a.target.composing||(e.council_name=a.target.value)}}})]),t("div",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Email"},domProps:{value:e.email},on:{input:function(a){a.target.composing||(e.email=a.target.value)}}})]),t("div",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.phone_number,expression:"phone_number"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"tel",required:"",placeholder:"Phone Number"},domProps:{value:e.phone_number},on:{input:function(a){a.target.composing||(e.phone_number=a.target.value)}}})]),t("div",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.landline_number,expression:"landline_number"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"tel",required:"",placeholder:"Landline"},domProps:{value:e.landline_number},on:{input:function(a){a.target.composing||(e.landline_number=a.target.value)}}})]),t("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.countries,reduce:function(e){return e.id},placeholder:"Country",label:"name",taggable:"","push-tags":""},on:{"option:selected":e.get_city},model:{value:e.country,callback:function(a){e.country=a},expression:"country"}}),t("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.cities,label:"name",reduce:function(e){return e.id},placeholder:"City",taggable:"","push-tags":""},on:{"option:selected":e.get_area},model:{value:e.city,callback:function(a){e.city=a},expression:"city"}}),t("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.areas,label:"name",reduce:function(e){return e.id},placeholder:"Area",taggable:"","push-tags":""},model:{value:e.area,callback:function(a){e.area=a},expression:"area"}}),t("div",[t("label",{staticClass:"block text-sm sm:text-lg text-primary-dark dark:text-primary-light mb-2",attrs:{for:"name"}},[e._v("Person In Charge")]),t("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_name,expression:"person_in_charge_name"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Name"},domProps:{value:e.person_in_charge_name},on:{input:function(a){a.target.composing||(e.person_in_charge_name=a.target.value)}}})]),t("div",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_designation,expression:"person_in_charge_designation"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Designation"},domProps:{value:e.person_in_charge_designation},on:{input:function(a){a.target.composing||(e.person_in_charge_designation=a.target.value)}}})]),t("div",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_email,expression:"person_in_charge_email"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Email"},domProps:{value:e.person_in_charge_email},on:{input:function(a){a.target.composing||(e.person_in_charge_email=a.target.value)}}})]),t("div",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.person_in_charge_mobile,expression:"person_in_charge_mobile"}],staticClass:"w-full px-5 py-2 border border-gray-300 dark:border-primary-dark border-opacity-50 text-primary-dark dark:text-secondary-light rounded-md shadow-sm text-sm sm:text-md",attrs:{type:"text",required:"",placeholder:"Mobile"},domProps:{value:e.person_in_charge_mobile},on:{input:function(a){a.target.composing||(e.person_in_charge_mobile=a.target.value)}}})]),t("v-select",{staticClass:"dropdown my-2",attrs:{options:e.options.countries,reduce:function(e){return e.id},placeholder:"Nationality",label:"name",taggable:"","push-tags":""},model:{value:e.person_in_charge_country,callback:function(a){e.person_in_charge_country=a},expression:"person_in_charge_country"}}),t("div",[t("button",{staticClass:"px-4 py-2.5 w-full text-sm sm:text-base text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500",attrs:{type:"button","aria-label":"Signup"},on:{click:function(a){return e.edit_council(e.$route.query.id)}}},[e._v(" Save ")])])],1)])])},n=[],o=(t(8309),t(1539),t(4747),t(768)),i=t.n(o),s=t(6931),d={data:function(){return{options:{countries:[],cities:[],areas:[]},council_logo:"",council_name:"",email:"",phone_number:"",landline_number:"",country:null,city:null,area:null,country_id:null,city_id:null,area_id:null,person_in_charge_name:"",person_in_charge_designation:"",person_in_charge_email:"",person_in_charge_mobile:"",person_in_charge_country:null}},components:{vSelect:i()},methods:{getimg:function(e){this.council_logo=e},get_council:function(e){var a=this;s.Z.get("/council/"+e).then((function(e){console.log(e.data),a.council_name=e.data.data.council_name,a.email=e.data.data.email,a.landline_number=e.data.data.landline_number,a.phone_number=e.data.data.mobile_number,a.country=e.data.data.country.name,a.city=e.data.data.city.name,a.area=e.data.data.area.name,a.country_id=e.data.data.country.id,a.city_id=e.data.data.city.id,a.area_id=e.data.data.area.id,a.person_in_charge_name=e.data.data.person_in_charge_name,a.person_in_charge_designation=e.data.data.person_in_charge_designation,a.person_in_charge_email=e.data.data.person_in_charge_email,a.person_in_charge_mobile=e.data.data.person_in_charge_mobile,a.person_in_charge_country=e.data.data.person_in_charge_country})).catch((function(e){console.log(e)}))},edit_council:function(e){var a=this;try{s.Z.put("council/"+e,{council_name:this.council_name,email:this.email,mobile_number:this.phone_number,landline_number:this.landline_number,designation:this.designation,country_id:this.country_id,city_id:this.city_id,area_id:this.area_id,person_in_charge_name:this.person_in_charge_name,person_in_charge_designation:this.person_in_charge_designation,person_in_charge_email:this.person_in_charge_email,person_in_charge_mobile:this.person_in_charge_mobile,person_in_charge_country:this.person_in_charge_country}).then((function(e){console.log(e.data),a.$router.push({path:"/council/",query:{name:a.$route.query.name,id:a.$route.query.id}})}))}catch(t){console.log(t.message)}},get_country:function(){var e=this;s.Z.get("/data/countries/").then((function(a){a.data.countries.forEach((function(a){e.options.countries.push(a)}))})).catch((function(e){console.log(e.message)}))},get_city:function(){var e=this;s.Z.get("/data/cities/"+this.country).then((function(a){e.options.cities=[],console.log(a.data),a.data.cities.length>0?(a.data.cities.forEach((function(a){e.options.cities.push(a)})),e.city="Select City"):e.city="Not Found"})).catch((function(e){console.log(e.data)}))},get_area:function(){var e=this;s.Z.get("/data/areas/"+this.city).then((function(a){e.options.areas=[],console.log(a.data),a.data.areas.length>0?(a.data.areas.forEach((function(a){e.options.areas.push(a)})),e.area="Select Area"):e.area="Not Found"})).catch((function(e){console.log(e.data)}))}},created:function(){this.get_council(this.$route.query.id),this.get_country()}},c=d,l=t(3736),u=(0,l.Z)(c,r,n,!1,null,"3cbcc541",null),m=u.exports}}]);
//# sourceMappingURL=97-legacy.31a40de3.js.map