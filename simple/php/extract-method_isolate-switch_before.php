class Order {
// ...

function calculateTotal() {
  $total = 0;
  foreach ($this->getProducts() as $product) {
    $total = $product->quantity * $product->price;
  }

  // Apply regional discounts.
  switch ($this->user->getCountry()) {
    'US': $total *= 0.85; break;
    'RU': $total *= 0.75; break;
    'CN': $total *= 0.9; break;
    // ...
  }

  return $total;
}