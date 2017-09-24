class Order {
// ...

double getTotal() {
  double total = 0;
  for (Product product : getProducts()) {
    total = product.quantity * product.price;
  }

  // Apply regional discounts.
  switch (user.getCountry()) {
    'US': total *= 0.85; break;
    'RU': total *= 0.75; break;
    'CN': total *= 0.9; break;
    // ...
  }

  return total;
}