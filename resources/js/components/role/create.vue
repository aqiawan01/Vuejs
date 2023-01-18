 <template>
 
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Create New Role</h4>
              </div>
              <form class="user" @submit.prevent="roleInsert">
                <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Role Name</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter Full Name" v-model="form.name">
                    <small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>
                  </div>
                </div>

                <table class="table table-bordered table-striped text-center mb-3 table-responsive-xl">
                    <thead>
                    <tr>
                        <th>Model</th>
                        <th>List</th>
                        <th>Create</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Dashboard</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[dashboard]" type="checkbox" value="dashboard">
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Roles</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[role-list]" type="checkbox" value="role-list">
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[role-create]" type="checkbox" value="role-create">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Create</label>
                                  </div>
                                </div> 
                            </td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[role-edit]" type="checkbox" value="role-edit">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Edit</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[role-delete]" type="checkbox" value="role-delete">
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Delete</label>
                                  </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>Permissions</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[permission-list]" type="checkbox" value="permission-list">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[permission-create]" type="checkbox" value="permission-create">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Create</label>
                                  </div>
                                </div> 
                            </td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[permission-edit]" type="checkbox" value="permission-edit">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Edit</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[permission-delete]" type="checkbox" value="permission-delete">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Delete</label>
                                  </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>Users</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[user-list]" type="checkbox" value="user-list">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[user-create]" type="checkbox" value="user-create">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Create</label>
                                  </div>
                                </div> 
                            </td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[user-edit]" type="checkbox" value="user-edit">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Edit</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[user-delete]" type="checkbox" value="user-delete">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Delete</label>
                                  </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[category-list]" type="checkbox" value="category-list">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[category-create]" type="checkbox" value="category-create">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Create</label>
                                  </div>
                                </div> 
                            </td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[category-edit]" type="checkbox" value="category-edit">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Edit</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[category-delete]" type="checkbox" value="category-delete">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Delete</label>
                                  </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>Language</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[language-list]" type="checkbox" value="language-list">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[language-create]" type="checkbox" value="language-create">
                              
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Create</label>
                                  </div>
                                </div> 
                            </td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[language-edit]" type="checkbox" value="language-edit">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Edit</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[language-delete]" type="checkbox" value="language-delete">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Delete</label>
                                  </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>post</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[post-list]" type="checkbox" value="post-list">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[post-create]" type="checkbox" value="post-create">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Create</label>
                                  </div>
                                </div> 
                            </td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[post-edit]" type="checkbox" value="post-edit">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Edit</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[post-delete]" type="checkbox" value="post-delete">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Delete</label>
                                  </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>Content</td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[content-list]" type="checkbox" value="content-list">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>List</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[content-create]" type="checkbox" value="content-create">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Create</label>
                                  </div>
                                </div> 
                            </td>
                            <td>
                                <div class="pretty p-icon p-jelly p-round p-bigger">
                                  <input name="permission[content-edit]" type="checkbox" value="content-edit">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Edit</label>
                                  </div>
                                </div>
                            </td>
                            <td>
                               <div class="pretty p-icon p-jelly p-round p-bigger">
                                <input name="permission[content-delete]" type="checkbox" value="content-delete">
                                  
                                  <div class="state p-info">
                                    <i class="icon material-icons">done</i>
                                    <label>Delete</label>
                                  </div>
                                </div> 
                            </td>
                        </tr>
                    </tbody>
                </table>


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
        name: null
      },
      errors:{}  
       }
    },
    methods:{
      
    	roleInsert(){     
      axios.post('/api/roles/',this.form)
      .then(() => {
        this.$router.push({ name: 'role'})
        Notification.success()
      })
      .catch(error => this.errors = error.response.data.errors)
      },

     
      
    	}

    }
  
  
</script>

<style type="text/css">
</style>