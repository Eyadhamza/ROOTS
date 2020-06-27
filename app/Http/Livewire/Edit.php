<?php


namespace App\Http\Livewire;


use App\Committee;
use App\User;
use Livewire\Component;

abstract class Edit  extends Component
{


    public $data, $name, $phone, $email, $password, $role, $selected_id, $id1, $id2;
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
            'role' => $this->role,
            'email' => $this->email,
            'password' => $this->password,

        ]);

        $allcommittees = Committee::whereIn('name', [$this->id1, $this->id2])->get();

        $user->committees()->attach($allcommittees);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->phone = $record->phone;
        $this->email = $record->email;
        $this->password = $record->password;
        $this->role = $record->role;
        $this->updateMode = true;
    }

    public function validateinput()
    {

        $this->validate([
            'name' => 'required',
            'role' => 'required',
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
                'role' => $this->role,
                'email' => $this->email,
                'password' => $this->password,
            ]);

            $allcommittees = Committee::whereIn('name', [$this->id1, $this->id2])->get();

            $record->committees()->attach($allcommittees);
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


