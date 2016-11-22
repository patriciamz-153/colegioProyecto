@extends('layout.template_admin')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Resultados</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Encuestas - Resultados</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      @foreach($encuestas as $encuesta)
                      <h5><a href="{{ url('admin/encuesta',[$encuesta[0]])}}"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>{{$encuesta[1]}}</a></h5><br>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
