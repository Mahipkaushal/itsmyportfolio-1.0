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
										<img id="avatar" src="images/avatars/{{ $about->profile_picture or 'default.png' }}" class="img-circle img-responsive">
										<input class="form-control hidden" type="file" name="profile_picture" id="profile_picture" autocomplete="off" data-field-type="text" data-field-name="Profile Picture" value="{{ $about->profile_picture or '' }}">
										<a class="picute-edit-tools tool-change"><i class="fa fa-edit"></i></a>
										<a class="picute-edit-tools tool-remove"><i class="fa fa-trash"></i></a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-8">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="name" id="display_name" autocomplete="off" data-field-type="text" data-field-name="Display Name" value="{{ $about->name or '' }}">
											<span class="bar"></span>
											<label for="display_name">Display Name</label>
										</div>
									</fieldset>

									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="title" id="title" autocomplete="off" data-field-type="text" data-field-name="Title" value="{{ $about->title or '' }}">
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
											<textarea class="form-control no-resize required" name="description" id="description" autocomplete="off" data-field-type="text" data-field-name="Description">{{ $about->description or '' }}</textarea>
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
											<input class="form-control required" type="text" name="email" id="email" autocomplete="off" data-field-type="email" data-field-name="Email" value="{{ $about->email or '' }}">
											<span class="bar"></span>
											<label for="email">Email</label>
										</div>
									</fieldset>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-4">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="phone" id="phone" autocomplete="off" data-field-type="phone" data-field-name="Phone No." value="{{ $about->phone or '' }}">
											<span class="bar"></span>
											<label for="phone">Phone No.</label>
										</div>
									</fieldset>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-4">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="website" id="website" autocomplete="off" data-field-type="website" data-field-name="Website" value="{{ $about->website or '' }}">
											<span class="bar"></span>
											<label for="website">Website</label>
										</div>
									</fieldset>
								</div>

								<div class="clearfix"></div>

							</div>

							<div class="row no-gutters">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<fieldset>
										<div class="field-group">
											<div class="social-links" id="social_links">

												<span class="badge social-badge facebook-badge">
													<i class="fa fa-facebook" aria-hidden="true"></i>
												</span>
												<span class="badge social-badge twitter-badge">
													<i class="fa fa-twitter" aria-hidden="true"></i>
												</span>
												<span class="badge social-badge github-badge">
													<i class="fa fa-github" aria-hidden="true"></i>
												</span>

												<a class="button icon-btn" id="add-social-link-row"><i class="fa fa-plus"></i></a>
											</div>
											<span class="bar"></span>
											<label for="social_links" class="active">Social Links</label>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<fieldset>
										<div class="field-group text-right">
											<a id="btn-about-save" class="button btn-ripple btn-about-save">
												<i class="fa fa-save" aria-hidden="true"></i> Save
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

<!-- 	<div class="row">
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
								<div class="col-xs-2 col-sm-2 col-md-2">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="website" id="website" autocomplete="off" data-field-type="website" data-field-name="Website" value="{{ $about->website or '' }}">
											<span class="bar"></span>
										</div>
									</fieldset>
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9">
									<fieldset>
										<div class="field-group">
											<input class="form-control required" type="text" name="website" id="website" autocomplete="off" data-field-type="website" data-field-name="Website" value="{{ $about->website or '' }}">
											<span class="bar"></span>
										</div>
									</fieldset>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1">
									<fieldset>
										<div class="field-group">
											<a class="button pull-left icon-btn" id="add-social-link-row"><i class="fa fa-plus"></i></a>
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
		
	</div> -->

</div>
@endsection