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

                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>Among the children</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>you want English, Scottish, Welsh, Irish, British, European or UK even a British (name other original country you came form or have roots to E.G. A British Japanese or a 5th generation
                        </p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>A day to remember</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>UK was on top of the art world 18-19 century had the best food, best cloths and best entertainment back then) it was a hyper nation</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>Life’s sadness shared</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>he world speaks English. Common law, Magna Carta and the Bill of Rights are its wonderful legacy
                        </p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                        <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                      <td class="v-align-middle">
                        <p>April 13,2014 10:13</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
        </div>
@endsection