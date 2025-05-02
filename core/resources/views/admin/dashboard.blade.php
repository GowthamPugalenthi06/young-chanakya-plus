@extends('admin.layout')
@section('content')
@php
$admin = Auth::guard('admin')->user();
if (!empty($admin->role)) {
    $permissions = $admin->role->permissions;
    $permissions = json_decode($permissions, true);
}
@endphp
<div class="mt-2 mb-4">
    <h2 class="text-dark pb-2">Welcome back, {{Auth::guard('admin')->user()->first_name}} {{Auth::guard('admin')->user()->last_name}}!</h2>
</div>
<div class="row">



    


    


    @if (empty($admin->role) || (!empty($permissions) && in_array('Events Management', $permissions)))
    @if ($bex->is_event == 1)
    <div class="col-sm-6 col-md-3">
        <a href="{{route('admin.event.index', ['language' => $default->code])}}" class="d-block">
            <div class="card card-stats card-info card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon-big text-center">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                        <div class="col-9 col-stats">
                            <div class="numbers">
                                <p class="card-category">Events</p>
                                <h4 class="card-title">{{$default->events()->count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a href="{{route('admin.event.payment.log')}}" class="d-block">
            <div class="card card-stats card-primary card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon-big text-center">
                                <i class="far fa-calendar-check"></i>
                            </div>
                        </div>
                        <div class="col-9 col-stats">
                            <div class="numbers">
                                <p class="card-category">Event Bookings</p>
                                <h4 class="card-title">{{\App\EventDetail::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endif
    @endif


</div>
<div class="row">
    <!-- <div class="col-lg-6">
        <div class="row row-card-no-pd">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <h4 class="card-title">Recent Quotations</h4>
                        </div>
                        <p class="card-category">
                            Top 10 latest quotation request
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if (count($quotes) == 0)
                                <h3 class="text-center">NO QUOTE REQUEST FOUND</h3>
                                @else
                                <div class="table-responsive">
                                    <table class="table table-striped mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Deatails</th>
                                                <th scope="col">Mail</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($quotes as $key => $quote)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailsModal{{$quote->id}}"><i class="fas fa-eye"></i> View</button>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm editbtn" data-target="#mailModal" data-toggle="modal" data-email="{{$quote->email}}"><i class="far fa-envelope"></i> Send</a>
                                                </td>
                                                <td>
                                                    <form class="deleteform d-inline-block" action="{{route('admin.quote.delete')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="quote_id" value="{{$quote->id}}">
                                                        <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                                        <span class="btn-label">
                                                        <i class="fas fa-trash"></i>
                                                        </span>
                                                        Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @includeif('admin.quote.quote-details')
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="col-lg-6">
        <div class="row row-card-no-pd">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <h4 class="card-title">Product Orders</h4>
                        </div>
                        <p class="card-category">
                            Top 10 latest orders
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($porders as $key => $porder)
                                            <tr>
                                                <td>#{{$porder->order_number}}</td>
                                                <td>{{$bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''}} {{round($porder->total,2)}} {{$bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''}}</td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Actions
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{route('admin.product.details', $porder->id)}}" target="_blank">Details</a>
                                                            <a class="dropdown-item" href="{{asset('assets/front/invoices/product/'.$porder->invoice_number)}}" target="_blank">Invoice</a>
                                                            <form class="deleteform d-block" action="{{route('admin.product.order.delete')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="order_id" value="{{$porder->id}}">
                                                                <button type="submit" class="deletebtn">
                                                                Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- Send Mail Modal -->

@endsection
