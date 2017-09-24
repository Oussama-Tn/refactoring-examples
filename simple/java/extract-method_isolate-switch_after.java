class Order {
// ...

double getTotal() {
  double total = 0;
  for (Product product : getProducts()) {
    total = product.quantity * product.price;
  }
  total = applyRegionalDiscounts(total);
  return total;
}

double applyRegionalDiscounts(total) {
  double result = total;
  switch (user.getCountry()) {
    'US': result *= 0.85; break;
    'RU': result *= 0.75; break;
    'CN': result *= 0.9; break;
    // ...
  }
  return result;
}