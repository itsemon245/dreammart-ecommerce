import{r as d,a as e,j as a}from"./app-1954d829.js";import{C as o}from"./CommonLayout-8bf6eb1f.js";import{I as r,T as i}from"./TextInput-79bd4954.js";/* empty css            */import"./index-54598967.js";function f({auth:n,categories:t}){const[l,m]=d.useState("");return e(o,{pageTitle:"Settings",categories:t,auth:n,children:a("div",{className:"px-10 py-10",children:[a("div",{className:"grid grid-cols-2 gap-3 px-28",children:[a("div",{children:[e(r,{forInput:"name",children:"Name"}),e(i,{name:"name",id:"name",value:n.user.name})]}),a("div",{children:[e(r,{forInput:"email",children:"Email"}),e(i,{name:"email",id:"email",value:n.user.email})]}),a("div",{children:[e(r,{forInput:"username",children:"Username"}),e(i,{name:"username",id:"username",value:n.user.username})]}),a("div",{children:[e(r,{forInput:"phone",children:"Phone"}),e(i,{name:"phone",id:"phone",handleChange:s=>m(s.target.value),value:l,placeholder:"+880 164******"})]})]}),a("div",{className:"flex gap-3 mt-5 px-28",children:[e("button",{className:"btn btn-primary",children:"Update"}),e("button",{className:"btn bg-transparent border-0 p-0 font-bold text-primary",children:"Close"})]})]})})}export{f as default};
