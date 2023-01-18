 <template>
  <div class="container-fluid">
    
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Create New Permission</h4>
              </div>
              <form class="user" @submit.prevent="permissionInsert">
                
                <input type="hidden" name="guard_name" value="web">
                <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="name" class="form-control" placeholder="Name" v-model="form.name"><small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>
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


     data(){
    return {
      form:{
        name: null,
      },
      errors:{}  
       }
    },
    methods:{
    	permissionInsert(){     
      axios.post('/api/permission/',this.form)
      .then(() => {
        this.$router.push({ name: 'permissions'})
        Notification.success()
      })
      .catch(error => this.errors = error.response.data.errors)
      },

     
      
    	}

    }
  
  
</script>

<style type="text/css">
</style>