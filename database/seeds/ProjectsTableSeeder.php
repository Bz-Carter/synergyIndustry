<?php

use App\Project;
use App\Service;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $project1 = Project::create([
            'title' => 'TOTAL S.A.',
            'slug' => 'projet TOTALS.A.1',
            'descriptionfr' => 'HSE supervision of renovation works Supervision and control of works, all trades',
            'description' => 'Supervision HSE des travaux de rénovation Supervision et contrôle des travaux, tous corps de métier',
            'client' => 'TOTAL S.A.',
            'about' => 'HSE supervision of renovation works
                        Supervision and control of works, all trades
                            * 11 stations in Bouaké
                            * 01 Station in Dimbokro
                            * 01 station in Yamoussoukro
                            * 01 station in Daoukro
                            * 01 station in Minigna
                            * 01 station in Grand-Bereby',
            'aboutfr' => 'Supervision HSE des travaux de rénovation
            Supervision et contrôle des travaux, tous corps de métier
                *11 stations à Bouaké
                *01 Station à Dimbokro
                *01 station à Yamoussoukro
                *01 station à Daoukro
                *01 station à Minigna
                *01 station à Grand-Bereby',
            'dateproject' => 'Février–Septembre 2016, Février–Mai 2017, Février–Mars 2018',
            'image_01' => 'uploads/projects/totalsa_img01.jpg',
            'image_02' => 'uploads/projects/totalsa_img02.jpg',
            'image_03' => 'uploads/projects/totalsa_img03.jpg',
            'service_id' => 5
        ]);

        $project2 = Project::create([
            'title' => 'TOTAL S.A.',
            'slug' => 'projet TOTALSA2',
            'descriptionfr' => "Supervision of « all trades » works for the layout of TOTAL's headquarters.",
            'description' => 'Supervision travaux « tout corps de métier » de l’aménagement du siège de TOTAL.',
            'client' => 'TOTAL S.A.',
            'about' => "Supervision of « all trades » works for the layout of TOTAL's headquarters.",
            'aboutfr' => 'Supervision travaux « tout corps de métier » de l’aménagement du siège de TOTAL.',
            'dateproject' => 'Novembre 2016–Février 2017',
            'image_01' => 'uploads/projects/totalsa2_img01.jpg',
            'image_02' => 'uploads/projects/totalsa2_img02.jpg',
            'image_03' => 'uploads/projects/totalsa2_img03.jpg',
            'service_id' => 5
        ]);





        $project3 = Project::create([
            'title' => 'Unilever',
            'slug' => 'projet Unilever',
            'descriptionfr' => 'Constitutions of the technical files of 15 tanks:...',
            'description' => 'Constitutions des dossiers techniques de 15 réservoirs...',
            'client' => 'UNILEVER',
            'about' => 'Constitutions of the technical files of 15 tanks:

            Tank thickness control
            2D and 3D plans for reservoirs
            Realization of iso diagrams of ancillary piping
            Constitution of technical files according to CODRES',
            'aboutfr' => 'Constitutions des dossiers techniques de 15 réservoirs :

            Contrôle d’épaisseur des réservoirs
            Réalisation des plans 2D et 3D des réservoirs
            Réalisation des schémas iso des tuyauteries annexes
            Constituions des dossiers techniques suivant le CODRES',
            'dateproject' => 'Avril–Mai 2017',
            'image_01' => 'uploads/projects/unilever_img01.jpg',
            'image_02' => 'uploads/projects/unilever_img02.jpg',
            'image_03' => 'uploads/projects/unilever_img03.jpg',
            'service_id' => 6
        ]);





        $project4 = Project::create([
            'title' => 'SIR',
            'slug' => 'projet SIR1',
            'description' => 'Inspection and control of piping in for the preparation of the decision of DHC 2018',
            'descriptionfr' => 'Inspection et contrôle des tuyauteries dans pour la préparation de l’arrêt de DHC 2018',
            'client' => 'SIR',
            'about' => 'Inspection and control of piping in for the preparation of the decision of DHC 2018',
            'aboutfr' => 'Inspection et contrôle des tuyauteries dans pour la préparation de l’arrêt de DHC 2018',
            'dateproject' => 'Novembre 2017–Février 2018',
            'image_01' => 'uploads/projects/sir3e_img01.jpg',
            'image_02' => 'uploads/projects/sir3e_img02.jpg',
            'image_03' => 'uploads/projects/sir3e_img03.jpg',
            'service_id' => 7
        ]);

        $project5 = Project::create([
            'title' => 'SIR',
            'slug' => 'projet SIR2',
            'description' => 'Provision of a senior inspection engineer in consultancy with the SIR for:...',
            'descriptionfr' => 'Mise à disposition d’un ingénieur Inspection senior en consultance à la SIR pour :...',
            'client' => 'SIR',
            'about' => 'Provision of a senior inspection engineer in consultancy with the SIR for:

            Preparation and coordination of the DHC judgment
            Preparation of the HSK2 / SMB judgment
            Implementation of SIR Inspection methods
            Development of equipment inspection plans',
            'aboutfr' => 'Mise à disposition d’un ingénieur Inspection senior en consultance à la SIR pour :

            Préparation et coordination de l’arrêt DHC
            Préparation de l’arrêt HSK2/SMB
            Mise en place des méthodes Inspection à la SIR
            Elaboration des plans inspection des équipements',
            'dateproject' => 'Janvier-Juin 2018',
            'image_01' => 'uploads/projects/sir2e_img01.jpg',
            'image_02' => 'uploads/projects/sir2e_img02.jpg',
            'image_03' => 'uploads/projects/sir2e_img03.jpg',
            'service_id' => 7
        ]);

        $project6 = Project::create([
            'title' => 'PUMA ENERGY',
            'slug' => 'projet PUMAENERGY',
            'description' => 'Bitumen containers inspection by endoscopy.',
            'descriptionfr' => 'Contrôle par endoscopie des containers de bitume.',
            'client' => 'PUMA ENERGY',
            'about' => 'Bitumen containers inspection by endoscopy.',
            'aboutfr' => 'Contrôle par endoscopie des containers de bitume.',
            'dateproject' => 'Avril 2018',
            'image_01' => 'uploads/projects/puma_im01.jpg',
            'image_02' => 'uploads/projects/puma_im02.jpg',
            'image_03' => 'uploads/projects/puma_im03.jpg',
            'service_id' => 7
        ]);

        $project7 = Project::create([
            'title' => 'SIR',
            'slug' => 'projet SIR3',
            'description' => 'Ultrasonic control of the welds of the butane sphere 61S01 by cord of the SIR (Société Ivoirienne de Raffinage) as part of the regulatory decree.',
            'descriptionfr' => "Contrôle par Ultrason des soudures de la sphère de butane 61S01 par cordage de la SIR (Société Ivoirienne de Raffinage) dans le cadre de l’arrêt réglementaire.",
            'client' => 'SIR',
            'about' => 'Ultrasonic control of the welds of the butane sphere 61S01 by cord of the SIR (Société Ivoirienne de Raffinage) as part of the regulatory decree.',
            'aboutfr' => "Contrôle par Ultrason des soudures de la sphère de butane 61S01 par cordage de la SIR (Société Ivoirienne de Raffinage) dans le cadre de l’arrêt réglementaire.",
            'dateproject' => 'Avril 2018',
            'image_01' => 'uploads/projects/sir_img01.jpg',
            'image_02' => 'uploads/projects/sir_img02.jpg',
            'image_03' => 'uploads/projects/sir_img03.jpg',
            'service_id' => 7
        ]);

        $project8 = Project::create([
            'title' => 'AMI (Abidjan Multi-Industries)',
            'slug' => 'projet AMI',
            'description' => 'Inspection and control by penetrant testing of TOTAL and ORYX hydrocarbon flasks
            (12 balloons from 30 to 60m3)',
            'descriptionfr' => "Inspection et Contrôle par ressuage des ballons d’hydrocarbure de TOTAL et de ORYX
            (12 ballons de 30 à 60m3)",
            'client' => "AMI (Abidjan Multi-Industries)",
            'about' => 'Inspection and control by penetrant testing of TOTAL and ORYX hydrocarbon flasks
            (12 balloons from 30 to 60m3)',
            'aboutfr' => "Inspection et Contrôle par ressuage des ballons d’hydrocarbure de TOTAL et de ORYX
            (12 ballons de 30 à 60m3)",
            'dateproject' => 'Janvier-Février 2018',
            'image_01' => 'uploads/projects/maxres_img01.jpg',
            'image_02' => 'uploads/projects/maxres_img02.jpg',
            'image_03' => 'uploads/projects/maxres_img03.jpg',
            'service_id' => 7
        ]);

        $project9 = Project::create([
            'title' => 'ORYX ENERGY',
            'slug' => 'projet ORYXENERGY',
            'description' => 'Regulatory control of electrical installations.',
            'descriptionfr' => 'Contrôle réglementaires des installations électriques.',
            'client' => 'ORYX ENERGY',
            'about' => 'Regulatory control of electrical installations.',
            'aboutfr' => 'Contrôle réglementaires des installations électriques.',
            'dateproject' => 'Décembre 2017',
            'image_01' => 'uploads/projects/oryx_img01.jpg',
            'image_02' => 'uploads/projects/oryx_img02.jpg',
            'image_03' => 'uploads/projects/oryx_img03.jpg',
            'service_id' => 7
        ]);

        $project10 = Project::create([
            'title' => 'AIR LIQUIDE',
            'slug' => 'projet AIRLIQUIDE',
            'description' => 'Inspection and controls of gas racks.
            Inspection and certification of accessories and lifting device.',
            'descriptionfr' => 'Inspection et contrôles des racks de gaz.
            Inspection et certification des accessoires et appareil de levages.',
            'client' => 'AIR LIQUIDE',
            'about' => 'Inspection and controls of gas racks.
            Inspection and certification of accessories and lifting device.',
            'aboutfr' => 'Inspection et contrôles des racks de gaz.
            Inspection et certification des accessoires et appareil de levages.',
            'dateproject' => "Contrat permanent depuis 2017 jusqu'à aujourd'hui",
            'image_01' => 'uploads/projects/airLiquide_img01.jpg',
            'image_02' => 'uploads/projects/airLiquide_img02.jpg',
            'image_03' => 'uploads/projects/airLiquide_img03.jpg',
            'service_id' => 8
        ]);

        $project11 = Project::create([
            'title' => 'TOTAL S.A.',
            'slug' => 'projet TOTALSA3',
            'description' => 'Inspection and control of the pipes and 03 tanks of the SITARAIL depot of Ferké',
            'descriptionfr' => 'Inspection et contrôle des tuyauteries et 03 cuves du dépôt SITARAIL de Ferké',
            'client' => 'TOTAL S.A',
            'about' => 'Inspection and control of the pipes and 03 tanks of the SITARAIL depot of Ferké

             Penetrant testing of welds
             Control of tank and piping thicknesses
             Isometric representation of piping and tanks',
            'aboutfr' => 'Inspection et contrôle des tuyauteries et 03 cuves du dépôt SITARAIL de Ferké

            Contrôle par ressuage des soudures
            Contrôle des épaisseurs des cuves et des tuyauteries
            Représentation isométrique des tuyauteries et des cuves',
            'dateproject' => 'Octobre 2016',
            'image_01' => 'uploads/projects/totalsa3_img01.jpg',
            'image_02' => 'uploads/projects/totalsa3_img02.jpg',
            'image_03' => 'uploads/projects/totalsa3_img03.jpg',
            'service_id' => 7
        ]);

        $project12 = Project::create([
            'title' => 'AZITO ENERGIE',
            'slug' => 'projet AZITOENERGIE',
            'description' => 'Control of 2 6000m3 tanks with a view to their rehabilitation:',
            'descriptionfr' => 'Contrôle de 2 réservoirs de 6000m3 en vue de leur réhabilitation:',
            'client' => 'AZITO ENERGIE',
            'about' => 'Control of 2 6000m3 tanks with a view to their rehabilitation:

            Thickness measurement of all parts of the tanks
            Pipe and accessory thickness measurements
            Magnetoscopy and penetrant testing of bottom welds
            X-ray of the nodes
            Coating control, painting
            Inspection of all parts and accessories
            Constitution of specifications for the rehabilitation of reservoirs',
            'aboutfr' => 'Contrôle de 2 réservoirs de 6000m3 en vue de leur réhabilitation:

            Mesure d’épaisseur de toutes les parties des bacs
            Mesures d’épaisseur des tuyauteries et accessoires
            Magnétoscopie et ressuage des soudures du fond
            Radiographie des nœuds
            Contrôle de revêtement, peinture
            Inspection de toutes les parties et accessoires
            Constitution du cahier des charges pour la réhabilitation des réservoirs',
            'dateproject' => 'Mars–mai 2017',
            'image_01' => 'uploads/projects/azito_energy_img01.jpg',
            'image_02' => 'uploads/projects/azito_energy_img02.jpg',
            'image_03' => 'uploads/projects/azito_energy_img03.jpg',
            'service_id' => 7
        ]);

        $project13 = Project::create([
            'title' => 'TOTAL Guinée',
            'slug' => 'projet TOTALGuinée',
            'descriptionfr' => 'Control of the tanks of 8 tanks of 50 m3. Inspection of tanks.',
            'description' => 'Contrôles des cuves de 8 cuves de 50 m3. Inspection des cuves.',
            'client' => 'TOTAL Guinée',
            'about' => 'Control of the tanks of 8 tanks of 50 m3.
             Inspection of tanks.

            Thickness and MPI control of tanks
            Hydraulic tank tests',
            'aboutfr' => 'Contrôles des cuves de 8 cuves de 50 m3.
            Inspection des cuves.

            Contrôle d’épaisseur et par MPI des cuves
            Epreuves hydraulique des cuves',
            'dateproject' => 'Avril 2017',
            'image_01' => 'uploads/projects/totalsa4_img01.jpg',
            'image_02' => 'uploads/projects/totalsa4_img02.jpg',
            'image_03' => 'uploads/projects/totalsa4_img03.jpg',
            'service_id' => 7
        ]);

        $project14 = Project::create([
            'title' => 'CORLAY / AMI',
            'slug' => 'projet CORLAYAMI',
            'descriptionfr' => 'Contrôles par magnétoscopie et US de 18 ballons d’hydrocarbures pour CORLAY.',
            'description' => 'Magnetic particle and US checks of 18 oil cylinders for CORLAY.',
            'client' => "CORLAY AMI",
            'aboutfr' => 'Contrôles par magnétoscopie et US de 18 ballons d’hydrocarbures pour CORLAY.',
            'about' => 'Magnetic particle and US checks of 18 oil cylinders for CORLAY.',
            'dateproject' => 'Janvier–Mars 2017',
            'image_01' => 'uploads/projects/corlay_img01.jpg',
            'image_02' => 'uploads/projects/corlay_img02.jpg',
            'image_03' => 'uploads/projects/corlay_img03.jpg',
            'service_id' => 7
        ]);

        $project15 = Project::create([
            'title' => 'SITARAIL',
            'slug' => 'projet SITARAIL',
            'descriptionfr' => 'Inspection de 11 cuves de wagons citernes en vue de leur réhabilitation',
            'description' => 'Inspection of 11 tank car tanks with a view to their rehabilitation',
            'client' => 'SITARAIL',
            'aboutfr' => 'Inspection de 11 cuves de wagons citernes en vue de leur réhabilitation

            Contrôle d’épaisseur de cuves
            Contrôle par MPI des soudures
            Inspection par endoscopie
            Edition des cahiers des charges de réhabilitation
            Supervisions des travaux et épreuves hydrauliques',
            'about' => 'Inspection of 11 tank car tanks with a view to their rehabilitation

            Tank thickness control
            MPI control of welds
            Endoscopy inspection
            Editing rehabilitation specifications
            Supervision of hydraulic works and tests',
            'dateproject' => 'Mai 2016–Janvier 2017',
            'image_01' => 'uploads/projects/sitarail_img01.jpg',
            'image_02' => 'uploads/projects/sitarail_img02.jpg',
            'image_03' => 'uploads/projects/sitarail_img03.jpg',
            'service_id' => 7
        ]);

        $project16 = Project::create([
            'title' => 'PACIFIC DRILLING',
            'slug' => 'projet PACIFICDRILLING',
            'descriptionfr' => 'Inspection et certification des 400 extincteurs de sécurité sur la plateforme de forage PACIFFIC SCIROCCO.',
            'description' => 'Inspection and certification of the 400 safety extinguishers on the PACIFFIC SCIROCCO drilling platform.',
            'client' => 'PACIFIC DRILLING',
            'aboutfr' => 'Inspection et certification des 400 extincteurs de sécurité sur la plateforme de forage PACIFFIC SCIROCCO.',
            'about' => 'Inspection and certification of the 400 safety extinguishers on the PACIFFIC SCIROCCO drilling platform.',
            'dateproject' => 'Janvier 2017',
            'image_01' => 'uploads/projects/pacifiquedriling_img01.jpg',
            'image_02' => 'uploads/projects/pacifiquedriling_img02.jpg',
            'image_03' => 'uploads/projects/pacifiquedriling_img03.jpg',
            'service_id' => 7
        ]);

        $project17 = Project::create([
            'title' => 'TONGON GOLD MINE',
            'slug' => 'projet TONGONGOLDMINE',
            'descriptionfr' => 'Supervision et contrôle des soudures des travaux de réhabilitation de la ligne du TSF :
            4000 m et 1500m + 755m.',
            'description' => 'Supervision and control of welds of TSF line rehabilitation works:
            4000 m and 1500m + 755m.',
            'client' => 'TONGON GOLD MINE',
            'aboutfr' => 'Supervision et contrôle des soudures des travaux de réhabilitation de la ligne du TSF :
            4000 m et 1500m + 755m.',
            'about' => 'Supervision and control of welds of TSF line rehabilitation works:
            4000 m and 1500m + 755m.',
            'dateproject' => 'Novembre 2015 & Décembre 2016',
            'image_01' => 'uploads/projects/Tongongold_img01.jpg',
            'image_02' => 'uploads/projects/Tongongold_img02.jpg',
            'image_03' => 'uploads/projects/Tongongold_img03.jpg',
            'service_id' => 7
        ]);

        $project18 = Project::create([
            'title' => 'TONGON GOLD MINE',
            'slug' => 'projet TONGONGOLDMINE2',
            'descriptionfr' => 'Audi technique des installations de la mine',
            'description' => 'Audi technical mine facilities:',
            'client' => 'TONGON GOLD MINE',
            'aboutfr' => 'Audi technique des installations de la mine:

            Expertise et contrôle de la TSF line suit à un incident
            Inspection des tuyauteries, vannes, tank etc...
            Présentation du rapport d’expertise à la direction',
            'about' => 'Audi technical mine facilities:

                        Expertise and control of the TSF line following an incident
                        Inspection of pipes, valves, tank etc ...
                        Presentation of the expert report to management',
            'dateproject' => 'Mai 2015',
            'image_01' => 'uploads/projects/Tongongold2_img01.jpg',
            'image_02' => 'uploads/projects/Tongongold2_img02.jpg',
            'image_03' => 'uploads/projects/Tongongold2_img03.jpg',
            'service_id' => 7
        ]);


    }
}
