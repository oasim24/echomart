<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $brands = ['Zara', 'H&M', 'Levis', 'Nike', 'Adidas', 'Uniqlo', 'Gucci', 'Puma', 'Tommy Hilfiger', 'Under Armour'];
        $categories = [
            ['category' => 'Clothing', 'subCategory' => 'T-Shirts', 'productType' => 'Casual'],
            ['category' => 'Clothing', 'subCategory' => 'Jeans', 'productType' => 'Denim'],
            ['category' => 'Clothing', 'subCategory' => 'Shirts', 'productType' => 'Formal'],
            ['category' => 'Footwear', 'subCategory' => 'Sneakers', 'productType' => 'Casual'],
            ['category' => 'Accessories', 'subCategory' => 'Watches', 'productType' => 'Luxury'],
        ];
        $colors = ['Black', 'Blue', 'White', 'Gray', 'Green', 'Red', 'Navy', 'Brown'];
        $materials = ['cotton', 'denim', 'leather', 'polyester', 'silk', 'wool'];
        $productNames = [
            'Classic Cotton T-Shirt', 'Slim Fit Jeans', 'Formal Office Shirt', 'Running Sneakers', 'Leather Wallet',
            'Sports Joggers', 'Casual Hoodie', 'Denim Jacket', 'Analog Watch', 'Graphic Tee',
        ];

        $products = [];

        for ($i = 1; $i <= 100; $i++) {

            $brand = $brands[array_rand($brands)];
            $cat = $categories[array_rand($categories)];
            $color = $colors[array_rand($colors)];
            $material = $materials[array_rand($materials)];
            $baseName = $productNames[array_rand($productNames)];

            $productId = 'P' . str_pad($i, 5, '0', STR_PAD_LEFT);
            $slug = strtolower(str_replace(' ', '-', $baseName)) . '-' . $i;
            $price = rand(999, 4999);
            $compareAtPrice = $price + rand(200, 1000);
            $discount = round((($compareAtPrice - $price) / $compareAtPrice) * 100);
            $rating = rand(35, 50) / 10;
            $stock = rand(10, 200);
            $orders = rand(5, 300);

            $products[] = [
                "productId" => $productId,
                "sku" => strtoupper(substr($brand, 0, 3)) . '-' . strtoupper(substr($baseName, 0, 3)) . '-' . rand(100, 999),
                "slug" => $slug,
                "price" => $price,
                "compareAtPrice" => $compareAtPrice,
                "currency" => "BDT",
                "discount" => $discount,
                "category" => $cat['category'],
                "subCategory" => $cat['subCategory'],
                "productType" => $cat['productType'],
                "productName" => "$brand $baseName ($color)",
                "productThumb" => "/images/products/thumb_" . rand(1, 10) . ".jpg",
                "productBrand" => $brand,
                "productImg" => [
                    "/images/products/" . strtolower(str_replace(' ', '_', $baseName)) . "_1.jpg",
                    "/images/products/" . strtolower(str_replace(' ', '_', $baseName)) . "_2.jpg",
                ],
                "description" => "Premium quality $material $baseName from $brand, perfect for daily use.",
                "productDetails" => "Made with fine $material. Comfortable, stylish, and durable.",
                "reviews" => [
                    [
                        "user" => "User_" . rand(100, 999),
                        "rating" => rand(3, 5),
                        "comment" => "Very good quality product!"
                    ],
                    [
                        "user" => "Customer_" . rand(1000, 2000),
                        "rating" => rand(4, 5),
                        "comment" => "Looks great and fits perfectly!"
                    ]
                ],
                "reviewCount" => 2,
                "reviewAvg" => $rating,
                "productColor" => $color,
                "productSize" => ["S", "M", "L", "XL"],
                "rating" => $rating,
                "availability" => $stock > 0 ? "In stock" : "Out of stock",
                "stockQuantity" => $stock,
                "orderCount" => $orders,
                "productGender" => (rand(0, 1) ? "Men" : "Women"),
                "tags" => [$material, strtolower($color), strtolower($cat['subCategory'])],
                "shippingCost" => 0,
                "shippingInfo" => [
                    "deliveryTime" => rand(2, 5) . "-day delivery",
                    "shippingCost" => "Free"
                ],
                "returnPolicy" => "30-day easy return policy",
                "isFeatured" => (bool)rand(0, 1),
                "isNewArrival" => (bool)rand(0, 1),
                "sellerName" => $brand . " Store",
                "createdAt" => date("Y-m-d\TH:i:s\Z", strtotime("-" . rand(0, 15) . " days")),
                "updatedAt" => date("Y-m-d\TH:i:s\Z"),
                "status" => "active"
            ];
        }

      
        return response()->json([
            'status' => 'success',
            'total' => count($products),
            'data' => $products,
        ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}
