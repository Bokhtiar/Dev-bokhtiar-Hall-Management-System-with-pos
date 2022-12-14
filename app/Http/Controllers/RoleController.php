<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleValidation;
use App\Models\Role;
use App\Traits\Network\RoleNetwork;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    use RoleNetwork;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $roles = $this->RoleList();
            return view('modules.role.index', ['roles' => $roles]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleValidation $request)
    {
        try {
            $this->RoleStore($request);
            return redirect()->route('role.index')->with('success', 'Role created successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $show = $this->RoleFindById($id);
            return view('modules.role.show', ['show' => $show]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $roles = $this->RoleList();
            $edit = $this->RoleFindById($id);
            return view('modules.role.index', ['roles' => $roles, 'edit' => $edit]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->RoleUpdate($request, $id);
            return redirect()->route('role.index')->with('success', 'Role updated successfully done');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('role.index')->with('warning', 'Cant delete this you can edit your roles');
    }

    /**
     * status active or inactive 
     **/
    public function status($role_id)
    {
        try {
            $role = $this->RoleFindById($role_id);
            Role::query()->Status($role); // crud trait
            return redirect()->route('role.index')->with('warning', 'Role ctatus change successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
