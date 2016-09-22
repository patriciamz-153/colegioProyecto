@if( session()->has('message') )
<div class="row">
   <div class="alert {{ strpos( session('message') , 'elimina') ? 'alert-danger' : 'alert-success' }}">
      {{ session('message') }}
   </div>
</div>
@endif