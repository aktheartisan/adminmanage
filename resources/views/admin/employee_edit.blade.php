@include('admin/section/header')
<?php $tst='';
$tstt='';?>
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
              <h3 class="card-title">Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="post" action="{{url('emp_update')}}">
              @csrf
              @foreach($aalamathu as $f)
          
              <div class="card-body">
                <div class="row">
               <input type="hidden" name="" id="degreet">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Applicant Name</label>
                      <input type="text" name="name" class="form-control form-control-sm" id="exampleInputName1" placeholder="Enter Your Name" value="{{$f->name}}" required>

                      <input type="text" name="id" class="form-control form-control-sm" id="exampleInputName1" placeholder="Enter Your Name" value="{{$f->id}}" required style="display: none;">
                    </div>
               <input type="hidden" name="" id="xny" value="{{$f->department}}">

                    <div class="form-group">
                      <label for="exampleInputPassword1">Age</label>
                      <input type="number" name="age" class="form-control form-control-sm" id="age" placeholder="Enter Your Age" value="{{$f->age}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="number" name="phone" class="form-control form-control-sm" id="phone" placeholder="Enter Your Number" value="{{$f->phone}}" required>
                    </div>

              <input type="hidden" name="" id="yyy" value="{{($f->position)}}">
                  <div class="form-group">

                     <label for="degree" class="form-label">Education Qualification:</label>

                     <select class="form-select"  aria-label="multiple select example" name="degree" id="degree">
                       <option selected value="deg_0">Choose</option>
                       @if($f->degree == 'UG')
                       <option value="UG" selected>UG</option>
                       @else
                       <option value="UG">UG</option>
                       @endif

                       @if($f->degree == 'PG')
                       <option value="PG" selected>PG</option>
                       @else
                       <option value="PG">PG</option>
                       @endif

                       @if($f->degree == 'DIPLOMA')
                       <option value="DIPLOMA" selected>DIPLOMA</option>
                       @else
                       <option value="DIPLOMA">DIPLOMA</option>
                       @endif 

                     </select>

                   </div>

                  <div class="form-group">

                     <label for="degree" class="form-label">Department:</label>

                     <select class="form-select"  aria-label="multiple select example" name="department" id="department">
                       <option value="deg_0">Choose</option>

                      <option value="Administrative" >Administrative</option>
<option value="DigitalMarketing">DigitalMarketing</option>
 <option value="GraphicDesign">GraphicDesign</option>
<option value="WebDevelopment">WebDevelopment</option>

                     </select>

                   </div>


                 </div>


                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Father Name</label>
                    <input type="text" name="f_name" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your FatherName " value="{{$f->f_name}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                    <input type="date" name="dob" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Date of Birth" value="{{$f->dob}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password" required value="{{$f->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Year of Passing</label>
                    <input type="month"  name="passing_year" class="form-control form-control-sm" id="datepicker" placeholder="year" required value="{{$f->passing_year}}">
                  </div>

                  <div class="form-group">

                     <label for="degree" class="form-label">Position:</label>

                    <select class="form-select"  aria-label="multiple select example" name="position" id="position">
                       <option value="deg_0">Choose</option>
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
          @endforeach
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
  $(document).ready(function() {
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy'});
});

var objSelects = document.getElementById('xny').value;

for (var option of document.getElementById("department").options) {
    if (option.value === objSelects) {
        option.selected = true;
        return;
    }
}
}); 

  $(document).ready(function() {

 var objSelects1 = document.getElementById('yyy').value;

 for (var option of document.getElementById("position").options) {
    if (option.value === objSelects1) {
        option.selected = true;
        return;
    }
}


});
</script>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
@include('admin/section/footer')