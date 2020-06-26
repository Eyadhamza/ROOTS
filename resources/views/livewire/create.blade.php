<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">New Contact</h3>
    </div>

    <div class="panel-body">
        <div class="form-inline">
            <div class="input-group">
                Name
                <input wire:model="name" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                Role
                <input wire:model="role" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                email
                <input wire:model="email" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                password
                <input wire:model="password" type="password" class="form-control input-sm">
            </div>
            <div class="input-group">
                Phone
                <input wire:model="phone" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                <br>
                <button wire:click="store()" class="btn btn-default">Save</button>
            </div>
{{--            committess--}}
            <div class="form-group">
                <fieldset >

                    <label for="committee1">Committee 1</label>
                    <input name="committees[committee1]" type="text" class="form-control" id="answer"
                           aria-describedby="committee" placeholder="Enter the first committee">

                    @error('committees.0.committee')
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                </fieldset>

            </div>
            <div class="form-group">
                <fieldset >

                    <label for="committee2">Committee 2</label>
                    <input name="committees[committee2]" type="text" class="form-control" id="answer"
                           aria-describedby="committee" placeholder="Enter the second Committee ">

                    @error('committees.1.committee')
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                </fieldset>

            </div>
{{--            end committees--}}
        </div>
    </div>
</div>
