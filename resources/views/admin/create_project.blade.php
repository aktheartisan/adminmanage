	@include('admin/section/header')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
	      <div class="col-md-6" style="margin-top: 10px;">
          <h1 style="font-size: 25px;">Create a Project</h1>
        </div>
	        <div class="col-sm-6" style="margin-top: 10px;">
	          <ol class="breadcrumb float-sm-right">
	            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
	           
	          </ol>
	        </div>
	      </div>
	    </div><!-- /.container-fluid -->
	  </section>
	  <section class="content" style="margin-top: -18px">
	  	<div class="container-fluid">
	       <div class="card" style="padding:10px;">
	       	<div class="card-header">
	       		<h3 class="card-title">New</h3>
	       	</div>

	       	 <form id="quickForm" method="post" action="{{url('pro_details')}}">
	       	 	 @csrf
	       	 	<div class="card-body">
	       	 		<div class="row">
	       	 			<div class="col-md-8">
	       	 				<label for="title">Project Title:</label>
	       	 				<input type="text" class="form-control form-control-sm mb-2" name="title" id="title">
	       	 			</div>

	       	 			<div class="col-md-4">
	       	 				<label for="task_dpt">Department:</label>
	       	 			<select class="form-select mb-2"   aria-label="multiple select example" name="task_dpt" id="task_dpt">
	                       <option selected value="deg_0">Choose</option>
	                       <option value="Administrative">Administrative</option>
	                       <option value="Digitalmarketing">Digital Marketing</option>
	                       <option value="Graphicdesign">Graphic Design</option>
	                       <option value="WebDevelopment">Web Development</option>
	                     </select>
	       	 			</div>

	       	 			<div class="col-md-4">
	       	 				<label for="task_amn">Admin:</label>
	       	 			<select class="form-select  mb-2"  aria-label="multiple select example" name="task_amn" id="task_amn">
	                       <option selected value="deg_0">Choose</option>
	                       <option value="Admin1">Admin1</option>
	                       <option value="Admin2">Admin2</option>
	                       <option value="Admin3">Admin3</option>
	                     </select>
	       	 			</div>

	       	 			<div class="col-md-4">
	       	 				<label for="task_tl">Team Leader:</label>
	       	 			<select class="form-select mb-2"   aria-label="multiple select example" name="task_tl" id="task_tl" >
	                       
	                     
	                     </select>
	       	 			</div>


	       	 			<div class="col-md-4">
       	 				<label for="task_mem">Team Members:</label>

       	 			<select class="form-control mb-2 js-select2-multi"  aria-label="multiple select example" name="task_mem[]" id="task_mem" multiple>
                       
                   
              </select>

       	 			</div>
       	 			<div class="col-md-6">
       	 				<label for="start">Start Date:</label>
       	 				<input type="date" class="form-select mb-2" name="task_start" id="task_start">
       	 			</div>

       	 			<div class="col-md-6">
       	 				<label for="end">Dead Line:</label>
       	 				<input type="date" class="form-select mb-2" name="task_end" id="task_end">
       	 			</div>

       	 			<div class="col-md-12">
       	 				<label for="overview">Project Overview:</label>
       	 		      <textarea type="text" class="form-control mb-2" style="height: 80px;" id="overview" name="overview" rows="10" cols="10" >
                         </textarea>	
       	 			</div>

       	 			<div class="col-md-6">
       	 				<label for="client">Client:</label>
       	 				<select class="form-select mb-2"  aria-label="multiple select example" name="client" id="client">
                       <div id="dd">
                       	<option selected value="client0">Choose</option>
                       <option value="Client1">Client1</option>
                       <option value="Client2">Client2</option>
                     
                </select>
       	 			</div>

       	 			<div class="col-md-6 mb-2">
       	 				<label for="budget">Budget:</label>
       	 				<input type="text" class="form-control form-control-sm"  name="budget">
       	 				
       	 			</div>
  


	       	 		</div>

	       	 	</div>
	       	 	<div class="row d-flex justify-content-center" style=" margin-top: 10px; margin-bottom: 20px;">
	       	   <input class="btn btn-success btn-sm btown" type="submit" value="Create Project" name="submit" id="create" >
            
               <input class="btn btn-danger btn-sm btown" type="reset" value="Clear">
	       	 	</div>
	       	 </form>	
	       	
	       </div>



	  	</div>
	  	
	  </section>


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

<script type="text/javascript">
	$(document).ready(function() {
	  $(".js-select2-multi").select2();

	  $('#task_dpt').on('change',function(){
	  	var id= $('#task_dpt').val();

	  	$.ajax({
	  		type: 'POST',/*we are going to post the selected department to get that department teamleader and  database*/
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



</script>



	@include('admin/section/footer')