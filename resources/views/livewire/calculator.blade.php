<div class="card offset-3 col-6">
    <h5 class="card-header">Calculator</h5>
    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-danger">
            {{session('status')}}
        </div>
        @endif
        <input wire:model="expression" type="text" class="form-control" disabled>
        <table class="table">
            <thead>
              
            </thead>
            <tbody>
              <tr>
                <th>
                    <div class="d-grid gap-2">
                    <button wire:click="resetCalc" class="btn btn-secondary">AC</button>
                    </div>
                </th>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="digit('.')" class="btn btn-secondary">.</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="backspace" class="btn btn-secondary"><-</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="sign('*')" class="btn btn-primary">x</button>
                    </div>
                </td>
              </tr>
              <tr>
                <th >
                    <div class="d-grid gap-2">
                        <button wire:click="digit(7)" class="btn btn-secondary">7</button>
                    </div>
                </th>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="digit(8)" class="btn btn-secondary">8</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="digit(9)" class="btn btn-secondary">9</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="sign('/')" class="btn btn-primary">÷</button>
                    </div>
                </td>
              </tr>
              <tr>
                <th >
                    <div class="d-grid gap-2">
                        <button wire:click="digit(4)" class="btn btn-secondary">4</button>
                    </div>   
                </th>
                <td >
                    <div class="d-grid gap-2">
                        <button wire:click="digit(5)" class="btn btn-secondary">5</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="digit(6)" class="btn btn-secondary">6</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="sign('-')" class="btn btn-primary">-</button>
                    </div>
                </td>
              </tr>
              <tr>
                <th >
                    <div class="d-grid gap-2">
                        <button wire:click="digit(1)" class="btn btn-secondary">1</button>
                    </div>   
                </th>
                <td >
                    <div class="d-grid gap-2">
                        <button wire:click="digit(2)" class="btn btn-secondary">2</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="digit(3)" class="btn btn-secondary">3</button>
                    </div>
                </td>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="sign('+')" class="btn btn-primary">+</button>
                    </div>
                </td>
              </tr>
              <tr>
                <td>
                    <div class="d-grid gap-2">
                        <button wire:click="digit(0)" class="btn btn-secondary">0</button>
                    </div>
                </td>
                <td colspan="3">
                    <div class="d-grid gap-2">
                        <button wire:click="execute" class="btn btn-primary">=</button>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
