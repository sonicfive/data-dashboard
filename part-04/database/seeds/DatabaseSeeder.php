<?php

use Illuminate\Database\Seeder;
use App\Agent;
use App\Product;
use App\Order;
use App\OrderLineItem;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $product_1 = new Product([

            "title" => "Supremo",

            "description" => "Earthy",

            "variety" => "Robusta",

            "source" => "Ethiopia"

        ]);

        $product_1->save();

        $product_2 = new Product([

            "title" => "Espresso",

            "description" => "Nutty",

            "variety" => "Arabica",

            "source" => "Colombian"

        ]);

        $product_2->save();

        $product_3 = new Product([

            "title" => "Rum Infused",

            "description" => "Sweet, Chocolatey",

            "variety" => "Arabica",

            "source" => "Mexico"

        ]);

        $product_3->save();

        $products = collect([$product_1, $product_2, $product_3]);

        factory(Agent::class, 10)->create()->each( function( $agent ) use ($products) {

            $orders = factory(Order::class,500)->make();

            $agent->orders()->saveMany($orders);

            $orders->each( function( $order ) use ($products){

                 $order->lineItems()->saveMany(factory(OrderLineItem::class,5)->make([

                    "product_id" => $products->random()->id

                 ]));

            });

        });

    }
}
