@extends('candidate.layout.index')

@section('title')
    Candidate Deposit
@endsection
@section('styles')
<script src="{{asset('global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>

<!-- Theme JS files -->

<script src="{{asset('global_assets/js/demo_pages/form_select2.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12 col-xl-12">
        <div class="card card-body bg-blue-400 has-bg-image">
            <div class="media">
                <div class="media-body">
                {{-- <h3 class="mb-0"></h3> --}}
                    <span class="text-uppercase font-size-xs">     
                            <i class="fa fa-bullhorn"></i>
                            Categories are valid for Three Months.You have to pay once.
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
                <form action="{{route('candidate.deposit.store')}}"  method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Select Category</label>
                            <select data-placeholder="Category 'as'"  name="category1" id="category-selector"   class="form-control select-minimum" data-fouc required>
                                <option></option>
                                <optgroup label="Top Categories">
                                    @foreach(App\Models\Category::all() as $category)
                                    <option price="{{$category->price}}" value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                                </optgroup>
                            </select>                                                     
                        </div>   
                        <div class="form-group col-md-6">
                            <label >Category: <span>*</span></label>

                            <select data-placeholder="Category 'as'"  name="category2"  class="form-control select-minimum" data-fouc required>
                                <option></option>
                                <optgroup label="Top Categories">
                                    @foreach(App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>   
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Price:</label>
                            <input class="form-control" type="hidden" name="candidate_id" value="{{Auth::user()->id}}" required/>
                            <input class="form-control" type="hidden" name="profile_id" value="{{$profile->id}}" required/>
                            <input class="form-control" type="number" id="price-input"  name="price" required/>   
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
                    <button type="submit" class="btn btn-primary">Submit 
                        <i class="icon-plus22 ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection
@section('scripts')
{{-- <script>
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
</script>  --}}

<script>
    $(document).ready(function(){
        // alert('here');
        $("#category-selector").change(function(){
           var price = $('option:selected', this).attr("price");
           $('#price-input').val(price);
        });
    });
</script>
@endsection