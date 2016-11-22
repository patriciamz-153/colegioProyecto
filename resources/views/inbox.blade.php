@extends('layout.template_admin')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Contáctenos</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bandeja de entrada</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">

                      <div class="col-sm-3 mail_list_column">
                        <button id="compose" class="btn btn-sm btn-success btn-block" type="button">RECIBIDOS</button>
                        @if($count>=0)
                          @foreach($contactos as $contacto)
                          <a href="{{url('admin/contacto',[$contacto->Id])}}">
                            <div class="mail_list">
                              <div class="left">
                                @if($contacto->read == 0)
                                  <i class="fa fa-circle"></i>
                                @else
                                  <i class="fa fa-circle-o"></i>
                                @endif
                              </div>
                              <div class="right">
                                <h3>{{$contacto->nombre}}</h3>
                                <p>{{$contacto->email }}</p>
                              </div>
                            </div>
                          </a>
                          @endforeach
                        @endif
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          @if(!is_null($last))
                          <div class="mail_heading row">
                            <div class="col-md-4 col-md-offset-8 text-right">
                            </div>
                            <div class="col-md-12">
                              <h4>{{$last->nombre}}</h4>
                            </div>
                          </div>
                          <div class="sender-info">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>{{$last->nombre}}</strong>
                                <span>({{$last->email}})</span>
                              </div>
                            </div>
                          </div>
                          <div class="view-mail">
                            <p>{{$last->description}}</p>
                          </div>
                          @endif
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
