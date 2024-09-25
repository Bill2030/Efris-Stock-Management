@extends('components.layout')

@section('content')

<div class="container">
    <h1 class="text-center p-4">Efris Stock Updation Status</h1>
    <hr>
    <div class="top-form">
        <h3>MFI International</h3>
    </div>
    <hr>
    <form action="{{ route('filter') }}" method="GET">
        <div class="form-group">
            <div class="col-md-3">
                <label for="">Search Using Date</label class='form-group'>
                <input type="date" name="batchDate" class="form-control">
            </div>
            <div class="col-md-1 pt-4">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>


    </form>
    <table class="table table-striped mt-6 mb-6">
        <thead>
            <tr>
                <th>ID</th>
                <th>Unit Cost</th>
                <th>Stock Code</th>
                <th>Stock Name</th>
                <th>URA Status</th>
                <th>Batch Date</th>
                <th>Supplier Name</th>
                <th>Reference Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ round($product->unitcost, 2 )}}</td>
                <td>{{ $product->stockcode }}</td>
                <td>{{ $product->stockname }}</td>
                <td>{{ $product->URAstatus}}</td>
                <td>{{date('Y-m-d',strtotime($product->batchDate))}}</td>
                <td>{{ $product->supplierName }}</td>
                <td>{{ $product->referenceNumber }}</td>


            </tr>
            @endforeach
        </tbody>

    </table>
    </div>
 

</div>

@endsection
