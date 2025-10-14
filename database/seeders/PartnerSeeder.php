<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            ['name' => 'O2 Slovakia', 'slug' => 'o2-slovakia', 'type' => 'general', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/O2-Logo.svg','description' => 'O2 Slovakia podporuje projekt Strážcovia pohybu, pretože verí, že pohyb, sloboda a radosť z objavovania sú rovnako dôležité ako spojenie medzi ľuďmi. Ako generálny partner pomáha deťom objavovať svet bez hraníc – nielen v digitálnom priestore, ale aj v reálnom pohybe, ktorý prináša energiu, zdravie a úsmev.'],
            ['name' => 'Veolia', 'slug' => 'veolia', 'type' => 'main', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Veolia_logo.svg/2560px-Veolia_logo.svg.png'],
            ['name' => 'DAM', 'slug' => 'dam', 'type' => 'partner', 'image' => 'https://dam.nmhmedia.sk/image/c2107e8c-84dd-40be-be86-44d1d66d1828_dam-url7yyatp.png/960/540'],
            ['name' => 'Rajo', 'slug' => 'rajo', 'type' => 'partner', 'image' => 'https://i.logos-download.com/51884/10828-og-fe588eea4a70679217dfeb4d4744ee52.png/Rajo_Logo_og.png'],
            ['name' => 'Javys', 'slug' => 'javys', 'type' => 'partner', 'image' => 'https://www.javys.sk/data/web/dokumenty/javys-logo/javys-logo-doplnkovy-variant.png'],
            ['name' => 'Energetický a priemyselný holding', 'slug' => 'eph', 'type' => 'partner', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Energetický_a_průmyslový_holding_logo.svg/250px-Energetický_a_průmyslový_holding_logo.svg.png'],
            ['name' => 'ASBIS', 'slug' => 'asbis', 'type' => 'partner', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/ASBIS_logo.svg/708px-ASBIS_logo.svg.png'],
            ['name' => 'SPP', 'slug' => 'spp', 'type' => 'partner', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/79/SPP_logo.jpg'],
            ['name' => 'Zoznam', 'slug' => 'zoznam', 'type' => 'partner', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Zoznam_logo.png'],
            ['name' => 'Ministerstvo školstva SR', 'slug' => 'ministerstvo-skolstva', 'type' => 'institutional', 'image' => 'https://www.vsstz.sk/wp-content/uploads/2017/04/logo-ministerstvo-skolstva-1400x441-1.png'],
            ['name' => 'Únia miest Slovenska', 'slug' => 'unia-miest-slovenska', 'type' => 'institutional', 'image' => 'https://static.wixstatic.com/media/14ec17_7e7784d635ce44f19b966c1b0f656095~mv2.png/v1/fill/w_200,h_200,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo_UNIA-MIEST.png'],
            ['name' => 'NIVAM', 'slug' => 'nivam', 'type' => 'institutional', 'image' => 'https://nivam.sk/wp-content/uploads/2023/07/Nivam-logo-farebna-verzia-2.png'],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(['slug' => $partner['slug']], $partner);
        }
    }
}
