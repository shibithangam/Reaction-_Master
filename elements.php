<?php
echo "<html>\n";
echo "<body>\n";

$elements = array(
    array(
        
        'name' =>'Hydrogen',
        'symbol' => 'H',
        'atomicnumbe' => '1',
        'groupnumber' => '1',
        'period' => '1',
        'atomicweight' => '1.00794',
        'type' => 'gas'
    ),
    array (
        
        'name' =>'Helium',
        'symbol' => 'He',
        'atomicnumbe' => '2',
        'groupnumber' => '18',
        'period' => '1',
        'atomicweight' => '4.002602',
        'type' => 'gas'
        ),
    array(
        
        'name' =>'Lithium',
        'symbol' => 'Li',
        'atomicnumbe' => '3',
        'groupnumber' => '1',
        'period' => '2',
        'atomicweight' => '6.941',
        'type' => 'solid'
        ),
    array(
        
        'name' =>'Beryllium',
        'symbol' => 'Be',
        'atomicnumbe' => '4',
        'groupnumber' => '2',
        'period' => '2',
        'atomicweight' => '9.012182',
        'type' => 'solid'
    ),
    array(
        
        'name' =>'Boron',
        'symbol' => 'B',
        'atomicnumbe' => '5',
        'groupnumber' => '13',
        'period' => '2',
        'atomicweight' => '10.811',
        'type' => 'solid'
    ),
    array(
        'name' =>'Carbon',
        'symbol' => 'C',
        'atomicnumbe' => '6',
        'groupnumber' => '14',
        'period' => '2',
        'atomicweight' => '12.0107',
        'type' => 'solid'
    ),
    array(
        'name' =>'Nitrogen',
        'symbol' => 'N',
        'atomicnumbe' => '7',
        'groupnumber' => '15',
        'period' => '2',
        'atomicweight' => '14.0067',
        'type' => 'gas'
    ),
    array(
        'name' =>'Oxygen',
        'symbol' => 'O',
        'atomicnumbe' => '8',
        'groupnumber' => '16',
        'period' => '2',
        'atomicweight' => '15.9994',
        'type' => 'gas'
    ),
    array(
        'name' =>'Flourine',
        'symbol' => 'F',
        'atomicnumbe' => '9',
        'groupnumber' => '17',
        'period' => '2',
        'atomicweight' => '18.9984032',
        'type' => 'gas'
    ),
    array(
        'name' =>'Neon',
        'symbol' => 'Ne',
        'atomicnumbe' => '10',
        'groupnumber' => '18',
        'period' => '2',
        'atomicweight' => '20.1797',
        'type' => 'gas'
    ),
    array(
        'name' =>'Sodium',
        'symbol' => 'Na',
        'atomicnumbe' => '11',
        'groupnumber' => '1',
        'period' => '3',
        'atomicweight' => '22.989770',
        'type' => 'solid'
    ),
    array(
        'name' =>'Magnesium',
        'symbol' => 'Mg',
        'atomicnumbe' => '12',
        'groupnumber' => '2',
        'period' => '3',
        'atomicweight' => '24.3050',
        'type' => 'solid'
    ),
    array(
        'name' =>'Aluminum',
        'symbol' => 'Al',
        'atomicnumbe' => '13',
        'groupnumber' => '13',
        'period' => '3',
        'atomicweight' => '26.981538',
        'type' => 'solid'
    ),
    array(
        'name' =>'Silicon',
        'symbol' => 'Si',
        'atomicnumbe' => '14',
        'groupnumber' => '14',
        'period' => '3',
        'atomicweight' => '28.0855',
        'type' => 'solid'
    ),
    array(
        'name' =>'Phosphorus',
        'symbol' => 'P',
        'atomicnumbe' => '15',
        'groupnumber' => '15',
        'period' => '3',
        'atomicweight' => '30.973761',
        'type' => 'solid'
    ),
    array(
        'name' =>'Sulfur',
        'symbol' => 'S',
        'atomicnumbe' => '16',
        'groupnumber' => '16',
        'period' => '3',
        'atomicweight' => '32.065',
        'type' => 'solid'
    ),
    array(
        'name' =>'Chlorine',
        'symbol' => 'Cl',
        'atomicnumbe' => '17',
        'groupnumber' => '17',
        'period' => '3',
        'atomicweight' => '35.453',
        'type' => 'gas'
    ),
    array(
        'name' =>'Argon',
        'symbol' => 'Ar',
        'atomicnumbe' => '18',
        'groupnumber' => '18',
        'period' => '3',
        'atomicweight' => '39.948',
        'type' => 'gas'
    ),
    array(
        'name' =>'Potassium',
        'symbol' => 'K',
        'atomicnumbe' => '19',
        'groupnumber' => '1',
        'period' => '4',
        'atomicweight' => '39.098',
        'type' => 'solid'
    ),
    array(
        'name' =>'Calcium',
        'symbol' => 'Ca',
        'atomicnumbe' => '20',
        'groupnumber' => '2',
        'period' => '4',
        'atomicweight' => '40.078',
        'type' => 'solid'
    ),
    array(
        'name' =>'Scandium',
        'symbol' => 'Se',
        'atomicnumbe' => '21',
        'groupnumber' => '3',
        'period' => '4',
        'atomicweight' => '44.955910',
        'type' => 'solid'
    ),
    array(
        'name' =>'Titanium',
        'symbol' => 'Ti',
        'atomicnumbe' => '22',
        'groupnumber' => '4',
        'period' => '4',
        'atomicweight' => '47.867',
        'type' => 'solid'
    ),
    array(
        'name' =>'Vanadium',
        'symbol' => 'V',
        'atomicnumbe' => '23',
        'groupnumber' => '5',
        'period' => '4',
        'atomicweight' => '50.9415',
        'type' => 'solid'
    ),
    array(
        'name' =>'Manganese',
        'symbol' => 'Mn',
        'atomicnumbe' => '25',
        'groupnumber' => '7',
        'period' => '4',
        'atomicweight' => '54.938049',
        'type' => 'solid'
    ),
    array(
        'name' =>'Iron',
        'symbol' => 'Fe',
        'atomicnumbe' => '26',
        'groupnumber' => '8',
        'period' => '4',
        'atomicweight' => '55.845',
        'type' => 'solid'
    ),
    array(
        'name' =>'Cobalt',
        'symbol' => 'Co',
        'atomicnumbe' => '27',
        'groupnumber' => '9',
        'period' => '4',
        'atomicweight' => '58.933200',
        'type' => 'solid'
    ),
    array(
        'name' =>'Nickel',
        'symbol' => 'Ni',
        'atomicnumbe' => '28',
        'groupnumber' => '10',
        'period' => '4',
        'atomicweight' => '58.6934',
        'type' => 'solid'
    ),
    array(
        'name' =>'Copper',
        'symbol' => 'Cu',
        'atomicnumbe' => '29',
        'groupnumber' => '11',
        'period' => '4',
        'atomicweight' => '63.546',
        'type' => 'solid'
    ),
    array(
        'name' =>'Zinc',
        'symbol' => 'Zn',
        'atomicnumbe' => '30',
        'groupnumber' => '12',
        'period' => '4',
        'atomicweight' => '65.409',
        'type' => 'solid'
    ),
    array(
        'name' =>'Gallium',
        'symbol' => 'Ga',
        'atomicnumbe' => '31',
        'groupnumber' => '13',
        'period' => '4',
        'atomicweight' => '69.723',
        'type' => 'solid'
    ),
    array(
        'name' =>'Germanium',
        'symbol' => 'Ge',
        'atomicnumbe' => '32',
        'groupnumber' => '14',
        'period' => '4',
        'atomicweight' => '72.64',
        'type' => 'solid'
    ),
    array(
        'name' =>'Arsenic',
        'symbol' => 'As',
        'atomicnumbe' => '33',
        'groupnumber' => '15',
        'period' => '4',
        'atomicweight' => '74.92160',
        'type' => 'solid'
    ),
    array(
        'name' =>'Selenium',
        'symbol' => 'Se',
        'atomicnumbe' => '34',
        'groupnumber' => '16',
        'period' => '4',
        'atomicweight' => '78.96',
        'type' => 'solid'
    ),
    array(
        'name' =>'Bromine',
        'symbol' => 'Br',
        'atomicnumbe' => '35',
        'groupnumber' => '17',
        'period' => '4',
        'atomicweight' => '79.904',
        'type' => 'liquid'
    ),
    array(
        'name' =>'Krypton',
        'symbol' => 'Kr',
        'atomicnumbe' => '36',
        'groupnumber' => '18',
        'period' => '4',
        'atomicweight' => '83.798',
        'type' => 'gas'
    ),
    array(
        'name' =>'Rubidium',
        'symbol' => 'Rb',
        'atomicnumbe' => '37',
        'groupnumber' => '1',
        'period' => '5',
        'atomicweight' => '85.4678',
        'type' => 'solid'
    ),
    array(
        'name' =>'Strontium',
        'symbol' => 'Sr',
        'atomicnumbe' => '38',
        'groupnumber' => '2',
        'period' => '5',
        'atomicweight' => '87.62',
        'type' => 'solid'
    ),
    array(
        'name' =>'Yttrium',
        'symbol' => 'Y',
        'atomicnumbe' => '39',
        'groupnumber' => '3',
        'period' => '5',
        'atomicweight' => '88.90585',
        'type' => 'solid'
    ),
    array(
        'name' =>'Zirconium',
        'symbol' => 'Zr',
        'atomicnumbe' => '40',
        'groupnumber' => '4',
        'period' => '5',
        'atomicweight' => '91.224',
        'type' => 'solid'
    ),
    array(
        'name' =>'Niobium',
        'symbol' => 'Nb',
        'atomicnumbe' => '41',
        'groupnumber' => '5',
        'period' => '5',
        'atomicweight' => '92.90638',
        'type' => 'solid'
    ),
    array(
        'name' =>'Molybdenum',
        'symbol' => 'Mo',
        'atomicnumbe' => '42',
        'groupnumber' => '6',
        'period' => '5',
        'atomicweight' => '95.94',
        'type' => 'solid'
    ),
    array(
        'name' =>'Technetium',
        'symbol' => 'Tc',
        'atomicnumbe' => '43',
        'groupnumber' => '7',
        'period' => '5',
        'atomicweight' => '99',
        'type' => 'solid'
    ),
    array(
        'name' =>'Ruthenium',
        'symbol' => 'Ru',
        'atomicnumbe' => '44',
        'groupnumber' => '8',
        'period' => '5',
        'atomicweight' => '101.07',
        'type' => 'solid'
    ),
    array(
        'name' =>'Rhodium',
        'symbol' => 'Rh',
        'atomicnumbe' => '45',
        'groupnumber' => '9',
        'period' => '5',
        'atomicweight' => '102.90550',
        'type' => 'solid'
    ),
    array(
        'name' =>'Palladium',
        'symbol' => 'Pd',
        'atomicnumbe' => '46',
        'groupnumber' => '10',
        'period' => '5',
        'atomicweight' => '106.42',
        'type' => 'solid'
    ),
    array(
        'name' =>'Silver',
        'symbol' => 'Ag',
        'atomicnumbe' => '47',
        'groupnumber' => '11',
        'period' => '5',
        'atomicweight' => '107.8682',
        'type' => 'solid'
    ),
    array(
        'name' =>'Cadmium',
        'symbol' => 'Cd',
        'atomicnumbe' => '48',
        'groupnumber' => '12',
        'period' => '5',
        'atomicweight' => '112.411',
        'type' => 'solid'
    ),
    array(
        'name' =>'Indium',
        'symbol' => 'In',
        'atomicnumbe' => '49',
        'groupnumber' => '13',
        'period' => '5',
        'atomicweight' => '114.813',
        'type' => 'solid'
    ),
    array(
        'name' =>'Tin',
        'symbol' => 'Sn',
        'atomicnumbe' => '50',
        'groupnumber' => '14',
        'period' => '5',
        'atomicweight' => '118.710',
        'type' => 'solid'
    ),
    array(
        'name' =>'Antimony',
        'symbol' => 'Sb',
        'atomicnumbe' => '51',
        'groupnumber' => '15',
        'period' => '5',
        'atomicweight' => '121.760',
        'type' => 'solid'
    ),
    array(
        'name' =>'Tellurium',
        'symbol' => 'Te',
        'atomicnumbe' => '52',
        'groupnumber' => '16',
        'period' => '5',
        'atomicweight' => '127.60',
        'type' => 'solid'
    ),
    array(
        'name' =>'Iodine',
        'symbol' => 'I',
        'atomicnumbe' => '53',
        'groupnumber' => '17',
        'period' => '5',
        'atomicweight' => '126.90447',
        'type' => 'solid'
    ),
    array(
        'name' =>'Xenon',
        'symbol' => 'Xe',
        'atomicnumbe' => '54',
        'groupnumber' => '18',
        'period' => '5',
        'atomicweight' => '131.293',
        'type' => 'gas'
    ),
    array(
        'name' =>'Cesium',
        'symbol' => 'Cs',
        'atomicnumbe' => '55',
        'groupnumber' => '1',
        'period' => '6',
        'atomicweight' => '132.90545',
        'type' => 'solid'
    ),
    array(
        'name' =>'Barium',
        'symbol' => 'Ba',
        'atomicnumbe' => '56',
        'groupnumber' => '2',
        'period' => '6',
        'atomicweight' => '137.327',
        'type' => 'solid'
    ),
    array(
        'name' =>'Lanthanum',
        'symbol' => 'La',
        'atomicnumbe' => '57',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '138.9055',
        'type' => 'solid'
    ),
    array(
        'name' =>'Cerium',
        'symbol' => 'Ce',
        'atomicnumbe' => '58',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '140.116',
        'type' => 'solid'
    ),
    array(
        'name' =>'Praseodymium',
        'symbol' => 'Pr',
        'atomicnumbe' => '59',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '140.90765',
        'type' => 'solid'
    ),
    array(
        'name' =>'Neodymium',
        'symbol' => 'Nd',
        'atomicnumbe' => '60',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '144.24',
        'type' => 'solid'
    ),
    array(
        'name' =>'Promethium',
        'symbol' => 'Pm',
        'atomicnumbe' => '61',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '145',
        'type' => 'solid'
    ),
    array(
        'name' =>'Samarium',
        'symbol' => 'Sm',
        'atomicnumbe' => '62',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '150.36',
        'type' => 'solid'
    ),
    
    array(
        'name' =>'Europium',
        'symbol' => 'Eu',
        'atomicnumbe' => '63',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '151.964',
        'type' => 'solid'
    ),
    array(
        'name' =>'Gadolinium',
        'symbol' => 'Gd',
        'atomicnumbe' => '64',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '157.25',
        'type' => 'solid'
    ),
    array(
        'name' =>'Terbium',
        'symbol' => 'Tb',
        'atomicnumbe' => '65',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '158.92534',
        'type' => 'solid'
    ),
    array(
        'name' =>'Dysprosium',
        'symbol' => 'Dy',
        'atomicnumbe' => '66',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '162.500',
        'type' => 'solid'
    ),
    array(
        'name' =>'Holmium',
        'symbol' => 'Ho',
        'atomicnumbe' => '67',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '164.93032',
        'type' => 'solid'
    ),
    array(
        'name' =>'Erbium',
        'symbol' => 'Er',
        'atomicnumbe' => '68',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '167.259',
        'type' => 'solid'
    ),
    array(
        'name' =>'Thulium',
        'symbol' => 'Tm',
        'atomicnumbe' => '69',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '168.93421',
        'type' => 'solid'
    ),
    array(
        'name' =>'Ytterbium',
        'symbol' => 'Yb',
        'atomicnumbe' => '70',
        'groupnumber' => null,
        'period' => '6',
        'atomicweight' => '173.04',
        'type' => 'solid'
    ),
    array(
        'name' =>'Lutetium',
        'symbol' => 'Lu',
        'atomicnumbe' => '71',
        'groupnumber' => '3',
        'period' => '6',
        'atomicweight' => '174.967',
        'type' => 'solid'
    ),
    array(
        'name' =>'Hafnium',
        'symbol' => 'Hf',
        'atomicnumbe' => '72',
        'groupnumber' => '4',
        'period' => '6',
        'atomicweight' => '178.49',
        'type' => 'solid'
    ),
    array(
        'name' =>'Tantalum',
        'symbol' => 'Ta',
        'atomicnumbe' => '73',
        'groupnumber' => '5',
        'period' => '6',
        'atomicweight' => '180.947',
        'type' => 'solid'
    ),
    array(
        'name' =>'Tungsten',
        'symbol' => 'W',
        'atomicnumbe' => '74',
        'groupnumber' => '6',
        'period' => '6',
        'atomicweight' => '183.84',
        'type' => 'solid'
    ),
    array(
        'name' =>'Rhenium',
        'symbol' => 'Re',
        'atomicnumbe' => '75',
        'groupnumber' => '7',
        'period' => '6',
        'atomicweight' => '186.207',
        'type' => 'solid'
    ),
    array(
        'name' =>'Osmium',
        'symbol' => 'Os',
        'atomicnumbe' => '76',
        'groupnumber' => '8',
        'period' => '6',
        'atomicweight' => '190.23',
        'type' => 'solid'
    ),
    array(
        'name' =>'Iridium',
        'symbol' => 'Ir',
        'atomicnumbe' => '77',
        'groupnumber' => '9',
        'period' => '6',
        'atomicweight' => '192.217',
        'type' => 'solid'
    ),
    array(
        'name' =>'Platinum',
        'symbol' => 'Pt',
        'atomicnumbe' => '78',
        'groupnumber' => '10',
        'period' => '6',
        'atomicweight' => '195.078',
        'type' => 'solid'
    ),
    array(
        'name' =>'Gold',
        'symbol' => 'Au',
        'atomicnumbe' => '79',
        'groupnumber' => '11',
        'period' => '6',
        'atomicweight' => '196.96655',
        'type' => 'solid'
    ),
    array(
        'name' =>'Mercury',
        'symbol' => 'Hg',
        'atomicnumbe' => '80',
        'groupnumber' => '12',
        'period' => '6',
        'atomicweight' => '200.59',
        'type' => 'liquid'
    ),
    
    array(
        'name' =>'Thallium',
        'symbol' => 'Tl',
        'atomicnumbe' => '81',
        'groupnumber' => '13',
        'period' => '6',
        'atomicweight' => '204.3833',
        'type' => 'solid'
    ),
    array(
        'name' =>'Lead',
        'symbol' => 'Pb',
        'atomicnumbe' => '82',
        'groupnumber' => '14',
        'period' => '6',
        'atomicweight' => '207.2',
        'type' => 'solid'
    ),
    array(
        'name' =>'Bismuth',
        'symbol' => 'Bi',
        'atomicnumbe' => '83',
        'groupnumber' => '15',
        'period' => '6',
        'atomicweight' => '208.98038',
        'type' => 'solid'
    ),
    array(
        'name' =>'Polonium',
        'symbol' => 'Po',
        'atomicnumbe' => '84',
        'groupnumber' => '16',
        'period' => '6',
        'atomicweight' => '210',
        'type' => 'solid'
    ),
    array(
        'name' =>'Astatine',
        'symbol' => 'At',
        'atomicnumbe' => '85',
        'groupnumber' => '17',
        'period' => '6',
        'atomicweight' => '210',
        'type' => 'solid'
    ),
    array(
        'name' =>'Radon',
        'symbol' => 'Rn',
        'atomicnumbe' => '86',
        'groupnumber' => '18',
        'period' => '6',
        'atomicweight' => '222',
        'type' => 'gas'
    ),
    array(
        'name' =>'Francium',
        'symbol' => 'Fr',
        'atomicnumbe' => '87',
        'groupnumber' => '1',
        'period' => '7',
        'atomicweight' => '223',
        'type' => 'solid'
    ),
    array(
        'name' =>'Radium',
        'symbol' => 'Ra',
        'atomicnumbe' => '88',
        'groupnumber' => '2',
        'period' => '7',
        'atomicweight' => '226',
        'type' => 'solid'
    ),
    array(
        'name' =>'Actinium',
        'symbol' => 'Ac',
        'atomicnumbe' => '89',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '227',
        'type' => 'solid'
    ),
    array(
        'name' =>'Thorium',
        'symbol' => 'Th',
        'atomicnumbe' => '90',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '232.0381',
        'type' => 'solid'
    ),
    array(
        'name' =>'Protactinium',
        'symbol' => 'Pa',
        'atomicnumbe' => '91',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '231.03588',
        'type' => 'solid'
    ),
    array(
        'name' =>'Uranium',
        'symbol' => 'U',
        'atomicnumbe' => '92',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '238.02891',
        'type' => 'solid'
    ),
   
    array(
        'name' =>'Neptunium',
        'symbol' => 'Np',
        'atomicnumbe' => '93',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '237',
        'type' => 'solid'
    ),
    
    array(
        'name' =>'Plutonium',
        'symbol' => 'Pu',
        'atomicnumbe' => '94',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '244',
        'type' => 'solid'
    ),
    
    array(
        'name' =>'Americium',
        'symbol' => 'Am',
        'atomicnumbe' => '95',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '243',
        'type' => 'solid'
    ),
    array(
        'name' =>'Curium',
        'symbol' => 'Cm',
        'atomicnumbe' => '96',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '247',
        'type' => 'solid'
    ),
    array(
        'name' =>'Berkelium',
        'symbol' => 'Bk',
        'atomicnumbe' => '97',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '247',
        'type' => 'solid'
    ),
    array(
        'name' =>'Californium',
        'symbol' => 'Cf',
        'atomicnumbe' => '98',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '251',
        'type' => 'solid'
    ),
    array(
        'name' =>'Einsteinium',
        'symbol' => 'Es',
        'atomicnumbe' => '99',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '254',
        'type' => 'solid'
    ),
    array(
        'name' =>'Fermium',
        'symbol' => 'Fm',
        'atomicnumbe' => '100',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '257',
        'type' => 'solid'
    ),
    array(
        'name' =>'Mendelevium',
        'symbol' => 'Md',
        'atomicnumbe' => '101',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '260',
        'type' => 'solid'
    ),
    array(
        'name' =>'Nobelium',
        'symbol' => 'No',
        'atomicnumbe' => '102',
        'groupnumber' => null,
        'period' => '7',
        'atomicweight' => '259',
        'type' => 'solid'
    ),
    array(
        'name' =>'Lawrencium',
        'symbol' => 'Lr',
        'atomicnumbe' => '103',
        'groupnumber' => '3',
        'period' => '7',
        'atomicweight' => '262',
        'type' => 'solid'
    ),
    array(
        'name' =>'Rutherfordium',
        'symbol' => 'Rf',
        'atomicnumbe' => '104',
        'groupnumber' => '4',
        'period' => '7',
        'atomicweight' => '261',
        'type' => 'solid'
    ),
    array(
        'name' =>'Dubnium',
        'symbol' => 'Db',
        'atomicnumbe' => '105',
        'groupnumber' => '5',
        'period' => '7',
        'atomicweight' => '262',
        'type' => 'solid'
    ),
    array(
        'name' =>'Seaborgium',
        'symbol' => 'Sg',
        'atomicnumbe' => '106',
        'groupnumber' => '6',
        'period' => '7',
        'atomicweight' => '266',
        'type' => 'solid'
    ),
    array(
        'name' =>'Bohrium',
        'symbol' => 'Bh',
        'atomicnumbe' => '107',
        'groupnumber' => '7',
        'period' => '7',
        'atomicweight' => '262',
        'type' => 'solid'
    ),
    array(
        'name' =>'Hassium',
        'symbol' => 'Hs',
        'atomicnumbe' => '108',
        'groupnumber' => '8',
        'period' => '7',
        'atomicweight' => '265',
        'type' => 'solid'
    ),
    array(
        'name' =>'Meitnerium',
        'symbol' => 'Mt',
        'atomicnumbe' => '109',
        'groupnumber' => '9',
        'period' => '7',
        'atomicweight' => '266',
        'type' => 'solid'
    ),
    array(
        'name' =>'Darmstadtium',
        'symbol' => 'Ds',
        'atomicnumbe' => '110',
        'groupnumber' => '10',
        'period' => '7',
        'atomicweight' => '281',
        'type' => 'solid'
    ),
    array(
        'name' =>'Roentgenium',
        'symbol' => 'Rg',
        'atomicnumbe' => '111',
        'groupnumber' => '11',
        'period' => '7',
        'atomicweight' => '272',
        'type' => 'solid'
    ),
    array(
        'name' =>'Copernicium',
        'symbol' => 'Cn',
        'atomicnumbe' => '112',
        'groupnumber' => '12',
        'period' => '7',
        'atomicweight' => '285',
        'type' => 'solid'
    ),
    array(
        'name' =>'Ununtrium',
        'symbol' => 'Uut',
        'atomicnumbe' => '113',
        'groupnumber' => '13',
        'period' => '7',
        'atomicweight' => '284',
        'type' => 'solid'
    ),
    array(
        'name' =>'Flerovium',
        'symbol' => 'Fl',
        'atomicnumbe' => '114',
        'groupnumber' => '14',
        'period' => '7',
        'atomicweight' => '289',
        'type' => 'solid'
    ),
    array(
        'name' =>'Ununpentium',
        'symbol' => 'Uup',
        'atomicnumbe' => '115',
        'groupnumber' => '15',
        'period' => '7',
        'atomicweight' => '288',
        'type' => 'solid'
    ),
    array(
        'name' =>'Livermorium',
        'symbol' => 'Lv',
        'atomicnumbe' => '116',
        'groupnumber' => '16',
        'period' => '7',
        'atomicweight' => '293',
        'type' => 'solid'
    ),
    array(
        'name' =>'Ununseptium',
        'symbol' => 'Uus',
        'atomicnumbe' => '117',
        'groupnumber' => '17',
        'period' => '7',
        'atomicweight' => '294',
        'type' => 'solid'
    ),
    array(
        'name' =>'Ununoctium',
        'symbol' => 'Uuo',
        'atomicnumbe' => '118',
        'groupnumber' => '18',
        'period' => '7',
        'atomicweight' => '294',
        'type' => 'solid'
    ),
  );
include 'mysql.php';
foreach($elements as $data) {
    $data = "INSERT INTO elements ( name, symbol, atomicnumbe, groupnumber, period, atomicweight, type, Rid,)
	VALUES ( '$data[name]', '$data[symbol]', '$data[atomicnumbe]', '$data[groupnumber]', '$data[period]', '$data[atomicweight]', '$data[type]', null)";
    insert($data);
    //echo "successfully inserted a reaction";
}