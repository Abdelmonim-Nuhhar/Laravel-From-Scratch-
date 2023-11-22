<?php 
    namespace App\Models;

    class Listing {
        public static function all(){
            //This is come from database, but just for now
            //lets go ahead and return values from wep.php (listing)
            return  [
                'listing' => [
                    'id' => 1,
                    'title' => 'Listing one',
                    'description' => 'For your business, too, your customers’ wins are your wins. 
                    If you’re a small retailer, this is true not just with your in-store customer service,
                     but also your ecommerce website’s overall UX, its check-out flow, 
                     your online return options, and your product descriptions.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing 2',
                    'description' => 'For your business, too, your customers’ wins are your wins. 
                    If you’re a small retailer, this is true not just with your in-store customer service,
                     but also your ecommerce website’s overall UX, its check-out flow, 
                     your online return options, and your product descriptions.'
                ]
    
                ];
        }

        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                // if current listing == to id that passed in to find
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }

