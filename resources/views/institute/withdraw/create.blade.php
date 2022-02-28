@extends('institute.layout.index')

@section('title')
    Institue Withdraw
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Withdraw</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('institute.i_withdraw.store')}}"  method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Amount:</label>
                            <input class="form-control" type="hidden" name="candidate_id" value="{{Auth::user()->id}}" required/>
                            <input class="form-control" type="number" id="price" name="amount" max="{{Auth::user()->balance}}" required/>                            
                        </div>   
                        <div class="form-group col-md-6">
                            <label >Payment Way: <span>*</span></label>
                            <select name="payment" id="" class="form-control" required>
                                <option value="">Select</option>
                                <option value="jazzcash" >Jazzcash</option>
                                <option value="EasyPiasa" >EasyPiasa</option>
                                <option value="Bank Account" >Bank Account</option>
                            </select>  
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Account Number:</label>
                            <input class="form-control" type="number" id="price" name="a_number" required/>                   
                        </div>  
                        <div class="form-group col-md-6">
                            <label>Account Number:</label>
                            <input class="form-control" type="number" id="price" name="a_number" required/>         
                        </div> 
                        
                        <div class="form-group col-md-6">
                            <label>Receiver Mobile Number:</label>
                            <input class="form-control" type="number" id="price" name="r_number" required/>                         
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