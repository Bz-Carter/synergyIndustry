<?php

use Illuminate\Database\Seeder;
use App\Slide;
use App\Transition;
use App\Slideinfo;
use App\Slidetitle;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //différent type d'orientation

        $transition1 = Transition::create([
            'title' => 'horizontal',
            'data' => 'slidingoverlayhorizontal'
        ]);

        $transition2 = Transition::create([
            'title' => 'vertical',
            'data' => 'slidingoverlayvertical'
        ]);

        $transition3 = Transition::create([
            'title' => 'box',
            'data' => 'boxslide'
        ]);


        //différent type d'orientation de l'info

        $slideinfo1 = Slideinfo::create([
            'title' => 'de droite vers la gauche',
            'data' => 'class="tp-caption tp-resizeme caption-2"
            data-frames=\'[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
            data-visibility="[\'on\', \'on\', \'on\', \'on\']"

            data-fontsize="[\'30\', \'30\', \'30\', \'25\']"
            data-lineheight="[\'39\', \'39\', \'39\', \'39\']"
            data-color="[\'#FFF\']"
            data-textAlign="[\'center\', \'center\', \'center\', \'center\']"

            data-x="[\'center\']"
            data-y="[\'center\']"
            data-hoffset="[\'0\', \'0\', \'0\', \'0\']"
            data-voffset="[\'-13\', \'-13\', \'-13\', \'-13\']"

            data-width="[\'1200\',\'992\',\'768\',\'480\']"
            data-height="[\'auto\', \'auto\', \'auto\', \'auto\']"
            data-whitespace="[\'normal\']"

            data-paddingtop="[0, 0, 0, 0]"
            data-paddingright="[15, 15, 15, 15]"
            data-paddingbottom="[0, 0, 0, 0]"
            data-paddingleft="[15, 15, 15, 15]"

            data-basealign="slide"
            data-responsive_offset="off"'
        ]);

        $slideinfo2 = Slideinfo::create([
            'title' => 'du bas vers le haut',
            'data' => 'class="tp-caption tp-resizeme caption-2"
            data-frames=\'[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
            data-visibility="[\'on\', \'on\', \'on\', \'on\']"

            data-fontsize="[\'30\', \'30\', \'30\', \'25\']"
            data-lineheight="[\'39\', \'39\', \'39\', \'39\']"
            data-color="[\'#FFF\']"
            data-textAlign="[\'center\', \'center\', \'center\', \'center\']"

            data-x="[\'center\']"
            data-y="[\'center\']"
            data-hoffset="[\'0\', \'0\', \'0\', \'0\']"
            data-voffset="[\'-13\', \'-13\', \'-13\', \'-13\']"

            data-width="[\'1200\',\'992\',\'768\',\'480\']"
            data-height="[\'auto\', \'auto\', \'auto\', \'auto\']"
            data-whitespace="[\'normal\']"

            data-paddingtop="[0, 0, 0, 0]"
            data-paddingright="[15, 15, 15, 15]"
            data-paddingbottom="[0, 0, 0, 0]"
            data-paddingleft="[15, 15, 15, 15]"

            data-basealign="slide"
            data-responsive_offset="off"'
        ]);

        $slideinfo3 = Slideinfo::create([
            'title' => 'de droite vers la gauche 2',
            'data' => 'class="tp-caption tp-resizeme caption-2"
            data-frames=\'[{"delay":1500,"speed":1500,"frame":"0","from":"x:500px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
            data-visibility="[\'on\', \'on\', \'on\', \'on\']"

            data-fontsize="[\'30\', \'30\', \'30\', \'25\']"
            data-lineheight="[\'39\', \'39\', \'39\', \'39\']"
            data-color="[\'#FFF\']"
            data-textAlign="[\'center\', \'center\', \'center\', \'center\']"

            data-x="[\'center\']"
            data-y="[\'center\']"
            data-hoffset="[\'0\', \'0\', \'0\', \'0\']"
            data-voffset="[\'-13\', \'-13\', \'-13\', \'-13\']"

            data-width="[\'1200\',\'992\',\'768\',\'480\']"
            data-height="[\'auto\', \'auto\', \'auto\', \'auto\']"
            data-whitespace="[\'normal\']"

            data-paddingtop="[0, 0, 0, 0]"
            data-paddingright="[15, 15, 15, 15]"
            data-paddingbottom="[0, 0, 0, 0]"
            data-paddingleft="[15, 15, 15, 15]"

            data-basealign="slide"
            data-responsive_offset="off"'
        ]);

            //different type d'orientation du titre

        $slidetitle1 = Slidetitle::create([
            'title' => 'de gauche vers la droite',
            'data' => 'class="tp-caption tp-resizeme caption-1 text-uppercase"
            data-frames=\'[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
            data-visibility="[\'on\', \'on\', \'on\', \'on\']"

            data-fontsize="[\'48\', \'48\', \'48\', \'38\']"
            data-lineheight="[\'58\', \'58\', \'58\', \'58\']"
            data-color="[\'#FFF\']"
            data-textAlign="[\'center\', \'center\', \'center\', \'center\']"

            data-x="[\'center\']"
            data-y="[\'center\']"
            data-hoffset="[\'0\', \'0\', \'0\', \'0\']"
            data-voffset="[\'-83\', \'-83\', \'-83\', \'-93\']"

            data-width="[\'1200\',\'992\',\'768\',\'480\']"
            data-height="[\'auto\', \'auto\', \'auto\', \'auto\']"
            data-whitespace="[\'normal\']"

            data-paddingtop="[0, 0, 0, 0]"
            data-paddingright="[15, 15, 15, 15]"
            data-paddingbottom="[0, 0, 0, 0]"
            data-paddingleft="[15, 15, 15, 15]"

            data-basealign="slide"
            data-responsive_offset="off"'
        ]);

        $slidetitle2 = Slidetitle::create([
            'title' => 'du haut vers le bas',
            'data' => 'class="tp-caption tp-resizeme caption-1 text-uppercase"
            data-frames=\'[{"delay":500,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
            data-visibility="[\'on\', \'on\', \'on\', \'on\']"

            data-fontsize="[\'48\', \'48\', \'48\', \'38\']"
            data-lineheight="[\'58\', \'58\', \'58\', \'58\']"
            data-color="[\'#FFF\']"
            data-textAlign="[\'center\', \'center\', \'center\', \'center\']"

            data-x="[\'center\']"
            data-y="[\'center\']"
            data-hoffset="[\'0\', \'0\', \'0\', \'0\']"
            data-voffset="[\'-83\', \'-83\', \'-83\', \'-93\']"

            data-width="[\'1200\',\'992\',\'768\',\'480\']"
            data-height="[\'auto\', \'auto\', \'auto\', \'auto\']"
            data-whitespace="[\'normal\']"

            data-paddingtop="[0, 0, 0, 0]"
            data-paddingright="[15, 15, 15, 15]"
            data-paddingbottom="[0, 0, 0, 0]"
            data-paddingleft="[15, 15, 15, 15]"

            data-basealign="slide"
            data-responsive_offset="off"'
        ]);

      $slidetitle3 = Slidetitle::create([
            'title' => 'de gauche vers la droite 2',
            'data' => 'class="tp-caption tp-resizeme caption-1 text-uppercase"
            data-frames=\'[{"delay":500,"speed":1500,"frame":"0","from":"x:-500px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
            data-visibility="[\'on\', \'on\', \'on\', \'on\']"

            data-fontsize="[\'48\', \'48\', \'48\', \'38\']"
            data-lineheight="[\'58\', \'58\', \'58\', \'58\']"
            data-color="[\'#FFF\']"
            data-textAlign="[\'center\', \'center\', \'center\', \'center\']"

            data-x="[\'center\']"
            data-y="[\'center\']"
            data-hoffset="[\'0\', \'0\', \'0\', \'0\']"
            data-voffset="[\'-83\', \'-83\', \'-83\', \'-93\']"

            data-width="[\'1200\',\'992\',\'768\',\'480\']"
            data-height="[\'auto\', \'auto\', \'auto\', \'auto\']"
            data-whitespace="[\'normal\']"

            data-paddingtop="[0, 0, 0, 0]"
            data-paddingright="[15, 15, 15, 15]"
            data-paddingbottom="[0, 0, 0, 0]"
            data-paddingleft="[15, 15, 15, 15]"

            data-basealign="slide"
            data-responsive_offset="off"'
        ]);


        // SLIDE

        $slide1 = Slide::create([
            'title' => 'Welcome to Synergy Industry',
            'titlefr' => 'Bienvenue à Synergy Industry',
            'info' => 'Ensure the integrity & reliability of your structures and equipment',
            'infofr' => 'Assurer l\'intégrité & la fiabilité de vos ouvrages et de votre matériel',
            'photo' => 'uploads/slides/01.jpg',
            'slug' => 'Welcome to Synergy Industry',
            'delay' => 10,
            'transition_id' => $transition1->id ,
            'slideinfo_id' => $slideinfo1->id ,
            'slidetitle_id' => $slidetitle1->id
        ]);

        $slide2 = Slide::create([
            'title' => 'Quality and safety',
            'titlefr' => 'Qualité et Sécurité',
            'info' => 'Guaranteeing quality, safety & environmental protection',
            'infofr' => 'Garantir la qualité, la sécurité & la protection de l\'environnement',
            'photo' => 'uploads/slides/02.jpg',
            'slug' => 'Quality and safety',
            'delay' => 10,
            'transition_id' => $transition2->id ,
            'slideinfo_id' => $slideinfo2->id ,
            'slidetitle_id' => $slidetitle2->id
        ]);

        $slide3 = Slide::create([
            'title' => 'A Professional Team',
            'titlefr' => 'Une Équipe Professionnelle',
            'info' => 'Synergy Industry provides you with a team of professionals',
            'infofr' => 'synergy industry met à votre disposition une équipe de professionnelles',
            'photo' => 'uploads/slides/03.jpg',
            'slug' => 'A Professional Team',
            'delay' => 10,
            'transition_id' => $transition3->id ,
            'slideinfo_id' => $slideinfo3->id,
            'slidetitle_id' => $slidetitle3->id
        ]);

    }
}
