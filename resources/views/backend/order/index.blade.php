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
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order )
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->note}}</td>
                        <td>{{$order->qty}}</td>
                        <td>{{$order->p_price}}</td>
                        <td>{{$order->shipping_price}}</td>
                        <td class="status" id="{{$order->id}}" style="cursor: pointer">{{$order->ShippingStatus->name}}</td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
    @if ($orders->links())
    <div class="card-footer text-body-secondary">
        {{$orders->links()}}
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

