@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">phones number</div>

                <div class="card-body">
                <table class="table">
                    <thead >
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">phone</th>
                        <th scope="col">name</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($phones as $phone)
                        <tr>
                            <th scope="row">{{$phone->id}}</th>
                            <td>{{$phone->number}}</td>
                            <td>{{$phone->name}}</td>
                            <td>
                                <i  @click="do_something(<?=$phone->id?>)" class="fas fa-phone-square-alt"></i>
                                <i class="fas fa-phone-volume"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="dataTables_paginate">
                {{$phones->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
