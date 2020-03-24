@extends('templates.default')
<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

@section('title')
<title>POS</title>
@endsection

@section('content')   
    <div class="container">
        <div class="card">
            <div class="card-header font-weight-bold">
              Point Of Sales
            </div>
            <div class="card-body">
              <form>
                    <div class="form-row">
                        <div class="col-3">
                            <input type="text" class="form-control" placeholder="Customer ID">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Product ID" autofocus>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Category ID">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Category Name">
                        </div>
                        <div class="col-4">
                            <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Card ke dua -->
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col" width="100">#</th>
                        <th scope="col" width="100">Product Name</th>
                        <th scope="col" width="45">Qty</th>
                        <th scope="col" width="100">Price</th>
                        <th scope="col" width="100">Sub Total</th>
                      </tr>
                    </thead>

                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                  </table>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card mt-3 col-md-4 float-right">
            <div class="card-body">
                <table class="table table-bordered">
                    <h3>Sub Total :</h3>
                    <h3>Discount :</h3>
                    <h3>Tax :</h3>
                    <h3>Total :</h3>
                  </table>
            </div>
        </div>
    </div>

    
@endsection

