@extends('layouts.main')
@section('title')
DPTSI - ITS
@endsection

@section('sidebarcomponent')
{{-- @include('nutrition.components.sidebar') --}}
@endsection

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card stacked-form">
          <div class="card-header ">
            <h4 class="card-title">Full log dari {{ $value }}</h4>
          </div>
          <div class="card-body ">
            
              <div class="row">
                <div class="col-md-3">
                
                  <table id="datatables" class="table table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <tr>
                      <th>Username</th>
                      <td>:</td>
                      <td>{{ $user }}</td>
                    </tr>
                    <tr>
                      <th>Port</th>
                      <td>:</td>
                      <td>{{ $port }}</td>
                    </tr>
                    <tr>
                      <th>IP</th>
                      <td>:</td>
                      <td>{{ $ip }}</td>
                    </tr>
                  </table>
                
              </div>
              <div class="col-md-9">
                <div class="form-group ">
                  <label>Stream Log Traffic</label><br>

                  {{$boi}}

                </div>
                

                
            </div>

            <div class="card-footer ">
              <button type="submit" class="btn btn-fill btn-primary pull-right">Show Log</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('angular')


@endsection