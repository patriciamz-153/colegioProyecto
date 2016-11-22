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
                    <h2>Encuestas - {{$resultados->Name}}</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    Total de personas que realizaron la encuesta: {{$resultados->realizado}}
                    @foreach($resultados->Section as $seccion)
                    <div class="row">
                      <h2><strong>{{$seccion->Title}}</strong></h2>
                      @foreach($seccion->Preguntas as $pregunta)
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>{{$pregunta->Enunciado}}</h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="{{str_replace(' ','_',$pregunta->Enunciado)}}"></canvas>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection

@section('link_script')
    <!-- Chart.js -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
@endsection
@section('script')
    <!-- Chart.js -->
    <script>
      Chart.defaults.global.legend = {
        enabled: false
      };

      // Bar chart
      @foreach($resultados->Section as $seccion)
      @foreach($seccion->Preguntas as $pregunta)
      var ctx = document.getElementById("{{str_replace(' ','_',$pregunta->Enunciado)}}");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
            @foreach($pregunta->Options as $opcion => $valor)
            @foreach($valor as $key => $value)
            "{{$key}}",
            @endforeach
            @endforeach],
          datasets: [{
            label: '{{$pregunta->Enunciado}}',
            backgroundColor: "#26B99A",
            data: [
            @foreach($pregunta->Options as $opcion => $valor)
            @foreach($valor as $key => $value)
            "{{$value}}",
            @endforeach
            @endforeach]
          }]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
      @endforeach
      @endforeach
      </script>
@endsection
  </body>
</html>
