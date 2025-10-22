<?php

namespace Database\Seeders;

use App\Models\TravelPackege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;;

class TravelPackegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $travelPackege = [
            [
                "id" => 101,
                "tourCode" => "101-504",
                "title" => "Radhisson Hotel",
                "location" => "8 Residency Road, Jodhpur",
                "discount" => "27",
                "cutprice" => "18,000",
                "price" => 13099,
                "discription1" => "Discover the incredible beauty of the land of royalpalaces and forts with affordable Rajasthan Tour packages offered by Safar.",
                "discription2" => "This journey will last for 3 days and for these 3 days you will stay in the famous Radhisson Hotel of Jodhpur.",
                "day1" => " Explore Mehrangarh Fort and Jaswant Thada. Enjoy Rajasthani cuisine at a local restaurant.",
                "day2" => "Visit Umaid Bhawan Palace and Mandore Gardens. Experience the local markets.",
                "day3" => " Take a jeep safari to Bishnoi villages. Relax by Kaylana Lake and attend a cultural performance at Ghanta Ghar.",
                "urlToImage" => "https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201801021134001482-2955701e209211e994810242ac110002.jpg?&output-quality=75&downsize=910:612&crop=910:612;3,0&output-format=jpg",
                "image" => "https://th.bing.com/th/id/R.d4638bb6e2148c2e431d507e4b099aba?rik=SV7gNIIdjBNrsw&riu=http%3a%2f%2fstatic.businessworld.in%2fupload%2fYyki4e_Radisson_Jodhpur.jpg&ehk=eQ3GnM81cOs0kjlkuZ4GrZEAt1Ro51py2TC4eJ9IGYQ%3d&risl=&pid=ImgRaw&r=0",
                "img1" => "https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201801021134001482-2955701e209211e994810242ac110002.jpg?&output-quality=75&downsize=910:612&crop=910:612;3,0&output-format=jpg",
                "img2" => "https://media.radissonhotels.net/image/radisson-jodhpur/exteriorview/16256-114079-f63763401_3xl.jpg?impolicy=HomeHero",
                "img3" => "https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201801021134001482-5c9b215a8dc811e9b7cc0242ac110004.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,21&output-format=jpg",
                "img4" => "https://www.tourmyindia.com/blog/wp-content/uploads/2016/07/places-to-visit-jodhpur.png",
                "img5" => "https://trendaroundus.in/wp-content/uploads/2020/12/Mehrangarh-Fort-In-Jodhpur-A-Majestic-Fort-with-Incredible-Architecture.jpg",
                "destination" => "Rajasthan"
            ],
            [
                "id" => 102,
                "tourCode" => "102-304",
                "title" => "Ramada By Wyndham",
                "location" => "Jaishinghpura,Jaipur",
                "discount" => "28",
                "cutprice" => "10,000",
                "price" => 7139,
                "discription1" => "Discover the incredible beauty of the land of royalpalaces and forts with affordable Rajasthan Tour packages offered by Safar.",
                "discription2" => "This journey will last for 3 days and for these 3 days you will stay in the famous Ramada By Wyndham Hotel of Jaipur.",
                "day1" => " Explore the majestic Amber Fort and the elegant City Palace. Experience Rajasthani culture at Chokhi Dhani in the evening.",
                "day2" => "Visit the iconic Hawa Mahal and the fascinating Jantar Mantar observatory. Enjoy shopping at lively bazaars like Johari Bazaar.",
                "day3" => "Discover Jaipur's heritage at the Albert Hall Museum and the Jaipur Wax Museum. End your trip with a traditional folk dance performance at Jawahar Kala Kendra.",
                "urlToImage" => "https://th.bing.com/th/id/OIP.gNh1FFKVagY42jFfba_yVwHaE8?rs=1&pid=ImgDetMain",
                "image" => "https://q-xx.bstatic.com/xdata/images/hotel/max1280x900/308892038.jpg?k=ceea82070eb436fe8170265b478b89272d95d9be1f2c05589bd5bf17ec778c79&o=",
                "img1" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/6d/69/cf/standard-king-bedroom.jpg?w=900&h=-1&s=1",
                "img2" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/23/2c/b2/13/exterior.jpg?w=700&h=-1&s=1",
                "img3" => "https://images.trvl-media.com/hotels/2000000/2000000/1990400/1990383/21e1bdea_z.jpg",
                "img4" => "https://www.tripsavvy.com/thmb/Afl1v6bgmGid9kPfseymDiAYWa0=/3595x2397/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-518387310-04a30994bfb1461bb8000f1864ca1fc5.jpg",
                "img5" => "https://www.tripsavvy.com/thmb/EFizNEc-aLcuYLHqG8SDSHF0C9c=/3648x2432/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-525741072-90d3e29fa1194320a43adced0b83a8cc.jpg",
                "destination" => "Rajasthan"
            ],
            [
                "id" => 201,
                "tourCode" => "201-603",
                "title" => "Red Fox Hotel",
                "location" => "Aerocity New Delhi",
                "discount" => "32",
                "cutprice" => "7,440",
                "price" => 5029,
                "discription1" => "Discover the incredible beauty of the Capital of the India with affordable Delhi Tour packages offered by Safar.",
                "discription2" => "This journey will last for 3 days and for these 3 days you will stay in the famous Red Fox Hotel of Delhi.",
                "day1" => " Explore historical landmarks like the Red Fort and Humayun's Tomb. Dive into the vibrant atmosphere of Chandni Chowk in the evening.",
                "day2" => " Visit iconic sites such as India Gate and Qutub Minar. Immerse yourself in the culture at Dilli Haat.",
                "day3" => "Experience modern Delhi with a visit to the Lotus Temple. Relax at Lodhi Gardens and explore the trendy Hauz Khas Village in the evening.",
                "urlToImage" => "https://i.travelapi.com/hotels/4000000/3530000/3526700/3526696/fbb664b6_z.jpg",
                "image" => "https://th.bing.com/th/id/OIP.x56dhsa8fy43r5cHF9zoQQHaE8?rs=1&pid=ImgDetMain",
                "img1" => "https://gos3.ibcdn.com/9562afa03efd11e8a6f80223efad7ef0.jpg",
                "img2" => "https://r1imghtlak.mmtcdn.com/5657d594454411e49a4a36cfdd80c293.jfif",
                "img3" => "https://d1ha4q9jvugw4k.cloudfront.net/public_media/hotel_images/Delhi/Red-Fox-Hotel/4.jpg",
                "img4" => "https://www.templedairy.in/wp-content/uploads/2017/06/b4830a80f0338108d8ed427f15510024.jpg",
                "img5" => "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2023/03/14190549/Delhi-Best-tourist-attractions-1600x900.jpg",
                "destination" => "Delhi"
            ],
            [
                "id" => 202,
                "tourCode" => "202-501",
                "title" => "Taurus Sarovar Partico",
                "location" => "Mahipalpur Extention, Delhi",
                "discount" => "22",
                "cutprice" => "9,055",
                "price" => 7055,
                "discription1" => "Discover the incredible beauty of the Capital of the India with affordable Delhi Tour packages offered by Safar.",
                "discription2" => "This journey will last for 3 days and for these 3 days you will stay in the famous Taurus Sarovar Partico Hotel of Delhi.",
                "day1" => " Explore Old Delhi's historical sites and markets, followed by a visit to the National Crafts Museum and Lodhi Gardens.",
                "day2" => "Discover the architectural marvels of Akshardham Temple and the cultural treasures of the National Museum. Enjoy an evening boat ride at India Gate.",
                "day3" => " Experience the ancient charm of Agrasen ki Baoli, explore street art in Lodhi Art District, and indulge in shopping and dining at Hauz Khas Village. Conclude your trip with a visit to the tranquil Lotus Temple and a leisurely stroll at Nehru Park.",
                "urlToImage" => "https://res.cloudinary.com/simplotel/image/upload/x_0,y_0,w_960,h_539,r_0,c_crop,q_60,fl_progressive/w_1100,f_auto,c_fit/taurus-sarovar-portico-new-delhi/Executive_Rooms_Taurus_Sarovar_Portico_New_Delhi_2_ardw52_wus0u1",
                "image" => "https://cdn0.weddingwire.in/vendor/0291/3_2/1280/jpeg/banquet-halls-taurus-sarovar-portico-new-delhi-banquet-hall-1_15_50291-163812119022638.jpeg",
                "img1" => "https://res.cloudinary.com/simplotel/image/upload/x_0,y_37,w_1500,h_844,r_0,c_crop,q_60,fl_progressive/w_1500,c_fit,f_auto/taurus-sarovar-portico-new-delhi/Room_1_Taurus_Sarovar_Portico_IGI_Delhi_e1bdba",
                "img2" => "https://res.cloudinary.com/simplotel/image/upload/x_0,y_100,w_1345,h_755,r_0,c_crop,q_60,fl_progressive/w_1500,c_fit,f_auto/taurus-sarovar-portico-new-delhi/Facade_1_Taurus_Sarovar_Portico_IGI_Delhi_iwlcbq",
                "img3" => "https://r1imghtlak.mmtcdn.com/08e15c023ef811e8b5040af8e1f3c732.jpg",
                "img4" => "https://cdn.getyourguide.com/img/location/533591d4b943b.jpeg/88.jpg",
                "img5" => "https://assets-news.housing.com/news/wp-content/uploads/2022/06/25082305/featurted-compressed-1.jpg",
                "destination" => "Delhi"
            ],
            [
                "id" => 301,
                "tourCode" => "301-704",
                "title" => "Caravela Beach Resort",
                "location" => "Varco Beach, Selcate",
                "discount" => "17",
                "cutprice" => "17,099",
                "price" => 14099,
                "discription1" => "Discover the incredible beauty of the land of beaches with affordable Goa Tour packages offered by Safar.",
                "discription2" => "This journey will last for 3 days and for these 3 days you will stay in the famous Carvela Beach Resort of Goa.",
                "urlToImage" => "https://pix10.agoda.net/hotelImages/49223/-1/fb94bf3b4dac072ea3331278a3287229.jpg",
                "day1" => " Enjoy a day at Calangute and Baga beaches, followed by a sunset cruise on the Mandovi River.",
                "day2" => "Explore Old Goa's historic sites in the morning and experience Dudhsagar Falls adventure in the afternoon. Spend the evening at Tito's Lane for nightlife.",
                "day3" => "Relax at Palolem Beach in the morning, explore Panaji's streets in the afternoon, and end with a sunset picnic at Agonda Beach.",
                "image" => "https://www.vielfalt-asien.de/wp-content/uploads/2020/04/2.jpg",
                "img1" => "https://th.bing.com/th/id/R.1dea727032dd4cbe5e6d3d062e327363?rik=twycTRlnLzs3AQ&riu=http%3a%2f%2ftrip2goa.co%2fwp-content%2fuploads%2f2015%2f12%2f9.jpg&ehk=I%2fDiiJbqkr%2flrPTxGOO36jjIIlVZVrkaune1kNHuizs%3d&risl=&pid=ImgRaw&r=0",
                "img2" => "https://i.content4travel.com/cms/img/u/desktop/se/goiramg_0.jpg?version=1",
                "img3" => "https://www.corporateeventorganisers.in/admin/images/banner/158133222412.jpg",
                "img4" => "https://img4.goodfon.com/wallpaper/nbig/b/91/zakat-kamni-beautiful-nebo-leto-sand-sea-pliazh-seascape-s-1.jpg",
                "img5" => "https://img.theculturetrip.com/1440x/smart/wp-content/uploads/2017/01/8482473605_14a4238a37_k.jpg",
                "destination" => "Goa"
            ],
            [
                "id" => 302,
                "tourCode" => "302-308",
                "title" => "Majestic Beach Hotel",
                "location" => "Emerald Palms Road, Pedda",
                "discount" => "36",
                "cutprice" => "7,280",
                "price" => 4639,
                "discription1" => "Discover the incredible beauty of the land of beaches with affordable Goa Tour packages offered by Safar.",
                "discription2" => "This journey will last for 3 days and for these 3 days you will stay in the famous Majestic Beach Hotel of Goa.",
                "day1" => "Relax at Anjuna Beach, visit Chapora Fort for sunset.",
                "day2" => "Explore spice plantations, cruise the backwaters on a houseboat.",
                "day3" => "Snorkel at Butterfly Beach, explore Fontainhas, and enjoy sunset at Dona Paula viewpoint.",
                "urlToImage" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/7f/68/a0/majestic-beach-comforts.jpg?w=1400&h=-1&s=1",
                "image" => "https://i0.wp.com/networkustad.com/wp-content/uploads/2021/01/india-3882103_1920.jpg?w=1920&ssl=1",
                "img1" => "https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/room-imgs/201512141102242434-231762-24bb6fce569611e9ac540242ac110002.jpg?&output-quality=75&downsize=910:612&crop=910:612;4,0&output-format=jpg",
                "img2" => "https://image3.mouthshut.com/images/Restaurant/Photo/-16839_53150.jpg",
                "img3" => "https://ui.cltpstatic.com/places/hotels/1327/1327660/images/89961149_w.jpg",
                "img4" => "https://images.freeimages.com/images/large-previews/914/st-francis-xavier-church-goa-1637772.jpg",
                "img5" => "https://i0.wp.com/networkustad.com/wp-content/uploads/2021/01/india-3882103_1920.jpg?w=1920&ssl=1",
                "destination" => "Goa"
            ]
        ];
        TravelPackege::insert($travelPackege);
    }
}
