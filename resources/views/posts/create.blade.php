@extends('layouts.app')

@section('title') Create @endsection

@section('content')
    <form>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input  type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea class="form-control"  rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Post Creator</label>
            <select class="form-control">
                <option value="1">Ahmed</option>
                <option value="2">Mohamed</option>
            </select>
        </div>

        <button class="btn btn-success">Submit</button>
    </form>
@endsection
