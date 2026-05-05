<?php
declare(strict_types=1);

$site = [
    'name' => 'Diamant Security GmbH',
    'brand' => 'Diamant Security',
    'base_url' => 'https://diamantsecurity.de',
    'location' => 'Neckarsulm - Heilbronn, deutschlandweit im Einsatz',
    'street_address' => 'Kochendorfer Str. 54, 74172 Neckarsulm',
    'phone_display' => '+49 163 9162206',
    'phone_href' => '+491639162206',
    'email' => 'info@diamantsecurity.de',
    'mail_to' => 'info@diamantsecurity.de',
    'whatsapp' => '491639162206',
    'socials' => [
        'Facebook' => 'https://www.facebook.com/diamantsecurity',
        'Instagram' => 'https://www.instagram.com/diamantsecurity',
        'LinkedIn' => 'https://www.linkedin.com/company/diamantsecurity',
    ],
    'legal' => [
        'company' => 'Diamant Security GmbH',
        'address' => 'Kochendorfer Str. 54, 74172 Neckarsulm',
        'representative' => 'Sheqir Kutllovci',
        'register' => '',
        'vat_id' => '',
        'supervisory_authority' => '',
        'permit_34a' => '',
        'insurance' => '',
    ],
];

$routePaths = [
    'de' => [
        'startseite' => '',
        'ueber-uns' => 'ueber-uns',
        'leistungen' => 'leistungen',
        'einsatzgebiete' => 'einsatzgebiete',
        'karriere' => 'karriere',
        'kontakt' => 'kontakt',
        'impressum' => 'impressum',
        'datenschutz' => 'datenschutz',
        'agb' => 'agb',
        'veranstaltungsschutz' => 'veranstaltungsschutz',
        'objektschutz' => 'objektschutz',
        'baustellenbewachung' => 'baustellenbewachung',
        'personenschutz' => 'personenschutz',
        'empfang-kontrolldienst' => 'empfang-kontrolldienst',
        'revierdienst-streifendienst' => 'revierdienst-streifendienst',
    ],
    'sq' => [
        'startseite' => '',
        'ueber-uns' => 'rreth-nesh',
        'leistungen' => 'sherbimet',
        'einsatzgebiete' => 'zonat-e-operimit',
        'karriere' => 'karriera',
        'kontakt' => 'kontakti',
        'impressum' => 'impressum',
        'datenschutz' => 'datenschutz',
        'agb' => 'agb',
        'veranstaltungsschutz' => 'sigurimi-i-eventeve',
        'objektschutz' => 'mbrojtja-e-objekteve',
        'baustellenbewachung' => 'ruajtja-e-kantiereve',
        'personenschutz' => 'mbrojtja-personale',
        'empfang-kontrolldienst' => 'recepsion-kontroll',
        'revierdienst-streifendienst' => 'patrullim-kontroll',
    ],
];

$routeAliases = [
    'de' => [
        'einsatzgebiet' => 'einsatzgebiete',
        'index.php' => 'startseite',
    ],
    'sq' => [
        'zona-e-operimit' => 'einsatzgebiete',
        'index.php' => 'startseite',
    ],
];

$cities = ['Neckarsulm', 'Heilbronn', 'Stuttgart', 'München', 'Berlin', 'Hamburg', 'Frankfurt am Main', 'Köln', 'Hannover', 'Dresden', 'Weitere Städte nach Absprache'];

$federalStatesByLang = [
    'de' => [
        ['Baden-Württemberg', 'Stuttgart'],
        ['Bayern', 'München'],
        ['Berlin', 'Berlin'],
        ['Brandenburg', 'Potsdam'],
        ['Bremen', 'Bremen'],
        ['Hamburg', 'Hamburg'],
        ['Hessen', 'Frankfurt am Main'],
        ['Mecklenburg-Vorpommern', 'Rostock'],
        ['Niedersachsen', 'Hannover'],
        ['Nordrhein-Westfalen', 'Köln'],
        ['Rheinland-Pfalz', 'Mainz'],
        ['Saarland', 'Saarbrücken'],
        ['Sachsen', 'Dresden'],
        ['Sachsen-Anhalt', 'Magdeburg'],
        ['Schleswig-Holstein', 'Kiel'],
        ['Thüringen', 'Erfurt'],
    ],
    'sq' => [
        ['Baden-Württemberg - Baden-Württemberg', 'Stuttgart'],
        ['Bavaria - Bayern', 'München'],
        ['Berlin - Berlin', 'Berlin'],
        ['Brandenburg - Brandenburg', 'Potsdam'],
        ['Bremen - Bremen', 'Bremen'],
        ['Hamburg - Hamburg', 'Hamburg'],
        ['Hessen - Hessen', 'Frankfurt am Main'],
        ['Mecklenburg-Vorpommern - Mecklenburg-Vorpommern', 'Rostock'],
        ['Niedersachsen - Niedersachsen', 'Hannover'],
        ['Nordrhein-Westfalen - Nordrhein-Westfalen', 'Köln'],
        ['Rheinland-Pfalz - Rheinland-Pfalz', 'Mainz'],
        ['Saarland - Saarland', 'Saarbrücken'],
        ['Sachsen - Sachsen', 'Dresden'],
        ['Sachsen-Anhalt - Sachsen-Anhalt', 'Magdeburg'],
        ['Schleswig-Holstein - Schleswig-Holstein', 'Kiel'],
        ['Thüringen - Thüringen', 'Erfurt'],
    ],
];

$servicesByLang = [
    'de' => [
        'veranstaltungsschutz' => [
            'nav' => 'Veranstaltungsschutz',
            'accent' => 'Eventschutz',
            'metaTitle' => 'Veranstaltungsschutz deutschlandweit - Diamant Security GmbH',
            'metaDescription' => 'Veranstaltungsschutz deutschlandweit für Firmenfeiern, Messen, Konzerte, Sportveranstaltungen, öffentliche Aktivitäten und VIP-Bereiche.',
            'title' => 'Veranstaltungsschutz deutschlandweit',
            'intro' => 'Wir sichern Veranstaltungen, öffentliche Aktivitäten und Sportereignisse mit klarer Einlasskontrolle, Besucherlenkung, Crowd Control und ruhiger Präsenz. Der Einsatz wird vorab passend zur Location, Besucherzahl und Risikolage geplant.',
            'summary' => 'Einlasskontrollen, Besucherlenkung, Ordnerdienste, Crowd Control, VIP-Betreuung und Schutz sensibler Bereiche.',
            'sections' => [
                'Geeignet für' => ['Firmenveranstaltungen', 'Messen', 'Konzerte', 'Öffentliche Aktivitäten', 'Sportveranstaltungen wie Fußball und Basketball', 'VIP-Events'],
                'Leistungen' => ['Einlasskontrolle', 'Besucherlenkung', 'Ordnerdienst', 'Crowd Control', 'Kontrolle sensibler Bereiche', 'Konfliktprävention', 'Notfallunterstützung'],
            ],
            'outcomes' => ['Geordneter Einlass', 'Ruhige Crowd Control', 'Geschützte VIP- und Backstagebereiche'],
            'cta' => 'Veranstaltungsschutz anfragen',
        ],
        'objektschutz' => [
            'nav' => 'Objektschutz',
            'accent' => 'Objekte',
            'metaTitle' => 'Objektschutz deutschlandweit - Diamant Security GmbH',
            'metaDescription' => 'Objektschutz deutschlandweit für Firmengebäude, Industrieanlagen, Lagerhallen, Büroflächen und sensible Bereiche.',
            'title' => 'Objektschutz deutschlandweit',
            'intro' => 'Wir schützen Firmenstandorte, Immobilien und sensible Bereiche durch Zugangskontrolle, Kontrollgänge und dokumentierte Sicherheitspräsenz.',
            'summary' => 'Physischer Objektschutz für Firmengebäude, Büroflächen, Industrieanlagen, Lagerhallen und private Objekte.',
            'sections' => [
                'Geeignet für' => ['Firmengebäude', 'Büroflächen', 'Industrieanlagen', 'Lagerhallen', 'Gewerbeimmobilien', 'Parkflächen'],
                'Leistungen' => ['Zugangskontrolle', 'Kontrollgänge', 'Nachtbewachung', 'Prävention von Diebstahl und Vandalismus', 'Dokumentation', 'Alarmreaktion nach Vereinbarung'],
            ],
            'outcomes' => ['Kontrollierte Zugänge', 'Prävention statt Reaktion', 'Nachvollziehbare Dokumentation'],
            'cta' => 'Objektschutz anfragen',
        ],
        'baustellenbewachung' => [
            'nav' => 'Baustellenbewachung',
            'accent' => 'Baustellen',
            'metaTitle' => 'Baustellenbewachung deutschlandweit - Diamant Security GmbH',
            'metaDescription' => 'Baustellenbewachung deutschlandweit zum Schutz vor Diebstahl, Vandalismus und unbefugtem Zutritt.',
            'title' => 'Baustellenbewachung deutschlandweit',
            'intro' => 'Wir sichern Baustellen, Materiallager und Maschinenbereiche mit geplanter Präsenz, Zugangskontrolle und Kontrollgängen.',
            'summary' => 'Schutz von Baustellen, Materialien, Maschinen und Zugängen durch geplante Sicherheitsmaßnahmen.',
            'sections' => [
                'Typische Risiken' => ['Diebstahl von Werkzeugen und Maschinen', 'Vandalismus', 'Unbefugtes Betreten', 'Schäden an Material', 'Bauverzögerungen'],
                'Leistungen' => ['Nachtbewachung', 'Wochenendbewachung', 'Kontrollgänge', 'Zugangskontrolle', 'Meldung besonderer Vorkommnisse'],
            ],
            'outcomes' => ['Material und Maschinen geschützt', 'Weniger Störungen im Bauablauf', 'Klare Meldung bei Auffälligkeiten'],
            'cta' => 'Baustellenbewachung anfragen',
        ],
        'personenschutz' => [
            'nav' => 'Personenschutz',
            'accent' => 'Diskretion',
            'metaTitle' => 'Personenschutz deutschlandweit - Diamant Security GmbH',
            'metaDescription' => 'Diskreter Personenschutz deutschlandweit für Unternehmer, Gäste, VIPs und besondere Sicherheitslagen.',
            'title' => 'Personenschutz deutschlandweit',
            'intro' => 'Personenschutz erfordert Diskretion, Vorbereitung und ruhiges Auftreten. Wir planen Begleitung, Wege und Abläufe passend zur Situation.',
            'summary' => 'Diskreter Schutz für VIPs, gefährdete Personen, Unternehmer, Gäste und besondere Situationen.',
            'sections' => [
                'Geeignet für' => ['VIPs und Personen des öffentlichen Lebens', 'Unternehmer und Führungskräfte', 'Gäste mit Schutzbedarf', 'Begleitschutz', 'Vertrauliche Termine', 'Events mit besonderem Schutzbedarf'],
                'Arbeitsweise' => ['Risikoeinschätzung', 'Diskrete Begleitung', 'Planung von Wegen und Abläufen', 'Professionelles Auftreten', 'Prävention statt Eskalation'],
            ],
            'outcomes' => ['Diskrete Begleitung', 'Risikobewusste Planung', 'Ruhiges Auftreten'],
            'cta' => 'Vertrauliche Anfrage stellen',
        ],
        'empfang-kontrolldienst' => [
            'nav' => 'Empfangs- & Kontrolldienst',
            'accent' => 'Empfang',
            'metaTitle' => 'Empfangsdienst und Kontrolldienst deutschlandweit - Diamant Security GmbH',
            'metaDescription' => 'Empfangs- und Kontrolldienst deutschlandweit für Unternehmen, Veranstaltungen und sensible Standorte.',
            'title' => 'Empfangs- und Kontrolldienst deutschlandweit',
            'intro' => 'Wir verbinden freundlichen Empfang mit klarer Zutrittskontrolle. Besucher, Lieferanten und Gäste werden professionell geführt.',
            'summary' => 'Zugangskontrolle, Besucherregistrierung und sichtbare Sicherheitspräsenz mit professionellem Auftreten.',
            'sections' => [
                'Leistungen' => ['Besucherempfang', 'Zugangskontrolle', 'Besucherregistrierung', 'Lieferantenkontrolle', 'Weiterleitung von Gästen', 'Sichtbare Sicherheitspräsenz'],
                'Geeignet für' => ['Unternehmen', 'Veranstaltungen', 'Sensible Standorte', 'Empfang mit Sicherheitsfunktion'],
            ],
            'outcomes' => ['Professioneller erster Eindruck', 'Geordnete Zutrittskontrolle', 'Freundliche Sicherheitspräsenz'],
            'cta' => 'Empfangsdienst anfragen',
        ],
        'revierdienst-streifendienst' => [
            'nav' => 'Revierdienst / Streifendienst',
            'accent' => 'Kontrollgänge',
            'metaTitle' => 'Revierdienst deutschlandweit - Diamant Security GmbH',
            'metaDescription' => 'Revierdienst und Streifendienst deutschlandweit für regelmäßige Kontrollgänge und Objektprüfungen.',
            'title' => 'Revierdienst und Streifendienst deutschlandweit',
            'intro' => 'Nicht jeder Standort benötigt dauerhafte Bewachung. Revierdienst schafft regelmäßige Kontrolle, sichtbare Prävention und schnelle Meldung bei Auffälligkeiten.',
            'summary' => 'Regelmäßige Kontrollgänge, Objektprüfungen, Patrouillen und Monitoring zur Prävention von Schäden.',
            'sections' => [
                'Leistungen' => ['Regelmäßige Kontrollgänge', 'Prüfung von Türen, Toren und Fenstern', 'Außenkontrollen', 'Patrouillen und Monitoring', 'Meldung besonderer Vorkommnisse', 'Dokumentation nach Vereinbarung'],
                'Geeignet für' => ['Firmengebäude', 'Lagerflächen', 'Baustellen', 'Parkplätze', 'Immobilien', 'Außenbereiche'],
            ],
            'outcomes' => ['Regelmäßige Kontrollgänge', 'Prävention durch Präsenz', 'Meldung von Auffälligkeiten'],
            'cta' => 'Revierdienst anfragen',
        ],
    ],
    'sq' => [
        'veranstaltungsschutz' => [
            'nav' => 'Sigurimi i eventeve',
            'accent' => 'Evente',
            'metaTitle' => 'Sigurimi i eventeve në Gjermani - Diamant Security GmbH',
            'metaDescription' => 'Sigurim profesional për evente, aktivitete publike, ndeshje sportive, koncerte dhe zona VIP në gjithë Gjermaninë.',
            'title' => 'Sigurimi i eventeve në Gjermani',
            'intro' => 'Ne sigurojmë evente, aktivitete publike dhe ndeshje sportive me kontroll hyrjeje, orientim të vizitorëve, menaxhim turmash dhe prezencë të qetë. Plani përgatitet sipas lokacionit, numrit të pjesëmarrësve dhe rrezikut.',
            'summary' => 'Kontroll hyrjeje, orientim vizitorësh, shërbim rregulli, menaxhim turmash, VIP dhe mbrojtje e zonave sensitive.',
            'sections' => [
                'I përshtatshëm për' => ['Evente biznesi', 'Panaire', 'Koncerte', 'Aktivitete publike', 'Ndeshje sportive si futboll dhe basketboll', 'VIP-evente'],
                'Shërbimet' => ['Kontroll hyrjeje', 'Orientim vizitorësh', 'Shërbim rregulli', 'Menaxhim turmash (Crowd Control)', 'Kontroll i zonave sensitive', 'Parandalim konfliktesh', 'Mbështetje në emergjenca'],
            ],
            'outcomes' => ['Hyrje e organizuar', 'Menaxhim i qetë i turmave', 'Zona VIP të mbrojtura'],
            'cta' => 'Kërko sigurim eventi',
        ],
        'objektschutz' => [
            'nav' => 'Mbrojtja e objekteve',
            'accent' => 'Objekte',
            'metaTitle' => 'Mbrojtja e objekteve në Gjermani - Diamant Security GmbH',
            'metaDescription' => 'Mbrojtje objektesh në gjithë Gjermaninë për kompani, industri, depo, zyra dhe zona sensitive.',
            'title' => 'Mbrojtja e objekteve në Gjermani',
            'intro' => 'Ne mbrojmë objekte biznesi, prona dhe zona sensitive me kontroll hyrjeje, patrullime dhe prezencë sigurie të dokumentuar.',
            'summary' => 'Sigurim fizik i objekteve për kompani, zyra, industri, depo dhe objekte private.',
            'sections' => [
                'I përshtatshëm për' => ['Objekte biznesi', 'Zyra', 'Objekte industriale', 'Depo', 'Prona komerciale', 'Parkime'],
                'Shërbimet' => ['Kontroll hyrjeje', 'Patrullime', 'Ruajtje nate', 'Parandalim vjedhjeje dhe vandalizmi', 'Dokumentim', 'Reagim alarmi sipas marrëveshjes'],
            ],
            'outcomes' => ['Hyrje të kontrolluara', 'Parandalim para reagimit', 'Dokumentim i qartë'],
            'cta' => 'Kërko mbrojtje objekti',
        ],
        'baustellenbewachung' => [
            'nav' => 'Ruajtja e kantiereve',
            'accent' => 'Kantiere',
            'metaTitle' => 'Ruajtja e kantiereve në Gjermani - Diamant Security GmbH',
            'metaDescription' => 'Ruajtje kantieresh në gjithë Gjermaninë kundër vjedhjes, vandalizmit dhe hyrjes së paautorizuar.',
            'title' => 'Ruajtja e kantiereve në Gjermani',
            'intro' => 'Ne sigurojmë kantiere, materiale dhe makineri me prezencë të planifikuar, kontroll hyrjeje dhe patrullime.',
            'summary' => 'Mbrojtje e kantiereve, materialeve, makinerive dhe hyrjeve me masa të planifikuara sigurie.',
            'sections' => [
                'Rreziqe tipike' => ['Vjedhje mjetesh dhe makinerish', 'Vandalizëm', 'Hyrje e paautorizuar', 'Dëmtime materiali', 'Vonesa në ndërtim'],
                'Shërbimet' => ['Ruajtje nate', 'Ruajtje fundjave', 'Patrullime', 'Kontroll hyrjeje', 'Raportim i incidenteve'],
            ],
            'outcomes' => ['Materiale dhe makineri të mbrojtura', 'Më pak ndërprerje në punime', 'Raportim i qartë'],
            'cta' => 'Kërko ruajtje kantieri',
        ],
        'personenschutz' => [
            'nav' => 'Mbrojtja personale',
            'accent' => 'Diskrecion',
            'metaTitle' => 'Mbrojtja personale në Gjermani - Diamant Security GmbH',
            'metaDescription' => 'Mbrojtje personale diskrete në gjithë Gjermaninë për sipërmarrës, mysafirë, VIP dhe situata të veçanta.',
            'title' => 'Mbrojtja personale në Gjermani',
            'intro' => 'Mbrojtja personale kërkon diskrecion, përgatitje dhe sjellje të qetë. Ne planifikojmë shoqërimin, rrugët dhe procesin sipas situatës.',
            'summary' => 'Mbrojtje diskrete për VIP, persona të rrezikuar, sipërmarrës, mysafirë dhe situata të veçanta.',
            'sections' => [
                'I përshtatshëm për' => ['VIP dhe persona publikë', 'Sipërmarrës dhe drejtues', 'Mysafirë me nevojë sigurie', 'Shoqërim sigurie', 'Takime konfidenciale', 'Evente me nevojë të veçantë sigurie'],
                'Mënyra e punës' => ['Vlerësim rreziku', 'Shoqërim diskret', 'Planifikim rrugësh dhe procesesh', 'Sjellje profesionale', 'Parandalim para eskalimit'],
            ],
            'outcomes' => ['Shoqërim diskret', 'Planifikim i kujdesshëm', 'Prezencë e qetë'],
            'cta' => 'Dërgo kërkesë konfidenciale',
        ],
        'empfang-kontrolldienst' => [
            'nav' => 'Recepsion & kontroll',
            'accent' => 'Recepsion',
            'metaTitle' => 'Recepsion dhe kontroll në Gjermani - Diamant Security GmbH',
            'metaDescription' => 'Shërbim recepsioni dhe kontrolli në gjithë Gjermaninë për kompani, evente dhe objekte sensitive.',
            'title' => 'Recepsion dhe kontroll në Gjermani',
            'intro' => 'Ne kombinojmë pritje profesionale me kontroll të qartë hyrjeje. Vizitorët, furnitorët dhe mysafirët drejtohen me rregull.',
            'summary' => 'Kontroll hyrjeje, regjistrim vizitorësh dhe prezencë sigurie me paraqitje profesionale.',
            'sections' => [
                'Shërbimet' => ['Pritje vizitorësh', 'Kontroll hyrjeje', 'Regjistrim vizitorësh', 'Kontroll furnitorësh', 'Drejtim mysafirësh', 'Prezencë sigurie'],
                'I përshtatshëm për' => ['Kompani', 'Evente', 'Objekte sensitive', 'Recepsion me funksion sigurie'],
            ],
            'outcomes' => ['Përshtypje e parë profesionale', 'Hyrje të organizuara', 'Prezencë miqësore sigurie'],
            'cta' => 'Kërko shërbim recepsioni',
        ],
        'revierdienst-streifendienst' => [
            'nav' => 'Patrullim / kontroll',
            'accent' => 'Patrullime',
            'metaTitle' => 'Patrullim dhe kontroll në Gjermani - Diamant Security GmbH',
            'metaDescription' => 'Patrullim dhe kontroll objektesh në gjithë Gjermaninë për inspektime të rregullta dhe parandalim dëmesh.',
            'title' => 'Patrullim dhe kontroll në Gjermani',
            'intro' => 'Jo çdo objekt ka nevojë për ruajtje të përhershme. Patrullimi krijon kontroll të rregullt, parandalim të dukshëm dhe raportim të shpejtë.',
            'summary' => 'Patrullime të rregullta, kontroll objektesh dhe monitorim për parandalim dëmesh.',
            'sections' => [
                'Shërbimet' => ['Patrullime të rregullta', 'Kontroll dyersh, portash dhe dritaresh', 'Kontroll i jashtëm', 'Patrullim dhe monitorim', 'Raportim i incidenteve', 'Dokumentim sipas marrëveshjes'],
                'I përshtatshëm për' => ['Objekte biznesi', 'Depo', 'Kantiere', 'Parkime', 'Prona', 'Hapësira të jashtme'],
            ],
            'outcomes' => ['Kontrolle të rregullta', 'Parandalim me prezencë', 'Raportim i qartë'],
            'cta' => 'Kërko patrullim',
        ],
    ],
];

$copy = [
    'de' => [
        'lang_name' => 'Deutsch',
        'alt_lang' => 'SQ',
        'nav' => ['startseite' => 'Startseite', 'ueber-uns' => 'Über uns', 'leistungen' => 'Leistungen', 'einsatzgebiete' => 'Einsatzgebiete', 'karriere' => 'Karriere', 'kontakt' => 'Kontakt'],
        'legal_nav' => ['impressum' => 'Impressum', 'datenschutz' => 'Datenschutz', 'agb' => 'AGB'],
        'meta' => [
            'startseite' => ['Sicherheitsdienst Neckarsulm, Heilbronn und deutschlandweit - Diamant Security GmbH', 'Objektschutz, Veranstaltungsschutz, Sportveranstaltungen, Zugangskontrolle, Crowd Control und weitere Sicherheitsdienste deutschlandweit.'],
            'ueber-uns' => ['Über Diamant Security GmbH - Sicherheitsdienst deutschlandweit', 'Erfahren Sie mehr über Diamant Security GmbH, Arbeitsweise, Werte und Sicherheitsverständnis.'],
            'leistungen' => ['Leistungen - Sicherheitsdienst deutschlandweit | Diamant Security GmbH', 'Sicherheitsdienstleistungen von Diamant Security GmbH: Objektschutz, Veranstaltungsschutz, Sportveranstaltungen, Baustellenbewachung, Personenschutz, Zugangskontrolle und Revierdienst.'],
            'einsatzgebiete' => ['Sicherheitsdienst deutschlandweit - Diamant Security GmbH', 'Diamant Security GmbH mit Sitz im Raum Neckarsulm - Heilbronn übernimmt Sicherheitsdienstleistungen deutschlandweit in allen Bundesländern nach Verfügbarkeit.'],
            'karriere' => ['Karriere bei Diamant Security GmbH - Sicherheitsdienst deutschlandweit', 'Jobs im Sicherheitsdienst bei Diamant Security GmbH für Einsätze in ganz Deutschland.'],
            'kontakt' => ['Kontakt - Diamant Security GmbH Sicherheitsdienst deutschlandweit', 'Kontaktieren Sie Diamant Security GmbH für Sicherheitsdienstleistungen in ganz Deutschland.'],
            'impressum' => ['Impressum - Diamant Security GmbH', 'Impressum und Anbieterkennzeichnung der Diamant Security GmbH.'],
            'datenschutz' => ['Datenschutz - Diamant Security GmbH', 'Datenschutzhinweise der Diamant Security GmbH für Website, Kontaktformular und Kommunikation.'],
            'agb' => ['AGB - Diamant Security GmbH', 'Hinweise zu allgemeinen Geschäftsbedingungen und Vertragsgrundlagen der Diamant Security GmbH.'],
        ],
        'home' => [
            'eyebrow' => 'Sicherheitsdienst Neckarsulm - Heilbronn und deutschlandweit',
            'h1' => 'Objektschutz, Eventschutz und Sicherheitsdienste deutschlandweit',
            'lead' => 'Diamant Security GmbH mit Sitz im Raum Neckarsulm - Heilbronn plant und übernimmt physische Sicherheitseinsätze in ganz Deutschland - professionell, zuverlässig und nach deutschen Standards organisiert.',
            'primary' => 'Sicherheitsanfrage stellen',
            'secondary' => 'Direkt anrufen',
            'trust' => ['Geschultes Personal', 'Klare Einsatzplanung', 'Alle Bundesländer', '§34a-relevante Sicherheitsarbeit'],
            'assurance_title' => 'Sicherheitsdienst mit klarer Struktur',
            'assurance_text' => 'Einsatzort, Risiko, Personalbedarf und Ablauf werden vorab abgestimmt. So entsteht ein Einsatz, der ruhig wirkt, zuverlässig funktioniert und zu den gesetzlichen Anforderungen des Bewachungsgewerbes passt.',
            'assurance_items' => ['Persönliche Abstimmung', 'Klare Einsatzstruktur', 'Diskrete Umsetzung'],
        ],
        'sections' => [
            'why_eyebrow' => 'Warum Diamant Security GmbH?',
            'why_h2' => 'Sicherheit beginnt vor dem Einsatz.',
            'why_text' => 'Wir analysieren Bedarf, Ort und Risiko, bevor Personal eingesetzt wird. Das Ergebnis ist ein strukturierter Sicherheitsdienst mit klaren Aufgaben, Ansprechpartnern und Dokumentation.',
            'services_eyebrow' => 'Leistungen',
            'services_h2' => 'Sicherheitsdienste für Unternehmen, Events, Sport und Objekte',
            'services_text' => 'Wählen Sie die passende Leistung oder senden Sie eine allgemeine Anfrage. Wir prüfen, welche Lösung für Ihren Einsatz sinnvoll ist - von Objektschutz über Zugangskontrolle bis Crowd Control.',
            'process_eyebrow' => 'Ablauf',
            'process_h2' => 'Von der Anfrage zum geplanten Einsatz',
            'areas_eyebrow' => 'Einsatzgebiete',
            'areas_h2' => 'Sicherheitsdienst deutschlandweit',
            'areas_text' => 'Diamant Security koordiniert Einsätze in allen deutschen Bundesländern mit Fokus auf wirtschaftlich und öffentlich relevante Städte. Nennen Sie uns Einsatzort, Zeitraum und Leistung, damit wir die Verfügbarkeit prüfen können.',
            'faq_eyebrow' => 'FAQ',
            'faq_h2' => 'Häufige Fragen',
            'contact_eyebrow' => 'Kontakt',
            'contact_h2' => 'Sprechen Sie mit uns über Ihren Einsatz',
            'contact_text' => 'Nennen Sie Leistung, Ort, Zeitraum und besondere Anforderungen. Wir melden uns mit einer klaren Rückmeldung.',
        ],
        'trust_cards' => [
            ['Planung', 'Einsatzstruktur statt Zufall: Wir klären Aufgabe, Risiko und Ablauf vor Beginn.'],
            ['Personal', 'Das Auftreten vor Ort bleibt ruhig, aufmerksam und professionell.'],
            ['Dokumentation', 'Auffälligkeiten und Vorkommnisse können nach Vereinbarung dokumentiert werden.'],
            ['Kommunikation', 'Auftraggeber erhalten klare Ansprechpartner und eine verlässliche Abstimmung.'],
        ],
        'process' => [
            ['Anfrage', 'Sie senden uns Ort, Zeitraum, Leistung und besondere Anforderungen.'],
            ['Einschätzung', 'Wir prüfen Risiko, Personalbedarf und sinnvolle Einsatzform.'],
            ['Planung', 'Sie erhalten eine klare Abstimmung zu Aufgaben, Ablauf und Ansprechpartnern.'],
            ['Durchführung', 'Das Team arbeitet ruhig, aufmerksam und nach vereinbartem Einsatzplan.'],
            ['Nachbereitung', 'Auf Wunsch besprechen wir Auffälligkeiten und nächste Schritte.'],
        ],
        'faq' => [
            ['Wie schnell kann ein Einsatz starten?', 'Das hängt von Leistung, Ort und Personalverfügbarkeit ab. Für größere Einsätze empfehlen wir eine frühzeitige Anfrage.'],
            ['Welche Informationen braucht Diamant Security GmbH?', 'Wichtig sind Einsatzort, Zeitraum, gewünschte Leistung, Objekt- oder Eventart und besondere Risiken.'],
            ['Ist auch diskrete Sicherheit möglich?', 'Ja. Auftreten, Kleidung und Positionierung können passend zur Situation abgestimmt werden.'],
            ['Gibt es eine Dokumentation?', 'Nach Vereinbarung können Kontrollgänge, Vorkommnisse oder besondere Beobachtungen dokumentiert werden.'],
        ],
        'about' => [
            'h1' => 'Über Diamant Security GmbH',
            'lead' => 'Diamant Security GmbH ist ein Sicherheitsdienst mit Sitz im Raum Neckarsulm - Heilbronn und deutschlandweiter Einsatzbereitschaft. Der Fokus liegt auf geplanter, ruhiger und zuverlässiger Sicherheitsarbeit.',
            'h2' => 'Sicherheit braucht Verantwortung.',
            'text' => 'Wir verstehen Sicherheit nicht als reine Anwesenheit von Personal. Entscheidend sind Vorbereitung, klare Zuständigkeiten, respektvolle Kommunikation und professionelles Verhalten vor Ort.',
            'image_alt' => 'Professionelle Sicherheitsdienstleistung von Diamant Security',
            'intro_cards' => [
                ['Fachlich geführt', 'Die Expertise unseres Geschäftsführers als Prof. Dr. im Bereich Nationale Sicherheit prägt Analyse, Planung und Verantwortung.'],
                ['Neckarsulm - Heilbronn', 'Von unserem Sitz im Raum Neckarsulm - Heilbronn koordinieren wir Sicherheitsdienste nach Einsatzort, Leistungsumfang und Verfügbarkeit.'],
                ['Strukturiert', 'Jeder Einsatz beginnt mit einer klaren Abstimmung zu Aufgabe, Risiko und Ablauf.'],
                ['Diskret', 'Unser Auftreten passt zur Situation: sichtbar, zurückhaltend oder repräsentativ.'],
            ],
            'approach_eyebrow' => 'Arbeitsweise',
            'approach_h2' => 'Ruhige Präsenz entsteht durch gute Vorbereitung.',
            'approach_text' => 'Sicherheitsarbeit wirkt professionell, wenn sie vor Ort selbstverständlich funktioniert. Deshalb achten wir auf Briefing, klare Rollen, saubere Kommunikation und ein Auftreten, das zur Umgebung passt.',
            'approach_items' => [
                ['Analyse', 'Wir klären Einsatzort, Zeitfenster, Zutritte, sensible Bereiche und mögliche Risiken.'],
                ['Planung', 'Aufgaben, Ansprechpartner und Abläufe werden vor Einsatzbeginn verständlich festgelegt.'],
                ['Umsetzung', 'Das Team arbeitet aufmerksam, respektvoll und mit ruhiger Präsenz.'],
                ['Rückmeldung', 'Bei Auffälligkeiten erhalten Auftraggeber eine klare und nachvollziehbare Information.'],
            ],
            'director_eyebrow' => 'Wert der Führung',
            'director_h2' => 'Fachliche Expertise gehört zum Kern von Diamant.',
            'director_text' => 'Diamant wird fachlich durch unseren Geschäftsführer als Prof. Dr. im Bereich Nationale Sicherheit geprägt. Diese Kompetenz stärkt die Arbeitsweise des Unternehmens: Risiken werden strukturiert betrachtet, Einsätze sauber vorbereitet und Sicherheitsmaßnahmen mit Verantwortung geplant.',
            'director_points' => [
                ['Akademische Sicherheitskompetenz', 'Nationale Sicherheit, Risiko, Prävention und Verantwortung fließen in die Führung des Unternehmens ein.'],
                ['Strategische Planung', 'Sicherheitsarbeit wird nicht improvisiert, sondern mit Struktur, Lageverständnis und klaren Abläufen vorbereitet.'],
                ['Professionelle Verantwortung', 'Jeder Einsatz soll nachvollziehbar, ruhig und seriös umgesetzt werden - passend zum Objekt, Event oder Auftraggeber.'],
            ],
            'standards_eyebrow' => 'Standards',
            'standards_h2' => 'Was Auftraggeber von Diamant erwarten können',
            'standards' => [
                'Pünktliches und gepflegtes Auftreten',
                'Klare Kommunikation vor und während des Einsatzes',
                'Diskrete Arbeitsweise bei sensiblen Situationen',
                'Dokumentation nach Vereinbarung',
                'Flexible Einsatzplanung in allen Bundesländern',
                'Leistungen nach den geltenden gesetzlichen Anforderungen des Bewachungsgewerbes',
                'Respektvoller Umgang mit Gästen, Kunden und Mitarbeitenden',
            ],
            'values_h2' => 'Werte, die jeden Einsatz prägen',
            'values' => ['Fachliche Expertise', 'Zuverlässigkeit', 'Diskretion', 'Professionalität', 'Prävention', 'Verantwortung', 'Klare Kommunikation'],
            'cta_h2' => 'Sie planen einen Sicherheitseinsatz?',
            'cta_text' => 'Senden Sie uns Einsatzort, Zeitraum und gewünschte Leistung. Wir prüfen die passende Einsatzform und melden uns mit einer klaren Rückmeldung.',
            'cta_button' => 'Sicherheitsanfrage stellen',
        ],
        'areas' => [
            'h1' => 'Sicherheitsdienst deutschlandweit',
            'lead' => 'Diamant Security GmbH übernimmt Sicherheitsdienstleistungen in ganz Deutschland. Von Neckarsulm - Heilbronn aus koordinieren wir Einsätze nach Ort, Zeitraum, Leistungsumfang und Verfügbarkeit.',
            'h2' => 'Bundesländer und wichtige Städte',
            'state_city_label' => 'Stadt',
            'cta' => 'Einsatzort anfragen',
        ],
        'career' => [
            'h1' => 'Karriere bei Diamant Security GmbH',
            'lead' => 'Wir suchen zuverlässige, verantwortungsbewusste Mitarbeiter für Einsätze im Sicherheitsdienst deutschlandweit.',
            'who' => 'Wen wir suchen',
            'who_items' => ['Sicherheitsmitarbeiter', 'Objektschutzpersonal', 'Veranstaltungsschutz', 'Empfangs- und Kontrollpersonal', 'Revierfahrer nach Bedarf'],
            'important' => 'Was uns wichtig ist',
            'important_items' => ['Zuverlässigkeit', 'Gepflegtes Auftreten', 'Verantwortungsbewusstsein', 'Kommunikationsfähigkeit', 'Respektvoller Umgang', 'Flexible Einsatzzeiten'],
            'cta' => 'Jetzt bewerben',
        ],
        'contact' => [
            'h1' => 'Kontaktieren Sie Diamant Security GmbH',
            'lead' => 'Senden Sie Ihre Anfrage oder rufen Sie direkt an. Für eine schnelle Einschätzung helfen Einsatzort, Zeitraum und gewünschte Leistung.',
            'form_h2' => 'Sicherheitsanfrage senden',
            'info_h2' => 'Kontaktinformationen',
            'direct' => 'Direkter Kontakt',
            'map' => 'Standort Neckarsulm auf Google Maps öffnen',
            'response' => 'Schnelle Einschätzung',
            'response_text' => 'Je konkreter Ihre Angaben sind, desto gezielter können wir Personalbedarf und Einsatzform prüfen.',
        ],
        'form' => [
            'name' => 'Name *',
            'company' => 'Firma',
            'phone' => 'Telefonnummer',
            'email' => 'E-Mail-Adresse *',
            'service' => 'Gewünschte Leistung *',
            'choose' => 'Bitte auswählen',
            'place' => 'Einsatzort',
            'date' => 'Einsatzdatum / Zeitraum',
            'urgency' => 'Dringlichkeit',
            'urgency_options' => ['Geplant', 'Diese Woche', 'So schnell wie möglich'],
            'callback' => 'Rückruf gewünscht',
            'message' => 'Nachricht *',
            'privacy' => 'Ich bin einverstanden, dass Diamant Security GmbH meine Angaben zur Bearbeitung der Anfrage nutzt. Hinweise dazu stehen in der Datenschutzerklärung.',
            'submit' => 'Anfrage senden',
            'success' => 'Vielen Dank. Ihre Anfrage wurde übermittelt.',
            'fallback' => 'Die Anfrage wurde vorbereitet, konnte aber vom Server nicht versendet werden. Bitte kontaktieren Sie uns direkt per E-Mail oder Telefon.',
            'err_name' => 'Bitte geben Sie Ihren Namen ein.',
            'err_email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
            'err_service' => 'Bitte wählen Sie eine Leistung aus.',
            'err_message' => 'Bitte beschreiben Sie kurz Ihre Anfrage.',
            'err_privacy' => 'Bitte bestätigen Sie die Datenschutzhinweise.',
        ],
        'legal' => [
            'impressum_h1' => 'Impressum',
            'datenschutz_h1' => 'Datenschutz',
            'agb_h1' => 'Allgemeine Geschäftsbedingungen',
            'provider' => 'Angaben gemäß § 5 DDG',
            'privacy_intro' => 'Diese Datenschutzhinweise erklären, welche personenbezogenen Daten bei Nutzung der Website, des Kontaktformulars und der direkten Kommunikation verarbeitet werden.',
            'agb_intro' => 'Vertragsbedingungen für Sicherheitsdienstleistungen der Diamant Security GmbH.',
        ],
        'footer_text' => 'Professionelle Sicherheitsdienstleistungen für Unternehmen, Veranstalter, Baustellen und private Auftraggeber in ganz Deutschland.',
        'not_found' => ['404', 'Diese Seite wurde nicht gefunden.', 'Zur Startseite'],
    ],
    'sq' => [
        'lang_name' => 'Shqip',
        'alt_lang' => 'DE',
        'nav' => ['startseite' => 'Ballina', 'ueber-uns' => 'Rreth nesh', 'leistungen' => 'Shërbimet', 'einsatzgebiete' => 'Zonat', 'karriere' => 'Karriera', 'kontakt' => 'Kontakti'],
        'legal_nav' => ['impressum' => 'Impressum', 'datenschutz' => 'Datenschutz', 'agb' => 'AGB'],
        'meta' => [
            'startseite' => ['Diamant Security - Shërbime sigurie në Gjermani', 'Sigurim fizik objektesh, eventesh, ndeshjesh sportive, kontroll hyrje-dalje, menaxhim turmash dhe shërbime sigurie në gjithë Gjermaninë.'],
            'ueber-uns' => ['Rreth Diamant Security GmbH - Siguri në Gjermani', 'Mësoni më shumë për Diamant Security GmbH, mënyrën e punës dhe vlerat.'],
            'leistungen' => ['Shërbimet - Diamant Security Gjermani', 'Shërbime sigurie: sigurim fizik objektesh, evente, ndeshje sportive, kantiere, mbrojtje personale, kontroll hyrje-dalje dhe patrullim.'],
            'einsatzgebiete' => ['Zonat e operimit - Diamant Security', 'Diamant Security GmbH me seli në zonën Neckarsulm - Heilbronn ofron shërbime sigurie në gjithë Gjermaninë, në të gjitha Bundesländer sipas disponueshmërisë.'],
            'karriere' => ['Karriera te Diamant Security GmbH', 'Punë në sektorin e sigurisë te Diamant Security GmbH për shërbime në gjithë Gjermaninë.'],
            'kontakt' => ['Kontakti - Diamant Security Gjermani', 'Kontaktoni Diamant Security GmbH për shërbime sigurie në gjithë Gjermaninë.'],
            'impressum' => ['Impressum - Diamant Security GmbH', 'Të dhënat ligjore të Diamant Security GmbH.'],
            'datenschutz' => ['Datenschutz - Diamant Security GmbH', 'Informacione për mbrojtjen e të dhënave në faqen e Diamant Security GmbH.'],
            'agb' => ['AGB - Diamant Security GmbH', 'Informacione për kushtet e përgjithshme dhe bazat kontraktuale.'],
        ],
        'home' => [
            'eyebrow' => 'Shërbime sigurie Neckarsulm - Heilbronn dhe gjithë Gjermania',
            'h1' => 'Mbrojtje objektesh, evente dhe siguri profesionale',
            'lead' => 'Diamant Security GmbH me seli në zonën Neckarsulm - Heilbronn planifikon dhe realizon shërbime të sigurisë fizike në gjithë Gjermaninë - me profesionalizëm, besueshmëri dhe standarde gjermane.',
            'primary' => 'Dërgo kërkesë sigurie',
            'secondary' => 'Telefono direkt',
            'trust' => ['Personel i trajnuar', 'Plan i qartë pune', 'Të gjitha Bundesländer', 'Punë sigurie sipas §34a'],
            'assurance_title' => 'Siguri me strukturë të qartë',
            'assurance_text' => 'Vendndodhja, rreziku, nevoja për personel dhe procesi sqarohen paraprakisht. Kështu shërbimi është i qetë, funksional dhe i përshtatur me kërkesat ligjore të sektorit të sigurisë.',
            'assurance_items' => ['Koordinim personal', 'Strukturë e qartë shërbimi', 'Zbatim diskret'],
        ],
        'sections' => [
            'why_eyebrow' => 'Pse Diamant Security GmbH?',
            'why_h2' => 'Siguria fillon para shërbimit.',
            'why_text' => 'Ne analizojmë nevojën, vendin dhe rrezikun para se të vendoset personeli. Rezultati është një shërbim sigurie me detyra të qarta dhe komunikim profesional.',
            'services_eyebrow' => 'Shërbimet',
            'services_h2' => 'Shërbime sigurie për kompani, evente, sport dhe objekte',
            'services_text' => 'Zgjidhni shërbimin e duhur ose dërgoni një kërkesë të përgjithshme. Ne kontrollojmë cila zgjidhje është më e përshtatshme - nga sigurimi fizik i objekteve deri te kontrolli hyrje-dalje dhe Crowd Control.',
            'process_eyebrow' => 'Procesi',
            'process_h2' => 'Nga kërkesa deri te shërbimi i planifikuar',
            'areas_eyebrow' => 'Zonat',
            'areas_h2' => 'Shërbime sigurie në gjithë Gjermaninë',
            'areas_text' => 'Diamant Security koordinon shërbime në të gjitha Bundesländer të Gjermanisë, me fokus në qytetet kryesore dhe zonat me rëndësi ekonomike e publike. Na tregoni vendin, periudhën dhe shërbimin që të kontrollojmë disponueshmërinë.',
            'faq_eyebrow' => 'FAQ',
            'faq_h2' => 'Pyetje të shpeshta',
            'contact_eyebrow' => 'Kontakti',
            'contact_h2' => 'Na tregoni për nevojën tuaj të sigurisë',
            'contact_text' => 'Na jepni shërbimin, vendin, periudhën dhe kërkesat e veçanta. Ne kthehemi me një përgjigje të qartë.',
        ],
        'trust_cards' => [
            ['Planifikim', 'Detyra, rreziku dhe procesi sqarohen para fillimit.'],
            ['Personel', 'Prezenca në vend mbetet e qetë, e kujdesshme dhe profesionale.'],
            ['Dokumentim', 'Ngjarjet dhe vëzhgimet mund të dokumentohen sipas marrëveshjes.'],
            ['Komunikim', 'Klientët kanë kontakt të qartë dhe koordinim të besueshëm.'],
        ],
        'process' => [
            ['Kërkesa', 'Ju dërgoni vendin, periudhën, shërbimin dhe kërkesat e veçanta.'],
            ['Vlerësimi', 'Ne kontrollojmë rrezikun, nevojën për personel dhe formën e shërbimit.'],
            ['Planifikimi', 'Përcaktohen detyrat, procesi dhe personat përgjegjës.'],
            ['Zbatimi', 'Ekipi punon me qetësi, kujdes dhe sipas planit të dakorduar.'],
            ['Pas shërbimit', 'Sipas nevojës diskutojmë vëzhgimet dhe hapat e radhës.'],
        ],
        'faq' => [
            ['Sa shpejt mund të fillojë shërbimi?', 'Varet nga shërbimi, vendi dhe disponueshmëria e personelit. Për raste më të mëdha rekomandohet kërkesë e hershme.'],
            ['Çfarë informacioni nevojitet?', 'Vendi, periudha, shërbimi, lloji i objektit ose eventit dhe rreziqet e veçanta.'],
            ['A mund të jetë shërbimi diskret?', 'Po. Paraqitja, veshja dhe pozicionimi mund të përshtaten sipas situatës.'],
            ['A ka dokumentim?', 'Sipas marrëveshjes mund të dokumentohen patrullimet, incidentet ose vëzhgimet.'],
        ],
        'about' => [
            'h1' => 'Rreth Diamant Security GmbH',
            'lead' => 'Diamant Security GmbH është kompani sigurie me seli në zonën Neckarsulm - Heilbronn dhe me gatishmëri për shërbime në gjithë Gjermaninë. Fokusi është punë e planifikuar, e qetë dhe e besueshme.',
            'h2' => 'Siguria kërkon përgjegjësi.',
            'text' => 'Siguria nuk është vetëm prani fizike. E rëndësishme është përgatitja, ndarja e qartë e përgjegjësive, komunikimi korrekt dhe sjellja profesionale në vend.',
            'image_alt' => 'Shërbim profesional sigurie nga Diamant Security',
            'intro_cards' => [
                ['Drejtim profesional', 'Ekspertiza e drejtorit tonë si Prof. Dr. i Sigurisë Nacionale ndikon në analizë, planifikim dhe përgjegjësi.'],
                ['Neckarsulm - Heilbronn', 'Nga selia në zonën Neckarsulm - Heilbronn koordinojmë shërbime sipas vendit, vëllimit të punës dhe disponueshmërisë.'],
                ['Me strukturë', 'Çdo shërbim fillon me sqarim të qartë të detyrës, rrezikut dhe procesit.'],
                ['Diskret', 'Paraqitja përshtatet me situatën: e dukshme, e qetë ose reprezentative.'],
            ],
            'approach_eyebrow' => 'Mënyra e punës',
            'approach_h2' => 'Prezenca e qetë fillon me përgatitje të mirë.',
            'approach_text' => 'Siguria duket profesionale kur funksionon natyrshëm në vend. Prandaj kujdesemi për briefing, role të qarta, komunikim të saktë dhe paraqitje të përshtatshme.',
            'approach_items' => [
                ['Analiza', 'Sqarojmë vendin, orarin, hyrjet, zonat sensitive dhe rreziqet e mundshme.'],
                ['Planifikimi', 'Detyrat, kontaktet dhe proceset përcaktohen qartë para fillimit.'],
                ['Zbatimi', 'Ekipi punon me vëmendje, respekt dhe prezencë të qetë.'],
                ['Raportimi', 'Në rast vëzhgimesh, klienti merr informacion të qartë dhe të kuptueshëm.'],
            ],
            'director_eyebrow' => 'Vlerë e kompanisë',
            'director_h2' => 'Ekspertiza e drejtorit është pjesë e vlerës së Diamant-it.',
            'director_text' => 'Diamant udhëhiqet profesionalisht nga drejtori ynë si Prof. Dr. i Sigurisë Nacionale. Kjo kompetencë ndikon në mënyrën si mendojmë dhe organizojmë sigurinë: rreziqet analizohen me strukturë, shërbimet përgatiten me kujdes dhe masat e sigurisë planifikohen me përgjegjësi.',
            'director_points' => [
                ['Ekspertizë akademike', 'Siguria nacionale, rreziku, parandalimi dhe përgjegjësia janë pjesë e drejtimit profesional të kompanisë.'],
                ['Planifikim strategjik', 'Shërbimi nuk improvizohet, por përgatitet me strukturë, kuptim të situatës dhe procese të qarta.'],
                ['Përgjegjësi profesionale', 'Çdo shërbim duhet të jetë i qetë, serioz dhe i përshtatur me objektin, eventin ose klientin.'],
            ],
            'standards_eyebrow' => 'Standarde',
            'standards_h2' => 'Çfarë mund të presin klientët nga Diamant',
            'standards' => [
                'Paraqitje korrekte dhe në kohë',
                'Komunikim i qartë para dhe gjatë shërbimit',
                'Punë diskrete në situata sensitive',
                'Dokumentim sipas marrëveshjes',
                'Planifikim fleksibël në të gjitha Bundesländer',
                'Shërbime sipas kërkesave ligjore gjermane për sektorin e sigurisë',
                'Sjellje respektuese me mysafirë, klientë dhe punonjës',
            ],
            'values_h2' => 'Vlerat që udhëheqin çdo shërbim',
            'values' => ['Ekspertizë profesionale', 'Besueshmëri', 'Diskrecion', 'Profesionalizëm', 'Parandalim', 'Përgjegjësi', 'Komunikim i qartë'],
            'cta_h2' => 'Po planifikoni një shërbim sigurie?',
            'cta_text' => 'Na dërgoni vendin, periudhën dhe shërbimin e kërkuar. Ne kontrollojmë formën e përshtatshme të shërbimit dhe kthehemi me përgjigje të qartë.',
            'cta_button' => 'Dërgo kërkesë sigurie',
        ],
        'areas' => [
            'h1' => 'Shërbime sigurie në gjithë Gjermaninë',
            'lead' => 'Diamant Security GmbH ofron shërbime sigurie në gjithë Gjermaninë. Nga zona Neckarsulm - Heilbronn koordinojmë shërbime sipas vendit, periudhës, kërkesës dhe disponueshmërisë.',
            'h2' => 'Republikat / Bundesländer dhe qytetet kryesore',
            'state_city_label' => 'Qytet / Stadt',
            'cta' => 'Pyet për lokacionin',
        ],
        'career' => [
            'h1' => 'Karriera te Diamant Security GmbH',
            'lead' => 'Kërkojmë punonjës të besueshëm dhe të përgjegjshëm për shërbime sigurie në gjithë Gjermaninë.',
            'who' => 'Kë kërkojmë',
            'who_items' => ['Punonjës sigurie', 'Personel për objekte', 'Sigurim eventesh', 'Recepsion dhe kontroll', 'Patrullim sipas nevojës'],
            'important' => 'Çfarë është e rëndësishme',
            'important_items' => ['Besueshmëri', 'Paraqitje e rregullt', 'Përgjegjësi', 'Komunikim', 'Respekt', 'Orar fleksibël'],
            'cta' => 'Apliko tani',
        ],
        'contact' => [
            'h1' => 'Kontaktoni Diamant Security GmbH',
            'lead' => 'Dërgoni kërkesën ose telefononi direkt. Për vlerësim të shpejtë na ndihmojnë vendi, periudha dhe shërbimi i kërkuar.',
            'form_h2' => 'Dërgo kërkesë sigurie',
            'info_h2' => 'Informacion kontakti',
            'direct' => 'Kontakt direkt',
            'map' => 'Hape lokacionin në Neckarsulm në Google Maps',
            'response' => 'Vlerësim i shpejtë',
            'response_text' => 'Sa më konkrete të jenë të dhënat, aq më saktë mund të vlerësojmë personelin dhe formën e shërbimit.',
        ],
        'form' => [
            'name' => 'Emri *',
            'company' => 'Kompania',
            'phone' => 'Telefoni',
            'email' => 'E-mail *',
            'service' => 'Shërbimi i kërkuar *',
            'choose' => 'Ju lutem zgjidhni',
            'place' => 'Vendi i shërbimit',
            'date' => 'Data / periudha',
            'urgency' => 'Urgjenca',
            'urgency_options' => ['E planifikuar', 'Këtë javë', 'Sa më shpejt'],
            'callback' => 'Dëshiroj telefonatë',
            'message' => 'Mesazhi *',
            'privacy' => 'Pajtohem që Diamant Security GmbH t’i përdorë të dhënat e mia për përpunimin e kërkesës. Informacionet janë te Datenschutz.',
            'submit' => 'Dërgo kërkesën',
            'success' => 'Faleminderit. Kërkesa u dërgua.',
            'fallback' => 'Kërkesa u përgatit, por serveri nuk e dërgoi. Ju lutem kontaktoni direkt me e-mail ose telefon.',
            'err_name' => 'Ju lutem shkruani emrin.',
            'err_email' => 'Ju lutem shkruani një e-mail të vlefshëm.',
            'err_service' => 'Ju lutem zgjidhni një shërbim.',
            'err_message' => 'Ju lutem përshkruani shkurt kërkesën.',
            'err_privacy' => 'Ju lutem konfirmoni Datenschutz.',
        ],
        'legal' => [
            'impressum_h1' => 'Impressum',
            'datenschutz_h1' => 'Datenschutz',
            'agb_h1' => 'Kushtet e përgjithshme',
            'provider' => 'Të dhëna sipas § 5 DDG',
            'privacy_intro' => 'Këto informacione shpjegojnë cilat të dhëna personale përpunohen gjatë përdorimit të faqes, formularit dhe komunikimit direkt.',
            'agb_intro' => 'Kjo faqe mund të përdoret për kushtet kontraktuale. Deri në kontrollin ligjor të AGB, vlejnë ofertat individuale dhe marrëveshjet me shkrim.',
        ],
        'footer_text' => 'Shërbime profesionale sigurie për kompani, evente, kantiere dhe klientë privatë në gjithë Gjermaninë.',
        'not_found' => ['404', 'Kjo faqe nuk u gjet.', 'Kthehu në ballinë'],
    ],
];

$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$basePath = $scriptDir === '/' ? '' : rtrim($scriptDir, '/');

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function clean_line(string $value): string
{
    return trim((string) preg_replace('/[\r\n]+/', ' ', $value));
}

function detect_route(string $basePath, array $routePaths, array $routeAliases): array
{
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $requestPath = '/' . trim($requestPath, '/');

    if ($basePath !== '' && strpos($requestPath, $basePath . '/') === 0) {
        $requestPath = substr($requestPath, strlen($basePath));
    } elseif ($basePath !== '' && $requestPath === $basePath) {
        $requestPath = '/';
    }

    $segments = array_values(array_filter(explode('/', trim($requestPath, '/')), 'strlen'));
    $lang = 'de';
    if (($segments[0] ?? '') === 'sq') {
        $lang = 'sq';
        array_shift($segments);
    } elseif (($segments[0] ?? '') === 'de') {
        array_shift($segments);
    }

    $path = implode('/', $segments);
    if ($path === '' || $path === 'index.php') {
        $slug = 'startseite';
    } else {
        $reverse = array_flip($routePaths[$lang]);
        $slug = $reverse[$path] ?? ($routeAliases[$lang][$path] ?? $path);
    }

    if (isset($_GET['page'])) {
        $querySlug = strtolower((string) preg_replace('/[^a-z0-9-]/', '', (string) $_GET['page']));
        $slug = $routeAliases[$lang][$querySlug] ?? $querySlug;
    }

    return [$lang, $slug];
}

[$currentLang, $slug] = detect_route($basePath, $routePaths, $routeAliases);

function url_for(string $slug = 'startseite', ?string $lang = null): string
{
    global $basePath, $currentLang, $routePaths;
    $lang = $lang ?? $currentLang;
    $prefix = $basePath === '' ? '' : $basePath;
    $path = $routePaths[$lang][$slug] ?? $slug;

    if ($lang === 'sq') {
        return $path === '' ? $prefix . '/sq/' : $prefix . '/sq/' . $path;
    }

    return $path === '' ? $prefix . '/' : $prefix . '/' . $path;
}

function url_with_params(string $slug, array $params = [], string $fragment = '', ?string $lang = null): string
{
    $url = url_for($slug, $lang);
    if ($params !== []) {
        $url .= '?' . http_build_query($params);
    }
    if ($fragment !== '') {
        $url .= '#' . ltrim($fragment, '#');
    }

    return $url;
}

function absolute_url(string $path): string
{
    global $site;
    if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
        return $path;
    }

    return rtrim($site['base_url'], '/') . '/' . ltrim($path, '/');
}

function asset_url(string $path): string
{
    global $basePath;
    $prefix = $basePath === '' ? '' : $basePath;
    $cleanPath = ltrim($path, '/');
    $url = $prefix . '/assets/' . $cleanPath;
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $cleanPath);

    return is_file($filePath) ? $url . '?v=' . filemtime($filePath) : $url;
}

function image_attrs(string $path): string
{
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, ltrim($path, '/'));
    if (!is_file($filePath)) {
        return '';
    }
    $size = @getimagesize($filePath);
    if ($size === false) {
        return '';
    }

    return ' width="' . (int) $size[0] . '" height="' . (int) $size[1] . '"';
}

function icon_svg(string $name): string
{
    $icons = [
        'phone' => '<path d="M22 16.92v2.7a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 3.9 2 2 0 0 1 4.11 1.72h2.7a2 2 0 0 1 2 1.72c.12.9.32 1.78.6 2.62a2 2 0 0 1-.45 2.1L7.82 9.28a16 16 0 0 0 6.9 6.9l1.12-1.12a2 2 0 0 1 2.1-.45c.84.28 1.72.48 2.62.6A2 2 0 0 1 22 16.92Z"/>',
        'map' => '<path d="M12 21s7-5.26 7-12a7 7 0 1 0-14 0c0 6.74 7 12 7 12Z"/><circle cx="12" cy="9" r="2.35"/>',
        'mail' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/>',
        'shield' => '<path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-5"/>',
        'check' => '<path d="m20 6-11 11-5-5"/>',
    ];

    return '<svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">' . ($icons[$name] ?? $icons['shield']) . '</svg>';
}

function social_icon_svg(string $name): string
{
    $icons = [
        'facebook' => '<path d="M15 8h3V4h-3c-3.3 0-5 2-5 5v3H7v4h3v6h4v-6h3l1-4h-4V9c0-.7.3-1 1-1Z"/>',
        'instagram' => '<rect x="4" y="4" width="16" height="16" rx="5"/><circle cx="12" cy="12" r="3.6"/><circle cx="17" cy="7" r="1"/>',
        'linkedin' => '<path d="M6.5 9.5H10V20H6.5Z"/><path d="M8.25 7.9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/><path d="M13 9.5h3.35v1.45A3.8 3.8 0 0 1 19.5 9.2c2.35 0 4 1.65 4 4.8v6H20v-5.45c0-1.45-.55-2.35-1.75-2.35-1 0-1.55.65-1.8 1.25-.1.22-.1.55-.1.85V20H13Z"/>',
        'whatsapp' => '<path d="M12.04 3.2a8.63 8.63 0 0 0-7.42 13.04L3.6 20.8l4.66-1a8.62 8.62 0 1 0 3.78-16.6Zm4.95 12.18c-.2.56-1.14 1.06-1.58 1.12-.42.06-.96.08-1.55-.1-.36-.11-.82-.27-1.4-.52-2.47-1.07-4.08-3.56-4.2-3.72-.12-.16-1-1.33-1-2.54 0-1.21.63-1.8.86-2.05.22-.25.5-.31.66-.31h.48c.15 0 .36-.05.56.43.21.5.72 1.75.78 1.88.06.13.1.28.02.44-.08.16-.12.26-.25.4-.12.14-.26.31-.37.42-.12.12-.25.25-.1.5.14.25.64 1.06 1.38 1.71.95.85 1.75 1.11 2 1.24.25.12.4.1.55-.06.16-.19.63-.74.8-.99.17-.25.34-.2.56-.12.22.08 1.44.68 1.69.8.25.12.41.19.47.3.06.11.06.63-.14 1.18Z"/>',
    ];
    $key = strtolower($name);

    return '<svg class="social-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">' . ($icons[$key] ?? $icons['facebook']) . '</svg>';
}

function service_icon_svg(string $slug): string
{
    $icons = [
        'veranstaltungsschutz' => '<path d="M7 21h10"/><path d="M8 17v4"/><path d="M16 17v4"/><rect x="4" y="4" width="16" height="13" rx="2"/><path d="M8 8h8"/><path d="M8 12h5"/>',
        'objektschutz' => '<path d="M4 21V7l8-4 8 4v14"/><path d="M9 21v-7h6v7"/><path d="M8 10h.01"/><path d="M16 10h.01"/><path d="M12 3v5"/>',
        'baustellenbewachung' => '<path d="M3 21h18"/><path d="M6 21V9l6-4 6 4v12"/><path d="M8 13h8"/><path d="M8 17h8"/><path d="M12 5v16"/>',
        'personenschutz' => '<path d="M12 22s7-3.5 7-10V5l-7-3-7 3v7c0 6.5 7 10 7 10Z"/><circle cx="12" cy="10" r="2.4"/><path d="M8.5 16c.8-1.7 2-2.5 3.5-2.5s2.7.8 3.5 2.5"/>',
        'empfang-kontrolldienst' => '<path d="M9 5h10a2 2 0 0 1 2 2v12H9z"/><path d="M3 19h18"/><path d="M6 19V9a2 2 0 0 1 2-2h1"/><path d="M13 10h4"/><path d="M13 14h4"/>',
        'revierdienst-streifendienst' => '<path d="M4 6h5l2 4h9"/><path d="M4 6v12h16v-8"/><path d="M8 18v-5h4v5"/><path d="M16 14h.01"/><path d="M6 3l2 3"/>',
    ];

    return '<svg class="service-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">' . ($icons[$slug] ?? $icons['objektschutz']) . '</svg>';
}

function is_active(string $current, string $target, array $services): bool
{
    if ($current === $target) {
        return true;
    }

    return $target === 'leistungen' && array_key_exists($current, $services);
}

function render_service_card(string $slug, array $service): void
{
    ?>
    <article class="service-card reveal">
        <div class="service-card__icon"><?= service_icon_svg($slug); ?></div>
        <span><?= e($service['accent']); ?></span>
        <h3><?= e($service['nav']); ?></h3>
        <p><?= e($service['summary']); ?></p>
        <a class="text-link" href="<?= e(url_for($slug)); ?>"><?= e($service['cta']); ?></a>
    </article>
    <?php
}

function render_page_hero(string $eyebrow, string $title, string $lead): void
{
    ?>
    <section class="page-hero">
        <div class="container page-hero__inner reveal">
            <p class="eyebrow"><?= e($eyebrow); ?></p>
            <h1><?= e($title); ?></h1>
            <p><?= e($lead); ?></p>
        </div>
    </section>
    <?php
}

$tr = $copy[$currentLang];
$services = $servicesByLang[$currentLang];
$federalStates = $federalStatesByLang[$currentLang];
$serviceAreaText = $currentLang === 'sq' ? 'Neckarsulm - Heilbronn, në gjithë Gjermaninë' : $site['location'];
$pageSlugs = array_keys($tr['meta']);
$knownRoutes = array_merge($pageSlugs, array_keys($services));
$isNotFound = !in_array($slug, $knownRoutes, true);

if ($isNotFound) {
    http_response_code(404);
    $metaTitle = $tr['not_found'][1] . ' - ' . $site['name'];
    $metaDescription = $tr['not_found'][1];
} elseif (isset($services[$slug])) {
    $metaTitle = $services[$slug]['metaTitle'];
    $metaDescription = $services[$slug]['metaDescription'];
} else {
    $metaTitle = $tr['meta'][$slug][0];
    $metaDescription = $tr['meta'][$slug][1];
}

$form = [
    'name' => '',
    'company' => '',
    'phone' => '',
    'email' => '',
    'service' => '',
    'place' => '',
    'date' => '',
    'urgency' => '',
    'callback' => '',
    'message' => '',
];
$formErrors = [];
$formStatus = null;

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST' && $slug === 'kontakt') {
    foreach ($form as $key => $value) {
        $form[$key] = trim((string) ($_POST[$key] ?? ''));
    }
    $form['callback'] = isset($_POST['callback']) ? 'Ja' : 'Nein';

    $honeypot = trim((string) ($_POST['website'] ?? ''));
    if ($honeypot !== '') {
        $formStatus = 'success';
    } else {
        if ($form['name'] === '') {
            $formErrors['name'] = $tr['form']['err_name'];
        }
        if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
            $formErrors['email'] = $tr['form']['err_email'];
        }
        if ($form['service'] === '') {
            $formErrors['service'] = $tr['form']['err_service'];
        }
        if ($form['message'] === '') {
            $formErrors['message'] = $tr['form']['err_message'];
        }
        if (!isset($_POST['privacy'])) {
            $formErrors['privacy'] = $tr['form']['err_privacy'];
        }

        if ($formErrors === []) {
            $subject = ($currentLang === 'sq' ? 'Kërkesë e re sigurie' : 'Neue Sicherheitsanfrage') . ' - Diamant Security';
            $lines = [
                'Neue Anfrage über die Website',
                'Sprache: ' . strtoupper($currentLang),
                '',
                'Name: ' . clean_line($form['name']),
                'Firma: ' . clean_line($form['company']),
                'Telefon: ' . clean_line($form['phone']),
                'E-Mail: ' . clean_line($form['email']),
                'Gewünschte Leistung: ' . clean_line($form['service']),
                'Einsatzort: ' . clean_line($form['place']),
                'Einsatzdatum / Zeitraum: ' . clean_line($form['date']),
                'Dringlichkeit: ' . clean_line($form['urgency']),
                'Rückruf gewünscht: ' . clean_line($form['callback']),
                '',
                'Nachricht:',
                $form['message'],
            ];
            $host = clean_line($_SERVER['HTTP_HOST'] ?? 'diamantsecurity.de');
            $headers = [
                'MIME-Version: 1.0',
                'Content-Type: text/plain; charset=UTF-8',
                'From: Diamant Website <no-reply@' . $host . '>',
                'Reply-To: ' . clean_line($form['email']),
            ];
            $sent = function_exists('mail') && @mail($site['mail_to'], $subject, implode("\n", $lines), implode("\r\n", $headers));
            $formStatus = $sent ? 'success' : 'fallback';
            if ($sent) {
                $form = array_fill_keys(array_keys($form), '');
            }
        }
    }
}

$selectedService = trim((string) ($_GET['leistung'] ?? $form['service']));
if ($form['service'] === '' && $selectedService !== '') {
    $form['service'] = $selectedService;
}

$canonical = absolute_url(url_for($isNotFound ? 'startseite' : $slug, $currentLang));
$alternateDe = absolute_url(url_for($isNotFound ? 'startseite' : $slug, 'de'));
$alternateSq = absolute_url(url_for($isNotFound ? 'startseite' : $slug, 'sq'));
$heroImage = 'images/services/objektschutz.jpg';
$whatsappText = rawurlencode($currentLang === 'sq' ? 'Pershendetje Diamant Security, dua te dergoj nje kerkese sigurie.' : 'Hallo Diamant Security, ich möchte eine Sicherheitsanfrage stellen.');
$whatsappUrl = 'https://wa.me/' . preg_replace('/\D+/', '', $site['whatsapp']) . '?text=' . $whatsappText;
$mapUrl = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($site['street_address']);

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => $site['name'],
    'description' => $metaDescription,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Kochendorfer Str. 54',
        'postalCode' => '74172',
        'addressLocality' => 'Neckarsulm',
        'addressCountry' => 'DE',
    ],
    'areaServed' => $cities,
    'telephone' => $site['phone_display'],
    'email' => $site['email'],
    'url' => $site['base_url'],
    'sameAs' => array_values($site['socials']),
];
?>
<!doctype html>
<html lang="<?= e($currentLang); ?>">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KL5ZDQQJ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($metaTitle); ?></title>
    <meta name="description" content="<?= e($metaDescription); ?>">
    <meta name="theme-color" content="#151515">
    <link rel="canonical" href="<?= e($canonical); ?>">
    <link rel="alternate" hreflang="de" href="<?= e($alternateDe); ?>">
    <link rel="alternate" hreflang="sq" href="<?= e($alternateSq); ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e($alternateDe); ?>">
    <meta property="og:title" content="<?= e($metaTitle); ?>">
    <meta property="og:description" content="<?= e($metaDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= e($canonical); ?>">
    <meta property="og:image" content="<?= e(absolute_url(asset_url('images/diamant-logo.svg'))); ?>">
    <link rel="preload" href="<?= e(asset_url('images/diamant-logo.svg')); ?>" as="image">
    <link rel="preload" href="<?= e(asset_url($heroImage)); ?>" as="image">
    <link rel="stylesheet" href="<?= e(asset_url('css/styles.css')); ?>">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL5ZDQQJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="site-header" data-header>
    <div class="top-strip">
        <div class="container top-strip__inner">
            <div class="top-strip__contacts">
                <a href="tel:<?= e($site['phone_href']); ?>"><?= icon_svg('phone'); ?><?= e($site['phone_display']); ?></a>
                <span><?= icon_svg('map'); ?><?= e($serviceAreaText); ?></span>
                <a href="mailto:<?= e($site['email']); ?>"><?= icon_svg('mail'); ?><?= e($site['email']); ?></a>
            </div>
            <div class="top-strip__badges">
                <span><?= icon_svg('shield'); ?><?= e($currentLang === 'sq' ? 'Diskret dhe profesional' : 'Diskret und professionell'); ?></span>
            </div>
        </div>
    </div>
    <div class="main-nav-bar">
        <div class="container main-nav-bar__inner">
            <a class="brand" href="<?= e(url_for('startseite')); ?>" aria-label="<?= e($site['name']); ?>">
                <img class="brand__logo" src="<?= e(asset_url('images/diamant-logo.svg')); ?>" alt="<?= e($site['brand']); ?>" width="260" height="64">
            </a>
            <nav class="desktop-nav" aria-label="Main navigation">
                <?php foreach (['startseite', 'ueber-uns'] as $navSlug): ?>
                    <a href="<?= e(url_for($navSlug)); ?>" class="<?= is_active($slug, $navSlug, $services) ? 'is-active' : ''; ?>"><?= e($tr['nav'][$navSlug]); ?></a>
                <?php endforeach; ?>
                <div class="nav-dropdown">
                    <a href="<?= e(url_for('leistungen')); ?>" class="<?= is_active($slug, 'leistungen', $services) ? 'is-active' : ''; ?>"><?= e($tr['nav']['leistungen']); ?></a>
                    <div class="nav-dropdown__panel" aria-label="<?= e($tr['nav']['leistungen']); ?>">
                        <?php foreach ($services as $serviceSlug => $service): ?>
                            <a href="<?= e(url_for($serviceSlug)); ?>"><?= e($service['nav']); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php foreach (['einsatzgebiete', 'karriere', 'kontakt'] as $navSlug): ?>
                    <a href="<?= e(url_for($navSlug)); ?>" class="<?= is_active($slug, $navSlug, $services) ? 'is-active' : ''; ?>"><?= e($tr['nav'][$navSlug]); ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="header-actions">
                <div class="language-switcher" aria-label="Language">
                    <a class="<?= $currentLang === 'de' ? 'is-active' : ''; ?>" href="<?= e(url_for($isNotFound ? 'startseite' : $slug, 'de')); ?>">DE</a>
                    <a class="<?= $currentLang === 'sq' ? 'is-active' : ''; ?>" href="<?= e(url_for($isNotFound ? 'startseite' : $slug, 'sq')); ?>">SQ</a>
                </div>
                <a class="header-cta" href="<?= e(url_for('kontakt')); ?>"><?= e($tr['home']['primary']); ?></a>
                <button class="menu-toggle" type="button" aria-label="<?= e($currentLang === 'sq' ? 'Hap menunë' : 'Menü öffnen'); ?>" aria-expanded="false" data-menu-toggle>
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="mobile-panel" hidden data-mobile-menu>
    <nav aria-label="Mobile navigation">
        <div class="mobile-panel__langs">
            <a class="<?= $currentLang === 'de' ? 'is-active' : ''; ?>" href="<?= e(url_for($isNotFound ? 'startseite' : $slug, 'de')); ?>">Deutsch</a>
            <a class="<?= $currentLang === 'sq' ? 'is-active' : ''; ?>" href="<?= e(url_for($isNotFound ? 'startseite' : $slug, 'sq')); ?>">Shqip</a>
        </div>
        <?php foreach (['startseite', 'ueber-uns', 'leistungen'] as $navSlug): ?>
            <a href="<?= e(url_for($navSlug)); ?>"><?= e($tr['nav'][$navSlug]); ?></a>
        <?php endforeach; ?>
        <?php foreach ($services as $serviceSlug => $service): ?>
            <a class="mobile-panel__sub" href="<?= e(url_for($serviceSlug)); ?>"><?= e($service['nav']); ?></a>
        <?php endforeach; ?>
        <?php foreach (['einsatzgebiete', 'karriere', 'kontakt'] as $navSlug): ?>
            <a href="<?= e(url_for($navSlug)); ?>"><?= e($tr['nav'][$navSlug]); ?></a>
        <?php endforeach; ?>
        <a class="mobile-panel__phone" href="tel:<?= e($site['phone_href']); ?>"><?= e($tr['home']['secondary']); ?>: <?= e($site['phone_display']); ?></a>
    </nav>
</div>

<main>
<?php if ($isNotFound): ?>
    <?php render_page_hero($tr['not_found'][0], $tr['not_found'][1], $metaDescription); ?>
    <section class="section">
        <div class="container">
            <a class="button button--primary" href="<?= e(url_for('startseite')); ?>"><?= e($tr['not_found'][2]); ?></a>
        </div>
    </section>

<?php elseif ($slug === 'startseite'): ?>
    <section class="hero">
        <div class="hero__media" aria-hidden="true">
            <img src="<?= e(asset_url($heroImage)); ?>" alt=""<?= image_attrs($heroImage); ?> fetchpriority="high">
        </div>
        <div class="container hero__inner">
            <div class="hero__content reveal">
                <p class="eyebrow"><?= e($tr['home']['eyebrow']); ?></p>
                <h1><?= e($tr['home']['h1']); ?></h1>
                <p class="lead"><?= e($tr['home']['lead']); ?></p>
                <div class="hero__actions">
                    <a class="button button--primary" href="<?= e(url_for('kontakt')); ?>"><?= e($tr['home']['primary']); ?></a>
                    <a class="button button--ghost" href="tel:<?= e($site['phone_href']); ?>"><?= e($tr['home']['secondary']); ?></a>
                </div>
                <div class="trust-row" aria-label="Trust">
                    <?php foreach ($tr['home']['trust'] as $item): ?><span><?= e($item); ?></span><?php endforeach; ?>
                </div>
            </div>
            <aside class="hero-assurance reveal">
                <span><?= icon_svg('shield'); ?></span>
                <h2><?= e($tr['home']['assurance_title']); ?></h2>
                <p><?= e($tr['home']['assurance_text']); ?></p>
                <ul>
                    <?php foreach ($tr['home']['assurance_items'] as $item): ?><li><?= e($item); ?></li><?php endforeach; ?>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section section--light">
        <div class="container split">
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['sections']['why_eyebrow']); ?></p>
                <h2><?= e($tr['sections']['why_h2']); ?></h2>
                <p><?= e($tr['sections']['why_text']); ?></p>
            </div>
            <div class="trust-grid reveal">
                <?php foreach ($tr['trust_cards'] as $card): ?>
                    <article>
                        <h3><?= e($card[0]); ?></h3>
                        <p><?= e($card[1]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="leistungen">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow"><?= e($tr['sections']['services_eyebrow']); ?></p>
                <h2><?= e($tr['sections']['services_h2']); ?></h2>
                <p><?= e($tr['sections']['services_text']); ?></p>
            </div>
            <div class="service-grid">
                <?php foreach ($services as $serviceSlug => $service): ?>
                    <?php render_service_card($serviceSlug, $service); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--process">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow"><?= e($tr['sections']['process_eyebrow']); ?></p>
                <h2><?= e($tr['sections']['process_h2']); ?></h2>
            </div>
            <div class="process">
                <?php foreach ($tr['process'] as $index => $step): ?>
                    <article class="process__item reveal">
                        <span><?= sprintf('%02d', $index + 1); ?></span>
                        <h3><?= e($step[0]); ?></h3>
                        <p><?= e($step[1]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--light">
        <div class="container split split--reverse">
            <div class="region-panel reveal">
                <?php foreach ($cities as $city): ?><span><?= e($city); ?></span><?php endforeach; ?>
            </div>
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['sections']['areas_eyebrow']); ?></p>
                <h2><?= e($tr['sections']['areas_h2']); ?></h2>
                <p><?= e($tr['sections']['areas_text']); ?></p>
                <a class="button button--secondary" href="<?= e(url_for('einsatzgebiete')); ?>"><?= e($tr['nav']['einsatzgebiete']); ?></a>
            </div>
        </div>
    </section>

    <section class="section contact-preview">
        <div class="container contact-preview__inner reveal">
            <div>
                <p class="eyebrow"><?= e($tr['sections']['contact_eyebrow']); ?></p>
                <h2><?= e($tr['sections']['contact_h2']); ?></h2>
                <p><?= e($tr['sections']['contact_text']); ?></p>
            </div>
            <div class="contact-preview__actions">
                <a class="button button--primary" href="<?= e(url_for('kontakt')); ?>"><?= e($tr['home']['primary']); ?></a>
                <a class="button button--secondary" href="tel:<?= e($site['phone_href']); ?>"><?= e($site['phone_display']); ?></a>
            </div>
        </div>
    </section>

    <section class="section section--light">
        <div class="container faq-layout">
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['sections']['faq_eyebrow']); ?></p>
                <h2><?= e($tr['sections']['faq_h2']); ?></h2>
            </div>
            <div class="faq reveal">
                <?php foreach ($tr['faq'] as $index => $item): ?>
                    <details <?= $index === 0 ? 'open' : ''; ?>>
                        <summary><?= e($item[0]); ?></summary>
                        <p><?= e($item[1]); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php elseif ($slug === 'ueber-uns'): ?>
    <?php $aboutImage = 'images/services/objektschutz.jpg'; ?>
    <?php render_page_hero($tr['nav']['ueber-uns'], $tr['about']['h1'], $tr['about']['lead']); ?>
    <section class="section section--light">
        <div class="container about-intro">
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['nav']['ueber-uns']); ?></p>
                <h2><?= e($tr['about']['h2']); ?></h2>
                <p><?= e($tr['about']['text']); ?></p>
            </div>
            <div class="about-photo reveal">
                <img src="<?= e(asset_url($aboutImage)); ?>" alt="<?= e($tr['about']['image_alt']); ?>"<?= image_attrs($aboutImage); ?> loading="eager">
            </div>
            <div class="about-proof-row reveal">
                <?php foreach ($tr['about']['intro_cards'] as $card): ?>
                    <article>
                        <strong><?= e($card[0]); ?></strong>
                        <p><?= e($card[1]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container director-insight">
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['about']['director_eyebrow']); ?></p>
                <h2><?= e($tr['about']['director_h2']); ?></h2>
                <p><?= e($tr['about']['director_text']); ?></p>
            </div>
            <div class="director-insight__points reveal">
                <?php foreach ($tr['about']['director_points'] as $point): ?>
                    <article>
                        <?= icon_svg('shield'); ?>
                        <div>
                            <h3><?= e($point[0]); ?></h3>
                            <p><?= e($point[1]); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container split">
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['about']['approach_eyebrow']); ?></p>
                <h2><?= e($tr['about']['approach_h2']); ?></h2>
                <p><?= e($tr['about']['approach_text']); ?></p>
            </div>
            <div class="about-method reveal">
                <?php foreach ($tr['about']['approach_items'] as $index => $item): ?>
                    <article>
                        <span><?= sprintf('%02d', $index + 1); ?></span>
                        <div>
                            <h3><?= e($item[0]); ?></h3>
                            <p><?= e($item[1]); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section section--light">
        <div class="container about-quality">
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['about']['standards_eyebrow']); ?></p>
                <h2><?= e($tr['about']['standards_h2']); ?></h2>
            </div>
            <div class="about-standard-panel reveal">
                <?php foreach ($tr['about']['standards'] as $standard): ?>
                    <div><?= icon_svg('check'); ?><span><?= e($standard); ?></span></div>
                <?php endforeach; ?>
            </div>
            <div class="about-values-panel reveal">
                <h3><?= e($tr['about']['values_h2']); ?></h3>
                <div class="value-grid">
                    <?php foreach ($tr['about']['values'] as $value): ?><div class="value-card"><?= e($value); ?></div><?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-band">
        <div class="container cta-band__inner reveal">
            <p class="eyebrow"><?= e($tr['nav']['kontakt']); ?></p>
            <h2><?= e($tr['about']['cta_h2']); ?></h2>
            <p><?= e($tr['about']['cta_text']); ?></p>
            <a class="button button--primary" href="<?= e(url_for('kontakt')); ?>"><?= e($tr['about']['cta_button']); ?></a>
        </div>
    </section>

<?php elseif ($slug === 'leistungen'): ?>
    <?php render_page_hero($tr['nav']['leistungen'], $tr['sections']['services_h2'], $tr['sections']['services_text']); ?>
    <section class="section">
        <div class="container service-grid service-grid--wide">
            <?php foreach ($services as $serviceSlug => $service): ?>
                <?php render_service_card($serviceSlug, $service); ?>
            <?php endforeach; ?>
        </div>
    </section>

<?php elseif (isset($services[$slug])): ?>
    <?php
    $service = $services[$slug];
    $serviceContactUrl = url_with_params('kontakt', ['leistung' => $service['nav']], 'formular');
    $relatedServices = array_filter($services, static fn ($key): bool => $key !== $slug, ARRAY_FILTER_USE_KEY);
    $serviceImage = 'images/services/' . $slug . '.jpg';
    ?>
    <section class="service-hero">
        <div class="container service-hero__inner">
            <div class="service-hero__copy reveal">
                <p class="eyebrow"><?= e($service['accent']); ?></p>
                <h1><?= e($service['title']); ?></h1>
                <p><?= e($service['intro']); ?></p>
                <div class="hero__actions">
                    <a class="button button--primary" href="<?= e($serviceContactUrl); ?>"><?= e($service['cta']); ?></a>
                    <a class="button button--ghost" href="#ablauf"><?= e($tr['sections']['process_eyebrow']); ?></a>
                </div>
            </div>
            <div class="service-hero__media reveal">
                <img src="<?= e(asset_url($serviceImage)); ?>" alt="<?= e($service['title']); ?>"<?= image_attrs($serviceImage); ?> loading="eager">
            </div>
        </div>
    </section>
    <section class="section section--light">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow"><?= e($currentLang === 'sq' ? 'Rezultati' : 'Was Sie erhalten'); ?></p>
                <h2><?= e($currentLang === 'sq' ? 'Siguri e planifikuar me detyra të qarta.' : 'Geplante Sicherheit mit klaren Aufgaben.'); ?></h2>
            </div>
            <div class="outcome-grid">
                <?php foreach ($service['outcomes'] as $outcome): ?>
                    <article class="outcome-card reveal">
                        <span><?= service_icon_svg($slug); ?></span>
                        <h3><?= e($outcome); ?></h3>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container service-detail">
            <?php foreach ($service['sections'] as $sectionTitle => $items): ?>
                <article class="detail-card reveal">
                    <h2><?= e((string) $sectionTitle); ?></h2>
                    <ul class="check-list">
                        <?php foreach ($items as $item): ?><li><?= e($item); ?></li><?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="section section--process" id="ablauf">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow"><?= e($tr['sections']['process_eyebrow']); ?></p>
                <h2><?= e($tr['sections']['process_h2']); ?></h2>
            </div>
            <div class="process">
                <?php foreach ($tr['process'] as $index => $step): ?>
                    <article class="process__item reveal">
                        <span><?= sprintf('%02d', $index + 1); ?></span>
                        <h3><?= e($step[0]); ?></h3>
                        <p><?= e($step[1]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section section--light">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow"><?= e($currentLang === 'sq' ? 'Shërbime të tjera' : 'Weitere Leistungen'); ?></p>
                <h2><?= e($currentLang === 'sq' ? 'Shpesh e dobishme si kombinim.' : 'Oft sinnvoll in Kombination.'); ?></h2>
            </div>
            <div class="related-services">
                <?php $shown = 0; foreach ($relatedServices as $relatedSlug => $relatedService): if ($shown >= 3) { break; } $shown++; ?>
                    <a class="related-service reveal" href="<?= e(url_for($relatedSlug)); ?>">
                        <span><?= service_icon_svg($relatedSlug); ?></span>
                        <strong><?= e($relatedService['nav']); ?></strong>
                        <small><?= e($relatedService['summary']); ?></small>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="cta-band">
        <div class="container cta-band__inner reveal">
            <p class="eyebrow"><?= e($tr['nav']['kontakt']); ?></p>
            <h2><?= e($service['cta']); ?></h2>
            <p><?= e($tr['sections']['contact_text']); ?></p>
            <a class="button button--primary" href="<?= e($serviceContactUrl); ?>"><?= e($service['cta']); ?></a>
        </div>
    </section>

<?php elseif ($slug === 'einsatzgebiete'): ?>
    <?php render_page_hero($tr['nav']['einsatzgebiete'], $tr['areas']['h1'], $tr['areas']['lead']); ?>
    <section class="section section--light">
        <div class="container">
            <div class="section-copy reveal">
                <p class="eyebrow"><?= e($tr['sections']['areas_eyebrow']); ?></p>
                <h2><?= e($tr['areas']['h2']); ?></h2>
                <p><?= e($tr['sections']['areas_text']); ?></p>
                <a class="button button--secondary" href="<?= e(url_for('kontakt')); ?>#formular"><?= e($tr['areas']['cta']); ?></a>
            </div>
            <div class="state-grid reveal">
                <?php foreach ($federalStates as $state): ?>
                    <article class="state-card">
                        <h3><?= e($state[0]); ?></h3>
                        <p><?= e($tr['areas']['state_city_label']); ?>: <?= e($state[1]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php elseif ($slug === 'karriere'): ?>
    <?php render_page_hero($tr['nav']['karriere'], $tr['career']['h1'], $tr['career']['lead']); ?>
    <section class="section section--light">
        <div class="container service-detail">
            <article class="detail-card reveal">
                <h2><?= e($tr['career']['who']); ?></h2>
                <ul class="check-list"><?php foreach ($tr['career']['who_items'] as $item): ?><li><?= e($item); ?></li><?php endforeach; ?></ul>
            </article>
            <article class="detail-card reveal">
                <h2><?= e($tr['career']['important']); ?></h2>
                <ul class="check-list"><?php foreach ($tr['career']['important_items'] as $item): ?><li><?= e($item); ?></li><?php endforeach; ?></ul>
            </article>
        </div>
    </section>
    <section class="cta-band">
        <div class="container cta-band__inner reveal">
            <h2><?= e($tr['career']['cta']); ?></h2>
            <a class="button button--primary" href="<?= e(url_with_params('kontakt', ['leistung' => $tr['nav']['karriere']], 'formular')); ?>"><?= e($tr['career']['cta']); ?></a>
        </div>
    </section>

<?php elseif ($slug === 'kontakt'): ?>
    <?php render_page_hero($tr['nav']['kontakt'], $tr['contact']['h1'], $tr['contact']['lead']); ?>
    <section class="section section--light" id="formular">
        <div class="container contact-layout">
            <div class="contact-card reveal">
                <h2><?= e($tr['contact']['form_h2']); ?></h2>
                <?php if ($formStatus === 'success'): ?>
                    <div class="form-message form-message--success"><?= e($tr['form']['success']); ?></div>
                <?php elseif ($formStatus === 'fallback'): ?>
                    <div class="form-message form-message--warning"><?= e($tr['form']['fallback']); ?></div>
                <?php endif; ?>
                <form method="post" action="<?= e(url_for('kontakt')); ?>#formular" novalidate>
                    <div class="form-grid">
                        <label>
                            <span><?= e($tr['form']['name']); ?></span>
                            <input name="name" value="<?= e($form['name']); ?>" autocomplete="name" required>
                            <?php if (isset($formErrors['name'])): ?><em><?= e($formErrors['name']); ?></em><?php endif; ?>
                        </label>
                        <label>
                            <span><?= e($tr['form']['company']); ?></span>
                            <input name="company" value="<?= e($form['company']); ?>" autocomplete="organization">
                        </label>
                        <label>
                            <span><?= e($tr['form']['phone']); ?></span>
                            <input name="phone" value="<?= e($form['phone']); ?>" autocomplete="tel">
                        </label>
                        <label>
                            <span><?= e($tr['form']['email']); ?></span>
                            <input type="email" name="email" value="<?= e($form['email']); ?>" autocomplete="email" required>
                            <?php if (isset($formErrors['email'])): ?><em><?= e($formErrors['email']); ?></em><?php endif; ?>
                        </label>
                        <label>
                            <span><?= e($tr['form']['service']); ?></span>
                            <select name="service" required>
                                <option value=""><?= e($tr['form']['choose']); ?></option>
                                <?php foreach ($services as $service): ?>
                                    <option value="<?= e($service['nav']); ?>" <?= $form['service'] === $service['nav'] ? 'selected' : ''; ?>><?= e($service['nav']); ?></option>
                                <?php endforeach; ?>
                                <option value="<?= e($tr['nav']['karriere']); ?>" <?= $form['service'] === $tr['nav']['karriere'] ? 'selected' : ''; ?>><?= e($tr['nav']['karriere']); ?></option>
                            </select>
                            <?php if (isset($formErrors['service'])): ?><em><?= e($formErrors['service']); ?></em><?php endif; ?>
                        </label>
                        <label>
                            <span><?= e($tr['form']['place']); ?></span>
                            <input name="place" value="<?= e($form['place']); ?>" autocomplete="address-level2">
                        </label>
                        <label>
                            <span><?= e($tr['form']['date']); ?></span>
                            <input name="date" value="<?= e($form['date']); ?>">
                        </label>
                        <label>
                            <span><?= e($tr['form']['urgency']); ?></span>
                            <select name="urgency">
                                <?php foreach ($tr['form']['urgency_options'] as $option): ?>
                                    <option value="<?= e($option); ?>" <?= $form['urgency'] === $option ? 'selected' : ''; ?>><?= e($option); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <label class="form-grid__wide">
                            <span><?= e($tr['form']['message']); ?></span>
                            <textarea name="message" rows="6" required><?= e($form['message']); ?></textarea>
                            <?php if (isset($formErrors['message'])): ?><em><?= e($formErrors['message']); ?></em><?php endif; ?>
                        </label>
                    </div>
                    <label class="privacy-check">
                        <input type="checkbox" name="callback" value="1" <?= isset($_POST['callback']) ? 'checked' : ''; ?>>
                        <span><?= e($tr['form']['callback']); ?></span>
                    </label>
                    <label class="privacy-check">
                        <input type="checkbox" name="privacy" value="1" <?= isset($_POST['privacy']) ? 'checked' : ''; ?>>
                        <span><?= e($tr['form']['privacy']); ?> <a href="<?= e(url_for('datenschutz')); ?>"><?= e($tr['legal_nav']['datenschutz']); ?></a></span>
                    </label>
                    <?php if (isset($formErrors['privacy'])): ?><em class="form-error"><?= e($formErrors['privacy']); ?></em><?php endif; ?>
                    <label class="honeypot" aria-hidden="true" hidden>
                        Website
                        <input name="website" tabindex="-1" autocomplete="off">
                    </label>
                    <button class="button button--primary" type="submit"><?= e($tr['form']['submit']); ?></button>
                </form>
            </div>
            <aside class="contact-info reveal">
                <span class="eyebrow"><?= e($tr['contact']['info_h2']); ?></span>
                <h2><?= e($site['name']); ?></h2>
                <p><?= e($serviceAreaText); ?></p>
                <a href="tel:<?= e($site['phone_href']); ?>"><?= e($site['phone_display']); ?></a>
                <a href="mailto:<?= e($site['email']); ?>"><?= e($site['email']); ?></a>
                <a href="<?= e($mapUrl); ?>" target="_blank" rel="noopener"><?= e($tr['contact']['map']); ?></a>
                <a href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener"><?= social_icon_svg('whatsapp'); ?> WhatsApp</a>
                <div class="contact-info__note">
                    <strong><?= e($tr['contact']['response']); ?></strong>
                    <p><?= e($tr['contact']['response_text']); ?></p>
                </div>
            </aside>
        </div>
    </section>

<?php elseif ($slug === 'impressum'): ?>
    <?php render_page_hero($tr['legal_nav']['impressum'], $tr['legal']['impressum_h1'], $tr['legal']['provider']); ?>
    <section class="section">
        <div class="container legal-content">
            <h2><?= e($tr['legal']['provider']); ?></h2>
            <dl>
                <dt>Firma</dt><dd><?= e($site['legal']['company']); ?></dd>
                <dt>Kontakt</dt><dd><a href="tel:<?= e($site['phone_href']); ?>"><?= e($site['phone_display']); ?></a><br><a href="mailto:<?= e($site['email']); ?>"><?= e($site['email']); ?></a></dd>
                <?php if ($site['legal']['address'] !== ''): ?><dt>Anschrift</dt><dd><?= e($site['legal']['address']); ?></dd><?php endif; ?>
                <?php if ($site['legal']['representative'] !== ''): ?><dt>Vertreten durch</dt><dd><?= e($site['legal']['representative']); ?></dd><?php endif; ?>
                <?php if ($site['legal']['register'] !== ''): ?><dt>Register</dt><dd><?= e($site['legal']['register']); ?></dd><?php endif; ?>
                <?php if ($site['legal']['vat_id'] !== ''): ?><dt>Umsatzsteuer</dt><dd><?= e($site['legal']['vat_id']); ?></dd><?php endif; ?>
                <?php if ($site['legal']['supervisory_authority'] !== ''): ?><dt>Aufsichtsbehörde</dt><dd><?= e($site['legal']['supervisory_authority']); ?></dd><?php endif; ?>
                <?php if ($site['legal']['permit_34a'] !== ''): ?><dt>Bewachungsgewerbe</dt><dd><?= e($site['legal']['permit_34a']); ?></dd><?php endif; ?>
            </dl>
            <h2>Haftung für Inhalte</h2>
            <p>Die Inhalte dieser Website wurden sorgfältig erstellt. Für externe Links sind ausschließlich die jeweiligen Betreiber verantwortlich.</p>
        </div>
    </section>

<?php elseif ($slug === 'datenschutz'): ?>
    <?php render_page_hero($tr['legal_nav']['datenschutz'], $tr['legal']['datenschutz_h1'], $tr['legal']['privacy_intro']); ?>
    <section class="section">
        <div class="container legal-content">
            <h2>Verantwortlicher</h2>
            <p><?= e($site['legal']['company']); ?>, E-Mail: <a href="mailto:<?= e($site['email']); ?>"><?= e($site['email']); ?></a></p>
            <h2>Kontaktformular und Kommunikation</h2>
            <p>Wenn Sie das Kontaktformular nutzen, verarbeiten wir die eingegebenen Daten zur Bearbeitung Ihrer Anfrage. Dazu gehören Name, Firma, Telefonnummer, E-Mail-Adresse, gewünschte Leistung, Einsatzort, Zeitraum und Nachricht.</p>
            <h2>Server-Logfiles</h2>
            <p>Beim Aufruf der Website können technische Zugriffsdaten durch den Hostinganbieter verarbeitet werden, etwa IP-Adresse, Zeitpunkt, Browserinformationen und aufgerufene Seiten. Diese Daten dienen dem sicheren Betrieb der Website.</p>
            <h2>Cookies, Google Tag Manager und Google Analytics 4</h2>
            <p>Diese Website nutzt Google Tag Manager und Google Analytics 4 zur technischen Einbindung und Auswertung der Websitenutzung. Dabei können Nutzungsdaten, technische Informationen und Cookies verarbeitet werden. Google Maps wird nur als externer Link geöffnet und nicht ungefragt eingebettet.</p>
            <h2>WhatsApp und Social Media</h2>
            <p>Links zu WhatsApp und sozialen Netzwerken führen zu externen Anbietern. Erst beim Anklicken werden Daten an diese Anbieter übertragen.</p>
            <h2>Ihre Rechte</h2>
            <p>Betroffene Personen können Auskunft, Berichtigung, Löschung, Einschränkung der Verarbeitung, Widerspruch und Datenübertragbarkeit verlangen. Außerdem besteht ein Beschwerderecht bei einer Datenschutzaufsichtsbehörde.</p>
        </div>
    </section>

<?php elseif ($slug === 'agb'): ?>
    <?php render_page_hero($tr['legal_nav']['agb'], $tr['legal']['agb_h1'], $tr['legal']['agb_intro']); ?>
    <section class="section">
        <div class="container legal-content">
            <h2>Vertragsgrundlagen</h2>
            <p>Leistungsumfang, Einsatzzeiten, Personalstärke, Vergütung, Dokumentation und besondere Anforderungen werden im Angebot oder Vertrag festgelegt.</p>
            <h2>Leistungserbringung</h2>
            <p>Die Durchführung von Sicherheitsdienstleistungen richtet sich nach dem vereinbarten Einsatzplan und den geltenden gesetzlichen Anforderungen für das Bewachungsgewerbe.</p>
            <h2>Bewachungsgewerbe</h2>
            <p>Sicherheitsdienstleistungen werden im Rahmen der einschlägigen gesetzlichen Anforderungen erbracht, insbesondere der Vorgaben für das Bewachungsgewerbe nach § 34a GewO. Behördliche Angaben und Erlaubnisdaten werden, soweit gesetzlich erforderlich, im Impressum geführt.</p>
        </div>
    </section>
<?php endif; ?>
</main>

<footer class="site-footer">
    <div class="container site-footer__grid">
        <div class="footer-brand-block">
            <a class="brand brand--footer" href="<?= e(url_for('startseite')); ?>">
                <img class="brand__logo" src="<?= e(asset_url('images/diamant-logo.svg')); ?>" alt="<?= e($site['brand']); ?>" width="260" height="64">
            </a>
            <p><?= e($tr['footer_text']); ?></p>
            <div class="footer-trust">
                <?php foreach (array_slice($tr['home']['trust'], 0, 3) as $item): ?><span><?= e($item); ?></span><?php endforeach; ?>
            </div>
        </div>
        <div>
            <h2><?= e($tr['nav']['leistungen']); ?></h2>
            <?php foreach ($services as $serviceSlug => $service): ?>
                <a href="<?= e(url_for($serviceSlug)); ?>"><?= e($service['nav']); ?></a>
            <?php endforeach; ?>
        </div>
        <div>
            <h2><?= e($currentLang === 'sq' ? 'Kompania' : 'Unternehmen'); ?></h2>
            <?php foreach (['ueber-uns', 'einsatzgebiete', 'karriere', 'kontakt'] as $navSlug): ?>
                <a href="<?= e(url_for($navSlug)); ?>"><?= e($tr['nav'][$navSlug]); ?></a>
            <?php endforeach; ?>
            <?php foreach (['impressum', 'datenschutz', 'agb'] as $legalSlug): ?>
                <a href="<?= e(url_for($legalSlug)); ?>"><?= e($tr['legal_nav'][$legalSlug]); ?></a>
            <?php endforeach; ?>
        </div>
        <div class="footer-contact">
            <h2><?= e($tr['nav']['kontakt']); ?></h2>
            <a href="tel:<?= e($site['phone_href']); ?>"><?= e($site['phone_display']); ?></a>
            <a href="mailto:<?= e($site['email']); ?>"><?= e($site['email']); ?></a>
            <span><?= e($serviceAreaText); ?></span>
            <a href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener"><?= social_icon_svg('whatsapp'); ?> WhatsApp</a>
            <div class="footer-socials">
                <?php foreach ($site['socials'] as $socialName => $socialUrl): ?>
                    <a href="<?= e($socialUrl); ?>" target="_blank" rel="noopener" aria-label="<?= e($socialName); ?>"><?= social_icon_svg($socialName); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container site-footer__bottom">
        <span>&copy; <?= date('Y'); ?> <?= e($site['name']); ?></span>
        <span><?= e($currentLang === 'sq' ? 'Profesional. Diskret. I strukturuar.' : 'Professionell. Diskret. Strukturiert.'); ?></span>
    </div>
</footer>

<div class="mobile-action-bar" aria-label="Quick contact">
    <a href="tel:<?= e($site['phone_href']); ?>"><?= icon_svg('phone'); ?><?= e($currentLang === 'sq' ? 'Telefono' : 'Anrufen'); ?></a>
    <a href="<?= e(url_for('kontakt')); ?>#formular"><?= icon_svg('mail'); ?><?= e($currentLang === 'sq' ? 'Kërkesë' : 'Anfrage'); ?></a>
</div>

<script src="<?= e(asset_url('js/main.js')); ?>" defer></script>
</body>
</html>
