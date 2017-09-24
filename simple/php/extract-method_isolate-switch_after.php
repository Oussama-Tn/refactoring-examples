class Order {
// ...

function calculateTotal() {
  $total = 0;
  foreach ($this->getProducts() as $product) {
    $total = $product->quantity * $product->price;
  }
  $total = applyRegionalDiscounts($total);
  return $total;
}

function applyRegionalDiscounts($total) {
  $result = $total;
  switch ($this->user->getCountry()) {
    'US': $result *= 0.85; break;
    'RU': $result *= 0.75; break;
    'CN': $result *= 0.9; break;
    // ...
  }
  return $result;
}