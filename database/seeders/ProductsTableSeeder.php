<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Cama para Mascotas',
            'slug' => 'cama-para-mascotas',
            'details' => 'Tamaño mediano, acolchada, lavable',
            'price' => 49.99,
            'shipping_cost' => 9.99,
            'description' => 'Cama cómoda y acogedora para mascotas',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cama-para-mascotas.jpg'
        ]);
        
        Product::create([
            'name' => 'Juguete para Mascotas',
            'slug' => 'juguete-para-mascotas',
            'details' => 'Pelota de goma duradera',
            'price' => 9.99,
            'shipping_cost' => 1.99,
            'description' => 'Juguete divertido para perros y gatos',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'juguete-para-mascotas.jpg'
        ]);
        
        Product::create([
            'name' => 'Correa para Mascotas',
            'slug' => 'correa-para-mascotas',
            'details' => 'Correa ajustable, resistente',
            'price' => 19.99,
            'shipping_cost' => 4.99,
            'description' => 'Correa segura y cómoda para pasear a tu mascota',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'correa-para-mascotas.jpg'
        ]);
        
        Product::create([
            'name' => 'Comedero para Mascotas',
            'slug' => 'comedero-para-mascotas',
            'details' => 'Bowl de acero inoxidable, antideslizante',
            'price' => 12.99,
            'shipping_cost' => 2.49,
            'description' => 'Comedero práctico y duradero para mascotas',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'comedero-para-mascotas.jpg'
        ]);
        
        Product::create([
            'name' => 'Transportadora para Mascotas',
            'slug' => 'transportadora-para-mascotas',
            'details' => 'Tamaño mediano, asas y correa ajustable',
            'price' => 29.99,
            'shipping_cost' => 6.99,
            'description' => 'Transportadora segura y confortable para viajar con tu mascota',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'transportadora-para-mascotas.jpg'
        ]);
        
        Product::create([
            'name' => 'Rascador para Mascotas',
            'slug' => 'rascador-para-mascotas',
            'details' => 'Poste de rascado con plataforma',
            'price' => 39.99,
            'shipping_cost' => 8.99,
            'description' => 'Rascador divertido y funcional para gatos',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'rascador-para-mascotas.jpg'
        ]);
        
        Product::create([
            'name' => 'Collar para Mascotas',
            'slug' => 'collar-para-mascotas',
            'details' => 'Collar ajustable de cuero',
            'price' => 14.99,
            'shipping_cost' => 3.49,
            'description' => 'Collar elegante y cómodo para mascotas',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'collar-para-mascotas.jpg'
        ]);
        
    }
}
