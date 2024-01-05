@include('admin/section/header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Employee Registration</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
           
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
              <h3 class="card-title">Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="post" action="{{url('reg_submit')}}" autocomplete="off">
              @csrf
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Applicant Name</label>
                      <input type="text" name="name" class="form-control form-control-sm" id="exampleInputName1" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Age</label>
                      <input type="number" name="age" class="form-control form-control-sm" id="age" placeholder="Enter Your Age" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="number" name="phone" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Enter Your Number" required>
                    </div>
                    <div class="form-group">

                     <label for="degree" class="form-label">Education Qualification:</label>

                     <select class="form-select"  aria-label="multiple select example" name="degree" id="degree">
                       <option selected value="deg_0">Choose</option>
                       <option value="UG">UG</option>
                       <option value="PG">PG</option>
                       <option value="DIPLOMA">DIPLOMA</option>

                     </select>

                   </div>


                  <div class="form-group">

                     <label for="degree" class="form-label">Department:</label>

                     <select class="form-select"  aria-label="multiple select example" name="department" id="department">
                       <option selected value="deg_0">Choose</option>
                       <option value="Administrative">Administrative</option>
                       <option value="Digitalmarketing">Digital Marketing</option>
                       <option value="Graphicdesign">Graphic Design</option>
                       <option value="WebDevelopment">Web Development</option>

                     </select>

                   </div>


                 </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Father Name</label>
                    <input type="text" name="f_name" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your FatherName " required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                    <input type="date" name="dob" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Date of Birth" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Year of Passing</label>
                    <input type="month"  name="passing_year" class="form-control form-control-sm" id="datepicker" placeholder="year" required>
                  </div>



                     <div class="form-group">

                     <label for="degree" class="form-label">Position:</label>

                     <select class="form-select"  aria-label="multiple select example" name="position" id="position">
                       <option selected value="deg_0">Choose</option>
                       <option value="Teamleader">Team Leader</option>
                       <option value="Admin">Admin</option>
                       <option value="Designer">Designer</option>
                       <option value="Marketer">Marketer</option>
                       <option value="Developer">Developer</option>

                     </select>

                   </div>

                </div>
              </div>
              
    


            
          </div>
          <!-- /.card-body -->
          <div class="card-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-sm btown">Submit</button>
            <button type="reset" class="btn btn-danger btn-sm ml-1 btown">Clear</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">

    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
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
  #department
  {
    width: 100%;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.2rem;
    height: auto;
    padding: 4px 8px;
  }
  #position
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
</style>
<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy'});
});
</script>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
@include('admin/section/footer')