<div>
    <h1>Simple Loan Calculator</h1>
    <div class="card">
        <div class="card-body">
            <div class="row g-3">
                <div class="col">
                    <h3>Loan Amount</h3>
                </div>
                <div class="col input-group mb-3">
                    <input type="text" wire:model.live="amount" class="form-control">
                    <button class="btn btn-primary">KES</button>
                </div>
                <div class="col">
                    <h3>Period</h3>
                </div>
                <div class="col input-group mb-3">
                    <input type="text" wire:model.live="period" class="form-control">
                    <button class="btn btn-primary">KES</button>
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <input wire:model.live="amount" type="range" class="form-range" min="500" max="50000">
                </div>
                <div class="col">
                    <input wire:model.live="period" type="range" class="form-range" min="1" max="60" >
                </div>
            </div>
        </div>
    </div>

    @foreach($loans as $loan)
    <br>
    <div class="card">
        <div class="card-body">
            <h3>{{$loan->bank}}</h3>
           <p>Interest:{{($amount*$loan->interest*$period)/100}}</p>
           <p>Amount Repayable:{{$amount +($amount*$loan->interest*$period)/100}}</p>
        </div>
    </div>
    @endforeach
</div>
