@extends('layouts.app')


@section('content')
        <h2 class="text-center">Branch List</h2>

        @if (session('status'))
            <div class="bg-success p-4 rounded-lg mb-6 text-white text-center">
                {{session('status')}}
            </div>
        @endif

        <table class="table table-hover text-center text-dark">
        @if($branches->count())
            <thead>
                <tr class="bg-info">
                    <th scope="col"><h5>Bank Name</h5></th>
                    <th scope="col"><h5>Branch Name</h5></th>
                    <th scope="col"><h5>Branch Code</h5></th>
                    <th scope="col"><h5>Telephone</h5></th>
                    <th scope="col"><h5>Action</h5></th>
                </tr>
            </thead>
            <tbody>
            @foreach($branches as $branch)

                <tr>
                    <td scope="row">{{$branch->bank->bank_name}}</td>
                    <td>{{$branch->branch_name}}</td>
                    <td>{{$branch->branch_code}}</td>
                    <td>{{$branch->telephone}}</td>
                    <td><a href="{{route('branch.edit', $branch->id)}}" class="btn btn-primary">Edit</a></td>
                </tr>
            @endforeach
        @else

                <h5 class="text-center text-dark bg-warning p-lg-5">There are no any branch! </h5>
            </tbody>
        @endif
        </table>

@endsection
