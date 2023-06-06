@extends('backend.layout.app')

@section('page_content')
<div class="card text-center mt-4">
    <div class="card-header">
      Orders
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Note</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Shipping Price</th>
                    <th>Status</th>
                    <th>Actopm</th>
                </tr>
            </thead>
            @php
                $ords = isset($orders) ? $orders : $duplicate_orders;
            @endphp
            <tbody>
                @forelse ($ords as $order )
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->note}}</td>
                        <td>{{$order->qty}}</td>
                        <td>{{$order->p_price}}</td>
                        <td>{{$order->shipping_price}}</td>
                        <td class="status" id="{{$order->id}}" style="cursor: pointer">{{$order->ShippingStatus->name}}</td>
                        <td>
                    <a href="{{route('admin.order.destroy',[$order->id])}}" onclick="return confirm('Are you sure')">
                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px;color: red" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                            </a>
                        </td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
    @if ($ords->links())
    <div class="card-footer text-body-secondary">
        {{$ords->links()}}
      </div>
    @endif

    <!-- Vertically centered scrollable modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content" id="modal-content">

          </div>
        </div>
      </div>

  </div>
 <script src="{{asset('libraries/jquery37.min.js')}}"></script>
  <script>
    var order_id = null;
     $('.status').on('click',function(){
        order_id = $(this).attr('id');
            let modal_content = ` <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabel">Order Status</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected hidden>Choose Order Status </option>
                                        @foreach ($order_status as $os)
                                            <option value="{{$os->id}}">{{$os->name}}</option>
                                        @endforeach
                                        </select>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary order-status-update">Save changes</button>
                                </div>`;
        $('#modal-content').html(modal_content);
        $('#modal').modal('show');
        $('.order-status-update').on('click',function(){
            let order_status_id = $('.form-select').val();
            $.ajax({
                type: "get",
                url: `{{route('admin.order-status.update')}}`,
                data: {id:order_id,os_id:order_status_id},
                dataType: "json",
                success: function (response) {
                    console.log(response)
                    if(response==1){
                        alert('Successfully status updated')
                        location.reload();
                    }else{
                        alert('Something wrong');
                    }
                }
            });

        });

     })
  </script>
@endsection

