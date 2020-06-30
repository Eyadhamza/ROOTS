<?php


namespace App\Http\Livewire;


use App\Committee;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

abstract class Edit  extends Component
{


    public $data, $name, $phone, $email, $password, $role1 ,$role2 , $selected_id, $id1, $id2 ,$committees,$roles;
    public $updateMode = false;



    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    public function store()
    {

        $this->validateinput();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),

        ]);

        $allcommittees = Committee::whereIn('id', [$this->id1, $this->id2])->get();

        $user->committees()->attach($allcommittees);

        $all_roles = Role::whereIn('id', [$this->role1,$this->role2])->get();
        $user->roles()->attach($all_roles);
        $this->resetInput();
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->phone = $record->phone;
        $this->email = $record->email;
        $this->password =bcrypt($record->password);
        $allcommittees = Committee::whereIn('id', [$this->id1, $this->id2])->get();
        $all_roles = Role::where('id', [$this->role1,$this->role2])->get();

        $this->updateMode = true;
    }

    public function validateinput()
    {

        $this->validate([
            'name' => 'required',
            'role1' => 'required',
            'role2' => 'nullable',
            'email' => 'required',
            'password' => 'required',
            'id1' => 'nullable',
            'id2' => 'nullable'
        ]);
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
        ]);
        $this->validateinput();

        if ($this->selected_id) {
            $record = User::find($this->selected_id);
            $record->update([
                'name' => $this->name,

                'email' => $this->email,
                'password' => $this->password,
            ]);

            $allcommittees = Committee::whereIn('id', [$this->id1, $this->id2])->get();
            $record->committees()->sync($allcommittees);
            $all_roles = Role::whereIn('id', [$this->role1,$this->role2])->get();
            $record->roles()->sync($all_roles);


            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }
}


