<div>
    <h2>Send Promotions</h2>
    <form method="POST" action="{{ route('send.promotion') }}">
        @csrf
        <label>Customer Name</label>
        <select name="customer_id">
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>

        <label>Promotion Name</label>
        <select name="promotion_id">
            @foreach ($promotions as $promotion)
                <option value="{{ $promotion->id }}">{{ $promotion->name }}</option>
            @endforeach
        </select>

        <button type="submit">Send Promotion</button>
    </form>
</div>
