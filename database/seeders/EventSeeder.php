<?php

namespace Database\Seeders;

use App\Models\Event; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
   
    public function run(): void

 {
    Event::create([
            'name'        => 'Al Ahly vs Zamalek',
            'category'    => 'football',
            'location'    => 'Cairo International Stadium',
            'date'        => 'MAR 16, 2026',
            'image'       => '../pic/maxresdefault.jpg',
            'description' => 'The biggest football derby in Egypt',
            'price'       => 150,
            'badge'       => 'badge-red',
            'label'       => 'Football',
            'currency'    => 'EGP',         
            'tickets'     => [
                ['type' => '3rd Class',      'perks' => '',                              'price' => 150],
                ['type' => '2nd Class',      'perks' => 'Seated, great view',            'price' => 300],
                ['type' => '1st Class VIP',  'perks' => 'Premium seats + lounge access', 'price' => 750],
            ],
        ]);
 
        Event::create([
            'name'        => 'Symphony at the Opera',
            'category'    => 'cultural',
            'location'    => 'Cairo Opera House',
            'date'        => 'MAR 17, 2026',
            'image'       => 'https://images.pexels.com/photos/109669/pexels-photo-109669.jpeg?auto=compress&cs=tinysrgb&w=800',
            'description' => 'A magical symphony night at Cairo Opera House',
            'price'       => 350,
            'badge'       => 'badge-purple',
            'label'       => 'Cultural',
            'currency'    => 'EGP',
           
            'tickets'     => [
                ['type' => 'Balcony',    'perks' => 'Upper seating',          'price' => 350],
                ['type' => 'Orchestra',  'perks' => 'Premium immersive view', 'price' => 750],
            ],
        ]);
 
        Event::create([
            'name'        => 'Theatro Arkan',
            'category'    => 'cultural',
            'location'    => 'Theatro Arkan',
            'date'        => 'MAR 22, 2026',
            'image'       => 'https://d3vzzcunewy153.cloudfront.net/img/17f95c00-4ab0-492d-94a6-3a647e5ea2fe/0ba86a5189686975e97183b1f9676818.jpg',
            'description' => 'Live theatre performance at Arkan',
            'price'       => 120,
            'badge'       => 'badge-purple',
            'label'       => 'Cultural',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Standard', 'perks' => 'Main hall seating', 'price' => 120],
                ['type' => 'Premium',  'perks' => 'Front rows',         'price' => 280],
            ],
        ]);
 
        Event::create([
            'name'        => 'Handball League Final - Egypt vs Tunisia',
            'category'    => 'handball',
            'location'    => 'Cairo International Stadium',
            'date'        => 'MAR 28, 2026',
            'image'       => 'https://pbs.twimg.com/media/G__xaO7XwAAICmL.jpg',
            'description' => 'Handball league final between Egypt and Tunisia',
            'price'       => 100,
            'badge'       => 'badge-blue',
            'label'       => 'Handball',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Standard', 'perks' => 'General entry',  'price' => 100],
                ['type' => 'VIP',      'perks' => 'Premium seats',  'price' => 350],
            ],
        ]);
 
 
        Event::create([
            'name'        => 'Marwan Pablo & Lege-Cy',
            'category'    => 'concert',
            'location'    => 'New Alamein, Egypt',
            'date'        => 'AUG 15, 2026',
            'image'       => 'https://www.visitalamein.com/uploads/0000/1/2025/07/11/screenshot-2025-07-11-at-83542-pm.png',
            'description' => 'Marwan Pablo & Lege-Cy live at New Alamein Festival',
            'price'       => 350,
            'badge'       => 'badge-green',
            'label'       => 'Festival',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Wave 1',   'perks' => '',                       'price' => 350],
                ['type' => 'Wave 2',   'perks' => '',                       'price' => 850],
                ['type' => 'VIP Pass', 'perks' => 'All access + backstage', 'price' => 2000],
            ],
        ]);
 
        Event::create([
            'name'        => 'Ahly vs Pyramids in AFCON',
            'category'    => 'football',
            'location'    => 'Cairo International Stadium',
            'date'        => 'MAR 26, 2026',
            'image'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqQSrv0dhXxQlQMXGleWBMQ0pKaYD2z3M2wA&s',
            'description' => 'AFCON group stage match',
            'price'       => 150,
            'badge'       => 'badge-red',
            'label'       => 'Football',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => '3rd Class',     'perks' => '',                              'price' => 150],
                ['type' => '2nd Class',     'perks' => 'Seated, great view',            'price' => 300],
                ['type' => '1st Class VIP', 'perks' => 'Premium seats + lounge access', 'price' => 750],
            ],
        ]);
 
        Event::create([
            'name'        => 'Shehab in Alexandria',
            'category'    => 'concert',
            'location'    => 'Alexandria Stadium, Alexandria',
            'date'        => 'MAR 28, 2026',
            'image'       => '../pic/shehab elsayed.jpg',
            'description' => 'Shehab El Sayed live in Alexandria',
            'price'       => 250,
            'badge'       => 'badge-green',
            'label'       => 'Concert',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Standard',  'perks' => 'General entry',    'price' => 250],
                ['type' => 'VIP Beach', 'perks' => 'VIP zone + sunbed', 'price' => 800],
            ],
        ]);
 
        Event::create([
            'name'        => 'Iftar Experience at Hilton Hotel',
            'category'    => 'restaurant',
            'location'    => 'Tahrir, Cairo',
            'date'        => 'MAR - APR 2025',
            'image'       => 'https://images.unsplash.com/photo-1552566626-52f8b828add9?w=600&q=80',
            'description' => 'Exclusive Ramadan iftar buffet at the Hilton',
            'price'       => 450,
            'badge'       => 'badge-gold',
            'label'       => 'Restaurant',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Table for 2', 'perks' => 'Classic experience', 'price' => 80],
                ['type' => 'Table for 4', 'perks' => 'Group table',        'price' => 150],
            ],
        ]);
 
        // ─── SPORTS PAGE ───────────────────────────────────────────────
 
        Event::create([
            'name'        => 'Egypt vs Senegal',
            'category'    => 'football',
            'location'    => 'Cairo International Stadium',
            'date'        => 'APR 10, 2026',
            'image'       => 'https://cdn.mos.cms.futurecdn.net/aGofojA238rkLQFPvscM6o.jpg',
            'description' => 'Egypt national team vs Senegal',
            'price'       => 200,
            'badge'       => 'badge-red',
            'label'       => 'Football',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => '3rd Class',     'perks' => '',                              'price' => 200],
                ['type' => '2nd Class',     'perks' => 'Seated, great view',            'price' => 400],
                ['type' => '1st Class VIP', 'perks' => 'Premium seats + lounge access', 'price' => 1200],
            ],
        ]);
 
        Event::create([
            'name'        => 'Smouha vs Pyramids FC',
            'category'    => 'football',
            'location'    => 'Alexandria Stadium',
            'date'        => 'APR 2, 2026',
            'image'       => 'https://www.soccerpunter.com/images/h2h/og/16496/9479.png',
            'description' => 'Egyptian Premier League match',
            'price'       => 120,
            'badge'       => 'badge-red',
            'label'       => 'Football',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => '3rd Class',     'perks' => '',                              'price' => 120],
                ['type' => '2nd Class',     'perks' => 'Seated, great view',            'price' => 300],
                ['type' => '1st Class VIP', 'perks' => 'Premium seats + lounge access', 'price' => 750],
            ],
        ]);
 
        Event::create([
            'name'        => 'Cairo Basketball - Ahly vs Zamalek',
            'category'    => 'basketball',
            'location'    => 'Al Ahly Club Arena',
            'date'        => 'APR 5, 2026',
            'image'       => 'https://cdn-bal.nba.com/manage/sites/3/2023/05/oraby-1-scaled.jpg',
            'description' => 'Basketball derby between Ahly and Zamalek',
            'price'       => 80,
            'badge'       => 'badge-cyan',
            'label'       => 'Basketball',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Standard',  'perks' => 'General seating', 'price' => 80],
                ['type' => 'Courtside', 'perks' => 'Courtside seats', 'price' => 350],
            ],
        ]);
 
 
        Event::create([
            'name'        => 'Classic Rock Steakhouse',
            'category'    => 'restaurant',
            'location'    => 'Golden Strip Mall',
            'date'        => 'ANY DATE',
            'image'       => 'https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?w=600&q=80',
            'description' => 'Premium steakhouse dining experience',
            'price'       => 800,
            'badge'       => 'badge-gold',
            'label'       => 'Steakhouse',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Table for 2', 'perks' => 'Window seat',         'price' => 800],
                ['type' => 'Table for 4', 'perks' => 'Private area',        'price' => 1500],
                ['type' => 'VIP Room',    'perks' => 'Private dining room', 'price' => 4000],
            ],
        ]);
 
        Event::create([
            'name'        => 'El Nilo Restaurant',
            'category'    => 'restaurant',
            'location'    => 'Zamalek, Cairo',
            'date'        => 'ANY DATE',
            'image'       => 'https://lh3.googleusercontent.com/gps-cs-s/APNQkAGUNTCLMKrZ5sfNhjrMjX1-32RkfJc1Xr7nUCQsrv5ZMLmgV417b41L9c3SlwD1A7uC3-bWN7VErTfMFDZ2R92_T_TY_Yxd9u2c24xHb2ALZzLFdnqKIQs0IjbL6r0lG5h2jnEuPB9LQio=s680-w680-h510-rw',
            'description' => 'Italian cuisine with a Nile view',
            'price'       => 350,
            'badge'       => 'badge-gold',
            'label'       => 'Italian',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Table for 2', 'perks' => 'Indoor seating',  'price' => 350],
                ['type' => 'Table for 4', 'perks' => 'Garden seating',  'price' => 650],
            ],
        ]);
 
        Event::create([
            'name'        => 'Mori Sushi',
            'category'    => 'restaurant',
            'location'    => 'Four Seasons Nile Plaza',
            'date'        => 'ANY DATE',
            'image'       => 'https://images.unsplash.com/photo-1579871494447-9811cf80d66c?w=600&q=80',
            'description' => 'Premium Japanese sushi experience',
            'price'       => 1200,
            'badge'       => 'badge-gold',
            'label'       => 'Japanese',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Table for 2', 'perks' => 'Indoor seating', 'price' => 350],
                ['type' => 'Table for 4', 'perks' => 'Garden seating', 'price' => 650],
            ],
        ]);
 
        Event::create([
            'name'        => 'Sizzler Restaurant',
            'category'    => 'restaurant',
            'location'    => 'Four Seasons First Residence',
            'date'        => 'ANY DATE',
            'image'       => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&q=80',
            'description' => 'Fine dining with a Nile view terrace',
            'price'       => 600,
            'badge'       => 'badge-gold',
            'label'       => 'Italian',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Table for 2',   'perks' => 'Standard seating',  'price' => 600],
                ['type' => 'Terrace Table', 'perks' => 'Nile view terrace', 'price' => 900],
            ],
        ]);
 
        Event::create([
            'name'        => 'Bahr Seafood',
            'category'    => 'restaurant',
            'location'    => 'Abu Qir, Alexandria',
            'date'        => 'ANY DATE',
            'image'       => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&q=80',
            'description' => 'Fresh seafood by the Mediterranean sea',
            'price'       => 500,
            'badge'       => 'badge-gold',
            'label'       => 'Seafood',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Table for 2', 'perks' => 'Sea view',      'price' => 500],
                ['type' => 'Table for 4', 'perks' => 'Private booth', 'price' => 1200],
            ],
        ]);
 
 
        Event::create([
            'name'        => 'Abyusf Concert',
            'category'    => 'concert',
            'location'    => 'El Zamalek, Cairo',
            'date'        => 'MAR 18, 2026',
            'image'       => 'https://mir-s3-cdn-cf.behance.net/projects/404/f413bc136857025.Y3JvcCwzMzM1LDI2MDgsMCwzNjM.jpg',
            'description' => 'Abyusf live concert in Cairo',
            'price'       => 350,
            'badge'       => 'badge-green',
            'label'       => 'Festival',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Wave 1', 'perks' => '',            'price' => 350],
                ['type' => 'VIP',    'perks' => 'Full access', 'price' => 850],
            ],
        ]);
 
        Event::create([
            'name'        => 'Cairo Jazz Night',
            'category'    => 'concert',
            'location'    => 'Cairo Jazz Club',
            'date'        => 'MAR 20, 2026',
            'image'       => 'https://images.unsplash.com/photo-1415201364774-f6f0bb35f28f?w=600&q=80',
            'description' => 'A smooth jazz night at Cairo Jazz Club',
            'price'       => 180,
            'badge'       => 'badge-green',
            'label'       => 'Concert',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Standard',  'perks' => 'General entry',           'price' => 180],
                ['type' => 'VIP Table', 'perks' => 'Reserved table + drink',  'price' => 450],
            ],
        ]);
 
        Event::create([
            'name'        => 'Gaming Festival Egypt',
            'category'    => 'outdoor',
            'location'    => 'Gaming Arena, Egypt',
            'date'        => 'MAR 25, 2026',
            'image'       => 'https://www.insomniamerch.com/cdn/shop/files/Insomnia-Logo-02-blk.png?height=628&pad_color=fff&v=1680105494&width=1200',
            'description' => 'Egypt\'s biggest gaming festival',
            'price'       => 600,
            'badge'       => 'badge-blue',
            'label'       => 'Outdoor',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Entry',      'perks' => 'Access',              'price' => 600],
                ['type' => 'VIP Access', 'perks' => 'All zones + lounge',  'price' => 3500],
            ],
        ]);
 
        Event::create([
            'name'        => 'Amr Diab Live in Cairo',
            'category'    => 'concert',
            'location'    => 'Cairo International Stadium',
            'date'        => 'MAR 25, 2026',
            'image'       => '../pic/a3.jpg',
            'description' => 'Amr Diab live concert in Cairo',
            'price'       => 500,
            'badge'       => 'badge-green',
            'label'       => 'Concert',
            'currency'    => 'EGP',
            
            'tickets'     => [
                ['type' => 'Regular', 'perks' => 'Field Standing',           'price' => 500],
                ['type' => 'VIP',     'perks' => 'Front Pit + Lounge Access', 'price' => 1500],
            ],
        ]);
 
        Event::create([
            'name'        => 'Tamer Ashour Romantic Night',
            'category'    => 'concert',
            'location'    => 'Al Manara Arena',
            'date'        => 'MAR 28, 2026',
            'image'       => '../pic/tamer ashour.jpeg',
            'description' => 'Tamer Ashour romantic night live',
            'price'       => 400,
            'badge'       => 'badge-green',
            'label'       => 'Concert',
            'currency'    => 'EGP',
            'tickets'     => [
                ['type' => 'Silver', 'perks' => 'Seated',            'price' => 400],
                ['type' => 'Gold',   'perks' => 'Premium Seating',   'price' => 850],
            ],
        ]);
 }
}
