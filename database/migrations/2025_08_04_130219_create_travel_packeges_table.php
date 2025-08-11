<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */



    //  "id": 101,
    //         "tourCode": "101-504",
    //         "title": "Radhisson Hotel",
    //         "location": "8 Residency Road, Jodhpur",
    //         "discount": "27%",
    //         "cutprice": "18,000",
    //         "price": 13099,
    //         "discription1": "Discover the incredible beauty of the land of royalpalaces and forts with affordable Rajasthan Tour packages offered by Safar.",
    //         "discription2": "This journey will last for 3 days and for these 3 days you will stay in the famous Radhisson Hotel of Jodhpur.",
    //         "day1": " Explore Mehrangarh Fort and Jaswant Thada. Enjoy Rajasthani cuisine at a local restaurant.",
    //         "day2": "Visit Umaid Bhawan Palace and Mandore Gardens. Experience the local markets.",
    //         "day3": " Take a jeep safari to Bishnoi villages. Relax by Kaylana Lake and attend a cultural performance at Ghanta Ghar.",
    //         "urlToImage": "https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201801021134001482-2955701e209211e994810242ac110002.jpg?&output-quality=75&downsize=910:612&crop=910:612;3,0&output-format=jpg",
    //         "image": "https://th.bing.com/th/id/R.d4638bb6e2148c2e431d507e4b099aba?rik=SV7gNIIdjBNrsw&riu=http%3a%2f%2fstatic.businessworld.in%2fupload%2fYyki4e_Radisson_Jodhpur.jpg&ehk=eQ3GnM81cOs0kjlkuZ4GrZEAt1Ro51py2TC4eJ9IGYQ%3d&risl=&pid=ImgRaw&r=0",
    //         "img1": "https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201801021134001482-2955701e209211e994810242ac110002.jpg?&output-quality=75&downsize=910:612&crop=910:612;3,0&output-format=jpg",
    //         "img2": "https://media.radissonhotels.net/image/radisson-jodhpur/exteriorview/16256-114079-f63763401_3xl.jpg?impolicy=HomeHero",
    //         "img3": "https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201801021134001482-5c9b215a8dc811e9b7cc0242ac110004.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,21&output-format=jpg",
    //         "img4": "https://www.tourmyindia.com/blog/wp-content/uploads/2016/07/places-to-visit-jodhpur.png",
    //         "img5": "https://trendaroundus.in/wp-content/uploads/2020/12/Mehrangarh-Fort-In-Jodhpur-A-Majestic-Fort-with-Incredible-Architecture.jpg",
    //         "destination": "Rajasthan"

    public function up(): void
    {
        Schema::create('travel_packeges', function (Blueprint $table) {
            $table->id();
            $table->string('tourCode');
            $table->string('title');
            $table->string('location');
            $table->string('discount');
            $table->string('cutprice');
            $table->string('price');
            $table->text('discription1');
            $table->text('discription2');
            $table->text('day1');
            $table->text('day2');
            $table->text('day3');
            $table->string('urlToImage');
            $table->string('image');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
            $table->string('destination');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packeges');
    }
};
