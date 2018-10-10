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
                        <p>{{ $list->module_order }}c</p>
                      </td>
                      <td class="v-align-middle">
                        <p>...</p>
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
@endsection