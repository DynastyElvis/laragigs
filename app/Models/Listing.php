<?php
namespace App\Models;

class Listing {
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Listing oneListing oneListing oneListing oneListing oneListing oneListing one'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Listing oneListing oneListing oneListing oneListing oneListing oneListing one'
            ]
        ];
    }

public static function find($id) {
        $listings = self::all();
{

    return $listings;

}}

}
