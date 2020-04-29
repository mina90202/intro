@if(Session::has('delete'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong class="d-block d-sm-inline-block-force">Delete!</strong> {{Session::get('delete')}}.
  </div><!-- alert -->
@endif

@if(Session::has('service'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong class="d-block d-sm-inline-block-force">Done!</strong> {{Session::get('service')}}.
  </div><!-- alert -->
@endif



@if(Session::has('blog'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong class="d-block d-sm-inline-block-force">Done!</strong> {{Session::get('blog')}}.
  </div><!-- alert -->
@endif

@if(Session::has('porfolio'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong class="d-block d-sm-inline-block-force">Done!</strong> {{Session::get('porfolio')}}.
  </div><!-- alert -->
@endif
