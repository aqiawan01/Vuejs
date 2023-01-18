<template>
	 <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
         <form class="user" @submit.prevent="login">
          <!-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Register with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div> -->

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Register</p>
          </div>
          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a Full Name" v-model="form.name" />
            <label class="form-label" for="form3Example3">Full Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" v-model="form.email" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" v-model="form.password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" v-model="form.confirmed_password" />
            <label class="form-label" for="form3Example4">Confirm Password</label>
          </div>

          

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">You have an account?  <router-link to="/" class="font-weight-bold small" >Login</router-link></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</template>

<script type="text/javascript">
  export default {
    created(){
      if (User.logedIn()) {
        this.$router.push({ name: 'home'})
      }
    },

     data(){
    return {
      form:{
        name: null,
        email: null,
        password: null,
        password_confirmation: null
      },
      errors:{

      }
    }
  },
  methods:{
    register(){
      axios.post('/api/auth/register',this.form)
      .then(res => {
        User.responseAfterLogin(res)
        Toast.fire({
           icon: 'success',
           title: 'Singed in successfully'
        })
        this.$router.push({ name: 'home'})
      })

      .catch(error => this.errors = error.response.data.errors)
       
    }
  }
  }
</script>

<style type="text/css">
</style>