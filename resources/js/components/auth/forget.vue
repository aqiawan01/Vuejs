<template>
     <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
         <form>
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Forgot Password</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" v-model="form.email" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Forgot Pasword</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?  <router-link to="/register" class="font-weight-bold small" >Register</router-link></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</template>

<script type="text/javascript">
   export default {
    created(){
      // if (User.logedIn()) {
      //   this.$router.push({ name: 'home'})
      // }
    },

     data(){
    return {
      form:{
        email: null,
        password: null
      },
      errors:{

      }
    }
  },
  methods:{
    login(){
      axios.post('/api/auth/login',this.form)
      .then(res => {
        User.responseAfterLogin(res)
        Toast.fire({
           icon: 'success',
           title: 'Signed in successfully'
        })
        this.$router.push({ name: 'home'})
      })

      .catch(error => this.errors = error.response.data.errors)
       .catch(Toast.fire({
           icon: 'warning',
           title: 'Invalid Email or Password'
        })
      )
    }
  }
   }
</script>

<style type="text/css" scoped>
html, body {margin: 0; height: 100%; overflow: hidden}
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>