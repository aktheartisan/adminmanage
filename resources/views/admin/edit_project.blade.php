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
					<h1 style="font-size: 25px;">Update Project</h1>
				</div>
				<div class="col-sm-6" style="margin-top: 10px;">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('manage_project')}}">Back</a></li>
						
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

				<form id="quickForm" method="post" action="{{url('project_edit')}}">
					@foreach($ak as $f)
					{{csrf_field()}}
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<label for="title">Project Title:</label>
								<input type="text" class="form-control form-control-sm mb-2" name="title" id="title" value="{{$f->title}}">
							</div>

							<input type="text" name="id" class="form-control form-control-sm" id="exampleInputName1" placeholder="Enter Your Name" value="{{$f->id}}" required style="display: none;">
							
							<input type="hidden" name="" id="dd" value="{{$f->task_dpt}}">
							<div class="col-md-4">
								<label for="task_dpt">Department:</label>
								<select class="form-select mb-2"   aria-label="multiple select example" name="task_dpt" id="task_dpt">
									<option value="deg_0">Choose</option>
									<option value="Administrative">Administrative</option>
									<option value="Digitalmarketing">Digital Marketing</option>
									<option value="Graphicdesign">Graphic Design</option>
									<option value="WebDevelopment">Web Development</option>
								</select>
							</div>

							<input type="hidden" name="" id="aa" value="{{$f->task_amn}}">
							<div class="col-md-4">
								<label for="task_amn">Admin:</label>
								<select class="form-select  mb-2"  aria-label="multiple select example" name="task_amn1" id="task_amn">
									<option value="deg_0">Choose</option>
									<option value="Admin1">Admin1</option>
									<option value="Admin2">Admin2</option>
									<option value="Admin3">Admin3</option>
								</select>
							</div>

							<div class="col-md-4">
								<label for="task_tl">Team Leader:</label>
								
								<select class="form-select mb-2"   aria-label="multiple select example" name="task_tl" id="task_tl" >	       	 			 
									
									@foreach($leader as $t)
									<option value="{{$t->name}}">{{$t->name}}</option>
									@endforeach
									
								</select>
							</div>


							<div class="col-md-4">
								<label for="task_mem">Team Members:</label>
								
								<select class="form-control mb-2 js-select2-multi"  aria-label="multiple select example" name="task_mem[]" id="task_mem" multiple>

									<?php $weekendArr = explode(",",$f->task_mem) ;?> <!-- members from particular project details -->
									@foreach($sam1 as $t) <!-- dept members from  reg form -->
									
									<option value="{{$t->name}}" <?php echo (isset($weekendArr) && in_array($t->name, $weekendArr) ) ? 'selected="selected"' : "" ?> >{{$t->name}}</option>
									@endforeach
									
								</select>

							</div>

							<div class="col-md-6">
								<label for="start">Start Date:</label>
								<input type="date" class="form-select mb-2" name="task_start" id="task_start" value="{{$f->task_start}}">
							</div>

							<div class="col-md-6">
								<label for="end">Dead Line:</label>
								<input type="date" class="form-select mb-2" name="task_end" id="task_end" value="{{$f->task_end}}">
							</div>

							<div class="col-md-12">
								<label for="overview">Project Overview:</label>
								<textarea type="text" class="form-control mb-2" style="height: 80px;" id="overview" name="overview" rows="10" cols="10" >
									<?php echo "$f->overview"?>
								</textarea>	
							</div>
							<input type="hidden" name="" id="cc" value="{{$f->client}}">
							<div class="col-md-6">
								<label for="client">Client:</label>
								<select class="form-select mb-2"  aria-label="multiple select example" name="client" id="client">
									
									<option value="client0">Choose</option>
									<option value="Client1">Client1</option>
									<option value="Client2">Client2</option>
									
								</select>
							</div>

							<div class="col-md-6 mb-2">
								<label for="budget">Budget:</label>
								<input type="text" class="form-control form-control-sm"  name="budget" value="{{$f->budget}}">
								
							</div>
							


						</div>

					</div>

					@endforeach

					<div class="row d-flex justify-content-center" style=" margin-top: 10px; margin-bottom: 20px;">
						<a href="{{url('manage_project')}}" class="btn btn-secondary btn-sm btown">Back</a>
						<input class="btn btn-success btn-sm btown" type="submit" value="Update" name="submit"  >
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
			width: 20%;
			font-size: 15px;

			margin: 10px;
		}

	}
	@media only screen and (min-width: 724px) {
		.btown {
			width: 20%;
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
	$(document).ready(() => {

		$(".js-select2-multi").select2();

	});

	$(document).ready(() => {


		var objSelects = document.getElementById('dd').value; /*this is from database*/
		/*this is form input option value*/

		for (var option of document.getElementById("task_dpt").options) {
			if (option.value == objSelects) {
				option.selected = true;
				return;
			}
		}
	});

	$(document).ready(() => {

		var objSelects = document.getElementById('aa').value; /*this is from database*/
  // var objSelect  = document.getElementById("task_amn"); /*this is form input option value*/

  for (var option of document.getElementById("task_amn").options) {
  	if (option.value == objSelects) {
  		option.selected = true;
  		return;
  	}
  }
  
});


	$(document).ready(() => {
		
		var objSelects = document.getElementById('cc').value; /*this is from database*/
  // var objSelect  = document.getElementById("task_amn"); /*this is form input option value*/

  for (var option of document.getElementById("client").options) {
  	if (option.value == objSelects) {
  		option.selected = true;
  		return;
  	}
  }
  
});

	
</script>

@include('admin/section/footer')