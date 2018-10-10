@extends('layouts.main')

@section('content')
<div class="content ">
    <!-- START CONTAINER FLUID -->
    <div class=" container-fluid   container-fixed-lg">
       <!-- START BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">{{ $pagetitle }}</li>
        </ol>
            <!-- END BREADCRUMB -->
            <div class="row">
              <div class="col-xl-7  ">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-block">
                    <form id="form-personal" onsubmit="return false" role="form" autocomplete="off">
                      <div class="row clearfix">
                        <div class="col-md-6">
                          <div class="form-group form-group-default required">
                            <label>Module Name</label>
                            <input type="text" class="form-control" id="modulename" name="name" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Order</label>
                            <input type="number" class="form-control" id="order" name="order" required>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-md-4">
                          <div class="form-group form-group-default">
                            <label>Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" required>
                          </div>
                        </div>
                      </div>
                       -->
                      <div class="clearfix"></div>
                      <button class="btn btn-primary" onclick="return createModule()" type="submit">Add Module</button>
                    </form>
                  </div>
                </div>
                <!-- END card -->
              </div>
              <div class="col-xl-5 ">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-header ">
                    <div class="card-title">Module Creation
                    </div>
                  </div>
                  <div class="card-block">
                    <h3>Modules are created here<br>
							these modules are grouped functionality in this application.</h3>
                    <p>They would have submodules
                      <br> to create a submodule
                      <br>click the button below.</p>
                    <br>
                    <a href="/create-submodule" class="btn btn-primary btn-cons">Create Submodule</a>
                  </div>
                </div>
                <!-- END card -->
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
          
          <!-- END CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">All Modules
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-block">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>Description</th>
                      <th>Submodules</th>
                      <th>Date Created</th>
                      <th>Order</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($module as $list)
                    <tr>
                        <td class="v-align-middle semi-bold">
                            <p>{{ $list->description }}</p>
                        </td>
                        <td class="v-align-middle">
                        @foreach($list->submodules as $list2)
                        <a href="{{ url($list2->routename) }}" class="btn btn-tag">{{ $list2->description }}</a>
                        @endforeach
                      </td>
                      <td class="v-align-middle">
                        <p>{{ date('M d, Y h:i a', strtotime($list->created_at)) }}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>{{ $list->module_order }}</p>
                      </td>
                      <td class="v-align-middle">
                        <p>
                        <div class="btn-group">
                          
                          <button onclick="return editModule('{{ $list->description }}', '{{ $list->module_order}}', {{$list->id}})" type="button" class="btn btn-success"><i class="fa fa-pencil"></i>
                          </button>
                          <button onclick="return deleteModule({{$this->id}})" type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i>
                          </button>
                        </div>
                        </p>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
        </div>

<div class="modal fade slide-right" id="editModuleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                </button>
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="modal-body col-xs-height col-middle text-center   ">
                            <h5 class="text-primary ">Edit Module Form </h5>
                            <div class="alert" id="editmodtab"role="alert">
                                <button class="close" data-dismiss="alert"></button>
                                <span id="editmodMess"></span>
                            </div>
                            <input type="text" value="" name="" class="form-control" id="modname">
                            <br>
                            <input type="text" value="" name="" class="form-control" id="modorder">
                            <br>
                            <input type="hidden" id="the-id" value="">
                            <button type="button" class="btn btn-primary btn-block" onclick="return saveModuleEditedDetails()">Save</button>
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              <!-- /.modal-content -->
    </div>
            <!-- /.modal-dialog -->
</div>

<!-- MODAL STICK UP SMALL ALERT -->
<div class="modal fade stick-up" id="deleteModule" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content-wrapper">
                <div class="modal-content">
                  <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                    </button>
                    <h5>Delete Action</h5>
                  </div>
                  <div class="modal-body">
                    <p class="no-margin">Are you sure you want to continue this action?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-cons no-margin pull-left inline" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-cons  pull-left inline" id="thedeletelink" data-dismiss="modal">Continue</a>

                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- END MODAL STICK UP SMALL ALERT -->
@endsection