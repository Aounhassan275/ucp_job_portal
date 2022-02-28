@extends('institute.layout.index')

@section('title')
    Institute Deposit
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="card card-body bg-blue-400 has-bg-image">
            <div class="media">
                <div class="media-body">
                {{-- <h3 class="mb-0"></h3> --}}
                    <span class="text-uppercase font-size-xs">     
                            Institute are valid for Three Months.You have to pay once.
                            {{-- @foreach (App\Models\Payment::all() as $key => $payment)
                            Payment Way:{{$payment->name}},Account Holder Name:{{$payment->a_name}},Account Number:{{$payment->a_number}}
                            @if($payment->name=="Bank Account")
                            Bank Name:{{$payment->b_name}},Bank Number:{{$payment->b_number}}
                            @endif
                            @endforeach --}}
                    </span>
                </div>
                {{-- <div class="ml-3 align-self-center">
                    <i class="icon-folder-plus icon-3x opacity-75"></i>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach (App\Models\Payment::all() as $key => $payment)
   <div class="col-sm-4 col-xl-4">
       <div class="card card-body">
           <div class="media mb-3">
               <div class="mr-3 align-self-center">
                   <i class="icon-pulse2 icon-2x text-success-400 opacity-75"></i>
               </div>

               <div class="media-body">
                   <h6 class="font-weight-semibold mb-0">Account Details For {{$payment->name}} </h6>
                   <br>
                           Account Holder Name:{{$payment->a_name}} <br>
                           Account Number:{{$payment->a_number}} <br>
                           @if($payment->name=="Bank Account")
                           Bank Name:{{$payment->b_name}} <br>Bank Number:{{$payment->b_number}}
                           @endif                  

               </div>
           </div>

       </div>
   </div>
   @endforeach

</div>

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Deposit</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('institute.i_deposit.store')}}"  method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Institute Name:</label>
                            <input class="form-control" type="text" name="name" value="" required/>   
                                <input class="form-control" type="hidden" name="institute_id" value="{{Auth::user()->id}}" required/>                           
                        </div>   
                        <div class="form-group col-md-6">
                            <label>Price For Registration:</label>
                            <input class="form-control" type="number" name="price" value="{{App\Models\Price::institute()->first()->price}}" readonly/>  
                        </div>  
                            
                        <div class="form-group col-md-6">
                            <label >Trancation id# <span>*</span></label>
                            <input class="form-control" type="text" name="t_id"  required/>                       
                        </div>      
                        <div class="form-group col-md-6">
                            <label >Payment Gateway: <span>*</span></label>
                            <select name="payment" id="" class="form-control" required>
                                <option value="">Select</option>
                                <option value="jazzcash" >Jazzcash</option>
                                <option value="EasyPiasa" >EasyPiasa</option>
                                <option value="Bank Account" >Bank Account</option>
                            </select>                          
                        </div>   
                    </div>
                    <button type="submit" class="btn btn-primary">Create 
                        <i class="icon-plus22 ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection
@section('scriptss')
<script>
    let price1 = 0;
    let price2 = 0;
    console.log(price1);
    $(document).ready(function()
    {
        
         fetchPrice($('#category1').val(), 1);
         fetchPrice($('#category2').val(), 2);

        $('.category').on('change',function(){
            fetchPrice($('#category1').val(), 1);
            fetchPrice($('#category2').val(), 2);
        });

        function fetchPrice(id, picker){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url:'{{route('price.get')}}',
                type: 'POST',
                data:{
                    id:id
                },
                success:function(response){
                    if(picker === 1)
                        price1 = response;
                    else 
                        price2 = response;
                    
                    calculate();
                }
            });
        }
    });

    function calculate(){
        console.log(price1+0);
        $('#price').val(price1+0 );
    }

    calculate();
</script> 
@endsection

