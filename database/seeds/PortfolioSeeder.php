    <?php

use App\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'category_id' => 1,
            'title' => 'Arbeitswelt & Schule',
            'description' => '
                Projekt für die Arbeiterkammer Wien, Niederösterreich, Oberösterreich, Salzburg und Steiermark.
            ',
            'technical' => '
                <ul>
                    <li>CodeIgniter 3</li>
                    <li>MySQL</li>
                    <li>Bootstrap 3</li>
                </ul>',
            'url' => 'https://aws.arbeiterkammer.at/',
            'image' => '001.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Krankenhausbewertung Österreich',
            'description' => 'krankenhausbewertung.at - Die Plattform für Krankenhausbwertungen in Österreich.',
            'technical' => '
                <ul>
                    <li>Laravel 5.6</li>
                    <li>MySQL</li>
                    <li>TailwindCSS</li>
                    <li>VueJS 2.0</li>
                </ul>',
            'url' => 'https://www.krankenhausbewertung.at/',
            'image' => '002.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Haarstudio Verena Leeb',
            'description' => 'Haarstudio Verena Leeb',
            'technical' => 'WordPress 4.2',
            'url' => 'http://www.leeb-haarstudio.at/wordpress/',
            'image' => '003.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'L14 - Onlinenanmeldung',
            'description' => 'Projekt für die Arbeiterkammer Wien, Abwicklung der
                                Anmeldungen für die L14 Bildungs- und Berufinformationstage.',
            'technical' => '
                <ul>
                    <li>CodeIgniter 3</li>
                    <li>MySQL</li>
                    <li>Bootstap 3</li>
                </ul>
            ',
            'url' => '',
            'image' => '004.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'AK Fonds - Onlinenanmeldung',
            'description' => 'Projekt für die Arbeiterkammer Wien, Onlineanmeldesystem für
                                Theodor-Körner-Fonds / Edith-Saurer-Fonds / Geschichtswettbewerb
                                des Bundespräsidenten.',
            'technical' => '
                <ul>
                    <li>CodeIgniter 3</li>
                    <li>MySQL</li>
                    <li>Bootstap 3</li>
                </ul>
            ',
            'url' => 'http://fonds.arbeiterkammer.at/',
            'image' => '005.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Paul Mies Baum und Gartenpflege',
            'description' => 'Firmenwebsite für Paul Mies Baum und Gartenpflege & Custom CMS.',
            'technical' => '
                <ul>
                    <li>Laravel 5.2</li>
                    <li>MySQL</li>
                    <li>Bootstrap 3</li>
                </ul>
            ',
            'url' => 'http://www.paulmies.at/',
            'image' => '006.png'
        ]);

        Portfolio::create([
            'category_id' => 2,
            'title' => 'IT Support für Agnes Streissler-Führer ',
            'description' => '
                IT-Support für Agnes Streissler-Führer
                Wirtschaftspolitische Beratung.
            ',
            'technical' => '
                <ul>
                    <li>OS X Client- und Serversupport</li>
                    <li>Netzwerktechnik</li>
                </ul>',
            'url' => '',
            'image' => '007.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'AK Arbeitsjubilare - Onlineanmeldung',
            'description' => '
                Projekt für die AK Wien. Online-Anmeldesystem mit Saalplanbuchung.
            ',
            'technical' => '
            <ul>
                <li>CodeIgniter 3</li>
                <li>MySQL</li>
                <li>Bootstrap 3</li>
            </ul>',
            'url' => '',
            'image' => '008.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Bachelorette Party',
            'description' => '
                WordPress-Setup und WordPress-Theme nach eigenen Wünschen.
            ',
            'technical' => '
            <ul>
                <li>WordPress 4.6</li>
                <li>SASS</li>
            </ul>',
            'url' => 'http://www.bachelorette-party.at',
            'image' => '009.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Medientransparenz-Datenbank',
            'description' => '
                Projekt für die AK Wien: Webapplikation für die Erfassung und Verwaltung von
                Ausgaben nach dem Medientransparenzgesetz.
            ',
            'technical' => '
            <ul>
                <li>Laravel 5.2</li>
                <li>MySQL</li>
                <li>Bootstrap 3</li>
            </ul>',
            'url' => '',
            'image' => '010.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Elektronischer Fragebogen',
            'description' => '
                Projekt für die AK Wien: Elektronischer Fragebogen zum Thema "Qualität des Arbeitslebens
                der österreichischen ArbeitnehmerInnen".
            ',
            'technical' => '
            <ul>
                <li>CodeIgniter</li>
                <li>MySQL</li>
            </ul>',
            'url' => '',
            'image' => '011.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Relaunch benedict.at & benedict-swiss.at',
            'description' => '
                Projekt in Zusammenarbeit mit S-MGMT, Relaunch der Websites der Benedict GmbH und der Benedict Swiss AG".
            ',
            'technical' => '
            <ul>
                <li>PyroCMS</li>
                <li>Bootstrap</li>
                <li>SASS</li>
            </ul>',
            'url' => 'http://www.benedict.at',
            'image' => '012.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Broschürenverwaltung für die AK Wien',
            'description' => '
                Projekt für die AK Wien, Software für die Verwaltung und Bestellung von Broschüren".
            ',
            'technical' => '
            <ul>
                <li>Laravel 5.4</li>
                <li>VueJS 2.0</li>
                <li>MySQL</li>
            </ul>',
            'url' => '',
            'image' => '013.png'
        ]);

        Portfolio::create([
            'category_id' => 1,
            'title' => 'Terminverwaltung für das Vokalensemble der Dommusik Wien',
            'description' => '
                Projekt für das Vokalensemble der Dommusik Wien um Proben- und Konzertorganisation zu vereinfachen.
            ',
            'technical' => '
            <ul>
                <li>Laravel 5.5</li>
                <li>Tailwind CSS</li>
                <li>MySQL</li>
            <ul>',
            'url' => '',
            'image' => '014.png',
        ]);
    }
}
