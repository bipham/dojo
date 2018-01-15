import Login from './login.vue';
import Register from './register.vue';

const MyaccountRouter=[
  {
    path:'/myaccount/login',
    name:'Login',
    component:Login
  },
  {
    path:'/myaccount/register',
    name:'Register',
    component:Register
  }
];

export default MyaccountRouter
