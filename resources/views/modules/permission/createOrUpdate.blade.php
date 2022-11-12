@extends('layouts.app')
@section('content')

@section('title', 'Permission create Form')

@section('css')
@endsection

<div class="container">
    <form action="@route('permission.store')" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <select name="role_id" class="form-control">
                    <option value="">Please select a role</option>
                    @foreach($roles as $role)
                        <option value="{{$role->role_id}}">{{$role->name}}</option>
                    @endforeach
                </select>
                @error('role_id')
                <span class="text-danger">
                          {{$message}}
                      </span>
                @enderror
            </div>
            
        </div>
        <div class="col-md-8">
            <table class=" table text-center responsive-table-input-matrix">
                <thead>
                <tr>
                    <th>Permission</th>
                    <th>Add</th>
                    <th>Edit</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>List</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>Roles</td>
                    <td><input type="checkbox" name="permission[role][add]" value="1"></td>
                    <td><input type="checkbox" name="permission[role][edit]" value="1"></td>
                    <td><input type="checkbox" name="permission[role][view]" value="1"></td>
                    <td><input type="checkbox" name="permission[role][delete]" value="1"></td>
                    <td><input type="checkbox" name="permission[role][list]" value="1"></td>

                </tr>
                <tr>
                    <td>Permissions</td>
                    <td><input type="checkbox" name="permission[permission][add]" value="1"></td>
                    <td><input type="checkbox" name="permission[permission][edit]" value="1"></td>
                    <td><input type="checkbox" name="permission[permission][view]" value="1"></td>
                    <td><input type="checkbox" name="permission[permission][delete]" value="1"></td>
                    <td><input type="checkbox" name="permission[permission][list]" value="1"></td>
                </tr>
                <tr>
                    <td>Users</td>
                    <td><input type="checkbox" name="permission[user][add]" value="1"></td>
                    <td><input type="checkbox" name="permission[user][edit]" value="1"></td>
                    <td><input type="checkbox" name="permission[user][view]" value="1"></td>
                    <td><input type="checkbox" name="permission[user][delete]" value="1"></td>
                    <td><input type="checkbox" name="permission[user][list]" value="1"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><input type="checkbox" name="permission[category][add]" value="1"></td>
                    <td><input type="checkbox" name="permission[category][edit]" value="1"></td>
                    <td><input type="checkbox" name="permission[category][view]" value="1"></td>
                    <td><input type="checkbox" name="permission[category][delete]" value="1"></td>
                    <td><input type="checkbox" name="permission[category][list]" value="1"></td>
                </tr>

                <tr>
                    <td>Sub-Category</td>
                    <td><input type="checkbox" name="permission[subcategory][add]" value="1"></td>
                    <td><input type="checkbox" name="permission[subcategory][edit]" value="1"></td>
                    <td><input type="checkbox" name="permission[subcategory][view]" value="1"></td>
                    <td><input type="checkbox" name="permission[subcategory][delete]" value="1"></td>
                    <td><input type="checkbox" name="permission[subcategory][list]" value="1"></td>
                </tr>
                <tr>
                    <td>Product</td>
                    <td><input type="checkbox" name="permission[product][add]" value="1"></td>
                    <td><input type="checkbox" name="permission[product][edit]" value="1"></td>
                    <td><input type="checkbox" name="permission[product][view]" value="1"></td>
                    <td><input type="checkbox" name="permission[product][delete]" value="1"></td>
                    <td><input type="checkbox" name="permission[product][list]" value="1"></td>
                </tr>
                <tr>
                    <td>POS</td>
                    <td><input type="checkbox" name="permission[pos][add]" value="1"></td>
                    <td><input type="checkbox" name="permission[pos][edit]" value="1"></td>
                    <td><input type="checkbox" name="permission[pos][view]" value="1"></td>
                    <td><input type="checkbox" name="permission[pos][delete]" value="1"></td>
                    <td><input type="checkbox" name="permission[pos][list]" value="1"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="text-center my-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection

