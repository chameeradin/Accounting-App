@extends('layouts.app')


@section('content')

    <div>
        <h3 class="text-center">Update Branch</h3>
        <div class="text-center p-5">
            <form action="{{route('branch', $branch->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            <select class="custom-select" name="bank_id" required>
                                @if($banks->count())
                                    @foreach($banks as $bank)
                                        <option value="{{$bank->id}}" {{ old('bank', $branch->bank_id) == $bank->id ? 'selected="selected"' : '' }}>{{$bank->bank_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branch_name">Branch Name</label>
                        <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="{{($branch->branch_name)}}" value="{{old($branch->branch_name)}}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="branch_code">Branch Code</label>
                        <input type="text" class="form-control" name="branch_code" id="branch_code" placeholder="{{($branch->branch_code)}}" value="{{old($branch->branch_code)}}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telephone">Telephone</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="{{($branch->telephone)}}" value="{{old($branch->telephone)}}">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>

        </div>
    </div>
@endsection