<!DOCTYPE html>
<html lang="zh-TW">

<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
	<meta property="og:site_name" content="{{ $config['site_name'] }}" />
	<meta property="og:title" content="{{ $config['site_title'] }}" />
	<meta property="og:description" content="{{ $config['site_description'] }}" />
	<meta property="og:type" content="website" />

	<meta property="og:image" content="{{ url('/images/fb.png') }}" />
	<title>檢舉#{{$post->id}}</title>
	<link rel="stylesheet" href="/vendor/theme/{{ $config['bootstrap_theme'] }}/bootstrap.min.css">
	<link rel="stylesheet" href="/css/all.css">
	<!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->


	<script src="/vendor/jquery-1.11.3.min.js"></script>
	<script src="/vendor/bootstrap.min.js"></script>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"> </script> -->



</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h1>檢舉#{{$post->id}}</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-md-offset-3" id="container">
				<div class="well">
					<form class="form-horizontal">
						<fieldset>
							<div class="form-group">
								<label for="message" class="col-lg-3 control-label">Message content</label>
								<div class="panel panel-default">
									<div class="panel-body">
										<richtext class="form-control" id="message" name="message" placeholder="@lang('form.placeholder')" maxlength="1024" rows="5">
											{{$post->post_message}}
										</richtext>
									</div>
								</div>
							</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">@lang('form.publish_license')</label>
					<div class="col-lg-9">
						<div class="panel">
							<div class="panel-body">
								<ol>
									@foreach ($config['license'] as $item)
									<li>{!! $item !!}</li>
									@endforeach
								</ol>
							</div>
							<div class="panel-footer">
								<div class="checkbox">
									<label>
										<input id="accept-license" name="accept-license" type="checkbox"> @lang('form.accept_license')
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-lg-3 control-label">@lang('form.human_verify')</label>
					<div class="col-lg-9" style="overflow-x:hidden;">
						<div id="recaptcha"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<button id="submit" type="button" class="btn btn-danger btn-lg">@lang('form.submit')</button>
					</div>
				</div>
				</fieldset>
				</form>
			</div>
		</div>
	</div>
	</div>
	<script src="/js/init.js" type="text/javascript"></script>
	<script>
		var postkey = "$post->post_key";
		var alert_content_empty = "@lang('form.alert_content_empty')";
    	var alert_accept_license = "@lang('form.alert_accept_license')";
    	var alert_human_verify = "@lang('form.alert_human_verify')";
    	var processing = "@lang('form.processing')";
    	var recaptcha_key = "{{ $config['recaptcha_key'] or 'NULL'}}";
    	var max_length = 1024;
	</script>
	<script src="/js/report.js" type="text/javascript"></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</body>

</html>