@extends('layouts.masters.sms-module')
@section('page-content')

<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">
			<i class="fa fa-comment"></i>
			Compose Message
			<hr>
		</h1>
	</div>
</div>

<div>
	<div id="main-body" class="well">
		<div id="input-contact">
            <label style="color: orange;">
                *Use comma [ , ] to separate additional contact numbers.
            </label>
            <select id="recipients" name="recipients[]" multiple="multiple"></select>
		</div>

		<label class="char-count"><span id="character-count">0/160</span></label>
		<textarea id="msg" name="msg" class="form-control" rows="15"
				  placeholder="Type message"></textarea>
		<div class="button-container">
			<button id="send-msg" class="btn btn-primary btn-block btn-lg" 
					disabled="disabled">
					Send <span class="glyphicon glyphicon-send"></span>
			</button>
		</div>
	</div>
</div>

<div class="overlay">
    <div id="sending">
    	<div id="progress-send" class='progress-bar progress-bar-striped active' role='progressbar'
			aria-valuenow='100 aria-valuemin='0' aria-valuemax='100' style="width: 100%;">
		</div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-success" role="dialog">
  	<div class="modal-dialog">
  
    	<!-- Modal content-->
    	<div class="modal-content">
    	  	<div class="modal-header">
    	  	  	<button type="button" class="close" data-dismiss="modal">&times;</button>
    	  	</div>
    	  	<div class="modal-body">
				<div class="alert alert-success">
					<h3>Message Logs</h3>
					<textarea class="form-control" id="success-count" readonly="readonly" 
							  style="resize: none;" rows="10"></textarea>
				</div>
    	  	</div>
    	  	<div class="modal-footer">
    	  		<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
    	  	</div>
    	</div>
    
  	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-failed" role="dialog">
  	<div class="modal-dialog">
  
    	<!-- Modal content-->
    	<div class="modal-content">
    	  	<div class="modal-header">
    	  	  	<button type="button" class="close" data-dismiss="modal">&times;</button>
    	  	</div>
    	  	<div class="modal-body">
				<div class="alert alert-danger">
					<h3>
						<strong>Sending Failed!</strong>
					</h3>
				</div>
    	  	</div>
    	  	<div class="modal-footer">
    	  		<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
    	  	</div>
    	</div>
    
  	</div>
</div>

@stop
@section('page-js-files')
	<script src="{!! url('assets/js/sms-module.js') !!}"></script>
	<script src="{!! url('js/typeahead.bundle.js') !!}"></script>
@stop