@extends('layouts.admin')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Investment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/investment/store">
              @csrf
              <!-- <input name="_method" type="hidden" value="PUT"> -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" name ="amount" class="form-control" id="exampleInputEmail1" placeholder="Enter amount">
                  </div>
                  <div class="form-group">
                    <lable for ="amountDescription" title="Amount Description">Deposit Channel</lable>

                    <select id="description" name = "deposit" class="form-control">
                      <optgroup label="crypto">
                        <option value="Bitcoin">BTC</option>
                        <option value="Bitcoin">ETH</option>
                        <option value="Bitcoin">BCH</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Bitcoin Equivalent</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Bitcoin</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
              </form>
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection