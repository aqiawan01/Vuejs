 <template>
 
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Create New User</h4>
              </div>
              <form class="user" @submit.prevent="UserInsert">
              <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control"  placeholder="Enter Full Name" v-model="form.name">
                    <small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                  <div class="col-sm-12 col-md-7">
                   <input type="email" class="form-control" placeholder="Enter Email" v-model="form.email">
                    <small class="text-danger" v-if="errors.email">{{ errors.email[0] }}</small>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="password" class="form-control"  placeholder="Enter Password" v-model="form.password">
                    <small class="text-danger" v-if="errors.password">{{ errors.password[0] }}</small>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="password" class="form-control"  placeholder="Enter Confirm Password" v-model="form.confirm_password">
                    <small class="text-danger" v-if="errors.confirm_password">{{ errors.confirm_password[0] }}</small>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Role</label>
                  <div class="col-sm-12 col-md-7">
                    <select  class="form-control selectric" style="width: 100%;">
                       <option disabled value="">Please select one</option>
                      <option v-for="role in roles" v-model="form.role" :value="role.id">{{role.name}}</option>
                        
                    </select>
                    
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
             </form>
            </div>
          </div>
        </div>
    </div>

</template>

<script type="text/javascript">
  export default {
    created(){
      if (!User.logedIn()) {
        this.$router.push({ name: '/'})
      }
    },
    created(){
      this.getRole();
    },


     data(){
    return {
      roles:[],
      form:{
        name: '',
        email: '',
        password: '',
        confirm_password: '',
        role: '',
      },
      errors:{}  
       }
    },
    methods:{
      getRole(){
        axios.get('/api/role')
        .then(({data}) => (this.roles = data))
        .catch()
    
      },
    	UserInsert(){     
       axios.post('/api/user/create/', this.form)
      .then((res) => {
         this.$router.push({ name: 'users'})
        Notification.success()
      })
      .catch(error => this.errors = error.response.data.errors)
      }

     
      
    	}
      

    }
  
  
</script>

<style type="text/css">
</style>