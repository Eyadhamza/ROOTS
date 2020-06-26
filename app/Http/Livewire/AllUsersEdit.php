<?php

namespace App\Http\Livewire;

use App\Committee;
use Livewire\Component;
use App\User;
//this one to edit all members in a specific  committee
class AllUsersEdit extends Component
{
    public $data, $name, $phone, $email ,$password,$role, $selected_id,$id1,$id2 ;
    public $updateMode = false;

    public function render()
    {
        $this->data=User::all();
        return view('livewire.user-management');
    }


    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    public function store()
    {

        $this->validate([
            'name' => 'required',
            'role'=>'required',
            'email'=>'required',
            'password'=>'required',
            'id1'=>'required',
            'id2'=>'optional'
        ]);

       $user= User::create([
            'name' => $this->name,
            'role'=>$this->role,
            'email'=>$this->email,
            'password'=>$this->password,

        ]);

        $committee= Committee::find([$this->id1,$this->id2]);
         $user->committees()->attach($committee);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->phone = $record->phone;
        $this->email=$record->email;
        $this->password=$record->password;
        $this->role=$record->role;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);

        if ($this->selected_id) {
            $record = User::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'role'=>$this->role,
                'email'=>$this->email,
                'password'=>$this->password,
            ]);

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
