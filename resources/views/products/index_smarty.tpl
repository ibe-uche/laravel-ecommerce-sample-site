<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | ShopEasy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">ShopEasy</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        <h2 class="mb-4">Products</h2>

        <div class="row">
            {foreach $products as $product}
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        <img src="{$product->image}" class="card-img-top" alt="{$product->name}">

                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/products/{$product->id}" class="text-decoration-none">
                                    {$product->name}
                                </a>
                            </h5>

                            <p class="card-text">
                                {$product->description|truncate:80}
                            </p>

                            <p class="fw-bold">
                                ₦{$product->price|number_format:0}
                            </p>

                            <form method="POST" action="/cart/add/{$product->id}">
                                <input type="hidden" name="_token" value="{$csrf_token}">
                                <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>

    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <small>© ShopEasy</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>