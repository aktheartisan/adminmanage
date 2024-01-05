@include('admin/section/header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Employee Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('employee_manage')}}">Home</a></li>
           
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Employee Manage</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
            	<div class="table-responsive">
            		<table class="table table-bordered">
            			<thead>
            				<tr>
            					<th>Emp Name</th>
            					<th>DOB</th>
            					<th>Mobile</th>
            					<th>Email</th>
            					<th id="jub">Action</th>
            				</tr>
            			</thead>
            			<tbody>

            				@foreach($sam as $f)
                      <!--this is foreach for showing only four content and action buttons ---->

            				<tr>
            					<td>{{$f->name}}</td>
            					<td>{{$f->dob}}</td>
            					<td>{{$f->phone}}</td>
            					<td>{{$f->email}}</td>
                      
            					<td id="">
            						<a id="eet" href="#" data-toggle="modal" data-target="#view{{$f->id}}"><i class="fa fa-eye" aria-hidden="true" style="color:black"></i></a>
            						<a id="eet" href="{{url('update_employee')}}/{{$f->id}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
            						<a id="eet" href="" data-toggle="modal" data-target="#delete{{$f->id}}"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
            					</td>
                      
            				</tr>

            				
            				@endforeach <!--this is foreach for showing only four content and action buttons ---->

            			</tbody>
            		</table>
            	</div>
            </div>
      </div>
   
    </div>

  </div>
  
</div>
</section>

</div>
<style type="text/css">
  @media only screen and (max-width: 425px) {
    .btown {
      width: 50%;
    }
  }
  @media only screen and (min-width: 1024px) {
    .btown {
      width: 20%;
      border-radius: 15px;
    }
  }
  #degree
  {
    width: 100%;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.2rem;
    height: auto;
    padding: 4px 8px;
  }
  .apply
  {
    margin-top: 6.3px;
    margin-left: 4.75px;
  }
  #eet{
    padding: 2px;
  }#jub{
    width:10%;
  }
  @media only screen and (min-width:320px) and (max-width:425px){
    #jub{
    display: inline-grid;
    width: 100%;
    height: 100%;
  }
  }
</style>
<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy'});
});
</script>



@foreach($sam as $f)
<div class="modal fade" id="view{{$f->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-xl">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <table class="table table-bordered table-responsive">
							        	<tr>
							        		  <th>Employee Name</th>
                            <th>Father Name</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Education Qualification</th>
                            <th>Passing Year</th>
                            <th>Department</th>
                            <th>Position</th>
                        </tr>
							        		
							        <tbody>
							        	<tr>
							        	  <td>{{$f->name}}</td>
							        		<td>{{$f->f_name}}</td>
							        	  <td>{{$f->dob}}</td>
                          <td>{{$f->age}}</td>
                          <td>{{$f->phone}}</td>
                          <td>{{$f->email}}</td>
                          <td>{{$f->degree}}</td>
                          <td>{{$f->passing_year}}</td>
                          <td>{{$f->department}}</td>
                          <td>{{$f->position}}</td>
                        </tr>
                      </tbody>
							        </table>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        
							      </div>
							    </div>
							  </div>
</div>
@endforeach



@foreach($sam as $f)
<div class="modal fade" id="delete{{$f->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                 <form id="quickForm" method="post" action="{{url('emp_delete')}}">
                       @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Applicant Name</label>
                      <input type="text" name="name" class="form-control form-control-sm" id="exampleInputName1" value="{{$f->name}}" readonly>

                      <input type="hidden" name="id" class="form-control form-control-sm"  placeholder="Enter Your Name" value="{{$f->id}}" >
                  </div>


                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                      
                  </div> 
                </form>

         
                    </div>
            
                  </div>
                </div>
</div>
@endforeach
@include('admin/section/footer')