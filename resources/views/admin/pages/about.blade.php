@extends('admin.page_layout')

@section('page')	
<div class="content">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>About Me</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="form col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
						<form id="about">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-4">
									<div class="profile-picture">
										<img id="avatar" src="{{ 'images/avatars/' . ($about->profile_picture ? $about->profile_picture : 'default.png') }}" class="img-circle img-responsive">
										<input class="form-control hidden" type="file" name="profile_picture" id="profile_picture" autocomplete="off" data-field-type="text" data-field-name="Profile Picture" value="{{ $about->profile_picture }}">
										<a class="picute-edit-tools tool-change"><i class="fa fa-edit"></i></a>
										<a class="picute-edit-tools tool-remove"><i class="fa fa-trash"></i></a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-8">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="name" id="display_name" autocomplete="off" data-field-type="text" data-field-name="Display Name" value="{{ $about->name }}">
											<span class="bar"></span>
											<label for="display_name">Display Name</label>
										</div>
									</fieldset>

									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="title" id="title" autocomplete="off" data-field-type="text" data-field-name="Title" value="{{ $about->title }}">
											<span class="bar"></span>
											<label for="title">Title</label>
										</div>
									</fieldset>
								</div>

								<div class="clearfix"></div>

							</div>
							
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<fieldset>
										<div class="field-group">
											<textarea class="form-control no-resize required" name="description" id="description" autocomplete="off" data-field-type="text" data-field-name="Description">{{ $about->description }}</textarea>
											<span class="bar"></span>
											<label for="description">Description</label>
										</div>
									</fieldset>
								</div>

								<div class="clearfix"></div>

							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-4">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="email" id="email" autocomplete="off" data-field-type="email" data-field-name="Email" value="{{ $about->email }}">
											<span class="bar"></span>
											<label for="email">Email</label>
										</div>
									</fieldset>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-4">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="phone" id="phone" autocomplete="off" data-field-type="phone" data-field-name="Phone No." value="{{ $about->phone }}">
											<span class="bar"></span>
											<label for="phone">Phone No.</label>
										</div>
									</fieldset>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-4">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="website" id="website" autocomplete="off" data-field-type="website" data-field-name="Website" value="{{ $about->website }}">
											<span class="bar"></span>
											<label for="website">Website</label>
										</div>
									</fieldset>
								</div>

								<div class="clearfix"></div>

							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<fieldset>
										<div class="field-group text-right">
											<a id="btn-about-save" class="button btn-about-save">
												<i class="fa fa-save" aria-hidden="true"></i>  &nbsp;Save
											</a>					
										</div>
									</fieldset>
								</div>

								<div class="clearfix"></div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Social Links</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="form col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
						<form id="social_links">
							{{ csrf_field() }}
							<div class="row no-gutters">
								<div class="col-xs-12 col-sm-12 col-md-2">
									Mahip
								</div>
								<div class="col-xs-12 col-sm-12 col-md-10">
									Kaushal
								</div>

								<div class="clearfix"></div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		
	</div>

</div>
@endsection