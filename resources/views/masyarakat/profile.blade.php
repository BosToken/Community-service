@extends('partials.user.navbar')
@section('title', 'Profile')
@section('container')


<div class="container">
    <div class="container">
        <center><h3>Profil</h3></center>
    </div>

    <label for="exampleInputEmail1">Name</label>
    <input class="form-control" type="text" placeholder={{$user->nama}} readonly>

    <label for="exampleInputEmail1">Username</label>
    <input class="form-control" type="text" placeholder={{$user->username}} readonly>

    <label for="exampleInputEmail1">Phone Number</label>
    <input class="form-control" type="text" placeholder={{$user->telp}} readonly>

    <label for="exampleInputEmail1">Created At</label>
    <input class="form-control" type="text" placeholder={{$user->created_at}} readonly>

    <label for="exampleInputEmail1">Update At</label>
    <input class="form-control" type="text" placeholder={{$user->updated_at}} readonly>
</div>

<style>
    h3{
        color :black;
    }
</style>

@stop