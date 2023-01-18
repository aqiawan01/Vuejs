let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forget = require('./components/auth/forget.vue').default;
let logout = require('./components/auth/logout.vue').default;

// End Authentication
let home = require('./components/home.vue').default;
let index = require('./components/index.vue').default;

// Role Folder 
let storerole = require('./components/role/create.vue').default;
let roles = require('./components/role/index.vue').default;
let editrole = require('./components/role/edit.vue').default;


// permissionl Folder 
let storepermission = require('./components/permission/create.vue').default;
let permissions = require('./components/permission/index.vue').default;
let editpermission = require('./components/permission/edit.vue').default;

// User Folder 
let storeuser = require('./components/user/create.vue').default;
let users = require('./components/user/index.vue').default;
let edituser = require('./components/user/edit.vue').default;



export const routes = [
  // Frontend Router Begins Here 

  { path: '/frontend/index', component: index, name: 'index'},
  { path: '/', component: login, name: '/'},
  { path: '/register', component: register, name: 'register'},
  { path: '/forget', component: forget, name: 'forget'},
  { path: '/logout', component: logout, name: 'logout'},
  { path: '/home', component: home, name: 'home'},

  // Role Folder

  // Role Route
  { path: '/role/create', component: storerole, name: '/role/create'},
  { path: '/roles', component: roles, name: 'roles'},
  { path: '/role/edit/:id', component: editrole, name: '/role/edit/'},

  // Permission Route
  { path: '/permission/create', component: storepermission, name: '/permission/create'},
  { path: '/permissions', component: permissions, name: 'permissions'},
  { path: '/permission/edit/:id', component: editpermission, name: '/permission/edit/'},

  // User Route
  { path: '/user/create', component: storeuser, name: '/user/create'},
  { path: '/users', component: users, name: 'users'},
  { path: '/user/edit/:id', component: edituser, name: '/user/edit/'},


  ]