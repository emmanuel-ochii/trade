@extends('layouts.admin')

@section('content')
<br><br><br><br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Withdrawal Request</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Wallet Address</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
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
          <div class="col-md-4">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection