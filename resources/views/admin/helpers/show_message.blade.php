@if( session()->has('message') )
<div class="row">
   <div class="alert {{ strpos( session('message') , 'deleted') ? 'alert-danger' : 'alert-success' }}">
      {{ session('message') }}
   </div>
</div>
@endif