<div>
    <h1>Mpesa Cost Calculator</h1>
    @if($error)
    <div class="alert alert-danger">{{$error}}</div>
    @endif
    <form>
        <div class="mb-3">
            <label class="form-label">Withdrawal Amount</label>
            <input type="number" wire:model.live="amount" class="form-control">
        </div>
        <div>
            <label>Transaction Cost</label>
            <div class="alert alert-primary">{{$cost}}</div>
        </div>
        <div>
            <label>Required Balance</label>
            <div class="alert alert-primary">{{$min_balance}}</div>
        </div>
    </form>
</div>
