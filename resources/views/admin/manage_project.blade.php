@include('admin/section/header')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<style type="text/css">
  .select2-container--default .select2-selection--multiple .select2-selection__choice{
    padding: 0 29px;
    color: black;

  }
</style>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('employee_manage')}}">Home</a></li>

          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Project Manage</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
            	<div class="table-responsive">
            		<table class="table table-bordered">
            			<thead>
            				<tr>
            					<th>PROJECT NAME</th>
            					<th>DEPARTMENT</th>
            					<th>ASSIGNESS</th>
            					<th>START DATE</th>
            					<th>DEADLINE</th>
            					<th>STATUS</th>
            					<th>ACTION</th>
            				</tr>
            			</thead>
            			<tbody>

            				@foreach($sam as $f)
                    <!--this is foreach for showing only four content and action buttons ---->

                    <tr>
                     <td>{{$f->title}}</td>
                     <td>{{$f->task_dpt}}</td>
                     <td>{{$f->task_tl}},{{$f->task_mem}}</td>
                     <td>{{$f->task_start}}</td>
                     <td>{{$f->task_end}}</td>

                     @if( $f->status == 0)
                     <td><span class="c-pill c-pill--info">Pending</span></td>
                     @endif

                     @if( $f->status == 1)
                     <td><span class="c-pill c-pill--info1">Ongoing</span></td>
                     @endif

                     @if( $f->status == 2)
                     <td><span class="c-pill c-pill--danger">Cancelled</span></td>
                     @endif

                     @if( $f->status == 3)
                     <td><span class="c-pill c-pill--success">Finished</span></td>
                     @endif

                     @if( $f->status == 4)
                     <td><span class="c-pill c-pill--warning">Postponed</span></td>
                     @endif


                     <td id="">
                      <!-- <img src="{{('public/img/dots.png')}}" id="dot"> -->
                      <div id="cion">
                        <a  href="#" data-toggle="modal" data-target="#view{{$f->id}}"><i class="fa fa-eye" aria-hidden="true" style="color:black"></i></a>
                        <a  href="{{url('update_project')}}/{{$f->id}}"><i class="fa fa-edit" aria-hidden="true" style="color:blue"></i></a>
                        <a  href="" data-toggle="modal" data-target="#delete{{$f->id}}"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
                      </div>
                    </td>
                    <style type="text/css">
                      
                      #cion
                      {
                        display: flex;
                        justify-content: space-between;
                      }
                      
                    </style>

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



@foreach($sam as $f)
<div class="modal fade" id="view{{$f->id}}">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Project Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-6">
            <div class="ml-4"><label>Project Title:</label><p>{{$f->title}}</p></div>
            <div class="ml-4"><label>Started:</label><p>{{$f->task_start}}</p></div>
            <div class="ml-4"><label>Budget:</label><p>{{$f->budget}}</p></div>
          </div>
          <div class="col-md-6">
            <div class="ml-4"><label>Client:</label><p>{{$f->client}}</p></div>
            <div class="ml-4"><label>Deadline:</label><p>{{$f->task_end}}</p></div>
            <div class="ml-4"><label>Assignees:</label><p>{{$f->task_tl}},{{$f->task_mem}}</p></div> 
          </div>

          <div class="col-md-12" style="margin-left: 31px;">
            <label>Overview:</label>
            <p style="text-indent: 20px;margin-right: 40px;">

              {{$f->overview}}
            </p>
          </div>
        </div>

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

@endforeach 


     

@foreach($sam as $f)

<div class="modal fade" id="delete{{$f->id}}">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Project Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="quickForm" method="post" action="{{url('pro_delete')}}">
          @csrf
              <div class="col-md-12">
                  <label for="title">Project Title:</label>
                  <input type="text" class="form-control form-control-sm mb-2" name="title" id="title" value="{{$f->title}}">

                   <input type="hidden" name="id" class="form-control form-control-sm"  placeholder="Enter Your Name" value="{{$f->id}}" >
                </div>

      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" id="del">Delete</button>
      </div>
          </form>

      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach


<script type="text/javascript">

  $(document).ready(function() {

   $(".js-select2-multi").select2();

   $('#task_dpt').on('change',function(){

    var id= $('#task_dpt').val();

    $.ajax({
        type: 'POST',/*we are going to post the selected tl and member into database*/
      url: "{{url('dep_filter')}}",
      data: {id:id,_token:"{{csrf_token()}}"}, 
      success: function(result){
          // console.log(result);
        $('#task_tl').empty();
        for (var i = 0; i < result[0].length; i++) {
          $('#task_tl').append('<option value=' + result[0][i].name + '>' + result[0][i].name + '</option>');

        }
        $('#task_mem').empty();
        for (var j = 0; j < result[1].length; j++) {
          $('#task_mem').append('<option value=' + result[1][j].name
           + '>' + result[1][j].name + '</option>');

        }


      }});

  });


 });

  $(document).ready(function() {


  var objSelects = document.getElementById('tt').value; /*this is from database*/
  var objSelect  = document.getElementById("task_dpt"); /*this is form input option value*/

    for (var i = 0; i < objSelect.options.length; i++) {
      if (objSelect.options[i].value === objSelects) {
        objSelect.options[i].selected = true;
        return;
      }
    }



  });


  $(document).ready(function() {
  var objSelects = document.getElementById('aa').value; /*this is from database*/
  // var objSelect  = document.getElementById("task_amn"); /*this is form input option value*/

    for (var option of document.getElementById("task_amn").options) {
      if (option.value === objSelects) {
        option.selected = true;
        return;
      }
    }


  });



// $(document).ready(function() {
//   var objSelects = document.getElementById('ll').value; /*this is from database*/
//   var objSelect  = document.getElementById("task_tl"); /*this is form input option value*/

//   for (var i = 0; i < objSelect.options.length; i++) {
//         if (objSelect.options[i].value === objSelects) {
//         objSelect.options[i].selected = true;
//         return;
//     }
// }


// });


  $(document).ready(function() {


var objSelects = document.getElementById('cc').value; /*this is from database*/
 /*this is form input option value*/

    for (var option of document.getElementById("client").options) {
      if (option.value === objSelects) {
        option.selected = true;
        return;
      }
    }
  });



$(document).ready(function(){
  $("#del").click(function(){
    if (!confirm("Do you want to delete")){
  
    }
  });
});





  
</script>
</div>


<style type="text/css">

  @media only screen and (max-width: 425px) {
    .btown {
      width: 40%;
      font-size: 15px;

      margin: 10px;
    }

  }
  @media only screen and (min-width: 724px) {
    .btown {
      width: 30%;
      border-radius: 10px;
      font-size: 15px;
      margin: 10px;
      padding: 0;
    }
  }
  #task_dpt, #task_amn, #task_tl, #task_mem, #task_start, #task_end,#client,#kk
  {
    width: 100%;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 4px;
    height: auto;
    padding: 7px 8px;
  }

  .select2-container .select2-selection--multiple
  {
    padding-bottom: 2px;
    margin-bottom: 0.5rem;
  }

</style>


<script src="{{url('public/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<style>
  @import url("https://fonts.googleapis.com/css?family=Open+Sans&display=swap");
  .c-pill {
    align-items: center;
    font-family: "Open Sans", Arial, Verdana, sans-serif;
    font-weight: bold;
    font-size: 11px;
    display: inline-block;
    height: 100%;
    white-space: nowrap;
    width: auto;
    position: relative;
    border-radius: 100px;
    line-height: 1;
    overflow: hidden;
    padding: 0px 12px 0px 20px;
    text-overflow: ellipsis;
    line-height: 1.25rem;
    color: #595959;
    word-break: break-word;
  }
  .c-pill:before {
    border-radius: 50%;
    content: "";
    height: 10px;
    left: 6px;
    margin-top: -5px;
    position: absolute;
    top: 50%;
    width: 10px;
  }

  .c-pill--success {
    background: #b4eda0;
  }

  .c-pill--success:before {
    background: #6BC167;
  }

  .c-pill--warning {
    background: #ffebb6;
  }

  .c-pill--warning:before {
    background: #ffc400;
  }

  .c-pill--danger {
    background: #ffd5d1;
  }

  .c-pill--danger:before {
    background: #ff4436;
  }
  .c-pill--info {
    background: #ffefca;
  }

  .c-pill--info:before {
    background: #ffcc85;
  }

  .c-pill--info1 {
    background: #e5edff;
  }

  .c-pill--info1:before {
    background: #003cc7;
  }

  .menu-nav {

    display: flex;
    justify-content: flex-end;
  }



  .three-dots:after {
    cursor: pointer;
    color: #444;
    content: '\2807';
    font-size: 20px;
    padding: 0 5px;
  }

  a {
    text-decoration: none;
    color: #000;
  }

  a div {
    padding: 15px;
  }

  .dropdown {
    position: absolute;
    right: 60px;
    background-color: #fff;
    outline: none;
    opacity: 0;

    z-index: -1;
    max-height: 0;
    color: #000;
    padding: 20px;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    transition: opacity 0.1s, z-index 0.1s, max-height: 5s;
  }

  .dropdown-container:focus {
    outline: none;
  }

  .dropdown-container:focus .dropdown {
    opacity: 1;
    z-index: 100;
    max-height: 100vh;
    transition: opacity 0.2s, z-index 0.2s, max-height: 0.2s;
  }
  .select2-container--default .select2-selection--multiple .select2-selection__choice{
    padding: 0 29px;
    color: black;

  }      

</style>
<!-- <script type="text/javascript">
  $('#dot').on('click',function(){
    if ($('#cion').is(':visible')) {
      $('#cion').hide()
      $('#dot').show()
    }else{
      $('#cion').show()
      $('#dot').hide()
    }
  })
</script> -->
@include('admin/section/footer')