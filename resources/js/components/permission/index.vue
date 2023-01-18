 <template>
  <section class="section">
    <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Permission Management</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th></th>
                        <th>Permission Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr v-for="permission in filtersearch" :key="permission.id">
                        <td>{{ permission.id }}</td>
                        <td></td>
                        <td>{{ permission.name }}</td>
                        <td>{{ permission.created_at }}</td>
                        <td>
                            
                            <a href="" class="btn btn-primary">Edit</a>
                              
                            <button class="btn btn-danger" type="button" >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

</template>

<script type="text/javascript">
  export default {
    created(){
      if (!User.logedIn()) {
        this.$router.push({ name: '/'})
      }
    },
    data(){
      return{
        permissions:[],
        searchTerm:''
      }
    },
    computed:{
      filtersearch(){
        return this.permissions.filter(permission => {
            return permission.name.match(this.searchTerm)
        })
      }
    },
      
    methods:{
      allpermission(){
        axios.get('/api/permission/')
        .then(({data}) => (this.permissions = data))
        .catch()
      },
    deletepermission(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete('/api/permissions/'+id)
          .then(() => {
            this.permissions = this.permissions.filter(permission => {
              return permission.id != id
            })
          })
          .catch(() => {
            this.$router.push({ name: 'permissions'})
          })
           Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
    }



    },
    created(){
      this.allpermission();
    }
  }
  
</script>
<style type="text/css">
  #em_photo {
    height: 60px;
    width: 60px;
  }

</style>