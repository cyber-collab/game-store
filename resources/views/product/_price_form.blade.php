<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="text" name="price"
                           id="price"
                           value="{{ $costs[0]['price'] }}"
                           class="form-control"
                           placeholder="Price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="currency">Currency</label>
                    <input type="text"
                           name="currency"
                           id="currency"
                           value="{{ $costs[0]['currency'] }}"
                           class="form-control"
                           placeholder="Currency">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="discount_percentage">Discount Percentage</label>
                    <input type="number"
                           name="discount_percentage"
                           id="discount_percentage"
                           value="{{ $costs[0]['discount_percentage'] }}"
                           class="form-control"
                           placeholder="Discount Percentage">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="sale" name="sale" {{ $costs[0]['sale'] == 1 ? 'checked' : '' }}>
                        <label for="sale" class="custom-control-label">Sale</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>